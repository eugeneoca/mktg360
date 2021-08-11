<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationEmail;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = User::select('users.*');

        return $query->with('role')->paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // CLIENT ROLE
        $data = $request->validate([
            'firstname'=> 'required|max:45|min:2',
            'lastname' => 'required|max:45|min:2',
            'email' => 'required|max:255|unique:users,email|min:5',
            'site_url' => 'required|max:255|min:5',
            'password' => 'required|min:8|confirmed'
        ]);
        $data['password'] = Hash::make($request->password);
        $token = md5(date('YmdHis') . $data['email']);
        $data['verification_token'] = $token;

        DB::beginTransaction();
        try{
            $newUser = User::create($data);
            $newUser->role()->associate(4);
            $newUser->with('role');
            $newUser->save();

            $link = url('/user-verification?token=' . $token);
            Mail::to($data['email'])->send(new VerificationEmail($link));

            DB::commit();
            return $newUser->load('role');

        }catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function verify(Request $request)
    {
        $token = $request->query('token');
        $user = User::where('verification_token', $token)->firstOrFail();

        if ($user->email_verified_at) {
            return response()->json([
                'code' => 'EMAIL_ALREADY_VERIFIED'
            ], Response::HTTP_IM_USED);
        }else{
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->verification_token = '';
            $user->save();
            return $user;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
