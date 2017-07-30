@extends('layouts.admin_panel')
@section('title', 'Admin Panel')

@section('content')
@parent
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Question Sets
        <small>B-Quiz</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>B-Quiz</li>
        <li class="active">Question Sets</li>
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
              <h3 class="box-title">Question Sets Detail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Question Set Pic</th>
                  <th>Question Set Name</th>
                  <th>Question Set Number</th>
                  <th>Question Set Description</th>
                  <th>Status</th>
                  <th>Created At</th>
                  <th>Modified At</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($questionSets as $questionSet)
                    <tr align="center">
                        <td>{{ $questionSet->question_set_id }}</td>
                        <td>
                            @if($questionSet->meta == '')
                                <img src="/images/esummit_black.png" alt="E-Summit" class="img-rounded" width="75px">
                            @else
                                <img src="/uploads/questionSets/{{ $questionSet->meta }}" alt="E-Summit" class="img-rounded" height="75px" >
                            @endif
                        </td>
                        <td>{{ $questionSet->name }}</td>
                        <td>{{ $questionSet->set }}</td>
                        <td>{{ $questionSet->description}}</td>
                        <td>
                            <h4 id="question_set_{{ $questionSet->question_set_id }}">
                            @if ($questionSet->status === 'unapproved')
                                <span class="label label-danger">Unapproved</span>
                            @else
                                <span class="label label-success">Approved</span>
                            @endif
                            </h4>
                            <br>
                            <button type="button" class="btn btn-default" onclick="approve_question_set({{ $questionSet->question_set_id }})">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default" onclick="unapprove_question_set({{ $questionSet->question_set_id }})">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                        </td>
                        <td>{{ $questionSet->created_at }}</td>
                        <td>{{ $questionSet->updated_at }}</td>
                        <td><button type="button" class="btn btn-default" onclick="edit_question_set({{ $questionSet->question_set_id }})"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
                        <td><button type="button" class="btn btn-default" onclick="delete_questionSet({{ $questionSet->question_set_id }})"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Question Set Pic</th>
                  <th>Question Set Name</th>
                  <th>Question Set Number</th>
                  <th>Question Set Description</th>
                  <th>Status</th>
                  <th>Created At</th>
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
<!-- Edit Question set modal -->
<div class="modal modal-info fade" id="edit_question_set_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" enctype="multipart/form-data" method="POST" action="" id="edit_question_set_form">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit a question set</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-object-group"></i></span>
                <input type="text" class="form-control" placeholder="Set Name" name="set_name" id="edit_question_set_name" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
                <input type="text" class="form-control" placeholder="Set Number" name="set_number" required id="edit_question_set_number">
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-lg-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-arrows-alt"></i></span>
                <textarea type="text" row=5 class="form-control" placeholder="Set Description" name="description" required id="edit_question_set_description" ></textarea>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-lg-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-file-picture-o"></i></span>
                <input type="file" name="meta" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline">Save changes</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- End EditQuestion set modal -->
<script type="text/javascript">
    $("#questionSets_navbar").addClass("active");
    function edit_question_set(question_set_id){
        //Date picker
        $('#edit_question_set_date').datepicker({
            autoclose: true
        })
        $("#preloader").show();
        var questionSet_name, questionSet_detail, questionSet_description, questionSet_pic;    
        $.ajax({
            url: '/questionSets/get_question_set_detail/'+question_set_id,
            dataTyps: 'json',
            success: function(data){
                $("#preloader").hide();
                $("#edit_question_set_id").val(data.question_set_id);
                $("#edit_question_set_name").val(data.question_set_name);
                $("#edit_question_set_number").val(data.question_set_number);
                $("#edit_question_set_description").val(data.question_set_description);
                $("#edit_question_set_form").attr('action',"/questionSets/"+data.question_set_id);
                $("#edit_question_set_modal").modal('show');
            },
            error: function(){
                alert("Seems like you are not connected to the internet");
                $("#preloader").hide();
            }
        });
    }
    function delete_questionSet(question_set_id){
        alert(question_set_id);
    }
    function approve_question_set(question_set_id){
        $("#preloader").show();
        $.ajax({
            url: '/questionSets/approve_question_set/'+question_set_id,
            dataType: 'json',
            success: function(data){
                if(data.flag == true){
                    $("#message_call").text(data.message);
                    $("#question_set_"+question_set_id).html("<span class=\"label label-success\">Approved</span>");
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
    function unapprove_question_set(question_set_id){
        $("#preloader").show();
        $.ajax({
            url: '/questionSets/unapprove_question_set/'+question_set_id,
            dataType: 'json',
            success: function(data){
                if(data.flag == true){
                    $("#message_call").text(data.message);
                    $("#question_set_"+question_set_id).html("<span class=\"label label-danger\">Unapproved</span>");
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