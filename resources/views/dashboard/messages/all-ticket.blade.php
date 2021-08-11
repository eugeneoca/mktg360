@extends('layouts.dashboard')
@section('title', 'Support Ticket')
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
                        <h4>Support Ticket</h4>
                            <div class="search">
                                <div class="form-group has-search">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>  
                        <div class="inner-menu shadow h-100">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#1" data-toggle="tab" id="ticket-tab1">All</a></li>
                                    <li><a href="#2" data-toggle="tab" id="ticket-tab2">Unread</a></li>
                                </ul>
                                <!-- Tab 1 -->
                                <div class="tab-content ">
                                    <div class="tab-pane active" id="1">
                                    <div class="ticket--accordion-wrapper">
                                            <div class="ticket--accordionItem close-content">
                                                <a class="ticket--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Letticia Patterson</h6>
                                                                <div class="ticket-number">
                                                                    - M3600001 | Genreal Question 
                                                                </div>
                                                            <div class="ml-3 row ticket-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="ticket-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure excepturi quisquam temporibus ab at, deserunt porro quis dignissimos omnis! Assumenda!
                                                            </p>
                                                            <p class="ticket-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-reply-ticket">Reply to Ticket</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="ticket--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                            <div class="ticket--accordionItem close-content">
                                                <a class="ticket--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Jane Doe</h6>
                                                                <div class="ticket-number">
                                                                    - M3600002 | Feature Request 
                                                                </div>
                                                            <div class="ml-3 row ticket-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="ticket-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure excepturi quisquam temporibus ab at, deserunt porro quis dignissimos omnis! Assumenda!
                                                            </p>
                                                            <p class="ticket-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-reply-ticket">Reply to Ticket</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="ticket--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                            <div class="ticket--accordionItem close-content">
                                                <a class="ticket--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Jane Doe</h6>
                                                                <div class="ticket-number">
                                                                    - M3600003 | <span class="ticket-number-alert">Bug Report</span> 
                                                                </div>
                                                            <div class="ml-3 row ticket-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="ticket-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure excepturi quisquam temporibus ab at, deserunt porro quis dignissimos omnis! Assumenda!
                                                            </p>
                                                            <p class="ticket-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-reply-ticket">Reply to Ticket</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="ticket--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                            <div class="ticket--accordionItem close-content">
                                                <a class="ticket--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Jane Doe</h6>
                                                                <div class="ticket-number">
                                                                    - M3600004 | My Account 
                                                                </div>
                                                            <div class="ml-3 row ticket-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="ticket-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure excepturi quisquam temporibus ab at, deserunt porro quis dignissimos omnis! Assumenda!
                                                            </p>
                                                            <p class="ticket-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-reply-ticket">Reply to Ticket</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="ticket--full-content">
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
                                    <!-- Tab 2 -->
                                    <div class="tab-pane" id="2">
                                        <div class="ticket--accordion-wrapper">
                                            <div class="ticket--accordionItem close-content">
                                                <a class="ticket--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Letticia Patterson</h6>
                                                                <div class="ticket-number">
                                                                    - M3600001 | Genreal Question 
                                                                </div>
                                                            <div class="ml-3 row ticket-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="ticket-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure excepturi quisquam temporibus ab at, deserunt porro quis dignissimos omnis! Assumenda!
                                                            </p>
                                                            <p class="ticket-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-reply-ticket">Reply to Ticket</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="ticket--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                            <div class="ticket--accordionItem close-content">
                                                <a class="ticket--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Jane Doe</h6>
                                                                <div class="ticket-number">
                                                                    - M3600002 | Feature Request 
                                                                </div>
                                                            <div class="ml-3 row ticket-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="ticket-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure excepturi quisquam temporibus ab at, deserunt porro quis dignissimos omnis! Assumenda!
                                                            </p>
                                                            <p class="ticket-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-reply-ticket">Reply to Ticket</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="ticket--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                            <div class="ticket--accordionItem close-content">
                                                <a class="ticket--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Jane Doe</h6>
                                                                <div class="ticket-number">
                                                                    - M3600003 | <span class="ticket-number-alert">Bug Report</span> 
                                                                </div>
                                                            <div class="ml-3 row ticket-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="ticket-prev col-10 pl-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, unde neque alias commodi quasi corporis. Delectus cumque eius pariatur quis ullam molestiae vero nihil dolorum?
                                                            </p>
                                                            <p class="ticket-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-reply-ticket">Reply to Ticket</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="ticket--full-content">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                        Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                        natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                        hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                        cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                        repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>
                                                    </div>
                                            </div>
                                            <div class="ticket--accordionItem close-content">
                                                <a class="ticket--thread">
                                                    <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px" height="40px" alt="..."></img>
                                                    <div class="pl-3 col-11 align-items=center">
                                                        <div class="d-flex">
                                                            <h6>Jane Doe</h6>
                                                                <div class="ticket-number">
                                                                    - M3600004 | My Account 
                                                                </div>
                                                            <div class="ml-3 row ticket-btn">
                                                                <i class="fas fa-trash"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="ticket-prev col-10 pl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fuga 
                                                                animi iusto placeat unde aliquid ex laboriosam, praesentium voluptate quidem commodi repudiandae, 
                                                                ducimus et. 
                                                            </p>
                                                            <p class="ticket-details">
                                                                Today | 11:20pm
                                                            </p>
                                                            <button class="btn btn-primary btn-block" type="button" id="btn-reply-ticket">Reply to Ticket</button>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="container--full-content">
                                                    <div class="ticket--full-content">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dignissimos molestiae recusandae. 
                                                            Expedita pariatur odit consequatur sunt consequuntur, tempora vel voluptatem doloremque, nisi qui 
                                                            natus corporis possimus repellendus ea voluptatibus officia. Amet consequuntur minima totam?</p>
                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                            hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                            cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                            repellat assumenda! Libero beatae expedita fugit ad nam magnam.</p>                                                            
                                                    </div>
                                                    <div class="ticket--response d-flex">
                                                        <p class="ticket--response-detail col-2 pl-0">
                                                            Today | 11:20 PM 
                                                        </p>
                                                        <p class="ticket--response-content col-10 pl-0">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita modi distinctio, enim sunt voluptatem 
                                                            hic, impedit veritatis suscipit praesentium beatae, unde quia alias magni laborum fugit? Iure, ab, sint 
                                                            cupiditate fugit possimus enim magni doloremque tempora minus veritatis quaerat repellendus dolor, 
                                                            repellat assumenda! Libero beatae expedita fugit ad nam magnam. 
                                                        </p>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div> 
                                    </div>
                                                                              
                                    </div>
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
                <!-- Modal -->
                <div id="ticket--reply-modal" class="modal">
                    <div class="ticket--modal-content">
                        <div class="ticket--modal-header">
                            <span class="close">&times;</span>
                            <h4>Reply to Letticia</h4>
                        </div>
                            <div class="ticket--modal-body">
                                <div class="ticket--container">
                                    <form>
                                        <label class="checkbox-inline">
                                        <input type="checkbox" value="" class="ticket--checkbox">Send via Email</label>
                                        <label class="checkbox-inline">
                                        <input type="checkbox" value="">Send via Messages</label><br>
                                            <textarea class="form-control rounded-0" placeholder="Message..." style="height: 100px"></textarea>
                                    </form>
                                </div>
                                <p>Add Attachment</p>
                            </div>
                            <div class="ticket--modal-footer">
                                    <input class="ticket--attachment rounded-0" type="text" placeholder="Drag & Drop" style="height: 100px" ondrop="drop(event)" ondragover="allowDrop(event)"></input>
                                    <button class="btn btn-primary btn-block" type="button" id="ticket--send-reply">Send Reply</button>
                            </div>
                    </div>
                </div> 
            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Tab Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Accordion Script -->
    <script>
    var accItem = document.getElementsByClassName('ticket--accordionItem');
    var accHD = document.getElementsByClassName('ticket--thread');
    for (i = 0; i < accHD.length; i++) {
        accHD[i].addEventListener('click', toggleItem, false);
    }
    function toggleItem() {
        var itemClass = this.parentNode.className;
        for (i = 0; i < accItem.length; i++) {
            accItem[i].className = 'ticket--accordionItem close-content';
        }
        if (itemClass == 'ticket--accordionItem close-content') {
            this.parentNode.className = 'ticket--accordionItem open';
        }
    }
    // Modal Script
    var modal = document.getElementById("ticket--reply-modal");
    var btn = document.getElementById("btn-reply-ticket");
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
    // Drag Script
    function allowDrop(ev) {
    ev.preventDefault();
    }
    function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
    }
    function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    }   
    </script>

    @endsection