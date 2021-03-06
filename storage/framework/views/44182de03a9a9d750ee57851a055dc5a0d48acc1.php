<?php $__env->startSection('title', 'Admin Panel Events'); ?>

<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
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
                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr align="center">
                                <td><?php echo e($event->event_id); ?></td>
                                <td>
                                    <?php if($event->meta == ''): ?>
                                        <img src="/images/esummit_black.png" alt="E-Summit" class="img-rounded" width="75px">
                                    <?php else: ?>
                                        <img src="/uploads/events/<?php echo e($event->meta); ?>" alt="E-Summit" class="img-rounded" height="75px" >
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($event->title); ?></td>
                                <td><?php echo e($event->description); ?></td>
                                <td>
                                    <select class="form-control" id="event_status">
                                        <option value="1">Approve</option>
                                        <option value="0">Unapprove</option>
                                    </select>
                                </td>
                                <!-- <td><?php echo e($event->status); ?></td>                                 -->
                                <td><?php echo e($event->created_at); ?></td>
                                <td><?php echo e($event->mdified_at); ?></td>
                                <td><button type="button" class="btn btn-default" onclick="edit_event(<?php echo e($event->event_id); ?>)"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
                                <td><button type="button" class="btn btn-default" onclick="delete_event(<?php echo e($event->event_id); ?>)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <span class="input-group-addon">Title</span>
                        <input type="text" class="form-control" placeholder="Event Title" id="event_title">
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
            <form role="form" enctype="multipart/form-data" method="POST" action="#" id="edit_event_form">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>

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
        });
    }
    function delete_event(event_id){
        alert(event_id);
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>