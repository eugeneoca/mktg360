@extends('layouts.dashboard')
@section('title', 'Marketing Profile')
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
                        <div class="col-12 col-md-12 col-sm-12 col-lg-3 ">
                            @include('dashboard.social-media-marketing.smm-menu')                             
                        </div>


                        <div class="col-12 col-md-12 col-sm-12 col-lg-9 ">
                            <div class="card shadow mb-4 h-100">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex justify-content-between align-items-center ">
                                    <h6 class="m-0">Profile</h6>
                                 </div>
                                <!-- Card Body -->
                                <div class="card-body p-0" >
                                    <div class="row h-100">
                                        <div class="col-3 border-right pr-0">
                                            <div class="text-center my-4"> 
                                                <h6>Logo</h6>
                                                <div class="profile-logo">
                                                    <img src="{{asset('images/admin.png')}}" />
                                                    <div class="fileUpload">
                                                        <input type="file" class="upload" />
                                                        <span><i class="fas fa-pen"></i></span>
                                                    </div>     
                                                </div> <!-- ./ profile-logo -->
                                            </div>
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="d-flex list-group-item list-group-item-action active" id="list-one-list" data-toggle="list" href="#list-one" role="tab" aria-controls="home">
                                                <i class="fas fa-suitcase"></i>
                                                   <span> Business & Branding </span>
                                                </a>
                                                <a class="d-flex list-group-item list-group-item-action" id="list-two-list" data-toggle="list" href="#list-two" role="tab" aria-controls="profile">
                                                    <i class="fas fa-comment-alt"></i>
                                                    <span> Marketing Messaging </span>
                                                </a>
                                                <a class="d-flex list-group-item list-group-item-action" id="list-three-list" data-toggle="list" href="#list-three" role="tab" aria-controls="messages">
                                                    <i class="fas fa-store-alt"></i>
                                                    <span> Products/Services </span>
                                                </a>
                                                <a class="d-flex list-group-item list-group-item-action" id="list-four-list" data-toggle="list" href="#list-four" role="tab" aria-controls="settings">
                                                    <i class="fas fa-rocket"></i>
                                                    <span>Short & Long Term Goals </span>
                                                </a>
                                                <a class="d-flex list-group-item list-group-item-action" id="list-five-list" data-toggle="list" href="#list-five" role="tab" aria-controls="settings">
                                                    <i class="fas fa-user-friends"></i>
                                                    <span> Ideal Customers </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content p-4" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-one" role="tabpanel" aria-labelledby="list-one-list">
                                                    <div class="">
                                                        <h6>Business and Branding</h6>  
                                                        
                                                        <div class="row my-3">
                                                            <div class="col-6">
                                                                <p class="small  mb-1">Business Name</p>
                                                                <p>Rohring Results</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="small mb-1">Website</p>
                                                                <p>www.rorhringresults.com</p>
                                                            </div>
                                                        </div> <!-- ./row -->
                                                        <div class="row my-3">
                                                            <div class="col-6">
                                                                <p class="small  mb-1">Business Email</p>
                                                                <p>info@rorhingresults.com</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="small mb-1">Phone Number</p>
                                                                <p>+1 541 754 3010</p>
                                                            </div>
                                                        </div> <!-- ./row -->

                                                        <h6>Address</h6> 
                                                        
                                                        <div class="row my-3">
                                                            <div class="col-6">
                                                                <p class="small  mb-1">Street Address</p>
                                                                <p>1242 Ocala Street</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="small mb-1">Zip Code</p>
                                                                <p>32833</p>
                                                            </div>
                                                        </div> <!-- ./row -->
                                                        <div class="row my-3">
                                                            <div class="col-6">
                                                                <p class="small  mb-1">Address Line 2</p>
                                                                <p>1242 Ocala Street</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="small mb-1">State</p>
                                                                <p>Florida</p>
                                                            </div>
                                                        </div> <!-- ./row -->
                                                        <div class="row my-3">
                                                            <div class="col-6">
                                                                <p class="small  mb-1">City</p>
                                                                <p>Orlando</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="small mb-1">Country</p>
                                                                <p>United States of America</p>
                                                            </div>
                                                        </div> <!-- ./row -->
                                                        <h6>Branding Color</h6>
                                                        <div class="row my-3">
                                                            
                                                            <div class="col-12">
                                                                <div class="d-flex align-items-center">
                                                                    <p class="small m-0">List out your colors in HEX code format</p> 
                                                                    <button class="btn-colors ml-2"><i class="fas fa-plus"></i></button>
                                                                </div>
                                                            </div>

                                                            <ul class="list-colors my-4">
                                                                <li><span class="color" style="background:blue"></span> FDDB3A </li> 
                                                                <li><span class="color" style="background:green"></span> FDDB3A </li>
                                                                <li><span class="color" style="background:blue"></span> FDDB3A </li>
                                                                <li><span class="color" style="background:red"></span> FDDB3A </li>            
                                                            </ul>
                                                        </div> <!-- ./row -->

                                                    </div>


                                                </div><!-- ./tab-pane -->
                                                <div class="tab-pane fade" id="list-two" role="tabpanel" aria-labelledby="list-two-list">
                                                    <h6 class="mb-3">Branding Color</h6>   
                                                    <p class="small mb-1">Tag Lines and One Liner</p>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                    <p class="small mb-1">How Would you Describe Your Business?</p>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, recusandae.</p>
                                                    <p class="small mb-1">What's Your Business's Story? How Did You Get Started?</p>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, recusandae.</p>
                                                    <p class="small mb-2">Choose Your Brand Personality</p>
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="Exclusive" id="per1">
                                                                <label class="form-check-label" for="per1">
                                                                Exclusive
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="Fun" id="per2">
                                                                <label class="form-check-label" for="per2">
                                                                Fun
                                                                </label>
                                                            </div> 
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="High Quality" id="per3">
                                                                <label class="form-check-label" for="per3">
                                                                High Quality
                                                                </label>
                                                            </div> 
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="Controversial" id="per4">
                                                                    <label class="form-check-label" for="per4">
                                                                    Controversial
                                                                    </label>                                                                
                                                            </div> 
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="Innovative" id="per5">
                                                                    <label class="form-check-label" for="per5">
                                                                    Innovative
                                                                    </label>                                                                 
                                                            </div>         
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="Exclusive" id="per1">
                                                                <label class="form-check-label" for="per1">
                                                                Exclusive
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="Fun" id="per2">
                                                                <label class="form-check-label" for="per2">
                                                                Fun
                                                                </label>
                                                            </div> 
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="High Quality" id="per3">
                                                                <label class="form-check-label" for="per3">
                                                                High Quality
                                                                </label>
                                                            </div> 
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="Controversial" id="per4">
                                                                    <label class="form-check-label" for="per4">
                                                                    Controversial
                                                                    </label>                                                                
                                                            </div> 
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="Innovative" id="per5">
                                                                    <label class="form-check-label" for="per5">
                                                                    Innovative
                                                                    </label>                                                                 
                                                            </div>         
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="Exclusive" id="per1">
                                                                <label class="form-check-label" for="per1">
                                                                Exclusive
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="Fun" id="per2">
                                                                <label class="form-check-label" for="per2">
                                                                Fun
                                                                </label>
                                                            </div> 
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="High Quality" id="per3">
                                                                <label class="form-check-label" for="per3">
                                                                High Quality
                                                                </label>
                                                            </div> 
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="Controversial" id="per4">
                                                                    <label class="form-check-label" for="per4">
                                                                    Controversial
                                                                    </label>                                                                
                                                            </div> 
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="Innovative" id="per5">
                                                                    <label class="form-check-label" for="per5">
                                                                    Innovative
                                                                    </label>                                                                 
                                                            </div>         
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="Exclusive" id="per1">
                                                                <label class="form-check-label" for="per1">
                                                                Exclusive
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="Fun" id="per2">
                                                                <label class="form-check-label" for="per2">
                                                                Fun
                                                                </label>
                                                            </div> 
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="High Quality" id="per3">
                                                                <label class="form-check-label" for="per3">
                                                                High Quality
                                                                </label>
                                                            </div> 
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="Controversial" id="per4">
                                                                    <label class="form-check-label" for="per4">
                                                                    Controversial
                                                                    </label>                                                                
                                                            </div> 
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="Innovative" id="per5">
                                                                    <label class="form-check-label" for="per5">
                                                                    Innovative
                                                                    </label>                                                                 
                                                            </div>         
                                                        </div>
                                                    </div><!-- ./row --> 
                                                    <p class="small mb-1 mt-4">List 10 aspects of your business that you feel are important.</p>
                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis beatae quo minus totam ipsam nesciunt a officiis impedit, eveniet libero</p>
                                                    <p class="small mb-1">List out your top competitors here</p>
                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis beatae quo minus totam ipsam nesciunt a officiis impedit, eveniet libero</p>

                                                </div><!-- ./tab-pane -->
                                                <div class="tab-pane fade" id="list-three" role="tabpanel" aria-labelledby="list-three-list">
                                                    <h6 class="mb-3">Products / Services</h6>   
                                                    <p class="small mb-1">website where we can find all the information</p>
                                                    <p>Lorem ipsum dolor sit amet.</p>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <p class="small m-0">Products / Service List</p> 
                                                                <button class="btn-colors ml-2" data-toggle="modal" data-target="#modal-ps"><i class="fas fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="media my-2">
                                                                <img src="{{asset('images/dummy.png')}}" class="mr-3" alt="..." width="120px" />
                                                                    <div class="media-body">
                                                                        <p class="my-0">Product/Service.jpg</p>
                                                                        <p class="small">Category: Product </p>
                                                                    </div>                                                       
                                                            </div>
                                                        </div>    
                                                        <div class="col-6">
                                                            <div class="media  my-2">
                                                                <img src="{{asset('images/dummy.png')}}" class="mr-3" alt="..." width="120px" />
                                                                    <div class="media-body">
                                                                        <p class="my-0">Product/Service.jpg</p>
                                                                        <p class="small">Category: Product </p>
                                                                    </div>                                                       
                                                            </div>      
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="media  my-2">
                                                                <img src="{{asset('images/dummy.png')}}" class="mr-3" alt="..." width="120px" />
                                                                    <div class="media-body">
                                                                        <p class="my-0">Product/Service.jpg</p>
                                                                        <p class="small">Category: Product </p>
                                                                    </div>                                                       
                                                            </div>      
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="media  my-2">
                                                                <img src="{{asset('images/dummy.png')}}" class="mr-3" alt="..." width="120px" />
                                                                    <div class="media-body">
                                                                        <p class="my-0">Product/Service.jpg</p>
                                                                        <p class="small">Category: Product </p>
                                                                    </div>                                                       
                                                            </div>      
                                                        </div>
                                                        
                                                    </div><!-- ./row -->   

                                                    <p class="small mt-4">Do you have additional products/services that you weren't able to provide us details on?</p>                   
                                                    <div class="mb-5">
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="Innovative" id="ps1">
                                                                    <label class="form-check-label" for="ps1">
                                                                    Yes, please follow up with me on providing more details.
                                                                    </label>                                                                 
                                                            </div> 
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="Innovative" id="ps2">
                                                                    <label class="form-check-label" for="ps2">
                                                                    Nope, everything you need is either in the website link or already added here.
                                                                    </label>                                                                 
                                                            </div> 
                                                    </div>   


                                                </div><!-- ./tab-pane -->
                                                <div class="tab-pane fade" id="list-four" role="tabpanel" aria-labelledby="list-four-list">
                                                    <h6 class="mb-3">Short And Long Term Goals</h6>   
                                                    <p class="small mb-1">What Are Your Biggest Opportunities For Growth?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, sed.</p>
                                                    <p class="small mb-1">What Are Your Objectives/Goals For The Next Year?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, sed.</p>
                                                    <p class="small mb-1">What Are Your Biggest Challenges?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, sed.</p>

                                                    <p class="small mb-2">What Are Your Primary Looking To Achieve From Your Marketing?</p>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="" id="ltg1">
                                                                <label class="form-check-label" for="ltg1">
                                                                Increasing Engagements 
                                                                </label>                                                                 
                                                            </div>
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="" id="ltg2">
                                                                <label class="form-check-label" for="ltg2">
                                                                Sales Through An Online Chatbot
                                                                </label>                                                                 
                                                            </div>
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="" id="ltg3">
                                                                <label class="form-check-label" for="ltg3">
                                                                Traffi To A Physical Location
                                                                </label>                                                                 
                                                            </div>
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="" id="ltg4">
                                                                <label class="form-check-label" for="ltg4">
                                                                Live/Digital Tickets Sold
                                                                </label>                                                                 
                                                            </div>  
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="" id="ltg5">
                                                                <label class="form-check-label" for="ltg5">
                                                                Appoinyments Booked Online
                                                                </label>                                                                 
                                                            </div>
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="" id="ltg6">
                                                                <label class="form-check-label" for="ltg6">
                                                                Building Brand Awareness Online
                                                                </label>                                                                 
                                                            </div>            
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="" id="ltg7">
                                                                <label class="form-check-label" for="ltg7">
                                                                Sales On The Social Media Platform
                                                                </label>                                                                 
                                                            </div> 
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="" id="ltg8">
                                                                <label class="form-check-label" for="ltg8">
                                                                Targeted Traffic To Website/URL
                                                                </label>                                                                 
                                                            </div>
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="" id="ltg9">
                                                                <label class="form-check-label" for="ltg9">
                                                                Growing Social Platform Followers
                                                                </label>                                                                 
                                                            </div>
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="" id="ltg10">
                                                                <label class="form-check-label" for="ltg10">
                                                                Donations To A Cause
                                                                </label>                                                                 
                                                            </div>
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="" id="ltg11">
                                                                <label class="form-check-label" for="ltg11">
                                                                Targeted Traffic To A Pre-recorded Webinar
                                                                </label>                                                                 
                                                            </div>
                                                            <div class="form-check"> 
                                                                <input class="form-check-input" type="checkbox" value="" id="ltg12">
                                                                <label class="form-check-label" for="ltg12">
                                                                Something Else
                                                                </label>                                                                 
                                                            </div>
                                                        </div>
                                                    </div><!-- ./row -->    


                                                </div><!-- ./tab-pane -->
                                                <div class="tab-pane fade" id="list-five" role="tabpanel" aria-labelledby="list-five-list">
                                                    <h6 class="mb-3">Ideal Customers</h6>   
                                                    <p class="small mb-1">Geographically, Where Would You Like Us To Target?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, sed.</p>
                                                    <p class="small mb-1">What are thier challenges/barriers to buying into your offerings?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, sed.</p> 
                                                    <p class="small mb-1">Target Audience Number 1</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, sed.</p>

                                                    <p class="small mb-1">Which of the following best describes your ideal level of involvement in the content development experience: <span style="color:red;">*</span></p>

                                                    <div class="form-check"> 
                                                        <input class="form-check-input" type="checkbox" value="" id="IC1">
                                                        <label class="form-check-label" for="IC1">
                                                        I want to be heavily involved. I will be submitting ideas and I want the team to implement exactly as I send. ( We follow your directions exactly in the customized content forms)
                                                        </label>                                                                 
                                                    </div> 
                                                    <div class="form-check"> 
                                                        <input class="form-check-input" type="checkbox" value="" id="IC2">
                                                        <label class="form-check-label" for="IC2">
                                                        I want to be heavily involved. but as I begin to trust will be backing off so I have more time in other areas of my business. (We follow your directions exactly in the customized content forms
                                                        but in the time I will message you and allow you to choose and customize mu content without my feedback)
                                                        </label>                                                                 
                                                    </div> 
                                                    <div class="form-check"> 
                                                        <input class="form-check-input" type="checkbox" value="" id="IC3">
                                                        <label class="form-check-label" for="IC3">
                                                        I want to completely rely on the team to develop and implement the strategy and content. (We will chose the 60 graphics, customize them for your brand without taking up your time)
                                                        </label>                                                                 
                                                    </div>    

                                                </div><!-- ./tab-pane -->
                                            </div>
                                        </div>
                                    </div><!-- ./row -->
                                    
                                 
                                
                                </div>
                            </div> <!-- ./card -->
                        </div>


                    </div> <!-- ./row -->


                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- modal-ps-->
    <div class="modal fade" id="modal-ps" tabindex="-1" role="dialog" aria-labelledby="md-upload"
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

                    <p class="small mb-1">Tell us your product or service here.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p class="small  mb-1">Who do you specifically target for this product or service?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>


                    <p class="small  mb-1">Upload any images related or your product/service.</p>
                    <form action="/file-upload"
                        class="dropzone"
                        id="my-awesome-dropzone">
                    </form>

                    <p class="small mt-3  mb-1">List of benefits they recieve when using your solution.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                </div>
                
                <div class="modal-footer d-flex justify-content-start align-items-start">
                    <button class="btn btn-primary btn-lg" type="button">Submit</button>
                </div>
            </div>
        </div>
    </div> <!-- ./modal-ps-->


   

    @include('includes.scripts')

    @endsection