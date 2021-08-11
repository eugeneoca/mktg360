<?php

namespace App\Http\Controllers;

use App\NavsInstallation;
use App\OrganizationUser;
use App\Session;
use App\User;
use App\Log;
use App\Utils\CurrentUser;
use App\UserType;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Utils\Logger;

class LoginAdminController extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
    $data = $request->validate([
      'organization_id' => 'required|exists:organizations,id',
      'username' => 'required|string',
      'password' => 'required|string',
      'ip' => 'ip',
      'login_type_id' => 'required|exists:login_types,id'
    ]);

    //get user object
    $credentials = [
      'username' => $data['username'],
      'password' => $data['password'],
      'status' => User::STATUS_ACTIVE,
    ];

    $user = null;
    if (auth()->attempt($credentials)) {
      $user = auth()->user();
      $user->userType = UserType::find($user->user_type_id);
      $orgUser = OrganizationUser::where('user_id', $user->id)->first();
      if ($orgUser) {
        $user->organizationUser = $orgUser;
      }
    }


    $currentDateTime  = date('Y-m-d H:i:s');
    $ip = $data['ip'] ?? $request->getClientIp();
    $salts = [$user->id, $ip, $data['organization_id'], $currentDateTime];
    $sessionKey = hash('md5', $user->id) . '.' . hash('sha256', implode('.', $salts));

    try {
      Session::where('status', Session::STATUS_ACTIVE)
        ->where('user_id', $user->id)
        ->update([
          'status' => Session::STATUS_INACTIVE,
          'end_date' => $currentDateTime,
          'deleted_at' => $currentDateTime
        ]);

      Session::create([
        'key' => $sessionKey,
        'ip_address' => $ip,
        'start_date' => date('Y-m-d H:i:s'),
        'navs_installation_id' => null,
        'user_id' => $user->id,
        'login_type_id' => $data['login_type_id']
      ]);
      Logger::log($request,Logger::severity(0), 2, 62);
      return response()->json([
        'session_key' => $sessionKey,
        'user' => auth()->user()
      ]);
    } catch (Exception $e) {
      return response()->json([
        'code' => 'INVALID_DATA',
        'msg' => $e->getMessage()
      ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }
  }
}
