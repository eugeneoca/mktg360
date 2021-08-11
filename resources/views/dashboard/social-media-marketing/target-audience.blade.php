@extends('layouts.dashboard')
@section('title', 'Target Audience')
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
                                    <h6 class="m-0">Campaign Ideas</h6>
                                    <button class="btn btn-primary" data-toggle="modal" id="btn-new-audience" data-target="#modal-audience">New Audience</button>                                       
                                </div>
                                <!-- Card Body -->
                                <div class="card-body p-0" >
                                    <div class="table-header d-flex justify-content-between align-items-center p-3">
                                        <div class="">
                                             <span> Your Target Audiences  <span>     
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
                                            <th scope="col">Description</th>
                                            <th scope="col">Created by</th>
                                            <th scope="col">Date Created</th>
                                            </tr>
                                        </thead>
                                        <tbody id="live-audiences-container">
                                           <!-- <tr>
                                                <td><span class="status badge-primary">Sent</span></td>
                                                <td>
                                                    <strong>Target Audience 1<strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>@May 14, 2021</td>
                                            </tr>
                                            <tr>
                                                <td><span class="status badge-warning">Need Approval</span></td>
                                                <td>
                                                    <strong>Target Audience 2<strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>@May 14, 2021</td>
                                            </tr>
                                            <tr>
                                                <td><span class="status badge-success">Approved</span></td>
                                                <td>
                                                    <strong>Target Audience 3<strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>@May 14, 2021</td>
                                            </tr>-->
                                            
                                        </tbody>
                                    </table>

                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th scope="col" colspan="4" class="no-border">Your Drafts</th>
                                            </tr>
                                        </thead>
                                        <tbody id="draft-audiences-container">
                                            <!--<tr>
                                                <td><span class="status badge-muted">draft</span></td>
                                                <td>
                                                    <strong>Target Audience 5 <strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>@May 14, 2021</td>
                                            </tr>-->
                                                                                      
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

    




    <!-- modal-audience-->
    <div class="modal fade" id="modal-audience" tabindex="-1" role="dialog" aria-labelledby="md-ticket"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="md-ticket">Target Audience</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                   
                    <form>
                        <label class="small">Describe your Target Audience</label>
                        <textarea class="txtarea" placeholder="Type here..." name="description"></textarea>   
                        
                        <label class="small">What are thier challenges/barriers to buying into your offerings?</label>
                        <textarea class="txtarea" placeholder="Type here..." name="challenges"></textarea>   
                        
                        <label class="small">Which of the following best describes your ideal level of involvement in the content developement experience:</label>
                        <div class="mb-3" id="levels-container">
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <!--<div class="form-check">
                                <input class="form-check-input" type="checkbox" value="I want to be heavily involve. I will be submitting ideas and i want the team to implement exactly as i send" id="audience1">
                                <label class="form-check-label" for="audience1">
                                I want to be heavily involve. I will be submitting ideas and i want the team to implement exactly as i send
                                </label>
                            </div> 
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="I want to be heavily involved, but as i begin to trust will be backing off so i have more time in other areas of my business." id="audience2">
                                <label class="form-check-label" for="audience2">
                                I want to be heavily involved, but as i begin to trust will be backing off so i have more time in other areas of my business.
                                </label>
                            </div> 
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="I want to be involve and will be looking to the team for thier experience to guide the marketing strategies and content development." id="audience3">
                                <label class="form-check-label" for="audience3">
                                I want to be involve and will be looking to the team for thier experience to guide the marketing strategies and content development.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="I want to completely rely on the team to develop and implement the strategy and content." id="audience4">
                                <label class="form-check-label" for="audience4">
                                I want to completely rely on the team to develop and implement the strategy and content.
                                </label>
                            </div>-->
                            
                        </div> <!-- ./checkbox -->
                       
                     </form>
                </div>
                <div class="modal-footer d-flex justify-content-start align-items-start">
                    <button class="btn btn-primary btn-lg" type="submit" id="btn-send">Submit</button>
                    <button class="btn btn-secondary btn-lg" type="button" id="btn-draft">Save as Draft</button>
                </div>
            </div>
        </div>
    </div> <!-- ./modal-audience  -->

    @include('includes.scripts')
    <script>

        // Load Existing Campaign Ideas (user based)
        $(document).ready(function(){
            $.ajax({
                url: "/api/audiences?token="+Cookies.get('MKTG360_SESSION'),
                type:"GET",
                success:function(response){
                    if(response.length>0){
                        $('#draft-audiences-container').html('');
                        $('#live-audiences-container').html('');
                        $.each(response, function(key, value){
                            if(value.status_id==1){
                                // Draft
                                
                                $('#draft-audiences-container').append('\
                                    <tr>\
                                        <td style="width: 150px;"><span class="status badge-muted">Draft</span></td>\
                                        <td style="width: 500px;">\
                                            <strong>'+value.description.substr(0,30)+'...<strong>\
                                            <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>\
                                            <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>\
                                        </td>\
                                        <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> '+value.user.firstname+' '+ value.user.lastname+'</td>\
                                        <td style="width: 200px;">'+$.date(value.created_at)+'</td>\
                                    </tr>\
                                ');
                            }else{
                                // Not Draft
                                $('#live-audiences-container').append('\
                                    <tr>\
                                        <td style="width: 150px;"><span class="status '+(value.status.id==4 ? 'badge-primary': '')+(value.status.id==2 ? 'badge-warning': '')+(value.status.id==3 ? 'badge-success': '')+'">'+value.status.name+'</span></td>\
                                        <td style="width: 500px;">\
                                            <strong>'+value.description.substr(0,30)+'...<strong>\
                                            <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>\
                                            <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>\
                                        </td>\
                                        <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> '+value.user.firstname+' '+ value.user.lastname+'</td>\
                                        <td style="width: 200px;">'+$.date(value.created_at)+'</td>\
                                    </tr>\
                                ');
                            }
                        });
                    }
                },
                error:function(response){
                    console.log(response)
                }
            });
        });

        // Load Audience Levels
        $('#btn-new-audience').click(function(){
            $.ajax({
                url: "/api/audience-levels?token="+Cookies.get('MKTG360_SESSION'),
                type:"GET",
                success:function(response){
                    $('#levels-container').html('');
                    $.each(response, function(key, value){
                        $('#levels-container').append('\
                            <div class="form-check">\
                                <input class="form-check-input" type="checkbox" value="'+value.id+'" name="levels" id="audience-'+value.id+'">\
                                <label class="form-check-label" for="audience-'+value.id+'">\
                                '+value.description+'\
                                </label>\
                            </div>\
                        ');
                    });
                },
                error:function(response){
                    console.log(response)
                }
            });
        });

        // Create Draft Audience
        $('#btn-draft').click(function(e){
            e.preventDefault()
            let description = $("#modal-audience textarea[name=description]").val();
            let challenges = $("#modal-audience textarea[name=challenges]").val();

            let levels_selected = [];
            $("#modal-audience input[name=levels]:checked").each(function(){
                levels_selected.push($(this).val())
            });
            
            $.ajax({
                url: "/api/audiences?token="+Cookies.get('MKTG360_SESSION'),
                type:"POST",
                data:{
                    status_id:1,
                    description:description,
                    challenges:challenges,
                    level_ids:levels_selected,
                },
                success:function(response){
                    console.log(response)
                    location.reload()
                },
                error:function(response){
                    console.log(response)
                }
            });
        });

        // Submit Audience
        $('#btn-send').click(function(e){
            e.preventDefault()
            let description = $("#modal-audience textarea[name=description]").val();
            let challenges = $("#modal-audience textarea[name=challenges]").val();

            let levels_selected = [];
            $("#modal-audience input[name=levels]:checked").each(function(){
                levels_selected.push($(this).val())
            });
            
            $.ajax({
                url: "/api/audiences?token="+Cookies.get('MKTG360_SESSION'),
                type:"POST",
                data:{
                    status_id:4,
                    description:description,
                    challenges:challenges,
                    level_ids:levels_selected,
                },
                success:function(response){
                    console.log(response)
                    location.reload()
                },
                error:function(response){
                    console.log(response)
                }
            });
        });

        
    </script>
    @endsection