@extends('layouts.master')
@section('title', 'Password Reset')
@section('content')




       <!-- password -->
       <div class="row  align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-6 ">
                <div class="card shadow my-5 p-5 h-100">
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <img src="{{asset('images/logo.png')}}" alt="logo" class="mb-3"/>
                            <h6>Password Reset</h6>
                            <p class="text-small">Enter your email to get a password reset link</p>
                         </div>
                          <div class="alert alert-success" role="alert">
                            <i class="fa fa-check"></i>  Please check your inbox and follow the instructions to reset your password
                          </div>
                         <form class="mb-3">
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email Address...">
                                <div class="invalid-feedback">Enter your email</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-2">Reset Password</button>
                         </form>

                         <div class="text-center">
                            <span class="text-xs"> Remember password </span> <a href="/" class="text-xs">Sign In</a>
                         </div>
                    </div>
                </div>                              
            </div>
        </div>
       <!-- ./password --> 

        
 

    @endsection