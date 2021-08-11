@extends('layouts.master')
@section('title', 'Password')
@section('content')




       <!-- password -->
       <div class="row  align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-6 ">
                <div class="card shadow my-5 p-5 h-100">
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <img src="{{asset('images/logo.png')}}" alt="logo" class="mb-3"/>
                            <h6>Password Reset</h6>
                            <p class="text-small">Enter your new password</p>
                         </div>

                         <form class="mb-3">
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="New Password">                              
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Confirm new password">                              
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-2">Change Password</button>
                         </form>

                    </div>
                </div>                              
            </div>
        </div>
       <!-- ./password --> 

        
  
    @endsection