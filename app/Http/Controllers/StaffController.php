<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationEmail;
use Illuminate\Http\Response;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Staff::select('staff.*');
        $query->where('client_id', auth()->user()->id);

        return $query->with('staff_info')->paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // STAFF ROLE
        $data = $request->validate([
            'firstname'=> 'required|max:45|min:2',
            'lastname' => 'required|max:45|min:2',
            'email' => 'required|max:255|unique:users,email|min:5',
            'password' => 'required|min:8'
        ]);
        $data['password'] = Hash::make($request->password);
        $token = md5(date('YmdHis') . $data['email']);
        $data['verification_token'] = $token;

        DB::beginTransaction();
        try{
            $newUser = User::create($data);
            $newUser->role()->associate(5);
            $newUser->with('role');
            $newUser->save();

            auth()->user()->staffs()->attach($newUser->id);

            //$newStaff = Staff::create();

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
