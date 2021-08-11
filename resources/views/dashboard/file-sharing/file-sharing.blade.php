@extends('layouts.dashboard')
@section('title', 'File Sharing')
@section('content')

<!-- Page Wrapper -->
<div id="wrapper">

    @include('includes.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper">

        <!-- Main Content -->
        <div id="content" class="vh-100">

            @include('includes.top-bar')
            
            <!-- Begin Page Content -->
            <div class="container-fluid content-full-height">
                <div class="row h-100">
                    <div class="col-12 col-md-12 col-sm-12 col-lg-12">
                        <h4 class="">File Sharing</h4>
                            <div class="filesharing--search">
                                <div class="form-group filesharing--has-search">
                                    <!-- <span class="fa fa-search form-control-filesharing"></span> -->
                                    <input type="text" class="form-control" placeholder="Search Client">
                                </div>
                            </div> 
                            
                                <div class="filesharing--row col-12">
                                    <div class="filesharing--column col-3">
                                        <div class="filesharing--clients-card">
                                        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="75px" height="75px" alt="..."></img>
                                        <h5 class="filesharing--client-name">Lindsey Stroud</h5>
                                        <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--viewfiles">View Client Files</button> 
                                        </div>
                                    </div>
                                    <div class="filesharing--column col-3">
                                        <div class="filesharing--clients-card">
                                        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="75px" height="75px" alt="..."></img>
                                        <h5 class="filesharing--client-name">Nicci Troiani</h5>
                                        <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--viewfiles">View Client Files</button> 
                                        </div>
                                    </div>
                                    <div class="filesharing--column col-3">
                                        <div class="filesharing--clients-card">
                                        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="75px" height="75px" alt="..."></img>
                                        <h5 class="filesharing--client-name">George Fields</h5>
                                        <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--viewfiles">View Client Files</button> 
                                        </div>
                                    </div>
                                    <div class="filesharing--column">
                                        <div class="filesharing--clients-card">
                                        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="75px" height="75px" alt="..."></img>
                                        <h5 class="filesharing--client-name">Rebecca Moore</h5>
                                        <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--viewfiles">View Client Files</button> 
                                    </div>
                                </div><br>

                                <div class="filesharing--row">
                                    <div class="filesharing--column col-3">
                                        <div class="filesharing--clients-card">
                                        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="75px" height="75px" alt="..."></img>
                                        <h5 class="filesharing--client-name">Jane Doe</h5>
                                        <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--viewfiles">View Client Files</button> 
                                        </div>
                                    </div>
                                    <div class="filesharing--column col-3">
                                        <div class="filesharing--clients-card">
                                        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="75px" height="75px" alt="..."></img>
                                        <h5 class="filesharing--client-name">Jones Dermont</h5>
                                        <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--viewfiles">View Client Files</button> 
                                        </div>
                                    </div>
                                    <div class="filesharing--column col-3">
                                        <div class="filesharing--clients-card">
                                        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="75px" height="75px" alt="..."></img>
                                        <h5 class="filesharing--client-name">Martin Merces</h5>
                                        <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--viewfiles">View Client Files</button> 
                                        </div>
                                    </div>
                                    <div class="filesharing--column">
                                        <div class="filesharing--clients-card">
                                        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="75px" height="75px" alt="..."></img>
                                        <h5 class="filesharing--client-name">Franz Ferdinand</h5>
                                        <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--viewfiles">View Client Files</button> 
                                    </div>
                                </div><br>
                                <div class="filesharing--row">
                                    <div class="filesharing--column col-3">
                                        <div class="filesharing--clients-card">
                                        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="75px" height="75px" alt="..."></img>
                                        <h5 class="filesharing--client-name">John Smith</h5>
                                        <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--viewfiles">View Client Files</button> 
                                        </div>
                                    </div>
                                    <div class="filesharing--column col-3">
                                        <div class="filesharing--clients-card">
                                        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="75px" height="75px" alt="..."></img>
                                        <h5 class="filesharing--client-name">Judith Williams</h5>
                                        <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--viewfiles">View Client Files</button> 
                                        </div>
                                    </div>
                                    <div class="filesharing--column col-3">
                                        <div class="filesharing--clients-card">
                                        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="75px" height="75px" alt="..."></img>
                                        <h5 class="filesharing--client-name">George Fields</h5>
                                        <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--viewfiles">View Client Files</button> 
                                        </div>
                                    </div>
                                    <div class="filesharing--column">
                                        <div class="filesharing--clients-card">
                                        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="75px" height="75px" alt="..."></img>
                                        <h5 class="filesharing--client-name">Natasha Moore</h5>
                                        <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--viewfiles">View Client Files</button> 
                                    </div>
                                </div><br>                                  
                    </div>
                </div>
                <!-- Modal -->
                <div id="clients--addclient-modal" class="clients--modal">
                    <div class="clients--modal-content">
                        <div class="clients--modal-header">
                            <span class="close">&times;</span>
                        </div>
                            <div class="clients--modal-body">
                                <div class="clients--container">
                                <a class="clients--logo d-flex align-items-center justify-content-center" href="#">   
                                    <img src="{{asset('images/logo.png')}}" alt="logo" width="109px" class="brand " />
                                </a>
                                    <h6 class="clients--frm-header">Register client</h6>
                                    <form class="clients--frm-addclient">                
                                        <input type="text" class="clients--add-input" placeholder="Business Name" id="clients--input-business"></input><br>
                                        <input type="text" class="clients--add-input" placeholder="First Name" id="clients--input-fname"></input><br>
                                        <input type="text" class="clients--add-input" placeholder="Last Name" id="clients--input-lname"></input><br>
                                        <input type="text" class="clients--add-input" placeholder="Email" id="clients--input-email"></input><br>
                                        <input type="text" class="clients--add-input" placeholder="Website URL" id="clients--input-website"></input><br>
                                        <input type="text" class="clients--add-input" placeholder="Password" id="clients--input-pw"></input><br>
                                        <input type="text" class="clients--add-input" placeholder="Confirm Password" id="clients--input-confirmpw"></input><br>
                                        <button class="btn btn-primary btn-block" type="button" id="clients--btn-register">Register</button>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div> 
                            <!-- content> -->

                        </div>
                    </div> <!-- ./row -->

                </div>
                <!-- /.container-fluid -->
                
                </div> 
            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <script>
    // Modal Script
    var modal = document.getElementById("clients--addclient-modal");
    var btn = document.getElementById("btn-clients--addclient");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
    modal.style.display = "block";
    }
    span.onclick = function() {
    modal.style.display = "none";
    }
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }  
    </script>


    @endsection