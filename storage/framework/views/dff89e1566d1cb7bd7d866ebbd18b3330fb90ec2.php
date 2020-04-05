<?php $__env->startSection('title','Добавить вид общественно-правовой формы'); ?>
<?php $__env->startSection('content'); ?>
	<div class="ui container">
		<div class="ui menu" >
			<a class="item" href="/businesstypes">
			  Просмотреть
			</a>
			<a class="item" href="/businesstypes/create">
			  Добавить
			</a>
		</div>
		<div class="ui two column centered grid">
		  <div class="column">
		  	<form class="ui form" action="<?php echo e(route('businesstype.store')); ?>" method = "post">
	        <?php echo csrf_field(); ?>
	        <div class="field">
	          <label for="code">Сокращение:</label>
	          <input type="text" name = "business_type_code" id = "business_type_code" class="form-control" required>
	        </div>
	        <div class="field">
	          <label for="business_type_name">Название:</label>
	          <input type="text" name = "business_type_name" id = "business_type_name" class="form-control" required>
	        </div>
	        <button type = "submit" class = "ui button">Добавить</button>
	    </form>
		  </div>
		</div>

	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/k.dzhunushaliev/dev/company-register/resources/views/businesstype/create.blade.php ENDPATH**/ ?>