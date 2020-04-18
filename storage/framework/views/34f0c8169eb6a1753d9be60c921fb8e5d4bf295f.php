<?php $__env->startSection('title','Просмотр данных о предприятии'); ?>

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="ui text container">
      <a class="ui tag label">Внутренний реестр</a>
      <a class="ui red tag label">Реестр ЕАЭС</a>
      <a class="ui green tag label">Featured</a>
      <h4 class="ui horizontal divider header">
        <i class="bar chart icon"></i>
        Описание предприятия
      </h4>
      <table class="ui definition table">
        <tbody>
          <tr>
            <td class="two wide column">Название</td>
            <td><?php echo e($company->business_type); ?> '<?php echo e($company->name); ?>'</td>
          </tr>
          <tr>
            <td>Регистрационный номер</td>
            <td><?php echo e($company->id); ?> <?php echo e($company->regnumber); ?></td>
          </tr>
          <tr>
            <td>Тип предприятия</td>
            <td><?php echo e($company->facility_type); ?></td>
          </tr>
          <tr>
            <td>Субъект Х</td>
            <td><?php echo e($company->subject_acting); ?></td>
          </tr>
          <tr>
            <td>Субъект В</td>
            <td><?php echo e($company->subject_owner); ?></td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/k.dzhunushaliev/dev/company-register/resources/views/company/view.blade.php ENDPATH**/ ?>