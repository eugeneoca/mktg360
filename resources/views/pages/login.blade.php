@extends('layouts.master')
@section('title', 'Login')
@section('content')


<!-- login -->
<div class="row  align-items-center justify-content-center h-100">
     <div class="col-md-8 col-lg-6 ">
         <div class="card shadow my-5 p-5 h-100">
             <div class="card-body p-5">
                 <div class="text-center mb-5">
                     <img src="{{asset('images/logo.png')}}" alt="logo" class="mb-3"/>
                     <h6>Login Account</h6>
                     <p class="text-small">Welcome to marketing 360.</p>
                  </div>
                   <div class="alert alert-danger error-message" style="display: none" role="alert">
                     
                   </div>
                   <div class="alert alert-success mt-5 success-message" style="display: none;" role="alert">
                        <i class="fa fa-check"></i>  Login Successful
                    </div>
                  <form class="mb-3">
                     <div class="form-group">
                         <input type="email" class="form-control" name="email" placeholder="Email Address...">
                     </div>
                     <div class="form-group">
                         <input type="password" class="form-control" name="password" placeholder="Password">
                     </div>
                     <button type="submit" class="btn btn-primary btn-block mb-2 btn-login">Log in</button>
                  </form>

                  <div class="d-flex justify-content-between">
                      <a href="/register" class="text-xs">Create Account</a>
                      <a href="/password-reset" class="text-xs">Forgot password?</a>
                  </div>
             </div>
         </div>                              
     </div>
 </div>
<!-- ./login --> 

@include('includes.scripts')

<script type="text/javascript">
    $(document).ready(function(){
        $('.btn-login').on('click', function(e){
            e.preventDefault();
            
            let email = $("input[name=email]").val();
            let password = $("input[name=password]").val();
            $('#btn-login').prop('disabled', true);
            $.ajax({
                url: "/api/login",
                type:"POST",
                data:{
                    email:email,
                    password:password
                },
                success:function(response){
                    
                    if(response.code == 422) {
                        $('.error-message').html('');
                        $('.error-message').css('display','block');
                        $('.error-message').append('<i class="fa fa-times"></i>  '+response.message+'<br/>');
                    }else{
                        $('.error-message').css('display','none');
                        $('.success-message').css('display','block');
                        Cookies.set('MKTG360_SESSION', response.data.session_key);
                        window.setTimeout(function() {
                            window.location.href = '/dashboard';
                        },1000);
                    }
                },
                error:function(response){
                    let errors = response.responseJSON.errors
                    $('.error-message').css('display','block');
                    $('.error-message').html('');
                    $.each(errors, function(key, value){
                        $('.error-message').append('<i class="fa fa-times"></i>  '+value[0]+'<br/>');
                    });
                    if(response.responseJSON.message){
                        $('.error-message').append('<i class="fa fa-times"></i>  '+response.responseJSON.message+'<br/>');
                    }
                    $('.btn-login').prop('disabled', false);
                }
            });

        });
    });
</script>


@endsection