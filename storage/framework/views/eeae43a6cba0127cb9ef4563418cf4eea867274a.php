

<?php $__env->startSection('title'); ?>
    Meetings | Runner
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Meeting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/saveMeeting" method="POST">
        <?php echo e(@csrf_field()); ?>

      <div class="modal-body">        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">ID:</label>
            <input type="text" class="form-control" id="id" name="id">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Meeting Name:</label>
            <input type="text" class="form-control" id="meetingName" name="meetingName">
            <!-- <textarea class="form-control" id="message-text"></textarea> -->
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<h4 class="card-header">
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add New</button>
</h4>
    <?php if(session('status')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session ('status')); ?>

    </div>
    <?php endif; ?>
<div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Id
                      </th>
                      <th>
                        Name
                      </th>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $meetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td>
                          <?php echo e($data->external_id); ?>

                        </td>
                        <td>
                        <?php echo e($data->name); ?>

                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\runner\resources\views/admin/tbm_meeting.blade.php ENDPATH**/ ?>