@extends('layouts.admin_panel')
@section('title', 'Admin Panel Startups')

@section('content')
@parent
<div class="container">
    <center>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12">
                <center>
                    <table class="table table-hover">
                        <tr>
                            <th>#</th>
                            <th></th>
                            <th>Startup Name</th>
                            <th>Startup Description</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Modified At</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($startups as $startup)
                            <tr align="center">
                                <td>{{ $startup->startup_id }}</td>
                                <td>
                                    @if($startup->meta == '')
                                        <img src="/images/esummit_black.png" alt="E-Summit" class="img-rounded" width="75px">
                                    @else
                                        <img src="/uploads/startups/{{ $startup->meta }}" alt="E-Summit" class="img-rounded" height="75px" >
                                    @endif
                                </td>
                                <td>{{ $startup->name }}</td>
                                <td>{{ $startup->description }}</td>
                                <td>
                                    <h4 id="startup_{{ $startup->startup_id }}">
                                    @if ($startup->status === 'unapproved')
                                        <span class="label label-danger">Unapproved</span>
                                    @else
                                        <span class="label label-success">Approved</span>
                                    @endif
                                    </h4>
                                    <br>
                                    <button type="button" class="btn btn-default" onclick="approve_startup({{ $startup->startup_id }})">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-default" onclick="unapprove_startup({{ $startup->startup_id }})">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    </button>
                                </td>
                                <!-- <td>{{ $startup->status }}</td>                                 -->
                                <td>{{ $startup->created_at }}</td>
                                <td>{{ $startup->updated_at }}</td>
                                <td><button type="button" class="btn btn-default" onclick="edit_startup({{ $startup->startup_id }})"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
                                <td><button type="button" class="btn btn-default" onclick="delete_startup({{ $startup->startup_id }})"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                            </tr>
                        @endforeach
                    </table>
                </center>
            </div>
        </div>
    </center>
    <!-- <div id="add_startup_modal" uk-modal="center: true">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default uk-close" type="button" ></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Modal Title</h2>
            </div>
            <div class="uk-modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="button">Save</button>
            </div>
        </div>
    </div> -->
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="edit_startup_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" enctype="multipart/form-data" method="POST" action="/startups/update_startup" id="edit_startup_form">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="hidden" name="startup_id">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Edit startup</h4>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_title">Name</span>
                            <input type="text" class="form-control" placeholder="Startup Name" name="name" id="edit_startup_name">
                        </div>
                    </div>
                </div><br>
                <div class="row">
                  <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_description">Owner</span>
                            <input type="text" class="form-control" placeholder="Enter Responsible Person Name" name="owner" id="edit_startup_owner">
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_detail">Description</span>
                            <textarea placeholder="Event Details" class="form-control" rows="5" name="description" id="edit_startup_description"></textarea>
                        </div>
                    </div>
                </div><br> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_detail">Address</span>
                            <textarea placeholder="Address" class="form-control" rows="5" name="address" id="edit_startup_address"></textarea>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_image">Image</span>
                            <input type="file" class="form-control" placeholder="Event Image" name="meta">
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_time">Contact No</span>
                            <input type="datetime" class="form-control" placeholder="Contact No" name="contact_no" id="edit_startup_contact_no">
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon" id="event_time">Contact Email</span>
                            <input type="email" class="form-control" placeholder="Startup Email" name="contact_email" id="edit_startup_contact_email">
                        </div>
                    </div>
                </div><br>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
      </div>
</div><!-- /.modal -->
<script type="text/javascript">
    function edit_startup(startup_id){
        $("#preloader").show();
        var startup_id, startup_name, startup_detail, startup_description, startup_pic;    
        $.ajax({
            url: '/startups/get_startup_detail/'+startup_id,
            dataTyps: 'json',
            success: function(data){
                $("#preloader").hide();
                $("#edit_startup_id").val(data.startup_id);
                $("#edit_startup_name").val(data.startup_name);
                $("#edit_startup_description").val(data.startup_description);
                $("#edit_startup_owner").val(data.startup_owner);
                $("#edit_startup_address").val(data.startup_address);
                $("#edit_startup_contact_no").val(data.startup_contact_no);
                $("#edit_startup_contact_email").val(data.startup_contact_email);
                $("#edit_startup_form").attr('action',"/startups/"+data.startup_id);
                $("#edit_startup_modal").modal('show');
            },
            error: function(){
                alert("Seems like you are not connected to the internet");
                $("#preloader").hide();
            }
        });_startup
    }
    function delete_startup(startup_id){
        alert(startup_id);
    }
    function approve_startup(startup_id){
        $("#preloader").show();
        $.ajax({
            url: '/startups/approve_startup/'+startup_id,
            dataType: 'json',
            success: function(data){
                if(data.flag == true){
                    $("#message_call").text(data.message);
                    $("#startup_"+startup_id).html("<span class=\"label label-success\">Approved</span>");
                }else{
                    $("#message_call").text(data.message);
                }
                $("#preloader").hide();
                $("#message_modal").modal('show');
            },
            error: function(data){
                $("#message_call").text('Sorry our servers are unreachable!!! :(');
                $("#preloader").hide();
                $("#message_modal").modal('show');
            }
        });
    }
    function unapprove_startup(startup_id){
        $("#preloader").show();
        $.ajax({
            url: '/startups/unapprove_startup/'+startup_id,
            dataType: 'json',
            success: function(data){
                if(data.flag == true){
                    $("#message_call").text(data.message);
                    $("#startup_"+startup_id).html("<span class=\"label label-danger\">Unapproved</span>");
                }else{
                    $("#message_call").text(data.message);
                }
                $("#preloader").hide();
                $("#message_modal").modal('show');
            },
            error: function(data){
                $("#message_call").text(data.message);
                $("#preloader").hide();
                $("#message_modal").modal('show');
            }
        });
    }
</script>
@endsection
<!-- 9827406220 -->