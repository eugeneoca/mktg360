<?php

namespace App\Http\Controllers;

use App\NavsInstallation;
use App\OrganizationUser;
use App\Session;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Utils\Logger;

class LoginUserController extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
    $key = $request->get('key');
    // using a none installed computer
    // if no key available lets require
    // username and password.
    return (!$key)
      ? $this->loginWithUserPass($request)
      : $this->loginWithNavsInstallationID($request);
  }

  private function makeSessionKey($userId, $data)
  {
    $salts = [
      $data['windows_username'],
      $data['ip'],
      $data['key'],
      date('Y-m-d H:i:s')
    ];
    $sessionKey = hash('md5', $userId) . '.' . hash('sha256', implode('.', $salts));
    return $sessionKey;
  }

  private function loginWithNavsInstallationID(Request $request)
  {
    $data = $request->validate([
      'login_type_id' => 'exists:login_types,id',
      'key' => 'required|exists:navs_installations,key',
      'ip' => 'required|ip',
      'windows_username' => 'required|string',
    ]);

    //get user object
    $navsInstallation = NavsInstallation::with(['organizationLocation'])
      ->where('key', $data['key'])->firstOrFail();
    $organizationUser = OrganizationUser::with(['user', 'userType'])
      ->where('organization_id', $navsInstallation->organizationLocation->organization_id)
      ->where('windows_username', $data['windows_username'])
      ->firstOrFail();

    $user = $organizationUser->user;
    $user->organizationUser = $organizationUser;

    auth()->setUser($user);

    $startDate = date('Y-m-d H:i:s');
    $sessionKey = $this->makeSessionKey($user->id, $data);
    unset($organizationUser->user);
    //mark as inactive and expired all previous session with same
    // installation navs id
    try {
      Session::where('status', Session::STATUS_ACTIVE)
        ->where('navs_installation_id', $navsInstallation->id)
        ->where('user_id', $user->id)
        ->update([
          'status' => Session::STATUS_INACTIVE,
          'end_date' => $startDate,
          'deleted_at' => $startDate
        ]);
        Logger::log($request,Logger::severity(0), 2, 62);
      Session::create([
        'key' => $sessionKey,
        'ip_address' => $data['ip'],
        'start_date' => $startDate,
        'navs_installation_id' => $navsInstallation->id,
        'user_id' => $user->id,
        'login_type_id' => $data['login_type_id'],
        'status' => Session::STATUS_ACTIVE
      ]);
      return response()->json([
        'session_key' => $sessionKey,
        'user' => $user
      ]);
    } catch (Exception $e) {
      return response()->json([
        'code' => 'INVALID_DATA'
      ], Response::HTTP_UNAUTHORIZED);
    }
  }


  private function loginWithUserPass(Request $request)
  {
    $data = $request->validate([
      'organization_id' => 'exists:organizations,id',
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
    if (!auth()->attempt($credentials)) {
      return response()-> json([],Response::HTTP_UNAUTHORIZED);
    }

    $user = auth()->user();
    $query = OrganizationUser::with('userType')
      ->where('user_id', $user->id);
    if (isset($data['organization_id'])) {
      $query->where('organization_id', $data['organization_id']);
    }

    $orgUser = $query->first();
    if ($orgUser) {
      $user->organizationUser = $orgUser;
    }


    $currentDateTime  = date('Y-m-d H:i:s');
    $ip = $data['ip'] ?? $request->getClientIp();
    $salts = [$user->id, $ip, $currentDateTime];
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
        'organization_id' => $data['organization_id'] ?? null,
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
