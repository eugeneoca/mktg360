@extends('layouts.dashboard')
@section('title', 'Messages')
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

                    <div class="col-12 col-md-12 col-sm-12 col-lg-7">
                        <h4>Messages</h4>
                        <div class="inner-menu shadow h-100">
                            <div id="exTab2" class="container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#1" data-toggle="tab" id="msg-tab1">All</a></li>
                                    <li><a href="#2" data-toggle="tab" id="msg-tab2">Starred</a></li>
                                    <li><a href="#3" data-toggle="tab" id="msg-tab3">Unread</a></li>
                                    <button class="btn btn-primary btn-block" type="button" id="btn-new-msg">New
                                        Message</button>
                                </ul>
                                <div class="tab-content ">
                                    <div class="tab-pane active" id="1">

                                        <a href=" {{ url('/messages/all-messages') }}" id="msg-thread">
                                            <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px"
                                                height="40px" alt="..."></img>

                                            <div class="pl-3">
                                                <div class="d-flex">
                                                    <h6>Letticia Patterson</h6>
                                                    <div class="ml-3 row msg-btn">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-trash"></i>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium
                                                    vitae eligendi tempora libero eaque facere!</p>
                                            </div>
                                        </a>

                                        <a href=" {{ url('/messages/all-messages') }}" id="msg-thread">
                                            <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px"
                                                height="40px" alt="..."></img>

                                            <div class="pl-3">
                                                <div class="d-flex">
                                                    <h6>Letticia Patterson</h6>
                                                    <div class="ml-3 row msg-btn">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-trash"></i>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium
                                                    vitae eligendi tempora libero eaque facere!</p>
                                            </div>
                                        </a>

                                        <a href=" {{ url('/messages/all-messages') }}" id="msg-thread">
                                            <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px"
                                                height="40px" alt="..."></img>

                                            <div class="pl-3">
                                                <div class="d-flex">
                                                    <h6>Letticia Patterson</h6>
                                                    <div class="ml-3 row msg-btn">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-trash"></i>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium
                                                    vitae eligendi tempora libero eaque facere!</p>
                                            </div>
                                        </a>

                                    </div>

                                    <div class="tab-pane" id="2">
                                        <h3>Test</h3>

                                        <div class="tab-pane" id="3">
                                            <h3>Test</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-sm-12 col-lg-5">
                        <!-- Chat -->
                        <div class="card shadow mb-0" id="chat-box">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3">
                                <h6 class="m-0">Letticia Patterson</h6>
                            </div>
                            <div class="chat-right flex-grow-1 d-flex flex-column">
                                <div class="d-flex flex-column mt-auto">
                                    <div class="m-3">
                                        <div class="text-right">
                                            <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="16px"alt="...">
                                            <span class="chat-name mx-2">You<span>
                                            <span class="small text-muted">11:00pm</span>
                                            <p class="bg-primary p-3 rounded text-white">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Ratione
                                                quod ipsum ipsam dolores quo ut sint quaerat molestiae
                                                architecto
                                                repellat odit, dolor suscipit alias voluptas placeat at odio,
                                                amet esse
                                                adipisci libero dolorum ullam consequuntur? Voluptas quasi quas
                                                rem sed?.
                                            </p>                                                    
                                        </div>
                                        <div class="m-1">
                                            <div class="text-left">
                                                <img class="rounded-circle"
                                                    src="{{asset('images/admin.png')}}" width="16px"
                                                    alt="...">
                                                <span class="mx-2 chat-name">Letticia Patterson<span>
                                                <span class="small text-muted">11:00pm</span>
                                                <p class="p-2 rounded border">Lorem ipsum dolor sit
                                                    amet consectetur.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-left d-flex align-items-center">
                                            <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="16px"                                        alt="...">
                                            <span class="chat-name mx-2">Letticia Patterson<span>
                                            <span class="small text-muted fst-italic">Typing a message...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="m-3 status">                                
                                <form>
                                    <textarea class="form-control rounded-0" placeholder="Type a message..."
                                        style="height: 100px"></textarea>
                                </form>
                            </div>

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