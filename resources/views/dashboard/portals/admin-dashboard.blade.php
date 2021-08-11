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
                <div class="container-fluid content-full-height d-flex">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- choices -->
                        <div class="dashboard--clients-card col-sm-12 col-lg-12 col-xl-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 col-12 d-flex">
                                    <h6 class="m-0 col-4">Clients</h6>
                                    <p class="dashboard--registration-count col-4">0 registrations in this month</p>
                                    <p class="dashboard--view-all col-4">View All</p>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="dashboard--inner-card col-3">
                                            
                                            <i class="fas fa-user-friends dashboard--client-icon"></i><br>
                                                <h5 class="dashboard--innercard-num">128</h5>
                                                <span class="dashboard--innercard-text">Active Clients</span>
                                            
                                        </div>
                                        <div class="dashboard--inner-card col-3">
                                        
                                        <i class="fas fa-clipboard-check dashboard--client-icon"></i> <br>
                                                <h5 class="dashboard--innercard-num">32</h5>
                                                <span class="dashboard--innercard-text">For Approval</span>
                                            
                                        </div>
                                        <div class="dashboard--inner-card col-3">
                                            
                                            <i class="fas fa-user-edit dashboard--client-icon"></i><br>
                                                <h5 class="dashboard--innercard-num">4</h5>
                                                <span class="dashboard--innercard-text">In Archive</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard--clientstaff-card col-sm-12 col-lg-12 col-xl-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 col-12 d-flex">
                                    <h6 class="m-0 col-4">Client  Staff</h6>
                                    <p class="dashboard--registration-count col-4">0 registrations in this month</p>  
                                    <p class="dashboard--view-all col-4">View All</p>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="dashboard--inner-card col-3">
                                            
                                            <i class="fas fa-user-friends dashboard--client-icon"></i><br>
                                                <h5 class="dashboard--innercard-num">128</h5>
                                                <span class="dashboard--innercard-text">Active Clients</span>
                                            
                                        </div>
                                        <div class="dashboard--inner-card col-3">
                                        
                                        <i class="fas fa-clipboard-check dashboard--client-icon"></i> <br>
                                                <h5 class="dashboard--innercard-num">32</h5>
                                                <span class="dashboard--innercard-text">For Approval</span>
                                            </a>
                                        </div>
                                        <div class="dashboard--inner-card col-3">
                                            
                                            <i class="fas fa-user-edit dashboard--client-icon"></i><br>
                                                <h5 class="dashboard--innercard-num">4</h5>
                                                <span class="dashboard--innercard-text">In Archive</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard--managers-card col-sm-12 col-lg-12 col-xl-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 col-12 d-flex">
                                    <h6 class="m-0 col-6">Managers (3)</h6>
                                    <p class="dashboard--view-all col-6">View All</p>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body p-0">
                                    <div class="row text-center">
                                        <div class="dashboard--manager-card col-3">
                                            <a href="#" data-toggle="modal" data-target="#modal-feedback">
                                            <img class="rounded-circle mb-2" src="{{asset('images/admin.png')}}" width="100px" height="100px" alt="..."></img><br>
                                                <h6>Brittany</h6>
                                                <span>rohringresults@gmail.com</span>
                                            </a>
                                        </div>
                                        <div class="dashboard--manager-card col-3">
                                        <a href="#" data-toggle="modal" data-target="#modal-ticket">
                                        <img class="rounded-circle mb-2" src="{{asset('images/admin.png')}}" width="100px" height="100px" alt="..."></img><br>
                                                <h6>Brittany</h6>
                                                <span>rohringresults@gmail.com</span>
                                            </a>
                                        </div>
                                        <div class="dashboard--manager-card col-3">
                                            <a href="#" data-toggle="modal" data-target="#modal-upload">
                                            <img class="rounded-circle mb-2" src="{{asset('images/admin.png')}}" width="100px" height="100px" alt="..."></img><br>
                                                <h6>Brittany</h6>
                                                <span>rohringresults@gmail.com</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Chat -->
                        <div class="dashboard--message-card col-sm-12 col-lg-5 col-xl-5">
                            <div class="card shadow mb-0">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0">New Private Messages (14)</h6>                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body p-0">
                                    <div class="d-flex h-100">
                                        <div class="chat-right flex-grow-1 d-flex flex-column">
                                            <div class="m-3">
                                                <div class="text-left mb-1">                                                  
                                                <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="16px" alt="...">
                                                <span class="mx-2 chat-name">Letticia Patterson<span>
                                                <span class="small text-muted">11:20pm</span>
                                                </div> 
                                                <p class="dashboard--message-msg rounded border">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                                    Animi ea eligendi impedit, quisquam reiciendis iure ex quam sed tempore autem neque 
                                                    odio perferendis deserunt veritatis voluptatum quos eius voluptate ipsam. Inventore, 
                                                    incidunt! Cupiditate, eveniet veritatis.<br>
                                                    <br>
                                                    Mark as read | Read & Reply
                                                </p>                  
                                            </div> 
                                            <div class="m-3">
                                                <div class="text-left mb-1">                                                  
                                                <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="16px" alt="...">
                                                <span class="mx-2 chat-name">Garry Smith<span>
                                                <span class="small text-muted">11:20pm</span>
                                                </div> 
                                                <p class="dashboard--message-msg rounded border">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                                    Ducimus atque necessitatibus facilis dolore velit sunt deleniti vel omnis aspernatur 
                                                    obcaecati! Tempora, harum minima. Magni, incidunt..<br>
                                                </p>                  
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-0 mt-3">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 col-12 d-flex">
                                    <h6 class="m-0 col-6">Recent Uploaded Files</h6>    
                                    <p class="dashboard--view-all col-6">View All</p>                               
                                </div>
                                <!-- Card Body -->
                                <div class="card-body p-0">
                                    <div class="d-flex h-100">
                                        <div class="chat-right flex-grow-1 d-flex flex-column">
                                            <div class="m-3">
                                                <div class="text-left mb-1">                                                  
                                                <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="16px" alt="...">
                                                <span class="mx-2 chat-name">Letticia Patterson<span>
                                                <span class="small text-muted">11:20pm</span>
                                                </div> 
                                                <div class="dashboard--recentfile-container col-12 rounded border">
                                                    <ul class="dashboard--recentfile-card d-flex mb-0 pl-0">
                                                        <p class="dashboard--recentfile-document col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--doc-icon"></i>document.pdf</p>
                                                        <p class="dashboard--recentfile-document col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--doc-icon"></i>document.pdf</p>
                                                        <p class="dashboard--recentfile-document col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--doc-icon"></i>document.pdf</p>
                                                    </ul>
                                                    <ul class="dashboard--recentfile-card d-flex mb-0 pl-0">
                                                        <p class="dashboard--recentfile-image col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--img-icon"></i>image.jpg</p>
                                                        <p class="dashboard--recentfile-image col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--img-icon"></i>image.jpg</p>
                                                        <p class="dashboard--recentfile-image col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--img-icon"></i>image.jpg</p>
                                                    </ul>
                                                    <ul class="dashboard--recentfile-card d-flex mb-0 pl-0">
                                                        <p class="dashboard--recentfile-image col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--img-icon"></i>image.jpg</p>
                                                        <p class="dashboard--recentfile-image col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--img-icon"></i>image.jpg</p>
                                                        <p class="dashboard--recentfile-image col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--img-icon"></i>image.jpg</p>
                                                    </ul>
                                                </div>                  
                                            </div> 
                                            <div class="m-3">
                                                <div class="text-left mb-1">                                                  
                                                <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="16px" alt="...">
                                                <span class="mx-2 chat-name">Letticia Patterson<span>
                                                <span class="small text-muted">11:20pm</span>
                                                </div> 
                                                <div class="dashboard--recentfile-container col-12 rounded border">
                                                    <ul class="dashboard--recentfile-card d-flex mb-0 pl-0">
                                                        <p class="dashboard--recentfile-document col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--doc-icon"></i>document.pdf</p>
                                                        <p class="dashboard--recentfile-document col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--doc-icon"></i>document.pdf</p>
                                                        <p class="dashboard--recentfile-document col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--doc-icon"></i>document.pdf</p>
                                                    </ul>
                                                    <ul class="dashboard--recentfile-card d-flex mb-0 pl-0">
                                                        <p class="dashboard--recentfile-image col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--img-icon"></i>image.jpg</p>
                                                        <p class="dashboard--recentfile-image col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--img-icon"></i>image.jpg</p>
                                                        <p class="dashboard--recentfile-image col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--doc-icon"></i>image.jpg</p>
                                                    </ul>
                                                    <ul class="dashboard--recentfile-card d-flex mb-0 pl-0">
                                                        <p class="dashboard--recentfile-image col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--img-icon"></i>image.jpg</p>
                                                        <p class="dashboard--recentfile-image col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--img-icon"></i>image.jpg</p>
                                                        <p class="dashboard--recentfile-image col-4"><i class="fas fa-file dashboard--icon mr-2" id="dashboard--img-icon"></i>image.jpg</p>
                                                    </ul>
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

@include('includes.scripts')

@endsection 