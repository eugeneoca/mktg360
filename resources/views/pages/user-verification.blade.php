@extends('layouts.master')
@section('title', 'Account Verification')
@section('content')

<!-- password-success -->
<div class="row  align-items-center justify-content-center h-100">
    <div class="col-md-8 col-lg-6 ">
        <div class="card shadow my-5 p-5 h-100">
            <div class="card-body p-5">
                <div class="text-center mb-5">
                    <img src="{{asset('images/logo.png')}}" alt="logo" class="mb-3"/>
                    <h6>Account Verification</h6>
                    <p class="text-small wait-message">Validating account details. Please wait a second.</p>
                    <div class="spinner-border text-warning text-center wait-message" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="alert alert-success mt-5 valid-message" style="display: none;" role="alert">
                    <i class="fa fa-check"></i>  Account Verification Successful
                    </div>
                    <div class="alert alert-danger mt-5 invalid-message" style="display: none;" role="alert">
                        <i class="fas fa-exclamation"></i>  Verification Link Invalid or Expired
                    </div>
                </div>                           
                <button  class="btn btn-primary btn-block mb-2 btn-login">Sign In</button>
                    
            </div>
        </div>                              
    </div>
</div>
<!-- ./password-success --> 
@include('includes.scripts')

<script>
    $(document).ready(function(){
        $('.btn-login').on('click', function(e){
            e.preventDefault();
            window.location.href = '/';
        });

        let token = getUrlParameter('token');
        if(token!=false){
            $.ajax({
                url: "/api/user-verification?token="+token,
                type:"GET",
                success:function(response){
                    $('.valid-message').css('display','block');
                    $('.wait-message').css('display','none');
                },
                error:function(response){
                    $('.invalid-message').css('display','block');
                    $('.wait-message').css('display','none');
                }
            });
        }
    });
</script>

@endsection

