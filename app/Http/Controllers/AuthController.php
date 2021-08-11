<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class AuthController extends Controller
{
    public function login(Request $request){

        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $user = null;

        $credentials = [
            'email' => $data['email'],
            'password' => $data['password'],
        ];

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
        }else{
            return response()->json([
                'code' => 422,
                'message' => "Invalid username or password",
                'data' => null
              ]);
        }

        try{
            $currentDateTime  = date('Y-m-d H:i:s');
            $ip = $request->getClientIp();
            $salts = [$user->id, $ip, $currentDateTime];
            $sessionKey = hash('md5', $user->id) . '.' . hash('sha256', implode('.', $salts));

            Session::where('status', Session::STATUS_ACTIVE)
            ->where('user_id', $user->id)
            ->update([
            'status' => Session::STATUS_INACTIVE,
            'end_date' => $currentDateTime,
            'deleted_at' => $currentDateTime
            ]);
            Session::create([
                'key' => $sessionKey,
                'start_date' => date('Y-m-d H:i:s'),
                'user_id' => $user->id
            ]);
            if(auth()->user()->hasVerifiedEmail()){
                return response()->json([
                    'code' => 200,
                    'message' => 'Success',
                    'data' => [
                        'session_key' => $sessionKey,
                        'user' => auth()->user()
                    ]
                ]);
            }else{
                return response()->json([
                    'code' => 422,
                    'message' => "Account not verified.",
                    'data' => null
                ]);
            }
            
        } catch (Exception $e) {
            return response()->json([
              'code' => 422,
              'message' => "Invalid Session",
              'data' => null
            ]);
        }

    }

    public function logout(Request $request){
        $sessionKey = $request->query('token') ?: $request->header(Session::SESSION_NAME);
        $session = Session::where('key', $sessionKey)->firstOrFail();
        $session->deleted_at =  date('Y-m-d H:i:s');
        $session->status = Session::STATUS_INACTIVE;
        $session->end_date = date('Y-m-d H:i:s');
        $session->save();
        return response()->json([
            'code' => 200,
            'message' => 'User logged out',
            'data' => null
        ]);
    }
}
