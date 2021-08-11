@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper">

            <!-- Main Content -->
            <div id="content ">

                  @include('includes.top-bar')  

                <!-- Begin Page Content -->
                <div class="container-fluid content-full-height">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- choices -->
                        <div class="col-sm-12 col-lg-6 col-xl-4  m-auto">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 ">
                                    <h6 class="m-0">Base Client Dashboard</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-6 my-4">
                                            <a href="#" class="dash-link" data-toggle="modal" data-target="#modal-feedback">
                                            <i class="fas fa-comment-alt"></i><br>
                                                <span>Provide Client <br> Feedback</span>
                                            </a>
                                        </div>
                                        <div class="col-6 my-4">
                                        <a href="#" class="dash-link" data-toggle="modal" data-target="#modal-ticket">
                                           <i class="fas fa-users-cog"></i> <br>
                                                <span>Submit A <br> Support Ticket</span>
                                            </a>
                                        </div>
                                        <div class="col-6 my-4">
                                            <a href="#" class="dash-link" data-toggle="modal" data-target="#modal-upload">
                                            <i class="fas fa-file-upload"></i><br>
                                                <span>Send us Images <br> and Docs</span>
                                            </a>
                                        </div>
                                        <div class="col-6 my-4">
                                            <a href="#" class="dash-link" data-toggle="modal" data-target="#modal-staff">
                                            <i class="fas fa-user-plus"></i><br>
                                                <span>Add Staff</span>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Chat -->
                        <div class="col-sm-12 col-lg-6 col-xl-4">
                            <div class="card shadow mb-0" id="chat-box">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0">Talk to your Team</h6>                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body p-0">
                                    <div class="d-flex h-100">
                                   <div class="chat-left">
                                        <div class="mb-3 active">
                                            <a href="#"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" alt="..."></a>
                                        </div>
                                        <div class="mb-3">
                                             <a href="#"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" alt="..."></a>
                                        </div>
                                        <div class="mb-3">
                                            <a href="#"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" alt="..."></a>
                                        </div>
                                   </div>
                                   <div class="chat-right flex-grow-1 d-flex flex-column">
                                        <div class="d-flex align-item-center pb-2 p-4  border-bottom">   
                                            <h6 class="m-0">Leticia Patterson</h6>
                                            <span class="online"></span><span class="offline"></span>
                                        </div>
                                        <div class="d-flex flex-column mt-auto">
                                             <div class="m-3">
                                                   <div class="text-right mb-1">                                                  
                                                   <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="16px" alt="...">
                                                   <span class="chat-name mx-2">You<span>
                                                   <span class="small text-muted">11:00pm</span>
                                                   </div> 
                                                  <p class="bg-primary p-2 rounded text-white">Lorem ipsum dolor sit amet consectetur.</p>                  
                                             </div>   
                                             <div class="m-3">
                                                   <div class="text-left mb-1">                                                  
                                                   <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="16px" alt="...">
                                                   <span class="mx-2 chat-name">Britanny<span>
                                                   <span class="small text-muted">11:00pm</span>
                                                   </div> 
                                                  <p class="p-2 rounded border">Lorem ipsum dolor sit amet consectetur.</p>                  
                                             </div> 
                                             <div class="m-3 status">
                                                   <div class="text-left mb-1 d-flex align-items-center">                                                  
                                                         <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="16px" alt="...">
                                                         <span class="chat-name mx-2">Britanny<span>
                                                         <span class="small text-muted fst-italic">Typing a message...</span>
                                                   </div> 
                                                </div>  

                                            <form>
                                                <textarea class="form-control rounded-0" placeholder="Leave a comment here"  style="height: 100px"></textarea>                                               
                                            </form>


                                        </div>
                                   </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

 

    <!-- feedback-success-->
    <div class="modal fade" id="feedback-success" tabindex="-1" role="dialog" aria-labelledby="md-success"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="md-success">Provide Platform Feedback</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <i class="fa fa-check text-success"></i>
                    <h3>Thank you </h3>
                    <p>Thank you for your feedback, we highly value customer satisfaction.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> <!-- ./feedback-success-->

    <!-- modal-feedback-->
    <div class="modal fade" id="modal-feedback" tabindex="-1" role="dialog" aria-labelledby="md-feedback"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="md-feedback">Provide Platform Feedback</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <p>is there something else you would like to see us implement? Tell us! We are always looking for ways
                        to innovate and make this a better experience and more effective :)
                    </p>
                    <div class="alert alert-danger" id="feedback-errors" style="display: none" role="alert">
                    </div>
                    <div class="alert alert-success" id="feedback-success" style="display: none" role="alert">
                        <i class="fa fa-check"></i>  Feedback sent successfuly
                    </div>
                    <form>
                         <textarea class="txtarea" name="message" placeholder="Type here..." ></textarea>                                                
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block" type="button" id="btn-feedback">Submit Feedback</button>
                </div>
            </div>
        </div>
    </div> <!-- ./modal-feedback-->

    <!-- ticket-success-->
    <div class="modal fade" id="ticket-success" tabindex="-1" role="dialog" aria-labelledby="md-success"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="md-success">Support Ticket</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <i class="fa fa-check text-success"></i>
                    <h3>Thank you </h3>
                    <p>Thank you for your ticket, we highly value customer satisfaction.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> <!-- ./ticket-success-->

    <!-- modal-ticket-->
    <div class="modal fade" id="modal-ticket" tabindex="-1" role="dialog" aria-labelledby="md-ticket"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="md-ticket">Submit a Support Ticket</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <p>is there something else you would like to see us implement? Tell us! We are always looking for ways
                        to innovate and make this a better experience and more effective :)
                    </p>
                    <div class="alert alert-danger" id="ticket-errors" style="display: none" role="alert">
                    </div>
                    <div class="alert alert-success" id="ticket-success" style="display: none" role="alert">
                        <i class="fa fa-check"></i>  Ticket sent successfuly
                    </div>
                    <form>
                        <label class="small">What can we help you today?</label>
                            <div class="ml-3">    
                                <div class="mb-1 form-check">
                                    <input class="form-check-input" type="radio" name="ticket-type" id="exampleRadios1" value="1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        General Question
                                    </label>
                                </div>
                                <div class="mb-1 form-check">
                                    <input class="form-check-input" type="radio" name="ticket-type" id="exampleRadios2" value="2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Feature Request
                                    </label>
                                </div>
                                <div class="mb-1 form-check">
                                    <input class="form-check-input" type="radio" name="ticket-type" id="exampleRadios3" value="3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Bug Report
                                    </label>
                                </div>
                                <div class="mb-1 form-check">
                                    <input class="form-check-input" type="radio" name="ticket-type" id="exampleRadios4" value="4">
                                    <label class="form-check-label" for="exampleRadios4">
                                        My Account
                                    </label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="radio" name="ticket-type" id="exampleRadios5" value="5">
                                    <label class="form-check-label" for="exampleRadios5">
                                        Other
                                    </label>
                                </div>
                            </div>    
                        <label class="small">Issue / Message</label>
                        <textarea class="txtarea" name="message" placeholder="Type here..." ></textarea>                                                 
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block" id="btn-ticket" type="button">Submit Ticket</button>
                </div>
            </div>
        </div>
    </div> <!-- ./modal-ticket-->

    <!-- modal-upload-->
    <div class="modal fade" id="modal-upload" tabindex="-1" role="dialog" aria-labelledby="md-upload"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="md-upload">Send us Images and Docs</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form action="/api/uploads"
                        class="dropzone"
                        id="my-awesome-dropzone">
                    </form>
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block" type="button" id="btn-upload">Upload Files</button>
                </div>
            </div>
        </div>
    </div> <!-- ./modal-upload-->

    <!-- staff-success-->
    <div class="modal fade" id="staff-success" tabindex="-1" role="dialog" aria-labelledby="md-success"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="md-success">New Staff Added</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <i class="fa fa-check text-success"></i>
                    <h3>Success! </h3>
                    <p>You now have a new staff!
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> <!-- ./staff-success-->

    <!-- modal-staff-->
    <div class="modal fade" id="modal-staff" tabindex="-1" role="dialog" aria-labelledby="md-ticket"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="md-ticket">Add Staff</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">

                        <div class="alert alert-success success-message" style="display: none;" role="alert">
                            <span><i class="fa fa-check"></i>  Account registered succesfully
                        </div>
                        <div class="alert alert-danger error-message" style="display: none;" role="alert">
                        </div>
                    
                        <form class="mb-3">
                            
                            <div class="form-group">
                                <input type="text" class="form-control"  name="firstname" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  name="lastname" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            
                         </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block" type="button" id="btn-add-staff">Add Staff</button>
                </div>
            </div>
        </div>
    </div> <!-- ./modal-staff-->

@include('includes.scripts')
<script type="text/javascript">

    Dropzone.autoDiscover =false;
    let dz = new Dropzone('.dropzone',{
        autoProcessQueue : false,
        parallelUploads : 10,
        url: 'api/uploads?token='+Cookies.get('MKTG360_SESSION')
    });

    $('#btn-upload').click(function(){
        dz.processQueue();
    });

    $(document).ready(function(){
        +Cookies.get('MKTG360_SESSION')


        $('#btn-feedback').on('click', function(e){
            e.preventDefault();
            let message = $("#modal-feedback textarea[name=message]").val();

            $('#btn-feedback').prop('disabled', true);
            $.ajax({
                url: "/api/feedbacks?token="+Cookies.get('MKTG360_SESSION'),
                type:"POST",
                data:{
                    message: message
                },
                success:function(response){
                    $('#feedback-errors').css('display','none');
                    if(response) {
                        $('#feedback-success').css('display','block');
                        $('#modal-feedback form')[0].reset()
                        $('#btn-feedback').prop('disabled', false);
                        $('#modal-feedback').modal('hide');
                        $('#feedback-success').modal('show');
                    }
                },
                error:function(response){
                    let errors = response.responseJSON.errors
                    $('#feedback-errors').css('display','block');
                    $('#feedback-errors').html('');
                    $.each(errors, function(key, value){
                        $('#feedback-errors').append('<i class="fa fa-times"></i>  '+value[0]+'<br/>');
                    });
                    if(response.responseJSON.message){
                        $('#feedback-errors').append('<i class="fa fa-times"></i>  '+response.responseJSON.message+'<br/>');
                    }
                    $('#btn-feedback').prop('disabled', false);
                }
            });

        });

        $('#btn-ticket').on('click', function(e){
            e.preventDefault();
            let message = $("#modal-ticket textarea[name=message]").val();
            let ticket_type = $("#modal-ticket input[name=ticket-type]:checked").val();
            $('#btn-ticket').prop('disabled', true);
            $.ajax({
                url: "/api/tickets?token="+Cookies.get('MKTG360_SESSION'),
                type:"POST",
                data:{
                    message: message,
                    ticket_type_id: ticket_type
                },
                success:function(response){
                    $('#ticket-errors').css('display','none');
                    if(response) {
                        $('#ticket-success').css('display','block');
                        $('#modal-ticket form')[0].reset()
                        $('#btn-ticket').prop('disabled', false);
                        $('#modal-ticket').modal('hide');
                        $('#ticket-success').modal('show');
                    }
                },
                error:function(response){
                    
                    let errors = response.responseJSON.errors
                    $('#ticket-errors').css('display','block');
                    $('#ticket-errors').html('');
                    $.each(errors, function(key, value){
                        $('#ticket-errors').append('<i class="fa fa-times"></i>  '+value[0]+'<br/>');
                    });
                    if(response.responseJSON.message){
                        $('#ticket-errors').append('<i class="fa fa-times"></i>  '+response.responseJSON.message+'<br/>');
                    }
                    $('#btn-ticket').prop('disabled', false);
                }
            });

        });

        $('#btn-add-staff').click(function(){
            let firstname = $("#modal-staff input[name=firstname]").val();
            let lastname = $("#modal-staff input[name=lastname]").val();
            let email = $("#modal-staff input[name=email]").val();
            let password = $("#modal-staff input[name=password]").val();
            $('#btn-add-staff').prop('disabled', true);

            $.ajax({
                url: "/api/staffs?token="+Cookies.get('MKTG360_SESSION'),
                type:"POST",
                data:{
                    firstname:firstname,
                    lastname:lastname,
                    email:email,
                    password:password
                },
                success:function(response){
                    $('#modal-staff .error-message').css('display','none');
                    if(response) {
                        $('#modal-staff .success-message').css('display','block');
                        $('#modal-staff form')[0].reset()
                        $('#btn-add-staff').prop('disabled', false);
                        $('#modal-staff').modal('hide');
                        $('#staff-success').modal('show');
                    }
                },
                error:function(response){
                    let errors = response.responseJSON.errors
                    $('#modal-staff .error-message').css('display','block');
                    $('#modal-staff .error-message').html('');
                    $.each(errors, function(key, value){
                        $('#modal-staff .error-message').append('<i class="fa fa-times"></i>  '+value[0]+'<br/>');
                    });
                    if(response.responseJSON.message){
                        $('#modal-staff .error-message').append('<i class="fa fa-times"></i>  '+response.responseJSON.message+'<br/>');
                    }
                    $('#btn-add-staff').prop('disabled', false);
                }
            });
        });
    });
</script>
@endsection