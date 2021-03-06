<?php $__env->startSection('title','Create Company'); ?>
<?php $__env->startSection('content'); ?>
  <div class="ui container">
    <div class="ui divider"></div>
    <div class="ui text container">
      <div class="ui message">
        <div class="header">
          Changes in Service
        </div>
        <p>We just updated our privacy policy here to better service our customers. We recommend reviewing the changes.</p>
      </div>
      <form class="ui form" action="<?php echo e(route('companies.store')); ?>" method = "post">
        <?php echo csrf_field(); ?>
        <div class="field">
          <label for="business_type">Business type:</label>
          <input type="text" name = "business_type" id = "business_type" class="form-control" required>
        </div>
        <div class="field">
          <label for="name">Name:</label>
          <input type="text" name = "name" id = "name" class="form-control" required>
        </div>
        <div class="field">
          <label for="regnumber">Registration #:</label>
          <input type="text" name = "regnumber" id = "regnumber" class="form-control" required>
        </div>
        <div class="field">
          <label for="facility_type">Type of facility:</label>
          <input type="text" name = "facility_type" id = "facility_type" class="form-control" required>
        </div>
        <div class="field">
          <label for="subject_acting">Subject acting:</label>
          <input type="text" name = "subject_acting" id = "subject_acting" class="form-control" required>
        </div>
        <div class="field">
          <label for="subject_owner">Subject owner:</label>
          <input type="text" name = "subject_owner" id = "subject_owner" class="form-control" required>
        </div>
        <button type = "submit" class = "ui button">Submit</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Reestr code\company-register\resources\views/company/create.blade.php ENDPATH**/ ?>