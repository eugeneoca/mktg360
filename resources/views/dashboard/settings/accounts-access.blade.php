@extends('layouts.dashboard')
@section('title', 'Access To Accounts')
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
                    <div class="d-flex align-items-center mb-4">
                        <a href="/" class="btn btn-primary"><i class="fas fa-chevron-left"></i></a>
                        <p class="mb-0 ml-4 mr-3">Settings</p>
                        <img src="{{asset('images/social/arrow.png')}}"  />
                        <p class="mb-0 ml-3">Access to Accounts</p>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-4 h-100">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-4">
                                    <h6 class="m-0">Access to Accounts</h6>                                      
                                </div>
                                <!-- Card Body -->
                                <div class="card-body p-5" >
                                      
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="shadow pb-5 pt-4 px-4 rounded-lg mx-3 mb-5">
                                                <div class="text-center">
                                                    <img class="pb-5 pt-3 " src="{{asset('images/social/facebook.png')}}" alt=""   />
                                                </div>    
                                                <h6>Facebook</h6> 
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, vitae</p>  
                                                <div class="mt-5 text-center">
                                                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-facebook">Add Account</button>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="shadow pb-5 pt-4 px-4 rounded-lg mx-3 mb-5">
                                                <div class="text-center">
                                                    <img class="pb-5 pt-3 " src="{{asset('images/social/instagram.png')}}" alt=""   />
                                                </div>    
                                                <h6>Instagram</h6> 
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, vitae</p>  
                                                <div class="mt-5 text-center">
                                                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-instagram">Add Account</button>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="shadow pb-5 pt-4 px-4 rounded-lg mx-3 mb-5">
                                                <div class="text-center">
                                                    <img class="pb-5 pt-3 " src="{{asset('images/social/twitter.png')}}" alt=""   />
                                                </div>    
                                                <h6>Twitter</h6> 
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, vitae</p>  
                                                <div class="mt-5 text-center">
                                                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-twitter">Add Account</button>
                                                </div>  
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="shadow pb-5 pt-4 px-4 rounded-lg mx-3 mb-5">
                                                <div class="text-center">
                                                    <img class="pb-5 pt-3 " src="{{asset('images/social/linkedin.png')}}" alt=""   />
                                                </div>    
                                                <h6>LinkedIn</h6> 
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, vitae</p>  
                                                <div class="mt-5 text-center">
                                                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-linkedin">Add Account</button>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="shadow pb-5 pt-4 px-4 rounded-lg mx-3 mb-5">
                                                <div class="text-center">
                                                    <img class="pb-5 pt-3 " src="{{asset('images/social/google-business.png')}}" alt=""   />
                                                </div>    
                                                <h6>Google Business</h6> 
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, vitae</p>  
                                                <div class="mt-5 text-center">
                                                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-google-business">Add Account</button>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-4">
                                            <div class="shadow pb-5 pt-4 px-4 rounded-lg mx-3 mb-5">
                                                <div class="text-center">
                                                    <img class="pb-5 pt-3 " src="{{asset('images/social/pinterest.png')}}" alt=""   />
                                                </div>    
                                                <h6>Pinterest</h6> 
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, vitae</p>  
                                                <div class="mt-5 text-center">
                                                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-pinterest">Add Account</button>
                                                </div>  
                                            </div>
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


    <!-- modal-facebook-->
    <div class="modal fade" id="modal-facebook" tabindex="-1" role="dialog" aria-labelledby="md-facebook"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">                  
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-5">
                    <div class="text-center mb-5">
                        <img class="mb-3" src="{{asset('images/social/facebook.png')}}" alt=""   />
                        <h5>Add your Facebook Account</h5>
                    </div>
                    <form class="mb-3 text-center">                          
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email">
                        </div>
                        
                        <div class="form-group">                               
                            <div class="input-group" id="show_hide_password">
                            <input class="form-control" type="password" placeholder="Password">
                            <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block my-5">Save</button>
                    </form>                 
                </div>
                
            </div>
        </div>
    </div> <!-- ./modal-facebook-->

    <!-- modal-instagram-->
    <div class="modal fade" id="modal-instagram" tabindex="-1" role="dialog" aria-labelledby="md-instagram"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">                  
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-5">
                    <div class="text-center mb-5">
                        <img class="mb-3" src="{{asset('images/social/instagram.png')}}" alt=""   />
                        <h5>Add your Instagram Account</h5>
                    </div>
                    <form class="mb-3 text-center">                          
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email">
                        </div>
                        
                        <div class="form-group">                               
                            <div class="input-group" id="show_hide_password">
                            <input class="form-control" type="password" placeholder="Password">
                            <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block my-5">Save</button>
                    </form>                 
                </div>
                
            </div>
        </div>
    </div> <!-- ./modal-instagram-->

    <!-- modal-twitter-->
    <div class="modal fade" id="modal-twitter" tabindex="-1" role="dialog" aria-labelledby="md-twitter"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">                  
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-5">
                    <div class="text-center mb-5">
                        <img class="mb-3" src="{{asset('images/social/twitter.png')}}" alt=""   />
                        <h5>Add your Twitter Account</h5>
                    </div>
                    <form class="mb-3 text-center">                          
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email">
                        </div>
                        
                        <div class="form-group">                               
                            <div class="input-group" id="show_hide_password">
                            <input class="form-control" type="password" placeholder="Password">
                            <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block my-5">Save</button>
                    </form>                 
                </div>
                
            </div>
        </div>
    </div> <!-- ./modal-twitter-->

    <!-- modal-linkedin-->
    <div class="modal fade" id="modal-linkedin" tabindex="-1" role="dialog" aria-labelledby="md-linkedin"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">                  
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-5">
                    <div class="text-center mb-5">
                        <img class="mb-3" src="{{asset('images/social/linkedin.png')}}" alt=""   />
                        <h5>Add your LinkedIn Account</h5>
                    </div>
                    <form class="mb-3 text-center">                          
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email">
                        </div>
                        
                        <div class="form-group">                               
                            <div class="input-group" id="show_hide_password">
                            <input class="form-control" type="password" placeholder="Password">
                            <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block my-5">Save</button>
                    </form>                 
                </div>
                
            </div>
        </div>
    </div> <!-- ./modal-linkedin-->

    <!-- modal-google-business-->
    <div class="modal fade" id="modal-google-business" tabindex="-1" role="dialog" aria-labelledby="md-google-business"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">                  
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-5">
                    <div class="text-center mb-5">
                        <img class="mb-3" src="{{asset('images/social/google-business.png')}}" alt=""   />
                        <h5>Add your Google Business Account</h5>
                    </div>
                    <form class="mb-3 text-center">                          
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email">
                        </div>
                        
                        <div class="form-group">                               
                            <div class="input-group" id="show_hide_password">
                            <input class="form-control" type="password" placeholder="Password">
                            <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block my-5">Save</button>
                    </form>                 
                </div>
                
            </div>
        </div>
    </div> <!-- ./modal-google-business-->

    <!-- modal-pinterest-->
    <div class="modal fade" id="modal-pinterest" tabindex="-1" role="dialog" aria-labelledby="md-pinterest"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">                  
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-5">
                    <div class="text-center mb-5">
                        <img class="mb-3" src="{{asset('images/social/pinterest.png')}}" alt=""   />
                        <h5>Add your Pinterest Account</h5>
                    </div>
                    <form class="mb-3 text-center">                          
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email">
                        </div>
                        
                        <div class="form-group">                               
                            <div class="input-group" id="show_hide_password">
                            <input class="form-control" type="password" placeholder="Password">
                            <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block my-5">Save</button>
                    </form>                 
                </div>
                
            </div>
        </div>
    </div> <!-- ./modal-pinterest-->

    @include('includes.scripts')

    @endsection