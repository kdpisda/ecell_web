@extends('layouts.admin_panel')
@section('title', 'Admin Panel')

@section('content')
@parent
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Events
        <small>Entrepreneurship Summit 2k17</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Events</li>
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
              <h3 class="box-title">Events Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Event Pic</th>
                  <th>Event Name</th>
                  <th>Event Description</th>
                  <th>Event Dstails</th>
                  <th>Status</th>
                  <th>Venue</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Modified At</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($events as $event)
                    <tr align="center">
                        <td>{{ $event->event_id }}</td>
                        <td>
                            @if($event->meta == '')
                                <img src="/images/esummit_black.png" alt="E-Summit" class="img-rounded" width="75px">
                            @else
                                <img src="/uploads/events/{{ $event->meta }}" alt="E-Summit" class="img-rounded" height="75px" >
                            @endif
                        </td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->details }}</td>
                        <td>
                            <h4 id="event_{{ $event->event_id }}">
                            @if ($event->status === 'unapproved')
                                <span class="label label-danger">Unapproved</span>
                            @else
                                <span class="label label-success">Approved</span>
                            @endif
                            </h4>
                            <br>
                            <button type="button" class="btn btn-default" onclick="approve_event({{ $event->event_id }})">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default" onclick="unapprove_event({{ $event->event_id }})">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                        </td>
                        <td>{{ $event->venue }}</td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->time }}</td>
                        <td>{{ $event->updated_at }}</td>
                        <td><button type="button" class="btn btn-default" onclick="edit_event({{ $event->event_id }})"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
                        <td><button type="button" class="btn btn-default" onclick="delete_event({{ $event->event_id }})"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Event Pic</th>
                  <th>Event Name</th>
                  <th>Event Description</th>
                  <th>Details</th>
                  <th>Status</th>
                  <th>Venue</th>
                  <th>Date</th>
                  <th>Time</th>
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
<div class="modal fade modal-info" tabindex="-1" role="dialog" id="edit_event_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" enctype="multipart/form-data" method="POST" action="/events/update_event" id="edit_event_form">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="hidden" name="event_id">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Edit event</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Title</span>
                                <input type="text" class="form-control" placeholder="Event Title" name="title" id="edit_event_title" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                      <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Description</span>
                                <input type="text" class="form-control" placeholder="Event Description" name="description" id="edit_event_description" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Detail</span>
                                <textarea placeholder="Event Details" class="form-control" rows="5" name="details" id="edit_event_detail" required></textarea>
                            </div>
                        </div>
                    </div><br> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Image</span>
                                <input type="file" class="form-control" placeholder="Event Image" name="meta" id="edit_event_image">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Venue</span>
                                <input type="text" class="form-control" placeholder="Event Venue" name="venue" id="edit_event_venue" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label>Event Date:</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="date" class="form-control pull-right" id="edit_event_date" required>
                            </div>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="bootstrap-timepicker">
                            <div class="form-group">
                                <label>Event Time :</label>

                                <div class="input-group">
                                    <input type="text" name="time" class="form-control timepicker" id="edit_event_time" required>

                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            </div>
                        </div>
                    </div>
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
    $("#events_navbar").addClass("active");
    function edit_event(event_id){
        //Date picker
        $('#edit_event_date').datepicker({
            autoclose: true
        })
        $("#preloader").show();
        var event_id, event_name, event_detail, event_description, event_pic;    
        $.ajax({
            url: '/events/get_event_detail/'+event_id,
            dataTyps: 'json',
            success: function(data){
                $("#preloader").hide();
                $("#edit_event_id").val(data.event_id);
                $("#edit_event_title").val(data.event_name);
                $("#edit_event_description").val(data.event_description);
                $("#edit_event_detail").val(data.event_detail);
                $("#edit_event_venue").val(data.event_venue);
                $("#edit_event_time").val(data.event_time);
                $("#edit_event_date").val(data.event_date);
                $("#edit_event_meta").val(data.event_pic);
                $("#edit_event_form").attr('action',"/events/"+data.event_id);
                $("#edit_event_modal").modal('show');
            },
            error: function(){
                alert("Seems like you are not connected to the internet");
                $("#preloader").hide();
            }
        });_event
    }
    function delete_event(event_id){
        alert(event_id);
    }
    function approve_event(event_id){
        $("#preloader").show();
        $.ajax({
            url: '/events/approve_event/'+event_id,
            dataType: 'json',
            success: function(data){
                if(data.flag == true){
                    $("#message_call").text(data.message);
                    $("#event_"+event_id).html("<span class=\"label label-success\">Approved</span>");
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
    function unapprove_event(event_id){
        $("#preloader").show();
        $.ajax({
            url: '/events/unapprove_event/'+event_id,
            dataType: 'json',
            success: function(data){
                if(data.flag == true){
                    $("#message_call").text(data.message);
                    $("#event_"+event_id).html("<span class=\"label label-danger\">Unapproved</span>");
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