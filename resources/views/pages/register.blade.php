@extends('layouts.master')
@section('title', 'Register')
@section('content')


<!-- Register -->
<div class="row  align-items-center justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow my-5 p-5 h-100">
            <div class="card-body p-5">
                <div class="text-center mb-5">
                    <img src="{{asset('images/logo.png')}}" alt="logo" class="mb-3"/>
                    <h6>Register Client</h6>
                    </div>
                    <div class="alert alert-success success-message" style="display: none;" role="alert">
                        <span><i class="fa fa-check"></i>  Account registered succesfully
                    </div>
                    <div class="alert alert-danger error-message" style="display: none;" role="alert">
                    </div>
                    <form class="mb-3" id="register_form">
                    <div class="form-group">
                        <input type="text" class="form-control"  name="firstname" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  name="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"  name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  name="site_url" placeholder="Website URL">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    </div>
                    <button  id="btn_submit" class="btn btn-primary btn-block mb-2">Register</button>
                    </form>
            </div>
        </div>                              
    </div>
</div>
<!-- ./Register -->
@include('includes.scripts')

<script type="text/javascript">
    $(document).ready(function(){
        $('#btn_submit').on('click', function(e){
            e.preventDefault();
            
            let firstname = $("input[name=firstname]").val();
            let lastname = $("input[name=lastname]").val();
            let email = $("input[name=email]").val();
            let site_url = $("input[name=site_url]").val();
            let password = $("input[name=password]").val();
            let password_confirmation = $("input[name=password_confirmation]").val();
            $('#btn_submit').prop('disabled', true);
            $.ajax({
                url: "/api/users",
                type:"POST",
                data:{
                    firstname:firstname,
                    lastname:lastname,
                    email:email,
                    site_url: site_url,
                    password:password,
                    password_confirmation:password_confirmation
                },
                success:function(response){
                    $('.error-message').css('display','none');
                    if(response) {
                        $('.success-message').css('display','block');
                        window.setTimeout(function() {
                            window.location.href = '/registration-success';
                        }, 2000);
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
                    $('#btn_submit').prop('disabled', false);
                }
            });

        });
    });
</script>

@endsection

