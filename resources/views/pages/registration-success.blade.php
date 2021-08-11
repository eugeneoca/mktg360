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
                    <p class="text-small">Account registration successful, we sent an email verification link to your email address.</p>
                    </div>
                    
                    
                <button  class="btn btn-primary btn-block mb-2 btn-login">Sign In</button>
                    
            </div>
        </div>                              
    </div>
</div>
<!-- ./password-success --> 


@include('includes.scripts')

<script type="text/javascript">
    $(document).ready(function(){
        $('.btn-login').on('click', function(e){
            e.preventDefault();
            window.location.href = '/';
        });
    });
</script>
@endsection
