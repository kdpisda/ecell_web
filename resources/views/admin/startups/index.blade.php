@extends('layouts.admin_panel')
@section('title', 'Admin Panel')

@section('content')
@parent
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Startups
        <small>Entrepreneurship Summit 2k17</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">startups</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Startups Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th> 
                  <th>Startup Pic</th>
                  <th>Startup Name</th>
                  <th>Status</th>
                  <th>Owner/Founder</th>
                  <th>Contact No</th>
                  <th>Contact Email</th>
                  <th>Address</th>
                  <th>Modified At</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
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
                        <td>{{ $startup->owner }}</td>
                        <td>{{ $startup->contact_no }}</td>
                        <td>{{ $startup->contact_email }}</td>
                        <td>{{ $startup->address }}</td>
                        <td>{{ $startup->updated_at }}</td>
                        <td><button type="button" class="btn btn-default" onclick="edit_startup({{ $startup->startup_id }})"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
                        <td><button type="button" class="btn btn-default" onclick="delete_startup({{ $startup->startup_id }})"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th> 
                    <th>Startup Pic</th>
                    <th>Startup Name</th>
                    <th>Status</th>
                    <th>Owner/Founder</th>
                    <th>Contact No</th>
                    <th>Contact Email</th>
                    <th>Address</th>
                    <th>Modified At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          

        </section>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
<div class="modal fade modal-info" tabindex="-1" role="dialog" id="edit_startup_modal">
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
                                <span class="input-group-addon">Name</span>
                                <input type="text" class="form-control" placeholder="Startup Name" name="name" id="edit_startup_name">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                      <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Description</span>
                                <input type="text" class="form-control" placeholder="Startup Description" name="description" id="edit_startup_description">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                      <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Address</span>
                                <input type="text" class="form-control" placeholder="Startup Address" name="address" id="edit_startup_address">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Owner</span>
                                <input type="text" name="owner" id="edit_startup_owner" class="form-control">
                            </div>
                        </div>
                    </div><br> 
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon">Contact No</span>
                                <input type="text" name="contact_no" id="edit_startup_contact_no" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-addon">Contact Email</span>
                                <input type="email" name="contact_email" id="edit_startup_contact_email" class="form-control">
                            </div>
                        </div>
                    </div><br> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Image</span>
                                <input type="file" class="form-control" placeholder="Startup Image" name="meta" id="edit_startup_image">
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
    $("document").getReady(function(){
        $("#startups_navbar").addClass("active");
    });
    function edit_startup(startup_id){
        $("#preloader").show();
        var startup_id, startup_name, startup_detail, startup_description, startup_pic;    
        $.ajax({
            url: '/startups/get_startup_detail/'+startup_id,
            dataTyps: 'json',
            success: function(data){
                $("#preloader").hide();
                console.log(data);
                $("#edit_startup_id").val(data.startup_id);
                $("#edit_startup_name").val(data.startup_name);
                $("#edit_startup_description").val(data.startup_description);
                $("#edit_startup_address").val(data.startup_address);
                $("#edit_startup_owner").val(data.startup_owner);
                $("#edit_startup_contact_no").val(data.startup_contact_no);
                $("#edit_startup_contact_email").val(data.startup_contact_email);
                $("#edit_startup_meta").val(data.startup_pic);
                $("#edit_startup_address").val(data.startup_adress);
                $("#edit_startup_form").attr('action',"/startups/"+data.startup_id);
                $("#edit_startup_modal").modal('show');
            },
            error: function(){
                alert("Seems like you are not connected to the internet");
                $("#preloader").hide();
            }
        });
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
                $("#message_call").text(data.message);
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