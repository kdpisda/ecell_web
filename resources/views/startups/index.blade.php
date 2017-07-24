@extends('layouts.app')
@section('title', 'Sponsors')

@section('content')
@parent
<div class="container">
    <center>
        <div class="row">
        @foreach ($startups as $startup)
            <div class="col-xs-12 col-sm-12 col-md-4 col-ls-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                            {{ $startup->name }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        @if($startup->meta == '')
                            <img src="/images/esummit_black.png" alt="E-Summit" class="img-rounded" width="100px">
                        @else
                            <img src="/uploads/startups/{{ $startup->meta }}" alt="E-Summit" class="img-rounded" height="150px" >
                        @endif
                        <blockquote>
                            <h1><a href="/startups/{{ $startup->startup_id }}">{{ $startup->description }}</a></h1>
                        </blockquote>
                        <p> {{ $startup->contact_email }} </p>
                    </div>
                    <div class="panel-footer">
                        <span class="glyphicon glyphicon-map-marker" area-hidden="true"></span>
                        {{ $startup->address }}
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </center>
</div>
@endsection
