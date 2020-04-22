<?php $__env->startSection('title','Список предприятий'); ?>
<?php $__env->startSection('content'); ?>
<div class="ui container" >
  <div class="ui menu" >
    <a class="item">
      About Us
    </a>
    <a class="item">
      Jobs
    </a>
    <a class="item">
      Locations
    </a>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <table class="ui celled table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Регистрационный номер</th>
            <th>Тип предприятия</th>
            <th>Хоз субъект</th>
            <th>Субъект владелец</th>
            <th>Действия</th>
          </tr>
        </thead>
        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr class = "text-center">
            <td><?php echo e($company->id); ?></td>
            <td><?php echo e($company->business_type); ?> "<?php echo e($company->name); ?>"</td>
            <td><?php echo e($company->regnumber); ?></td>
            <td><?php echo e($company->facility_type); ?></td>
            <td><?php echo e($company->subject_acting); ?></td>
            <td><?php echo e($company->subject_owner); ?></td>
            <td><a href="<?php echo e(route('companies.view',['id'=>$company->id])); ?>" class = "btn btn-info"><i class="folder open outline icon"></i></a>
                <a href="<?php echo e(route('companies.edit',['id'=>$company->id])); ?>" class = "btn btn-info"><i class="edit outline icon"></i></a>
                <a href="<?php echo e(route('companies.destroy',['id'=>$company->id])); ?>" onclick="return getConfirm(this);" class = "btn btn-danger"><i class="trash alternate outline icon"></i></a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/k.dzhunushaliev/dev/company-register/resources/views/company/index.blade.php ENDPATH**/ ?>