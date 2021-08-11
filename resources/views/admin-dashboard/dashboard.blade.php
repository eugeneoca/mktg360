@extends('layouts.dashboard')
@section('title', 'Admin Dashboard')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin-dashboard.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper">

            <!-- Main Content -->
            <div id="content ">

                  @include('includes.top-bar')  

                <!-- Begin Page Content -->
                <div class="container-fluid content-full-height">

                    <!-- Content Row -->
                    <div class="row">

                        
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