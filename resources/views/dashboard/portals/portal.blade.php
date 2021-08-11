@extends('layouts.dashboard')
@section('title', 'Portals')
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
                        <h4>Portals</h4>
                            <button class="btn btn-primary btn-block" type="button" id="btn-portal--addnew">Add New</button> 
                            <div class="search">
                                <div class="form-group has-search">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                            <div class="portal--filter-container">
                                <ul class="nav portal--filter-tabs mb-3">
                                        <label class="portal--cb col 1">
                                            <input type="checkbox"><span class="portal--checkmark"></span></input>
                                        </label>
                                    <p class="portal--filter-select col-9 mb-0">1 Selected 
                                        <i class="fas fa-trash portal--delete"></i>
                                    </p>
                                    <p class="clients--filter-label col-1 mb-0"></p>
                                    <p class="clients--filter-dropdown col-1 mb-0"></p>
                                </ul>
                            </div>
                            <div class="inner-menu shadow h-100">
                                <div class="portal--nav-container">
                                    <ul class="nav portal--nav-tabs">
                                    <label class="portal--cb col 1">
                                            <input type="checkbox"><span class="portal--checkmark"></span></input>
                                        </label>
                                        <p class="portal--title-heading col-5 mb-0">Title</p>
                                        <p class="portal--client-heading col-3 mb-0">Client</p>
                                        <p class="portal--date-heading col-3 mb-0">Creation Date</p>
                                    </ul>
                                </div>    
                                <div class="portal--tab">
                                    <ul class="nav portal--nav">
                                    <label class="portal--cb col 1">
                                            <input type="checkbox"><span class="portal--checkmark"></span></input>
                                        </label>
                                        <p class="portal--title col-5 mb-0">Digital Marketing Client Portal Full Dashboard</p>
                                        <p class="portal--client col-3 mb-0">Assign (0)</p>
                                        <p class="portal--date col-3 mb-0">April 28, 2021
                                            <i class="fas fa-pen portal--edit-icon pl-4"></i>
                                            <i class="fas fa-trash portal--delete-icon pl-1"></i>
                                        </p>
                                    </ul>
                                </div>
                                <div class="portal--tab">
                                    <ul class="nav portal--nav">
                                    <label class="portal--cb col 1">
                                            <input type="checkbox"><span class="portal--checkmark"></span></input>
                                        </label>
                                        <p class="portal--title col-5 mb-0">Digital Marketing Simplified Portal</p>
                                        <p class="portal--client col-3 mb-0">Assign (0)</p>
                                        <p class="portal--date col-3 mb-0">April 28, 2021
                                            <i class="fas fa-pen portal--edit-icon pl-4"></i>
                                            <i class="fas fa-trash portal--delete-icon pl-1"></i>
                                        </p>
                                    </ul>
                                </div>
                                <div class="portal--tab">
                                    <ul class="nav portal--nav">
                                    <label class="portal--cb col 1">
                                            <input type="checkbox"><span class="portal--checkmark"></span></input>
                                        </label>
                                        <p class="portal--title col-5 mb-0">Spa Services DIY Dashboard</p>
                                        <p class="portal--client col-3 mb-0">Assign (0)</p>
                                        <p class="portal--date col-3 mb-0">April 28, 2021
                                            <i class="fas fa-pen portal--edit-icon pl-4"></i>
                                            <i class="fas fa-trash portal--delete-icon pl-1"></i>
                                        </p>
                                    </ul>
                                </div>
                                <div class="portal--tab">
                                    <ul class="nav portal--nav">
                                    <label class="portal--cb col 1">
                                            <input type="checkbox"><span class="portal--checkmark"></span></input>
                                        </label>
                                        <p class="portal--title col-5 mb-0">Lawn Care DIY Dashboard</p>
                                        <p class="portal--client col-3 mb-0">Assign (2)</p>
                                        <p class="portal--date col-3 mb-0">April 28, 2021
                                            <i class="fas fa-pen portal--edit-icon pl-4"></i>
                                            <i class="fas fa-trash portal--delete-icon pl-1"></i>
                                        </p>
                                    </ul>
                                </div>
                                <div class="portal--tab">
                                    <ul class="nav portal--nav">
                                    <label class="portal--cb col 1">
                                            <input type="checkbox"><span class="portal--checkmark"></span></input>
                                        </label>
                                        <p class="portal--title col-5 mb-0">Cleaning DIY Dashboard</p>
                                        <p class="portal--client col-3 mb-0">Assign (0)</p>
                                        <p class="portal--date col-3 mb-0">April 28, 2021
                                            <i class="fas fa-pen portal--edit-icon pl-4"></i>
                                            <i class="fas fa-trash portal--delete-icon pl-1"></i>
                                        </p>
                                    </ul>
                                </div>
                                <div class="portal--tab">
                                    <ul class="nav portal--nav">
                                    <label class="portal--cb col 1">
                                            <input type="checkbox"><span class="portal--checkmark"></span></input>
                                        </label>
                                        <p class="portal--title col-5 mb-0">Pool Service DIY Dashboard</p>
                                        <p class="portal--client col-3 mb-0">Assign (1)</p>
                                        <p class="portal--date col-3 mb-0">April 28, 2021
                                            <i class="fas fa-pen portal--edit-icon pl-4"></i>
                                            <i class="fas fa-trash portal--delete-icon pl-1"></i>
                                        </p>
                                    </ul>
                                </div>
                                <div class="portal--tab">
                                    <ul class="nav portal--nav">
                                    <label class="portal--cb col 1">
                                            <input type="checkbox"><span class="portal--checkmark"></span></input>
                                        </label>
                                        <p class="portal--title col-5 mb-0">Pest Control DIY Dashboard</p>
                                        <p class="portal--client col-3 mb-0">Assign (0)</p>
                                        <p class="portal--date col-3 mb-0">April 28, 2021
                                            <i class="fas fa-pen portal--edit-icon pl-4"></i>
                                            <i class="fas fa-trash portal--delete-icon pl-1"></i>
                                        </p>
                                    </ul>
                                </div>
                                <div class="portal--tab">
                                    <ul class="nav portal--nav">
                                    <label class="portal--cb col 1">
                                            <input type="checkbox"><span class="portal--checkmark"></span></input>
                                        </label>
                                        <p class="portal--title col-5 mb-0">Inspirational People Simplified Social Portal</p>
                                        <p class="portal--client col-3 mb-0">Assign (0)</p>
                                        <p class="portal--date col-3 mb-0">April 28, 2021
                                            <i class="fas fa-pen portal--edit-icon pl-4"></i>
                                            <i class="fas fa-trash portal--delete-icon pl-1"></i>
                                        </p>
                                    </ul>
                                </div>
                                <div class="portal--tab">
                                    <ul class="nav portal--nav">
                                        <label class="portal--cb col 1">
                                            <input type="checkbox"><span class="portal--checkmark"></span></input>
                                        </label>
                                        <p class="portal--title col-5 mb-0">Plumbing Simplified Portal</p>
                                        <p class="portal--client col-3 mb-0">Assign (0)</p>
                                        <p class="portal--date col-3 mb-0">April 28, 2021
                                            <i class="fas fa-pen portal--edit-icon pl-4"></i>
                                            <i class="fas fa-trash portal--delete-icon pl-1"></i>
                                        </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div id="portal--assignclient-modal" class="clients--modal">
                    <div class="portal--modal-content">
                        <div class="portal--modal-header">
                            <span class="close">&times;</span>
                        </div>
                            <div class="portal--modal-body">
                                <div class="portal--container">
                                    <h6 class="portal--modal-title">Assign Clients</h6>
                                    <div class="portal--form-group has-search d-flex justify-content-center">
                                        <!-- <span class="fa fa-search form-control-portal"></span> -->
                                    <input type="text" class="portal--form-control" placeholder="Search Client">
                                </div>
                                    <ul class="portal--modal-filter col-12 d-flex my-3 mx-3">
                                        <label class="portal--client-cb col-5 ml-4">
                                            <input type="checkbox">Select All<span class="portal--cb-checkmark"></span>
                                        </label>
                                        <input type="date" id="portal--date-filter"></input>                                       
                                    </ul>
                                    <div class="portal--form-container">    
                                    <div class="portal--client-list">    
                                    <table class="portal--client-table" style="width:100%">
                                            <tr>
                                                <td class="portal-client"><label class="portal--client-cb col-12">
                                                    <input type="checkbox">Lindsey Stroud<span class="portal--cb-checkmark"></span>
                                                </label></td>
                                                <td class="portal-client"><label class="portal--client-cb col-12">
                                                    <input type="checkbox">Jones Dermont<span class="portal--cb-checkmark"></span>
                                                </label></td>
                                            </tr>
                                            <tr>
                                                <td class="portal-client"><label class="portal--client-cb col-12">
                                                    <input type="checkbox">Nicci Troiani<span class="portal--cb-checkmark"></span>
                                                </label></td>
                                                <td class="portal-client"><label class="portal--client-cb col-12">
                                                    <input type="checkbox">Martin Merces<span class="portal--cb-checkmark"></span>
                                                </label></td>
                                            </tr>
                                            <tr>
                                                <td class="portal-client"><label class="portal--client-cb col-12">
                                                    <input type="checkbox">George Fields<span class="portal--cb-checkmark"></span>
                                                </label></td>
                                                <td class="portal-client"><label class="portal--client-cb col-12">
                                                    <input type="checkbox">Franz Ferdinand<span class="portal--cb-checkmark"></span>
                                                </label></td>
                                            </tr>
                                            <tr>
                                                <td class="portal-client"><label class="portal--client-cb col-12">
                                                    <input type="checkbox">Rebecca Moore<span class="portal--cb-checkmark"></span>
                                                </label></td>
                                                <td class="portal-client"><label class="portal--client-cb col-12">
                                                    <input type="checkbox">John Smith<span class="portal--cb-checkmark"></span>
                                                </label></td>
                                            </tr>
                                            <tr>
                                                <td class="portal-client"><label class="portal--client-cb col-12">
                                                    <input type="checkbox">Jane Doe<span class="portal--cb-checkmark"></span>
                                                </label></td>
                                                <td class="portal-client"><label class="portal--client-cb col-12">
                                                    <input type="checkbox">Judith Williams<span class="portal--cb-checkmark"></span>
                                                </label></td>
                                            </tr>       
                                    </table>
                                </div></div>
                                    <div class="portal--modal-footer">
                                        <button class="btn btn-primary btn-block" type="button" id="portal--btn-assign">Assign</button>
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                </div> 
                            <!-- content> -->

                        </div>
                    </div> <!-- ./row -->

                </div>
                <!-- /.container-fluid -->
                <div class="container">

                </div> 
            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <script>
    // Modal Script
    var modal = document.getElementById("portal--assignclient-modal");
    var btn = document.getElementById("btn-portal--addnew");
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