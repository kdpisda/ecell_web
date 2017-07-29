@extends('layouts.admin_panel')
@section('title', 'Admin Panel')

@section('content')
@parent
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sponsors
        <small>Entrepreneurship Summit 2k17</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">sponsors</li>
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
              <h3 class="box-title">Sponsors Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th> 
                  <th>Sponsor Pic</th>
                  <th>Sponsor Name</th>
                  <th>Status</th>
                  <th>Description</th>
                  <th>Contact No</th>
                  <th>Contact Email</th>
                  <th>Modified At</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($sponsors as $sponsor)
                    <tr align="center">
                        <td>{{ $sponsor->sponsor_id }}</td>
                        <td>
                            @if($sponsor->meta == '')
                                <img src="/images/esummit_black.png" alt="E-Summit" class="img-rounded" width="75px">
                            @else
                                <img src="/uploads/sponsors/{{ $sponsor->meta }}" alt="E-Summit" class="img-rounded" height="75px" >
                            @endif
                        </td>
                        <td>{{ $sponsor->name }}</td>
                        <td>
                            <h4 id="sponsor_{{ $sponsor->sponsor_id }}">
                            @if ($sponsor->status === 'unapproved')
                                <span class="label label-danger">Unapproved</span>
                            @else
                                <span class="label label-success">Approved</span>
                            @endif
                            </h4>
                            <br>
                            <button type="button" class="btn btn-default" onclick="approve_sponsor({{ $sponsor->sponsor_id }})">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default" onclick="unapprove_sponsor({{ $sponsor->sponsor_id }})">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                        </td>
                        <td>{{ $sponsor->description }}</td>
                        <td>{{ $sponsor->contact_no }}</td>
                        <td>{{ $sponsor->contact_email }}</td>
                        <td>{{ $sponsor->updated_at }}</td>
                        <td><button type="button" class="btn btn-default" onclick="edit_sponsor({{ $sponsor->sponsor_id }})"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
                        <td><button type="button" class="btn btn-default" onclick="delete_sponsor({{ $sponsor->sponsor_id }})"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th> 
                    <th>Sponsor Pic</th>
                    <th>Sponsor Name</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Contact No</th>
                    <th>Contact Email</th>
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
<div class="modal fade modal-info" tabindex="-1" role="dialog" id="edit_sponsor_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" enctype="multipart/form-data" method="POST" action="/sponsors/update_sponsor" id="edit_sponsor_form">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="hidden" name="sponsor_id">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Edit sponsor</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Name</span>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="edit_sponsor_name" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Owner</span>
                                <input type="text" class="form-control" placeholder="Owner" name="owner" id="edit_sponsor_owner" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Description</span>
                                <textarea placeholder="Description" class="form-control" rows="5" name="description" id="edit_sponsor_description" required></textarea>
                            </div>
                        </div>
                    </div><br> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Address</span>
                                <textarea placeholder="Address" class="form-control" rows="5" name="address" id="edit_sponsor_address" required></textarea>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Image</span>
                                <input type="file" class="form-control" placeholder="sponsor Image" name="meta" id="edit_sponsor_image">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Contact No</span>
                                <input type="text" class="form-control" placeholder="Contact No" name="contact_no" id="edit_sponsor_contact_no" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Contact Email</span>
                                <input type="text" class="form-control" placeholder="Contact Email" name="contact_email" id="edit_sponsor_contact_email" required>
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
    $("#sponsors_navbar").addClass("active");
    function edit_sponsor(sponsor_id){
        $("#preloader").show();
        var sponsor_id, sponsor_name, sponsor_detail, sponsor_description, sponsor_pic;    
        $.ajax({
            url: '/sponsors/get_sponsor_detail/'+sponsor_id,
            dataTyps: 'json',
            success: function(data){
                $("#preloader").hide();
                $("#edit_sponsor_id").val(data.sponsor_id);
                $("#edit_sponsor_name").val(data.sponsor_name);
                $("#edit_sponsor_owner").val(data.sponsor_owner);
                $("#edit_sponsor_description").val(data.sponsor_description);
                $("#edit_sponsor_address").val(data.sponsor_address);
                $("#edit_sponsor_contact_no").val(data.sponsor_contact_no);
                $("#edit_sponsor_contact_email").val(data.sponsor_contact_email);
                $("#edit_sponsor_form").attr('action',"/sponsors/"+data.sponsor_id);
                $("#edit_sponsor_modal").modal('show');
            },
            error: function(){
                alert("Seems like you are not connected to the internet");
                $("#preloader").hide();
            }
        });
    }
    function delete_sponsor(sponsor_id){
        alert(sponsor_id);
    }
    function approve_sponsor(sponsor_id){
        $("#preloader").show();
        $.ajax({
            url: '/sponsors/approve_sponsor/'+sponsor_id,
            dataType: 'json',
            success: function(data){
                if(data.flag == true){
                    $("#message_call").text(data.message);
                    $("#sponsor_"+sponsor_id).html("<span class=\"label label-success\">Approved</span>");
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
    function unapprove_sponsor(sponsor_id){
        $("#preloader").show();
        $.ajax({
            url: '/sponsors/unapprove_sponsor/'+sponsor_id,
            dataType: 'json',
            success: function(data){
                if(data.flag == true){
                    $("#message_call").text(data.message);
                    $("#sponsor_"+sponsor_id).html("<span class=\"label label-danger\">Unapproved</span>");
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