<?php $__env->startSection('title','Регистрация предприятия в реестре'); ?>
<?php $__env->startSection('content'); ?>
  <div class="ui container">
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
          <label for="business_type_dropdown">Организационно-правовая форма:</label>
          <select id="business_type_dropdown" name="business_type_dropdown" class="ui search dropdown">
            <option value="">Выберите ОПФ</option>
            <?php $__currentLoopData = $business_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($business_type->id); ?>"><?php echo e($business_type->code); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <div class="field">
          <label for="name">Название предприятия:</label>
          <input type="text" name = "name" id = "name" class="form-control" placeholder="Введите название предприятия" required>
        </div>
        <div class="field">
          <label for="regnumber">Регистрационный номер:</label>
          <input type="text" name = "regnumber" id = "regnumber" class="form-control" placeholder="Введите присвоенный регистрационный номер" required>
        </div>
        <div class="field">
          <label for="address">Полный адрес:</label>
          <input type="text" name = "address" id = "address" class="form-control" placeholder="Введите полный адрес" required>
        </div>
        <div class="field">
          <label for="facility_type_dropdown">Вид предприятия:</label>
          <select id="facility_type_dropdown" name="facility_type_dropdown" class="ui search dropdown" required>
            <option value="">Выберите вид предприятия</option>
            <?php $__currentLoopData = $facility_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($facility_type->id); ?>"><?php echo e($facility_type->facility_type_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <div class="field">
          <label for="subject_acting_dropdown">Субъект, осуществляющий деятельность:</label>
          <select name = "subject_acting_dropdown" id = "subject_acting_dropdown" class="ui search dropdown" required>
            <option value="">Выберите субъекта</option>
            <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($subject->id); ?>"><?php echo e($subject->subject_type); ?> "<?php echo e($subject->name); ?>"</option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <div class="field">
          <label for="subject_owner_dropdown">Субъект - владелец:</label>
          <select name = "subject_owner_dropdown" id = "subject_owner_dropdown" class="ui search dropdown" required>
            <option value="">Выберите субъекта</option>
            <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($subject->id); ?>"><?php echo e($subject->subject_type); ?> "<?php echo e($subject->name); ?>"</option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <button type = "submit" class = "ui button">Соханить</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/k.dzhunushaliev/dev/company-register/resources/views/company/create.blade.php ENDPATH**/ ?>