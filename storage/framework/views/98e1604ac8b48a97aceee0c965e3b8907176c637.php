<?php $__env->startSection('title','Edit Company'); ?>
<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="ui text container">
      <form class="ui form" action="<?php echo e(route('companies.update')); ?>" method = "post">
        <?php echo csrf_field(); ?>
        <div class="field">
          <label for="firstname">Firstname:</label>
          <input type="text" name = "firstname" id = "firstname" class="form-control" required value = "<?php echo e($company->firstname); ?>">
        </div>
        <div class="field">
          <label for="lastname">Lastname:</label>
          <input type="text" name = "lastname" id = "lastname" class="form-control" required value = "<?php echo e($company->lastname); ?>">
        </div>
        <div class="field">
          <label for="department">Department:</label>
          <input type="text" name = "department" id = "department" class="form-control" required value = "<?php echo e($company->department); ?>">
        </div>
        <div class="field">
          <label for="phone">Phone Number:</label>
          <input type="text" name = "phone" id = "phone" class="form-control" required value = "<?php echo e($company->phone); ?>">
        </div>
        <input type="hidden" name="id" value = "<?php echo e($company->id); ?>">
        <button type = "submit" class = "ui button">Submit</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Reestr code\company-register\resources\views/company/edit.blade.php ENDPATH**/ ?>