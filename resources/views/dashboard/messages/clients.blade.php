@extends('layouts.dashboard')
@section('title', 'Clients')
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
                        <h4>Clients</h4>
                            <button class="btn btn-primary btn-block" type="button" id="btn-clients--addclient">Add New</button> 
                            <div class="clients--filter-container">
                                <ul class="nav client--nav-tabs">
                                    <input type="checkbox" class="clients--filter-counter col 1 d-none"></input>
                                    <p class="clients--filter-select col-9 mb-0">1 Selected</p>
                                    <p class="clients--filter-label col-1 mb-0" style="text-align:center">Filter:</p>
                                    <select name="filter" class="clients--filter-dropdown col-1 mb-0">
                                        <option class="clients--dropdown-content">All</option>
                                        <option class="clients--dropdown-content">Option</option>
                                    </select> 
                                    <!-- <input type="checkbox" class="clients--filter-dropdown col 1"></input> -->
                                </ul>
                            </div>
                        <div class="inner-menu shadow h-100">
                            <div class="client--nav-container">
                                <ul class="nav client--nav-tabs">
                                    <input type="checkbox" class="clients--cb-heading col 1"></input>
                                    <p class="clients--name-heading col-3 mb-0">Name</p>
                                    <p class="clients--portal-heading col-2 mb-0">Portal</p>
                                    <p class="clients--account-heading col-2 mb-0">Who's Account</p>
                                    <p class="clients--companyname-heading col-2 mb-0">Company Name</p>
                                    <p class="clients--date-heading col-2 mb-0">Date Creation</p>
                                </ul>
                            </div>    
                            <div class="client--tab">
                                <ul class="nav client--nav">
                                    <label class="clients--cb col 1">
                                    <input type="checkbox"></input><span class="clients--cb-checkmark"></span></label>
                                    <p class="clients--name col-3 mb-0"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                        Lindsey Stroud</p>
                                    <p class="clients--portal col-2 mb-0" id="client--portal-plumbing"><img>Plumbing</p>
                                    <p class="clients--account col-2 mb-0">Rohring Results</p>
                                    <p class="clients--companyname col-2 mb-0">My Business 1</p>
                                    <p class="clients--date col-2 mb-0">April 28, 2021
                                        <i class="fas fa-pen client--edit-icon pl-4"></i>
                                        <i class="fas fa-user-edit client--user-icon pl-1"></i>
                                        <i class="fas fa-trash client--delete-icon pl-1"></i>
                                    </p>
                                    
                                </ul>
                                <ul class="nav client--nav">
                                    <label class="clients--cb col 1">
                                    <input type="checkbox"></input><span class="clients--cb-checkmark"></span></label>
                                    <p class="clients--name col-3 mb-0"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                        Nicci Troiani</p>
                                    <p class="clients--portal col-2 mb-0" id="client--portal-spa"><img>Spa Services</p>
                                    <p class="clients--account col-2 mb-0">Rohring Results</p>
                                    <p class="clients--companyname col-2 mb-0">My Business 2</p>
                                    <p class="clients--date col-2 mb-0">April 2, 2021
                                        <i class="fas fa-pen client--edit-icon pl-4"></i>
                                        <i class="fas fa-user-edit client--user-icon pl-1"></i>
                                        <i class="fas fa-trash client--delete-icon pl-1"></i>
                                    </p>
                                </ul>
                                <ul class="nav client--nav">
                                    <label class="clients--cb col 1">
                                    <input type="checkbox"></input><span class="clients--cb-checkmark"></span></label>
                                    <p class="clients--name col-3 mb-0"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                        George Fields</p>
                                    <p class="clients--portal col-2 mb-0" id="client--portal-plumbing"><img>Plumbing</p>
                                    <p class="clients--account col-2 mb-0">Rohring Results</p>
                                    <p class="clients--companyname col-2 mb-0">My Business 3</p>
                                    <p class="clients--date col-2 mb-0">Feb 19, 2021
                                        <i class="fas fa-pen client--edit-icon pl-4"></i>
                                        <i class="fas fa-user-edit client--user-icon pl-1"></i>
                                        <i class="fas fa-trash client--delete-icon pl-1"></i>
                                    </p>
                                </ul>
                                <ul class="nav client--nav">
                                    <label class="clients--cb col 1">
                                    <input type="checkbox"></input><span class="clients--cb-checkmark"></span></label>
                                    <p class="clients--name col-3 mb-0"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                        Rebecca Moore</p>
                                    <p class="clients--portal col-2 mb-0" id="client--portal-plumbing"><img>Plumbing</p>
                                    <p class="clients--account col-2 mb-0">White label Partner</p>
                                    <p class="clients--companyname col-2 mb-0">My Business 4</p>
                                    <p class="clients--date col-2 mb-0">Dec 14, 2020
                                        <i class="fas fa-pen client--edit-icon pl-4"></i>
                                        <i class="fas fa-user-edit client--user-icon pl-1"></i>
                                        <i class="fas fa-trash client--delete-icon pl-1"></i>
                                    </p>
                                </ul>
                                <ul class="nav client--nav">
                                    <label class="clients--cb col 1">
                                    <input type="checkbox"></input><span class="clients--cb-checkmark"></span></label>
                                    <p class="clients--name col-3 mb-0"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                        Jane Doe</p>
                                    <p class="clients--portal col-2 mb-0" id="client--portal-pool"><img>Pool Services</p>
                                    <p class="clients--account col-2 mb-0">Rohring Results</p>
                                    <p class="clients--companyname col-2 mb-0">My Business 5</p>
                                    <p class="clients--date col-2 mb-0">Oct 12, 2019
                                        <i class="fas fa-pen client--edit-icon pl-4"></i>
                                        <i class="fas fa-user-edit client--user-icon pl-1"></i>
                                        <i class="fas fa-trash client--delete-icon pl-1"></i>
                                    </p>
                                </ul>
                                <ul class="nav client--nav">
                                    <label class="clients--cb col 1">
                                    <input type="checkbox"></input><span class="clients--cb-checkmark"></span></label>
                                    <p class="clients--name col-3 mb-0"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                        Jones Dermont</p>
                                    <p class="clients--portal col-2 mb-0" id="client--portal-realestate"><img>Real Estate</p>
                                    <p class="clients--account col-2 mb-0">White Label Partner</p>
                                    <p class="clients--companyname col-2 mb-0">My Business 6</p>
                                    <p class="clients--date col-2 mb-0">Dec 11, 2018
                                        <i class="fas fa-pen client--edit-icon pl-4"></i>
                                        <i class="fas fa-user-edit client--user-icon pl-1"></i>
                                        <i class="fas fa-trash client--delete-icon pl-1"></i>
                                    </p>
                                </ul>
                                <ul class="nav client--nav">
                                    <label class="clients--cb col 1">
                                    <input type="checkbox"></input><span class="clients--cb-checkmark"></span></label>
                                    <p class="clients--name col-3 mb-0"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                        Martin Merces</p>
                                    <p class="clients--portal col-2 mb-0" id="client--portal-realestate"><img>Real Estate</p>
                                    <p class="clients--account col-2 mb-0">White Label Partner</p>
                                    <p class="clients--companyname col-2 mb-0">My Business 7</p>
                                    <p class="clients--date col-2 mb-0">Dec 9, 2018
                                        <i class="fas fa-pen client--edit-icon pl-4"></i>
                                        <i class="fas fa-user-edit client--user-icon pl-1"></i>
                                        <i class="fas fa-trash client--delete-icon pl-1"></i>
                                    </p>
                                </ul>
                                <ul class="nav client--nav">
                                    <label class="clients--cb col 1">
                                    <input type="checkbox"></input><span class="clients--cb-checkmark"></span></label>
                                    <p class="clients--name col-3 mb-0"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                        Franz Ferdinand</p>
                                    <p class="clients--portal col-2 mb-0" id="client--portal-pest"><img>Pest Control</p>
                                    <p class="clients--account col-2 mb-0">Rohring Results</p>
                                    <p class="clients--companyname col-2 mb-0">My Business 8</p>
                                    <p class="clients--date col-2 mb-0">Dec 6, 2018
                                        <i class="fas fa-pen client--edit-icon pl-4"></i>
                                        <i class="fas fa-user-edit client--user-icon pl-1"></i>
                                        <i class="fas fa-trash client--delete-icon pl-1"></i>
                                    </p>
                                </ul>
                                <ul class="nav client--nav">
                                    <label class="clients--cb col 1">
                                    <input type="checkbox" style="border: 1px solid #F5B301;"></input><span class="clients--cb-checkmark"></span></label>
                                    <p class="clients--name col-3 mb-0"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                        John Smith</p>
                                    <p class="clients--portal col-2 mb-0" id="client--portal-lawncare"><img>Lawn Care</p>
                                    <p class="clients--account col-2 mb-0">White Label Partner</p>
                                    <p class="clients--companyname col-2 mb-0">My Business 9</p>
                                    <p class="clients--date col-2 mb-0">Nov 30, 2018
                                        <i class="fas fa-pen client--edit-icon pl-4"></i>
                                        <i class="fas fa-user-edit client--user-icon pl-1"></i>
                                        <i class="fas fa-trash client--delete-icon pl-1"></i>
                                    </p>
                                </ul>
                                <ul class="nav client--nav">
                                    <label class="clients--cb col 1">
                                        <input type="checkbox"></input><span class="clients--cb-checkmark"></span></label>
                                    <p class="clients--name col-3 mb-0"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                        Judith Williams</p>
                                    <p class="clients--portal col-2 mb-0" id="client--portal-lawncare"><img>Lawn Care</p>
                                    <p class="clients--account col-2 mb-0">White Label Partner</p>
                                    <p class="clients--companyname col-2 mb-0">My Business 9</p>
                                    <p class="clients--date col-2 mb-0">Nov 30, 2018
                                        <i class="fas fa-pen client--edit-icon pl-4"></i>
                                        <i class="fas fa-user-edit client--user-icon pl-1"></i>
                                        <i class="fas fa-trash client--delete-icon pl-1"></i>
                                    </p>
                                </ul>
                                
                                <ul class="nav client--nav">
                                    <label class="clients--cb col 1">
                                        <input type="checkbox"></input><span class="clients--cb-checkmark"></span></label>
                                    <p class="clients--name col-3 mb-0"><img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                        Judith Williams</p>
                                    <div class="clients--portal-container col-2 mb-0 d-flex"><img>
                                        <p class="clients--portal-multiple" id="multiple--portal-plumbing">Plumbing</p>
                                        <p class="clients--portal-multiple" id="multiple--portal-spa">Spa Services</p>
                                        <p class="clients--portal-multiple" id="multiple--portal-pool">Pool Services</p>
                                    </div>
                                    <p class="clients--account col-2 mb-0">White Label Partner</p>
                                    <p class="clients--companyname col-2 mb-0">My Business 9</p>
                                    <p class="clients--date col-2 mb-0">Nov 30, 2018
                                        <i class="fas fa-pen client--edit-icon pl-4"></i>
                                        <i class="fas fa-user-edit client--user-icon pl-1"></i>
                                        <i class="fas fa-trash client--delete-icon pl-1"></i>
                                    </p>
                                </ul>
                            </div>                            
                        </div>
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