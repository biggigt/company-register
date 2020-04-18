<?php $__env->startSection('title','Редактирование информации о компании'); ?>

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="ui text container">
      <form class="ui form" action="<?php echo e(route('companies.update')); ?>" method = "post">
        <?php echo csrf_field(); ?>
        <div class="field">
          <label for="business_type">Business type:</label>
          <input type="text" name = "business_type" id = "business_type" class="form-control" required value = "<?php echo e($company->business_type); ?>">
        </div>
        <div class="field">
          <label for="name">Name:</label>
          <input type="text" name = "name" id = "name" class="form-control" required value = "<?php echo e($company->name); ?>">
        </div>
        <div class="field">
          <label for="regnumber">Registration #:</label>
          <input type="text" name = "regnumber" id = "regnumber" class="form-control" required value = "<?php echo e($company->regnumber); ?>">
        </div>
        <div class="field">
          <label for="address">Full address:</label>
          <input type="text" name = "address" id = "address" class="form-control" required value = "<?php echo e($company->address); ?>">
        </div>
        <div class="field">
          <label for="facility_type">Type of facility:</label>
          <input type="text" name = "facility_type" id = "facility_type" class="form-control" required value = "<?php echo e($company->facility_type); ?>">
        </div>
        <div class="field">
          <label for="subject_acting">Subject acting:</label>
          <input type="text" name = "subject_acting" id = "subject_acting" class="form-control" required value = "<?php echo e($company->subject_acting); ?>">
        </div>
        <div class="field">
          <label for="subject_owner">Subject owner:</label>
          <input type="text" name = "subject_owner" id = "subject_owner" class="form-control" required value = "<?php echo e($company->subject_owner); ?>">
        </div>
        <div class="field">
          <div class="inline field">
            <div class="ui toggle checkbox">
              <input id = "add_to_registry" name = "add_to_registry" type="checkbox" tabindex="0" class="hidden">
              <label>Реестр предприятий ЕАЭС</label>
            </div>
          </div>
          <div class="inline field">
            <div class="ui toggle checkbox">
              <input type="checkbox" tabindex="0" class="hidden">
              <label>Внутренний реестр предприятий</label>
            </div>
          </div>
        </div>
        <input type="hidden" name="id" value = "<?php echo e($company->id); ?>">
        <button type = "submit" class = "ui button">Submit</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
  $('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  })
  ;
  $('.ui.checkbox')
  .checkbox()
  ;
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/k.dzhunushaliev/dev/company-register/resources/views/company/edit.blade.php ENDPATH**/ ?>