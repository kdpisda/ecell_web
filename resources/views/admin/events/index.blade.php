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
                                <td>{{ $event->status }}</td>                                
                                <td>{{ $event->created_at }}</td>
                                <td>{{ $event->mdified_at }}</td>
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
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="add_event_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">Add an event</h4>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="event_title">Title</span>
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
            </div><br>
            <div class="row">
              <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="event_description">Description</span>
                        <input type="text" class="form-control" placeholder="Event Description">
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="event_detail">Detail</span>
                        <textarea placeholder="Event Details"></textarea>
                    </div>
                </div>
            </div><br> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="event_image">Image</span>
                        <input type="file" class="form-control" placeholder="Event Image">
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="event_venue">Venue</span>
                        <input type="text" class="form-control" placeholder="Event Venue">
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="event_time">Time</span>
                        <input type="datetime" class="form-control" placeholder="Event Time">
                    </div>
                </div>
            </div><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="edit_event_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('events.store') }}">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Edit event</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon" id="event_title">Title</span>
                                <input type="text" class="form-control" placeholder="Event Title" name="title">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                      <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon" id="event_description">Description</span>
                                <input type="text" class="form-control" placeholder="Event Description" name="description">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon" id="event_detail">Detail</span>
                                <textarea placeholder="Event Details" class="form-control" rows="5" name="details"></textarea>
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
                                <span class="input-group-addon" id="event_venue">Venue</span>
                                <input type="text" class="form-control" placeholder="Event Venue" name="venue">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon" id="event_time">Time</span>
                                <input type="datetime" class="form-control" placeholder="Event Time">
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
                event_id = data.event_id;
                // alert('Success '+event_id);
                $("#preloader").hide();
                $("#edit_event_modal").modal('show');
            },
            error: function(){
                alert("Seems like you are not connected to the internet");
                $("#preloader").hide();
            }
        });
    }
    function delete_event(event_id){
        alert(event_id);
    }
</script>
@endsection
