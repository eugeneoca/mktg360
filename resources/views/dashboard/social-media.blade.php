@extends('layouts.dashboard')
@section('title', 'Social Media Marketing')
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
                        <div class="col-12 col-md-12 col-sm-12 col-lg-3">
                            <div class="inner-menu shadow h-100">
                                <a href="#" class="active">
                                    <i class="far fa-lightbulb"></i>
                                    <div class="">
                                        <h6>Campaign Ideas</h6>
                                        <p>Lorem ipsum dolor</p>
                                    </div>
                                </a> 
                                <a href="#">
                                    <i class="fas fa-user-friends"></i>
                                    <div class="">
                                        <h6>Target Audience</h6>
                                        <p>Lorem ipsum dolor</p>
                                    </div>
                                </a>  
                                <a href="#">
                                    <i class="far fa-thumbs-up"></i>
                                    <div>
                                        <h6>Social Content</h6>
                                        <p>Lorem ipsum dolor</p>
                                    </div>
                                </a> 
                                <a href="#">
                                    <i class="far fa-newspaper"></i>
                                    <div>
                                        <h6>Curated Articles</h6>
                                        <p>Lorem ipsum dolor</p>
                                    </div>
                                </a> 
                                <a href="#">
                                    <i class="far fa-folder"></i>
                                    <div>
                                        <h6>Marketing Documents</h6>
                                        <p>Lorem ipsum dolor</p>
                                    </div>
                                </a> 
                                <a href="#">
                                    <i class="far fa-address-card"></i>
                                    <div>
                                        <h6>Marketing Profile</h6>
                                        <p>Lorem ipsum dolor</p>
                                    </div>
                                </a> 
                            </div>
                        </div>


                        <div class="col-12 col-md-12 col-sm-12 col-lg-9">
                            <div class="card shadow mb-4 h-100">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex justify-content-between align-items-center ">
                                    <h6 class="m-0">Campaign Ideas</h6>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-campaign">New Campaign</button>                                       
                                </div>
                                <!-- Card Body -->
                                <div class="card-body p-0" >
                                    <div class="table-header d-flex justify-content-between align-items-center p-3">
                                        <div class="">
                                             <span> Your Campaign Ideas  <span>     
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown">
                                                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Category: <span>All</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Facebook</a>
                                                    <a class="dropdown-item" href="#">Instagram</a>
                                                    <a class="dropdown-item" href="#">Linkedin</a>
                                                    <a class="dropdown-item" href="#">Twitter</a>
                                                    <a class="dropdown-item" href="#">Pinterest</a>
                                                    <a class="dropdown-item" href="#">Google Business</a>
                                                </div>
                                            </div> <!-- ./dropdown -->
                                            <div class="dropdown">
                                                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   Filter: <span>All</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Pending</a>
                                                    <a class="dropdown-item" href="#">Approved</a>
                                                    <a class="dropdown-item" href="#">Sent</a>
                                                </div>
                                            </div> <!-- ./dropdown -->
                                        </div>
                                    </div>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th scope="col">Status</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Created by</th>
                                            <th scope="col">Date Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="status badge-primary">Sent</span></td>
                                                <td>
                                                    <strong>Sample Campaign Idea 1 <strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>@May 14, 2021</td>
                                            </tr>
                                            <tr>
                                                <td><span class="status badge-warning">Need Approval</span></td>
                                                <td>
                                                    <strong>Sample Campaign Idea 1 <strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>@May 14, 2021</td>
                                            </tr>
                                            <tr>
                                                <td><span class="status badge-success">Approved</span></td>
                                                <td>
                                                    <strong>Sample Campaign Idea 1 <strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>@May 14, 2021</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>

                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th scope="col" colspan="4" class="no-border">Your Drafts</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="status badge-muted">draft</span></td>
                                                <td>
                                                    <strong>Sample Campaign Idea 1 <strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>@May 14, 2021</td>
                                            </tr>
                                                                                      
                                        </tbody>
                                    </table>


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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>




    <!-- modal-campaign-->
    <div class="modal fade" id="modal-campaign" tabindex="-1" role="dialog" aria-labelledby="md-ticket"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="md-ticket">New Campaign Idea</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                    <form>
                        <label class="small">Tell us your idea for the next campaign or promotion!</label>
                        <textarea class="txtarea" placeholder="Type here..." ></textarea>                                               
                        
                        <label class="small">Tell us your idea for the next campaign or promotion!</label>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Increase Brand Awareness" id="campaign1">
                                <label class="form-check-label" for="campaign1">
                                Increase Brand Awareness
                                </label>
                            </div> 
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Increase Engagement" id="campaign2">
                                <label class="form-check-label" for="campaign2">
                                Increase Engagement
                                </label>
                            </div> 
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Sales on Social Media Store" id="campaign3">
                                <label class="form-check-label" for="campaign3">
                                Sales on Social Media Store
                                </label>
                            </div> 
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Sales through Chatbot" id="campaign4">
                                <label class="form-check-label" for="campaign4">
                                Sales through Chatbot
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Increase Traffic to Website" id="campaign5">
                                <label class="form-check-label" for="campaign5">
                                Increase Traffic to Website
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Increase Traffic to a Physical Location" id="campaign6">
                                <label class="form-check-label" for="campaign6">
                                Increase Traffic to a Physical Location
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Building up a Facebook Group" id="campaign7">
                                <label class="form-check-label" for="campaign7">
                                Building up a Facebook Group
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Increasing Social Media Followers" id="campaign8">
                                <label class="form-check-label" for="campaign8">
                                Increasing Social Media Followers
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Increase Traffic to a Webinar" id="campaign9">
                                <label class="form-check-label" for="campaign9">
                                Increase Traffic to a Webinar
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Sell Event Tickets" id="campaign10">
                                <label class="form-check-label" for="campaign10">
                                Sell Event Tickets
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Increase Donations to a Cause" id="campaign11">
                                <label class="form-check-label" for="campaign11">
                                Increase Donations to a Cause
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Appointments Booked Online" id="campaign12">
                                <label class="form-check-label" for="campaign12">
                                Appointments Booked Online
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Appointments Booked Online" id="campaign13">
                                <label class="form-check-label" for="campaign13">
                                Something Else
                                </label>
                            </div>
                        </div> <!-- ./checkbox -->

                        <label class="small">Choose your platform</label>

                        <div class="my-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="platform1" value="Facebook">
                                <label class="form-check-label" for="platform1">Facebook</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="platform2" value="Instagram">
                                <label class="form-check-label" for="platform2">Instagram</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="platform3" value="Linkedin">
                                <label class="form-check-label" for="platform3">Linkedin</label>
                            </div>
                        </div>
                        <div class="my-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="platform4" value="Twitter">
                                <label class="form-check-label" for="platform4">Twitter</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="platform5" value="Pinterest">
                                <label class="form-check-label" for="platform5">Pinterest</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="platform6" value="Google Business">
                                <label class="form-check-label" for="platform6">Google Business</label>
                            </div>
                        </div>

                        <label class="small">Can you tell us more about the cause and where you want the donation sent to?</label>
                        <textarea class="txtarea" placeholder="Type here..." ></textarea>  

                        <label class="small">Who is the ideal customer for this promotion?</label>
                        <textarea class="txtarea" placeholder="Type here..." ></textarea> 

                        <label class="small">Who is the secondary ideal customer for this position? You can be much more brood here :)</label>
                        <textarea class="txtarea" placeholder="Type here..." ></textarea> 

                        <label class="small">What specific results are you looking for from this promotion/campaign?</label>
                        <textarea class="txtarea" placeholder="Type here..." ></textarea> 

                        <label class="small">Is there an additional marketing budget for Ads/Boosts to help you reach your specific result goal?</label>
                        <textarea class="txtarea" placeholder="Type here..." ></textarea> 

                        <label class="small">Is there anything else you want our team to know about this promotion/campaign?</label>
                        <textarea class="txtarea" placeholder="Type here..." ></textarea> 

                     </form>
                </div>
                <div class="modal-footer d-flex justify-content-start align-items-start">
                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                    <button class="btn btn-secondary btn-lg" type="button">Save as Draft</button>
                </div>
            </div>
        </div>
    </div> <!-- ./modal-campaign-->

   

    @endsection