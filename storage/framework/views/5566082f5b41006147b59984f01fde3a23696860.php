

<?php $__env->startSection('title'); ?>
    Meetings | Runner
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Runner Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
      <?php $__currentLoopData = $runnerAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $runnerAll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="nav-item">
              <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php echo e($runnerAll->meetName); ?></a>
            </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li> -->
          </ul>
          <div class="modal-body">   
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div>
            <h6>Meeting Details</h6>
              <lable>Meeting ID : <?php echo e($runnerAll->external_id); ?></label>
            </div> 

            <div>
            <h6>Race Details</h6>
            <lable>Race Name : <?php echo e($runnerAll->raceName); ?></label>
            </div>

            <div>
              <h6>Runner Details</h6>
              <lable>Runner name : <?php echo e($runnerAll->runName); ?></label><br>
              <lable>Horse name : <?php echo e($runnerAll->horse_name); ?></label><br>
              <lable>Weight : <?php echo e($runnerAll->weight); ?></label><br>
              <lable>Colour : <?php echo e($runnerAll->colour); ?></label><br>
            </div>

            <div>
            <h6>Last Runner Details</h6>
            <lable>Runner name : <?php echo e($runnerAll->runName); ?></label><br>
              <lable>Condition : <?php echo e($runnerAll->condition); ?></label><br>
              <lable>Payment : <?php echo e($runnerAll->payment); ?></label><br>
              <lable>Game Date : <?php echo e($runnerAll->game_date); ?></label><br>
            </div>

            <div>
            <h6>Form Details</h6>
            <lable>Runner name : <?php echo e($runnerAll->runName); ?></label><br>
              <lable>Age : <?php echo e($runnerAll->age); ?></label><br>
              <lable>Sex : <?php echo e($runnerAll->sex); ?></label><br>
              <lable>Owner : <?php echo e($runnerAll->owner); ?></label><br>
              <lable>Game Date : <?php echo e($runnerAll->game_date); ?></label><br>
            </div>
            
                
               
                
                
            </div>
            </div>
            <!-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div> -->
          </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Runner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/saveRunner" method="POST">
        <?php echo e(@csrf_field()); ?>

      <div class="modal-body">        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Runner ID:</label>
            <input type="text" class="form-control" id="id" name="id">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Runner Name:</label>
            <input type="text" class="form-control" id="runName" name="runName">
            <!-- <textarea class="form-control" id="message-text"></textarea> -->
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Race ID:</label>
            <select id="raceId" name="raceId">
            <?php $__currentLoopData = $meet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->rId); ?>"><?php echo e($data->rName); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <div class="form-group">
            <label for="message-text" class="col-form-label">Horse Name:</label>
            <input type="text" class="form-control" id="horseName" name="horseName">
            <!-- <textarea class="form-control" id="message-text"></textarea> -->
          </div>
          </div>          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Weight:</label>
            <input type="text" class="form-control" id="weight" name="weight">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Colour:</label>
            <input type="text" class="form-control" id="colour" name="colour">
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
                        Runner Name
                      </th>
                      <th>
                        Race
                      </th>
                      <th>
                        Horse Name
                      </th>
                      <th>
                        Weight
                      </th>
                      <th>
                        Colour
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $runner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td>
                          <?php echo e($data->external_id); ?>

                        </td>
                        <td>
                        <?php echo e($data->name); ?>

                        </td>
                        <td>
                        <?php echo e($data->raceName); ?>

                        </td>
                        <td>
                        <?php echo e($data->horse_name); ?>

                        </td>
                        <td>
                        <?php echo e($data->weight); ?>

                        </td>
                        <td>
                        <?php echo e($data->colour); ?>

                        </td>
                        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">View Details</button></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\runner\resources\views/admin/tbm_runners.blade.php ENDPATH**/ ?>