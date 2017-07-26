@extends('layouts.admin_panel')
@section('title', 'Admin Panel')

@section('content')
<div class="container">
    <center>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12">
                <img src="images/esummit_black.png" alt="E-Summit 17" class="img-rounded" height="400px">
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
                        <h1>{{ $startups }} Start-ups</h1>
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
                            Sponsors
                        </h3>
                    </div>
                    <div class="panel-body">
                        <h1>{{ $sponsors }} Sponsors</h1>
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
</div>
@endsection
