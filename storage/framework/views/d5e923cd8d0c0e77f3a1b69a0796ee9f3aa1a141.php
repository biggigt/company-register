
<?php $__env->startSection('title','Companies list'); ?>
<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-sm-12">
      <table class="ui celled table">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department</th>
            <th>Phone No.</th>
            <th>Actions</th>
            <th>Actions</th>
          </tr>
        </thead>
        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr class = "text-center">
            <td><?php echo e($company->id); ?></td>
            <td><?php echo e($company->firstname); ?></td>
            <td><?php echo e($company->lastname); ?></td>
            <td><?php echo e($company->department); ?></td>
            <td><?php echo e($company->phone); ?></td>
            <td><a href="<?php echo e(route('companies.edit',['id'=>$company->id])); ?>" class = "btn btn-info">Edit</a></td>
            <td><a href="<?php echo e(route('companies.destroy',['id'=>$company->id])); ?>" class = "btn btn-danger">Delete</a></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/k.dzhunushaliev/dev/company-register/resources/views/company/index.blade.php ENDPATH**/ ?>