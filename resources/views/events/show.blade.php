@extends('layouts.app')
@section('title', 'Events')

@section('content')
@parent
<div class="container">
    <center>
        <div class="row">
        @foreach ($event as $event_item)
            <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                            {{ $event_item->title }}
                        </h3>
                        <input type="hidden" name="event_id" value="{{ $event_item->event_id }}">
                        <span class="glyphicon glyphicon-option-vertical" id="event_id"></span>
                    </div>
                    <div class="panel-body">
                        @if($event_item->meta == '')
                            <img src="/images/esummit_black.png" alt="E-Summit 17" class="img-rounded" height="300px">
                        @else
                            <img src="/uploads/events/{{ $event_item->meta }}" alt="E-Summit 17" class="img-rounded" height="300px">
                        @endif
                        <blockquote>
                            <h3> {{ $event_item->description }} </h3>
                        </blockquote>
                        <p> {{ $event_item->details }} </p>
                    </div>
                    <div class="panel-footer">
                        <span class="glyphicon glyphicon-map-marker" area-hidden="true"></span>
                        {{ $event_item->venue }}
                    </div>
                </div>
            </div>
        @endforeach
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
@endsection
