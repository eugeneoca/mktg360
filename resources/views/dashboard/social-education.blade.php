@extends('layouts.dashboard')
@section('title', 'Social Education')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper">

            <!-- Main Content -->
            <div id="content" class="">

                  @include('includes.top-bar')  

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-4  card-overflow">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-4">
                                    <h6 class="m-0">Social Media Education</h6>  
                                                                      
                                </div>
                                <!-- Card banner -->
                                <div class="card-banner   d-flex  justify-content-between">
                                    <div class="p-4">
                                        <h6>Social Media Education</h6> 
                                        <p>Not needed, just additional if your interested in expanding your results further</p> 
                                    </div> 
                                    <img  src="{{asset('images/social-education.png')}}" alt=""> 
                                </div>
                                <!-- Card Body -->
                                <div class="card-body p-5" >
                                    
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="card shadow-sm border mb-5 social-card">
                                                <img class="card-img-top" src="{{asset('images/demo.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h6 class="card-title">This is a title</h6>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                                                   
                                                </div>
                                            </div><!-- ./card -->
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="card shadow-sm border mb-5 social-card">
                                                <img class="card-img-top" src="{{asset('images/demo.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h6 class="card-title">This is a title</h6>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                                                   
                                                </div>
                                            </div><!-- ./card -->
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="card shadow-sm border mb-5 social-card">
                                                <img class="card-img-top" src="{{asset('images/demo.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h6 class="card-title">This is a title</h6>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                                                   
                                                </div>
                                            </div><!-- ./card -->
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="card shadow-sm border mb-5 social-card">
                                                <img class="card-img-top" src="{{asset('images/demo.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h6 class="card-title">This is a title</h6>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                                                   
                                                </div>
                                            </div><!-- ./card -->
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="card shadow-sm border mb-5 social-card">
                                                <img class="card-img-top" src="{{asset('images/demo.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h6 class="card-title">This is a title</h6>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                                                   
                                                </div>
                                            </div><!-- ./card -->
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="card shadow-sm border mb-5 social-card">
                                                <img class="card-img-top" src="{{asset('images/demo.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h6 class="card-title">This is a title</h6>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                                                   
                                                </div>
                                            </div><!-- ./card -->
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="card shadow-sm border mb-5 social-card">
                                                <img class="card-img-top" src="{{asset('images/demo.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h6 class="card-title">This is a title</h6>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                                                   
                                                </div>
                                            </div><!-- ./card -->
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="card shadow-sm border mb-5 social-card">
                                                <img class="card-img-top" src="{{asset('images/demo.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h6 class="card-title">This is a title</h6>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                                                   
                                                </div>
                                            </div><!-- ./card -->
                                        </div>
                                        
                                       
                                    </div><!-- ./row -->
                            
                                </div>
                            </div> <!-- ./card -->
                        </div>    
                    </div><!-- ./row -->
 
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    @include('includes.scripts')

    @endsection