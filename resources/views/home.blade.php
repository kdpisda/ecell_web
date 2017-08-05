@extends('layouts.app')
@section('title', 'Admin Panel')

@section('content')
@parent
<div class="container">
    <center>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12">
                <img src="/images/esummit_black.png" alt="E-Summit 17" class="img-rounded" height="400px">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-ls-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                            Events
                        </h3>
                    </div>
                    <div class="panel-body">
                        <h1>{{ $events }} Events</h1>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-ls-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                            Start-ups
                        </h3>
                    </div>
                    <div class="panel-body">
                        <h1>0 Start-ups</h1>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-ls-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            Users
                        </h3>
                    </div>
                    <div class="panel-body">
                        <h1>{{ $users }} Users</h1>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-ls-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            Blogs
                        </h3>
                    </div>
                    <div class="panel-body">
                        <h1>0 Blogs</h1>
                    </div>
                </div>
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
            <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('events.store') }}">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Add an event</h4>
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
    </div>
</div>
@endsection
