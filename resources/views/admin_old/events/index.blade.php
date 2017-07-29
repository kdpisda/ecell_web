@extends('layouts.admin_panel')
@section('title', 'Admin Panel Events')

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
                            <th>Event Name</th>
                            <th>Event Description</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Modified At</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
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
                                <!-- <td>{{ $event->status }}</td>                                 -->
                                <td>{{ $event->created_at }}</td>
                                <td>{{ $event->updated_at }}</td>
                                <td><button type="button" class="btn btn-default" onclick="edit_event({{ $event->event_id }})"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
                                <td><button type="button" class="btn btn-default" onclick="delete_event({{ $event->event_id }})"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                            </tr>
                        @endforeach
                    </table>
                </center>
            </div>
        </div>
    </center>
    <!-- <div id="add_event_modal" uk-modal="center: true">
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
<div class="modal fade" tabindex="-1" role="dialog" id="edit_event_modal">
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
                                <input type="text" class="form-control" placeholder="Event Title" name="title" id="edit_event_title">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                      <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Description</span>
                                <input type="text" class="form-control" placeholder="Event Description" name="description" id="edit_event_description">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Detail</span>
                                <textarea placeholder="Event Details" class="form-control" rows="5" name="details" id="edit_event_detail"></textarea>
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
                                <input type="text" class="form-control" placeholder="Event Venue" name="venue" id="edit_event_venue">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Time</span>
                                <input type="datetime" class="form-control" placeholder="Event Time" id="edit_event_time">
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
    function edit_event(event_id){
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
