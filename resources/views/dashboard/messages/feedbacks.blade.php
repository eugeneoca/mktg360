@extends('layouts.dashboard')
@section('title', 'Platform Feedbacks')
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
                        <h4>Platform Feedback</h4>
                        <div class="inner-menu shadow h-100">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#1" data-toggle="tab" id="feedback-tab1">All</a></li>
                                    <li><a href="#2" data-toggle="tab" id="feedback-tab2">Unread</a></li>
                                </ul>
            <!-- Tab  -->
                                <div class="tab-content ">
                                    <div class="tab-pane active" id="1">
                                    <div class="feedback--accordion-wrapper">
                                            <div class="feedback--accordionItem close-content">
                                                <a class="feedback--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Letticia Patterson</h6>
                                                            <div class="ml-3 row feedback-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="feedback-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure excepturi quisquam temporibus ab at, deserunt porro quis dignissimos omnis! Assumenda!
                                                            </p>
                                                            <p class="feedback-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-send-message">Send a Message</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="feedback--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                            <div class="feedback--accordionItem close-content">
                                                <a class="feedback--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Jane Doe</h6>
                                                            <div class="ml-3 row feedback-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="feedback-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure excepturi quisquam temporibus ab at, deserunt porro quis dignissimos omnis! Assumenda!
                                                            </p>
                                                            <p class="feedback-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-send-message">Send a Message</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="feedback--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                            <div class="feedback--accordionItem close-content">
                                                <a class="feedback--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Jane Doe</h6>
                                                            <div class="ml-3 row feedback-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="feedback-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure excepturi quisquam temporibus ab at, deserunt porro quis dignissimos omnis! Assumenda!
                                                            </p>
                                                            <p class="feedback-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-send-message">Send a Message</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="feedback--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                            <div class="feedback--accordionItem close-content">
                                                <a class="feedback--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Jane Doe</h6>
                                                            <div class="ml-3 row feedback-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="feedback-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt 
                                                                unde excepturi, autem, enim dicta veritatis mollitia ea officia possimus quidem optio inventore 
                                                                velit debitis animi temporibus eos consequuntur odio harum.
                                                            </p>
                                                            <p class="feedback-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-send-message">Send a Message</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="feedback--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="2">
                                        
            <!-- Accordion -->
                                        <div class="feedback--accordion-wrapper">
                                            <div class="feedback--accordionItem close-content">
                                                <a class="feedback--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Letticia Patterson</h6>
                                                            <div class="ml-3 row feedback-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="feedback-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure excepturi quisquam temporibus ab at, deserunt porro quis dignissimos omnis! Assumenda!
                                                            </p>
                                                            <p class="feedback-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-send-message">Send a Message</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="feedback--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                            <div class="feedback--accordionItem close-content">
                                                <a class="feedback--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Jane Doe</h6>
                                                            <div class="ml-3 row feedback-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="feedback-prev col-10 pl-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima 
                                                                aspernatur consequuntur, veniam dolorem saepe ut libero earum sit voluptates. 
                                                            </p>
                                                            <p class="feedback-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-send-message">Send a Message</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="feedback--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                            <div class="feedback--accordionItem close-content">
                                                <a class="feedback--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Jane Doe</h6>
                                                            <div class="ml-3 row feedback-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="feedback-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                                                Delectus eveniet voluptatum quas tempore maxime fugiat.
                                                            </p>
                                                            <p class="feedback-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-send-message">Send a Message</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="feedback--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                            <div class="feedback--accordionItem close-content">
                                                <a class="feedback--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Jane Doe</h6>
                                                            <div class="ml-3 row feedback-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="feedback-prev col-10 pl-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum 
                                                                totam ab quod quisquam distinctio, aperiam repudiandae facere! Atque, maiores fugiat. Dolorem 
                                                                consequuntur qui officiis excepturi voluptates, accusantium ea nulla provident.
                                                            </p>
                                                            <p class="feedback-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-send-message">Send a Message</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="feedback--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>
    var accItem = document.getElementsByClassName('feedback--accordionItem');
    var accHD = document.getElementsByClassName('feedback--thread');
    for (i = 0; i < accHD.length; i++) {
        accHD[i].addEventListener('click', toggleItem, false);
    }
    function toggleItem() {
        var itemClass = this.parentNode.className;
        for (i = 0; i < accItem.length; i++) {
            accItem[i].className = 'feedback--accordionItem close-content';
        }
        if (itemClass == 'feedback--accordionItem close-content') {
            this.parentNode.className = 'feedback--accordionItem open';
        }
    }
</script>

                            <!-- content> -->

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

    @endsection