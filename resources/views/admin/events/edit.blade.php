@extends('layouts.admin_panel') 
@section('title', 'Admin Panel') 
@section('content')
@parent
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Add Events
        <small>Entrepreneurship Summit</small>
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
                <div class="box box-default">
                    <div class="box-header with-border">
                        <i class="fa fa-calendar-plus-o"></i>

                        <h3 class="box-title">Create an Event</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" enctype="multipart/form-data" method="POST" action="/events/{{ $event->event_id }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <input type="hidden" name="event_id" value="{{ $event->event_id }}">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="event_title">Title</span>
                                            <input type="text" class="form-control" value="{{ $event->title }}" name="title" required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea class="textarea" name="description" id="event_description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; color: #000000;" required></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea class="" name="details" id="event_details" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; color: #000000;" required></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <label for="event_image">Event Image</label>
                                            <input type="file" id="event_image" name="meta">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="event_venue">Venue</span>
                                            <input type="text" class="form-control" placeholder="Event Venue" value="{{ $event->venue }}" name="venue" required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Event Date:</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="date" class="form-control pull-right" id="datepicker" value="{{ $event->date }}" required>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="bootstrap-timepicker">
                                            <div class="form-group">
                                                <label>Event Time :</label>

                                                <div class="input-group">
                                                    <input type="text" name="time" class="form-control timepicker" value="{{ $event->time }}" required>

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
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
@endsection

@section("scripts")
<script>
$(document).ready(function(){
    //$("#event_details").wysihtml5();
    //$("#event_details").data("wysihtml5").editor.setValue('{{ $event->details }}');
    //console.log('{{ $event->details }}');
    $('#event_details').val('{{ $event->details }}');
    $('#event_description').val('{{ $event->description }}');
});
</script>
@endsection