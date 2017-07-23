<?php $__env->startSection('title', 'Events'); ?>

<?php $__env->startSection('content'); ?>
##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<div class="container">
    <center>
        <div class="row">
        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-ls-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                            <?php echo e($event->title); ?>

                        </h3>
                    </div>
                    <div class="panel-body">
                        <?php if($event->meta == ''): ?>
                            <img src="/images/esummit_black.png" alt="E-Summit" class="img-rounded" width="100px">
                        <?php else: ?>
                            <img src="/uploads/events/<?php echo e($event->meta); ?>" alt="E-Summit" class="img-rounded" height="150px" >
                        <?php endif; ?>
                        <blockquote>
                            <h1><a href="/events/<?php echo e($event->event_id); ?>"><?php echo e($event->description); ?></a></h1>
                        </blockquote>
                        <p> <?php echo e($event->details); ?> </p>
                    </div>
                    <div class="panel-footer">
                        <span class="glyphicon glyphicon-map-marker" area-hidden="true"></span>
                        <?php echo e($event->venue); ?>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>