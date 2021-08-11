@extends('layouts.master')
@section('title', 'Login Account')
@section('content')




       <!-- password-success -->
       <div class="row  align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-6 ">
                <div class="card shadow my-5 p-5 h-100">
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <img src="{{asset('images/logo.png')}}" alt="logo" class="mb-3"/>
                            <h6>Login Account</h6>
                            <p class="text-small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, possimus?</p>
                         </div>
                         
                            
                        <button  class="btn btn-primary btn-block mb-2">Sign In</button>
                         
                    </div>
                </div>                              
            </div>
        </div>
       <!-- ./password-success --> 

        
 

    @endsection