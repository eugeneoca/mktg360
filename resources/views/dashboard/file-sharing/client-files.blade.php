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
                            <div class="filesharing--filter-container col-12 d-flex">
                                <a href="#" class="filesharing-back col-1"><i class="fas fa-caret-square-left filesharing-back-icon"></i></a>
                                <p class="filesharing--client-files col-2">Client Files <i class="fas fa-long-arrow-alt-right"></i></p>
                                <p class="filesharing--selected-client col-5" id="select-client">Lindsey Stroud</p>
                                <p class="filesharing--filter-label col-2">Filter:</p>
                                <div class="filesharing---dropdown-container col-2">
                                    <select name="filter" class="filesharing--filter-dropdown" >
                                        <option class="filesharing--dropdown-content">Core</option>
                                        <option class="filesharing--dropdown-content">Evergreen</option>
                                    </select> 
                                    </div>
                                <button class="btn btn-primary btn-block" type="button" id="btn-filesharing--upload">Upload New File</button>    
                            </div>
                            <div class="inner-menu shadow h-100">
                            <div class="filesharing--nav-container">
                                <ul class="nav filesharing--nav-tabs">
                                <label class="filesharing--cb col 1">
                                    <input type="checkbox"><span class="filesharing--cb-checkmark"></span></label>
                                    <p class="filesharing--name-heading col-3 mb-0">Name</p>
                                    <p class="filesharing--category-heading col-2 mb-0">Category</p>
                                    <p class="filesharing--uploadby-heading col-2 mb-0">Uploaded By</p>
                                    <p class="filesharing--uploaddate-heading col-2 mb-0">Uploaded Date</p>
                                    <p class="filesharing--downloaddate-heading col-2 mb-0">Downloaded Date</p>
                                </ul>
                            </div>    
                            <div class="filesharing--tab">
                                <ul class="nav filesharing--nav">
                                    <label class="filesharing--cb col 1">
                                    <input type="checkbox" class="filesharing--cb col 1"></input><span class="filesharing--cb-checkmark"></span></label>
                                    <p class="filesharing--name col-3 mb-0"><i class="fas fa-file filesharing--icon mr-2" id="filesharing--pdf-icon"></i>
                                        WP-Client_Dev_Hooks.pdf</p>
                                    <p class="filesharing--category col-2 mb-0" id="filesharing--portal-plumbing"><img>General</p>
                                    <p class="filesharing--uploadby col-2 mb-0">Lindsey</p>
                                    <p class="filesharing--uploaddate col-2 mb-0">April 28, 2021</p>
                                    <p class="filesharing--downloaddate col-1 mb-0">April 28, 2021</p>
                                    <p class="filesharing--dropdown-filter col-1" id="filesharing--dropdown-core">Core</p>        
                                </ul> 
                                <ul class="nav filesharing--nav">
                                    <label class="filesharing--cb col 1">
                                    <input type="checkbox" class="filesharing--cb col 1"></input><span class="filesharing--cb-checkmark"></span></label>
                                    <p class="filesharing--name col-3 mb-0"><i class="fas fa-file filesharing--icon mr-2" id="filesharing--pdf-icon"></i>
                                        Hansens_Plumbing-27th_Oct_2020.pdf</p>
                                    <p class="filesharing--category col-2 mb-0" id="filesharing--portal-plumbing"><img>General</p>
                                    <p class="filesharing--uploadby col-2 mb-0">Lindsey</p>
                                    <p class="filesharing--uploaddate col-2 mb-0">April 28, 2021</p>
                                    <p class="filesharing--downloaddate col-1 mb-0">April 28, 2021</p>
                                    <p class="filesharing--dropdown-filter col-1" id="filesharing--dropdown-evergreen">Evergreen</p>
                                </ul>
                                <ul class="nav filesharing--nav">
                                    <label class="filesharing--cb col 1">
                                    <input type="checkbox" class="filesharing--cb col 1"></input><span class="filesharing--cb-checkmark"></span></label>
                                    <p class="filesharing--name col-3 mb-0"><i class="fas fa-file filesharing--icon mr-2" id="filesharing--jpg-icon"></i>
                                        Raven Infographics Without White Wheel.jpg</p>
                                    <p class="filesharing--category col-2 mb-0" id="filesharing--portal-plumbing"><img>General</p>
                                    <p class="filesharing--uploadby col-2 mb-0">Lindsey</p>
                                    <p class="filesharing--uploaddate col-2 mb-0">April 2, 2021</p>
                                    <p class="filesharing--downloaddate col-1 mb-0">April 2, 2021</p>
                                    <p class="filesharing--dropdown-filter col-1" id="filesharing--dropdown-evergreen">Evergreen</p>
                                </ul> 
                                <ul class="nav filesharing--nav">
                                    <label class="filesharing--cb col 1">
                                    <input type="checkbox" class="filesharing--cb col 1"></input><span class="filesharing--cb-checkmark"></span></label>
                                    <p class="filesharing--name col-3 mb-0"><i class="fas fa-file filesharing--icon mr-2" id="filesharing--pdf-icon"></i>
                                        Francesca Walters Aire DNP - MEdSPA.pdf</p>
                                    <p class="filesharing--category col-2 mb-0" id="filesharing--portal-plumbing"><img>General</p>
                                    <p class="filesharing--uploadby col-2 mb-0">Lindsey</p>
                                    <p class="filesharing--uploaddate col-2 mb-0">Feb. 19, 2021</p>
                                    <p class="filesharing--downloaddate col-1 mb-0">Feb. 19, 2021</p>
                                    <p class="filesharing--dropdown-filter col-1" id="filesharing--dropdown-evergreen">Evergreen</p>
                                </ul> 
                                <ul class="nav filesharing--nav">
                                    <label class="filesharing--cb col 1">
                                    <input type="checkbox" class="filesharing--cb col 1"></input><span class="filesharing--cb-checkmark"></span></label>
                                    <p class="filesharing--name col-3 mb-0"><i class="fas fa-file filesharing--icon mr-2" id="filesharing--jpg-icon"></i>
                                        DSC02148.jpeg</p>
                                    <p class="filesharing--category col-2 mb-0" id="filesharing--portal-plumbing"><img>General</p>
                                    <p class="filesharing--uploadby col-2 mb-0">Lindsey</p>
                                    <p class="filesharing--uploaddate col-2 mb-0">Dec. 14, 2020</p>
                                    <p class="filesharing--downloaddate col-1 mb-0">Dec. 14, 2020</p>
                                    <p class="filesharing--dropdown-filter col-1" id="filesharing--dropdown-core">Core</p>
                                </ul> 
                                <ul class="nav filesharing--nav">
                                    <label class="filesharing--cb col 1">
                                    <input type="checkbox" class="filesharing--cb col 1"></input><span class="filesharing--cb-checkmark"></span></label>
                                    <p class="filesharing--name col-3 mb-0"><i class="fas fa-file filesharing--icon mr-2" id="filesharing--jpg-icon"></i>
                                        DSC_0251.jpeg</p>
                                    <p class="filesharing--category col-2 mb-0" id="filesharing--portal-plumbing"><img>Instagram Posts</p>
                                    <p class="filesharing--uploadby col-2 mb-0">Staff name 1</p>
                                    <p class="filesharing--uploaddate col-2 mb-0">Oct. 12, 2019</p>
                                    <p class="filesharing--downloaddate col-1 mb-0">Oct. 12, 2019</p>
                                    <p class="filesharing--dropdown-filter col-1" id="filesharing--dropdown-core">Core</p>
                                </ul> 
                                <ul class="nav filesharing--nav">
                                    <label class="filesharing--cb col 1">
                                    <input type="checkbox" class="filesharing--cb col 1"></input><span class="filesharing--cb-checkmark"></span></label>
                                    <p class="filesharing--name col-3 mb-0"><i class="fas fa-file filesharing--icon mr-2" id="filesharing--jpg-icon"></i>
                                        The ValueBuilder - Logo_300DPI_1500px.jpeg</p>
                                    <p class="filesharing--category col-2 mb-0" id="filesharing--portal-plumbing"><img>General</p>
                                    <p class="filesharing--uploadby col-2 mb-0">Lindsey</p>
                                    <p class="filesharing--uploaddate col-2 mb-0">Dec. 09, 2018</p>
                                    <p class="filesharing--downloaddate col-1 mb-0">Dec. 09, 2018</p>
                                    <p class="filesharing--dropdown-filter col-1 d-flex">
                                        <button type="button" class="filesharing--edit"><i class="fas fa-pen filesharing--edit-icon"></i></button>
                                        <button type="button" class="filesharing--view"><i class="fas fa-eye filesharing--view-icon"></i></button>
                                        <button type="button" class="filesharing--download"><i class="fas fa-arrow-circle-down filesharing--download-icon"></i></button>
                                        <button type="button" class="filesharing--delete"><i class="fas fa-trash filesharing--delete-icon pl-1"></i></button>
                                    </p>
                                </ul> 
                                <ul class="nav filesharing--nav">
                                    <label class="filesharing--cb col 1">
                                    <input type="checkbox" class="filesharing--cb col 1"></input><span class="filesharing--cb-checkmark"></span></label>
                                    <p class="filesharing--name col-3 mb-0"><i class="fas fa-file filesharing--icon mr-2" id="filesharing--pdf-icon"></i>
                                        Arctic Air Competitor Research.pdf</p>
                                    <p class="filesharing--category col-2 mb-0" id="filesharing--portal-plumbing"><img>General</p>
                                    <p class="filesharing--uploadby col-2 mb-0">Staff Name 1</p>
                                    <p class="filesharing--uploaddate col-2 mb-0">Dec. 06, 2018</p>
                                    <p class="filesharing--downloaddate col-1 mb-0">Dec. 06, 2018</p>
                                    <p class="filesharing--dropdown-filter col-1 d-flex">
                                        <button type="button" class="filesharing--edit" id="btn--filesharing-edit"><i class="fas fa-pen filesharing--edit-icon"></i></button>
                                        <button type="button" class="filesharing--view"><i class="fas fa-eye filesharing--view-icon"></i></button>
                                        <button type="button" class="filesharing--download"><i class="fas fa-arrow-circle-down filesharing--download-icon"></i></button>
                                        <button type="button" class="filesharing--delete"><i class="fas fa-trash filesharing--delete-icon pl-1"></i></button>
                                    </p>
                                </ul> 
                                <ul class="nav filesharing--nav">
                                    <label class="filesharing--cb col 1"><input type="checkbox" class="filesharing--cb col 1"></input><span class="filesharing--cb-checkmark"></span></label>
                                    <p class="filesharing--name col-3 mb-0"><i class="fas fa-file filesharing--icon mr-2" id="filesharing--jpg-icon"></i>
                                        S_Breedlove_FB-IN.jpg</p>
                                    <p class="filesharing--category col-2 mb-0" id="filesharing--portal-plumbing"><img>Instagram Posts</p>
                                    <p class="filesharing--uploadby col-2 mb-0">Staff Name 1</p>
                                    <p class="filesharing--uploaddate col-2 mb-0">Nov. 30, 2018</p>
                                    <p class="filesharing--downloaddate col-1 mb-0">Nov. 30, 2018</p>
                                    <p class="filesharing--dropdown-filter col-1 d-flex">
                                        <button type="button" class="filesharing--edit"><i class="fas fa-pen filesharing--edit-icon"></i></button>
                                        <button type="button" class="filesharing--view"><i class="fas fa-eye filesharing--view-icon"></i></button>
                                        <button type="button" class="filesharing--download"><i class="fas fa-arrow-circle-down filesharing--download-icon"></i></button>
                                        <button type="button" class="filesharing--delete"><i class="fas fa-trash filesharing--delete-icon pl-1"></i></button>
                                    </p>
                                </ul> 
                                <ul class="nav filesharing--nav">
                                    <label class="filesharing--cb col 1">
                                    <input type="checkbox"></input><span class="filesharing--cb-checkmark"></span>
                                    </label>
                                    <p class="filesharing--name col-3 mb-0"><i class="fas fa-file filesharing--icon mr-2" id="filesharing--jpg-icon"></i>
                                        S_Breedlove_FB-IN.jpg</p>
                                    <p class="filesharing--category col-2 mb-0" id="filesharing--portal-plumbing"><img>Instagram Posts</p>
                                    <p class="filesharing--uploadby col-2 mb-0">Staff Name 1</p>
                                    <p class="filesharing--uploaddate col-2 mb-0">Nov. 30, 2018</p>
                                    <p class="filesharing--downloaddate col-1 mb-0">Nov. 30, 2018</p>
                                    <p class="filesharing--dropdown-filter col-1 d-flex">
                                        <button type="button" class="filesharing--edit"><i class="fas fa-pen filesharing--edit-icon"></i></button>
                                        <button type="button" class="filesharing--view"><i class="fas fa-eye filesharing--view-icon"></i></button>
                                        <button type="button" class="filesharing--download"><i class="fas fa-arrow-circle-down filesharing--download-icon"></i></button>
                                        <button type="button" class="filesharing--delete"><i class="fas fa-trash filesharing--delete-icon pl-1"></i></button>
                                    </p>
                                </ul>                                  
                            </div>                                     
                    </div>
                </div>


                <!-- Modal -->
                <div id="filesharing--upload-modal" class="filesharing--modal">
                    <div class="filesharing--modal-content">
                        <div class="filesharing--modal-header">
                            <span class="close">&times;</span>
                        </div>
                            <div class="filesharing--modal-body">
                                <div class="filesharing--container">
                                    <h5 class="filesharing--upload-header">Upload File(s)</h5>
                                    <form class="filesharing--frm-addclient">                
                                        <textarea class="filesharing--add-input" placeholder="Description" id="filesharing--input-description"></textarea><br>
                                        <select name="filter" class="filesharing-modal-category">
                                            <option class="clients--dropdown-content">Category</option>
                                            <option class="clients--dropdown-content">Option</option>
                                        </select> 
                                        
                                        <span class="caret"></span></button>
                                        <input type="text" class="filesharing--add-input" placeholder="New Category" id="filesharing--input-lname"></input><br>
                                        <select name="filter" class="filesharing-modal-category">
                                            <option class="clients--dropdown-content">Evergreen</option>
                                            <option class="clients--dropdown-content">Core</option>
                                        </select>
                                        <span class="caret"></span></button>
                                        <input class="filesharing--attachment rounded-0" type="text" placeholder="Drag & Drop" style="height: 100px" ondrop="drop(event)" ondragover="allowDrop(event)"></input>
                                        <br>
                                        <button class="btn btn-primary btn-block" type="button" id="filesharing--btn-upload">Upload Files</button>
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
    var modal = document.getElementById("filesharing--upload-modal");
    var btn = document.getElementById("btn-filesharing--upload");
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