@extends('layouts.dashboard')
@section('title', 'Social Content')
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
                            @include('dashboard.social-media-marketing.smm-menu')                             
                        </div>


                        <div class="col-12 col-md-12 col-sm-12 col-lg-9">
                            <div class="card shadow mb-4 h-100">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex justify-content-between align-items-center ">
                                    <h6 class="m-0">Social Content</h6>
                                    <div class="">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-social-content-view">View New Content</button> 
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-social-content">Upload New Photos</button> 
                                    </div>                                     
                                </div>
                                <!-- Card Body -->
                                <div class="card-body p-0" >
                                    <div class="table-header d-flex justify-content-between align-items-center p-3">
                                        <div class="">
                                             <span> Your Social Contents  <span>     
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
                                                    <strong>Social Content 1 <strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>@May 14, 2021</td>
                                            </tr>
                                            <tr>
                                                <td><span class="status badge-warning">Need Approval</span></td>
                                                <td>
                                                    <strong>Social Content 2 <strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>@May 14, 2021</td>
                                            </tr>
                                            <tr>
                                                <td><span class="status badge-success">Approved</span></td>
                                                <td>
                                                    <strong>Social Content 3 <strong>
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
                                                    <strong>Social Content 4 <strong>
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

    <!-- modal-social-content-->
    <div class="modal fade" id="modal-social-content" tabindex="-1" role="dialog" aria-labelledby="md-social-content" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="md-social-content">Upload Social Graphics</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form action="/api/uploads" class="dropzone" id="my-awesome-dropzone">
                        <div class="form-container">
                        </div>
                        <input type="hidden" name="status_id" id="status-container" value="1"/>
                    </form>
                    <textarea class="txtarea" placeholder="Comment here..." id="comment"></textarea>
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block" type="button" id="btn-social-content">Upload Files</button>
                </div>
            </div>
        </div>
    </div> <!-- ./modal-social-content-->

    @include('includes.scripts')

    <script>
        Dropzone.autoDiscover =false;
        let dz = new Dropzone('.dropzone',{
            autoProcessQueue : false,
            parallelUploads : 10,
            url: APP_URL+'api/social-contents?token='+Cookies.get('MKTG360_SESSION')
        });

        $('#btn-social-content').click(function(){
            let comment = $('#comment').val();
            $('.form-container').html('');
            if(comment.length>0){
                $('.form-container').append('<input type="hidden" name="comment" value="'+comment+'"/>');
            }
            dz.processQueue();
        });
    </script>

    @endsection