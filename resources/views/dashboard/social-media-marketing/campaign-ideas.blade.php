@extends('layouts.dashboard')
@section('title', 'Campaign Ideas')
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
                                    <button class="btn btn-primary" data-toggle="modal" id="btn-new-campaign" data-target="#modal-campaign">New Campaign</button>                                       
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
                                            <th scope="col">Description</th>
                                            <th scope="col">Created by</th>
                                            <th scope="col">Date Created</th>
                                            </tr>
                                        </thead>
                                        <tbody id="live-campaign-ideas-container">
                                            <!--<tr>
                                                <td><span class="status badge-primary">Sent</span></td>
                                                <td>
                                                    <strong>Sample Campaign Idea 1 <strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>May 14, 2021</td>
                                            </tr>
                                            <tr>
                                                <td><span class="status badge-warning">Need Approval</span></td>
                                                <td>
                                                    <strong>Sample Campaign Idea 1 <strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>May 14, 2021</td>
                                            </tr>
                                            <tr>
                                                <td><span class="status badge-success">Approved</span></td>
                                                <td>
                                                    <strong>Sample Campaign Idea 1 <strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>May 14, 2021</td>
                                            </tr>-->
                                            
                                        </tbody>
                                    </table>

                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th scope="col" colspan="4" class="no-border">Your Drafts</th>
                                            </tr>
                                        </thead>
                                        <tbody id="draft-campaign-ideas-container">
                                            <!--<tr>
                                                <td><span class="status badge-muted">Draft</span></td>
                                                <td>
                                                    <strong>Sample Campaign Idea 1 <strong>
                                                    <button type="button" class="btn-table"><i class="fas fa-pen"></i></button>
                                                    <button type="button" class="btn-table"><i class="fas fa-trash"></i></button>
                                                </td>
                                                <td><img src="{{asset('images/admin.png')}}" class="rounded-circle mr-1" width="24px"  /> Lindsey Stroud</td>
                                                <td>May 14, 2021</td>
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
                <div class="modal-body p-4">
                   
                    <form>
                        <label class="small">Tell us your idea for the next campaign or promotion!</label>
                        <textarea class="txtarea" placeholder="Type here..." name="description"></textarea>                                               
                        
                        <label class="small">Tell us your idea for the next campaign or promotion!</label>
                        <div class="mb-3" id="options-container">
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <label class="small">Choose your platform</label>

                        <div class="my-2" id="platforms-container">
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <label class="small">Can you tell us more about the cause and where you want the donation sent to?</label>
                        <textarea class="txtarea" placeholder="Type here..." name="cause"></textarea> 

                        <label class="small">Who is the ideal customer for this promotion?</label>
                        <textarea class="txtarea" placeholder="Type here..." name="primary_customer"></textarea> 

                        <label class="small">Who is the secondary ideal customer for this position? You can be much more brood here :)</label>
                        <textarea class="txtarea" placeholder="Type here..." name="secondary_customer"></textarea> 

                        <label class="small">What specific results are you looking for from this promotion/campaign?</label>
                        <textarea class="txtarea" placeholder="Type here..." name="expected_result"></textarea> 

                        <label class="small">Is there an additional marketing budget for Ads/Boosts to help you reach your specific result goal?</label>
                        <textarea class="txtarea" placeholder="Type here..." name="budget"></textarea> 

                        <label class="small">Is there anything else you want our team to know about this promotion/campaign?</label>
                        <textarea class="txtarea" placeholder="Type here..." name="other_details"></textarea> 

                     </form>
                </div>
                <div class="modal-footer d-flex justify-content-start align-items-start">
                    <button class="btn btn-primary btn-lg" type="submit" id="btn-send">Submit</button>
                    <button class="btn btn-secondary btn-lg" type="button" id="btn-draft">Save as Draft</button>
                </div>
            </div>
        </div>
    </div> <!-- ./modal-campaign-->

    @include('includes.scripts')
    <script>

        // Load Existing Campaign Ideas (user based)
        $(document).ready(function(){
            $.ajax({
                url: "/api/campaign-ideas?token="+Cookies.get('MKTG360_SESSION'),
                type:"GET",
                success:function(response){
                    if(response.length>0){
                        $('#draft-campaign-ideas-container').html('');
                        $('#live-campaign-ideas-container').html('');
                        $.each(response, function(key, value){
                            if(value.status_id==1){
                                // Draft
                                $('#draft-campaign-ideas-container').append('\
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
                                $('#live-campaign-ideas-container').append('\
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

        // Load Options & Platforms
        $('#btn-new-campaign').click(function(){
            $.ajax({
                url: "/api/campaign-idea-options?token="+Cookies.get('MKTG360_SESSION'),
                type:"GET",
                success:function(response){
                    $('#options-container').html('');
                    $.each(response, function(key, data){
                        $('#options-container').append('\
                            <div class="form-check">\
                                <input class="form-check-input" type="checkbox" value="'+data.id+'" name="options" id="opt-'+data.id+'">\
                                <label class="form-check-label" for="opt-'+data.id+'">\
                                '+data.value+'\
                                </label>\
                            </div>');
                    });
                },
                error:function(response){
                    console.log(response)
                }
            });

            $.ajax({
                url: "/api/platforms?token="+Cookies.get('MKTG360_SESSION'),
                type:"GET",
                success:function(response){
                    $('#platforms-container').html('');
                    $.each(response, function(key, data){
                        $('#platforms-container').append('\
                            <div class="form-check form-check-inline">\
                                <input class="form-check-input" type="checkbox" id="platform-'+data.id+'" name="platforms" value="'+data.id+'">\
                                <label class="form-check-label" for="platform-'+data.id+'">'+data.name+'</label>\
                            </div>');
                    });
                },
                error:function(response){
                    console.log(response)
                }
            });
        });

        // Create Draft Campaign Idea
        $('#btn-draft').click(function(e){
            e.preventDefault()
            let description = $("#modal-campaign textarea[name=description]").val();
            let cause = $("#modal-campaign textarea[name=cause]").val();
            let primary_customer = $("#modal-campaign textarea[name=primary_customer]").val();
            let secondary_customer = $("#modal-campaign textarea[name=secondary_customer]").val();
            let expected_result = $("#modal-campaign textarea[name=expected_result]").val();
            let budget = $("#modal-campaign textarea[name=budget]").val();
            let other_details = $("#modal-campaign textarea[name=other_details]").val();

            let options_selected = [];
            $("#modal-campaign input[name=options]:checked").each(function(){
                options_selected.push($(this).val())
            });

            let platforms_selected = [];
            $("#modal-campaign input[name=platforms]:checked").each(function(){
                platforms_selected.push($(this).val())
            });

            $.ajax({
                url: "/api/campaign-ideas?token="+Cookies.get('MKTG360_SESSION'),
                type:"POST",
                data:{
                    status_id:1,
                    description:description,
                    cause:cause,
                    primary_customer:primary_customer,
                    secondary_customer:secondary_customer,
                    expected_result:expected_result,
                    budget:budget,
                    other_details:other_details,
                    option_ids:options_selected,
                    platform_ids:platforms_selected
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

        // Submit Campaign Idea
        $('#btn-send').click(function(e){
            e.preventDefault()
            let description = $("#modal-campaign textarea[name=description]").val();
            let cause = $("#modal-campaign textarea[name=cause]").val();
            let primary_customer = $("#modal-campaign textarea[name=primary_customer]").val();
            let secondary_customer = $("#modal-campaign textarea[name=secondary_customer]").val();
            let expected_result = $("#modal-campaign textarea[name=expected_result]").val();
            let budget = $("#modal-campaign textarea[name=budget]").val();
            let other_details = $("#modal-campaign textarea[name=other_details]").val();

            let options_selected = [];
            $("#modal-campaign input[name=options]:checked").each(function(){
                options_selected.push($(this).val())
            });

            let platforms_selected = [];
            $("#modal-campaign input[name=platforms]:checked").each(function(){
                platforms_selected.push($(this).val())
            });

            $.ajax({
                url: "/api/campaign-ideas?token="+Cookies.get('MKTG360_SESSION'),
                type:"POST",
                data:{
                    status_id:4,
                    description:description,
                    cause:cause,
                    primary_customer:primary_customer,
                    secondary_customer:secondary_customer,
                    expected_result:expected_result,
                    budget:budget,
                    other_details:other_details,
                    option_ids:options_selected,
                    platform_ids:platforms_selected
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