@extends('layouts.admin_panel')
@section('title', 'Admin Panel')

@section('content')
@parent
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Questions
        <small>B-Quiz 2k17</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Questions</li>
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
              <h3 class="box-title">Questions Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Question</th>
                  <th>Description</th>
                  <th>Meta</th>
                  <th>Time Limit</th>
                  <th>Score</th>
                  <th>Type</th>
                  <th>Question Set</th>
                  <th>Status</th>
                  <th>Modified At</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($questions as $question)
                    <tr align="center">
                        <td>{{ $question->question_id }}</td>
                        <td>{{ $question->question }}</td>
                        <td>{{ $question->description }}</td>
                        <td>
                            @if($question->meta == '')
                                <img src="/images/esummit_black.png" alt="E-Summit" class="img-rounded" width="75px">
                            @else
                                <img src="/uploads/questions/{{ $question->meta }}" alt="E-Summit" class="img-rounded" height="75px" >
                            @endif
                        </td>
                        <td>{{ $question->timelimit }}</td>
                        <td>{{ $question->score }}</td>
                        <td>{{ $question->question_type }}</td>
                        <td>{{ $question->question_set }}</td>
                        <td>
                            <h4 id="question_{{ $question->question_id }}">
                            @if ($question->status === 'unapproved')
                                <span class="label label-danger">Unapproved</span>
                            @else
                                <span class="label label-success">Approved</span>
                            @endif
                            </h4>
                            <br>
                            <button type="button" class="btn btn-default" onclick="approve_question({{ $question->question_id }})">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default" onclick="unapprove_question({{ $question->question_id }})">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                        </td>
                        <td>{{ $question->updated_at }}</td>
                        <td><button type="button" class="btn btn-default" onclick="edit_question({{ $question->question_id }})"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
                        <td><button type="button" class="btn btn-default" onclick="delete_question({{ $question->question_id }})"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Question Pic</th>
                  <th>Question Name</th>
                  <th>Question Description</th>
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
<div class="modal fade modal-info" tabindex="-1" role="dialog" id="edit_question_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" enctype="multipart/form-data" method="POST" action="/questions/update_question" id="edit_question_form">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="hidden" name="question_id">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Edit question</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Title</span>
                                <input type="text" class="form-control" placeholder="Question Title" name="title" id="edit_question_title" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                      <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Description</span>
                                <input type="text" class="form-control" placeholder="Question Description" name="description" id="edit_question_description" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Detail</span>
                                <textarea placeholder="Question Details" class="form-control" rows="5" name="details" id="edit_question_detail" required></textarea>
                            </div>
                        </div>
                    </div><br> 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Image</span>
                                <input type="file" class="form-control" placeholder="Question Image" name="meta" id="edit_question_image">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">Venue</span>
                                <input type="text" class="form-control" placeholder="Question Venue" name="venue" id="edit_question_venue" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label>Question Date:</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="date" class="form-control pull-right" id="edit_question_date" required>
                            </div>
                            </div><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="bootstrap-timepicker">
                            <div class="form-group">
                                <label>Question Time :</label>

                                <div class="input-group">
                                    <input type="text" name="time" class="form-control timepicker" id="edit_question_time" required>

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
    $("#questions_navbar").addClass("active");
    function edit_question(question_id){
        //Date picker
        $('#edit_question_date').datepicker({
            autoclose: true
        })
        $("#preloader").show();
        var question_id, question_name, question_detail, question_description, question_pic;    
        $.ajax({
            url: '/questions/get_question_detail/'+question_id,
            dataTyps: 'json',
            success: function(data){
                $("#preloader").hide();
                $("#edit_question_id").val(data.question_id);
                $("#edit_question_title").val(data.question_name);
                $("#edit_question_description").val(data.question_description);
                $("#edit_question_detail").val(data.question_detail);
                $("#edit_question_venue").val(data.question_venue);
                $("#edit_question_time").val(data.question_time);
                $("#edit_question_date").val(data.question_date);
                $("#edit_question_meta").val(data.question_pic);
                $("#edit_question_form").attr('action',"/questions/"+data.question_id);
                $("#edit_question_modal").modal('show');
            },
            error: function(){
                alert("Seems like you are not connected to the internet");
                $("#preloader").hide();
            }
        });_question
    }
    function delete_question(question_id){
        alert(question_id);
    }
    function approve_question(question_id){
        $("#preloader").show();
        $.ajax({
            url: '/questions/approve_question/'+question_id,
            dataType: 'json',
            success: function(data){
                if(data.flag == true){
                    $("#message_call").text(data.message);
                    $("#question_"+question_id).html("<span class=\"label label-success\">Approved</span>");
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
    function unapprove_question(question_id){
        $("#preloader").show();
        $.ajax({
            url: '/questions/unapprove_question/'+question_id,
            dataType: 'json',
            success: function(data){
                if(data.flag == true){
                    $("#message_call").text(data.message);
                    $("#question_"+question_id).html("<span class=\"label label-danger\">Unapproved</span>");
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