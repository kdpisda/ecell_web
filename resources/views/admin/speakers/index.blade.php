@extends('layouts.admin_panel')
@section('title', 'Admin Panel')

@section('content')
@parent
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Speakers
        <small>Entrepreneurship Summit 2k17</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">speakers</li>
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
              <h3 class="box-title">Speakers Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th> 
                  <th>Speaker Pic</th>
                  <th>Speaker Name</th>
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
                @foreach ($speakers as $speaker)
                    <tr align="center">
                        <td>{{ $speaker->speaker_id }}</td>
                        <td>
                            @if($speaker->meta == '')
                                <img src="/images/esummit_black.png" alt="E-Summit" class="img-rounded" width="75px">
                            @else
                                <img src="/uploads/speakers/{{ $speaker->meta }}" alt="E-Summit" class="img-rounded" height="75px" >
                            @endif
                        </td>
                        <td>{{ $speaker->name }}</td>
                        <td>
                            <h4 id="speaker_{{ $speaker->speaker_id }}">
                            @if ($speaker->status === 'unapproved')
                                <span class="label label-danger">Unapproved</span>
                            @else
                                <span class="label label-success">Approved</span>
                            @endif
                            </h4>
                            <br>
                            <button type="button" class="btn btn-default" onclick="approve_speaker({{ $speaker->speaker_id }})">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default" onclick="unapprove_speaker({{ $speaker->speaker_id }})">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                        </td>
                        <td>{{ $speaker->description }}</td>
                        <td>{{ $speaker->contact_no }}</td>
                        <td>{{ $speaker->contact_email }}</td>
                        <td>{{ $speaker->updated_at }}</td>
                        <td><button type="button" class="btn btn-default" onclick="edit_speaker({{ $speaker->speaker_id }})"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
                        <td><button type="button" class="btn btn-default" onclick="delete_speaker({{ $speaker->speaker_id }})"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th> 
                    <th>Speaker Pic</th>
                    <th>Speaker Name</th>
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
<div class="modal fade" tabindex="-1" role="dialog" id="edit_speaker_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" enctype="multipart/form-data" method="POST" action="/speakers/update_speaker" id="edit_speaker_form">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="hidden" name="speaker_id">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Edit speaker</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Title</span>
                                <input type="text" class="form-control" placeholder="speaker Title" name="title" id="edit_speaker_title">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                      <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Description</span>
                                <input type="text" class="form-control" placeholder="speaker Description" name="description" id="edit_speaker_description">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Detail</span>
                                <textarea placeholder="speaker Details" class="form-control" rows="5" name="details" id="edit_speaker_detail"></textarea>
                            </div>
                        </div>
                    </div><br> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Image</span>
                                <input type="file" class="form-control" placeholder="speaker Image" name="meta" id="edit_speaker_image">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Venue</span>
                                <input type="text" class="form-control" placeholder="speaker Venue" name="venue" id="edit_speaker_venue">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Time</span>
                                <input type="datetime" class="form-control" placeholder="speaker Time" id="edit_speaker_time">
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
    $("#speakers_navbar").addClass("active");
    function edit_speaker(speaker_id){
        $("#preloader").show();
        var speaker_id, speaker_name, speaker_detail, speaker_description, speaker_pic;    
        $.ajax({
            url: '/speakers/get_speaker_detail/'+speaker_id,
            dataTyps: 'json',
            success: function(data){
                $("#preloader").hide();
                $("#edit_speaker_id").val(data.speaker_id);
                $("#edit_speaker_title").val(data.speaker_name);
                $("#edit_speaker_description").val(data.speaker_description);
                $("#edit_speaker_detail").val(data.speaker_detail);
                $("#edit_speaker_venue").val(data.speaker_venue);
                $("#edit_speaker_time").val(data.speaker_time);
                $("#edit_speaker_meta").val(data.speaker_pic);
                $("#edit_speaker_form").attr('action',"/speakers/"+data.speaker_id);
                $("#edit_speaker_modal").modal('show');
            },
            error: function(){
                alert("Seems like you are not connected to the internet");
                $("#preloader").hide();
            }
        });
    }
    function delete_speaker(speaker_id){
        alert(speaker_id);
    }
    function approve_speaker(speaker_id){
        $("#preloader").show();
        $.ajax({
            url: '/speakers/approve_speaker/'+speaker_id,
            dataType: 'json',
            success: function(data){
                if(data.flag == true){
                    $("#message_call").text(data.message);
                    $("#speaker_"+speaker_id).html("<span class=\"label label-success\">Approved</span>");
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
    function unapprove_speaker(speaker_id){
        $("#preloader").show();
        $.ajax({
            url: '/speakers/unapprove_speaker/'+speaker_id,
            dataType: 'json',
            success: function(data){
                if(data.flag == true){
                    $("#message_call").text(data.message);
                    $("#speaker_"+speaker_id).html("<span class=\"label label-danger\">Unapproved</span>");
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