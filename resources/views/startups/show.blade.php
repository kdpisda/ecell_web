@extends('layouts.app')
@section('title', 'Startups')

@section('content')
@parent
<div class="container">
    <center>
        <div class="row">
        @foreach ($startup as $startup_item)
            <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                            {{ $startup_item->name }}
                        </h3>
                        <input type="hidden" name="startup_id" value="{{ $startup_item->startup_id }}">
                        <span class="glyphicon glyphicon-option-vertical" id="startup_id"></span>
                    </div>
                    <div class="panel-body">
                        @if($startup_item->meta == '')
                            <img src="/images/esummit_black.png" alt="E-Summit 17" class="img-rounded" height="300px">
                        @else
                            <img src="/uploads/startups/{{ $startup_item->meta }}" alt="E-Summit 17" class="img-rounded" height="300px">
                        @endif
                        <blockquote>
                            <h3> {{ $startup_item->description }} </h3>
                        </blockquote>
                        <p> {{ $startup_item->details }} </p>
                    </div>
                    <div class="panel-footer">
                        <span class="glyphicon glyphicon-map-marker" area-hidden="true"></span>
                        {{ $startup_item->venue }}
                    </div>
                </div>
            </div>
        @endforeach
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
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="add_startup_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">Add an startup</h4>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="startup_title">Title</span>
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
            </div><br>
            <div class="row">
              <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="startup_description">Description</span>
                        <input type="text" class="form-control" placeholder="Event Description">
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="startup_detail">Detail</span>
                        <textarea placeholder="Event Details"></textarea>
                    </div>
                </div>
            </div><br> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="startup_image">Image</span>
                        <input type="file" class="form-control" placeholder="Event Image">
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="startup_venue">Venue</span>
                        <input type="text" class="form-control" placeholder="Event Venue">
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="startup_time">Time</span>
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
