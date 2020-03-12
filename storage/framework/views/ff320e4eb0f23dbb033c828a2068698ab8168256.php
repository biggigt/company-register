<?php $__env->startSection('title','Виды общественно-правовых форм'); ?>
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
		
		<table class="ui celled table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Code</th>
					<th>Business type name</th>
					<th>Options</th>
				</tr>
			</thead>
			<?php $__currentLoopData = $business_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr class="text-center">
					<td><?php echo e($business_type->id); ?></td>
					<td><?php echo e($business_type->code); ?></td>
					<td><?php echo e($business_type->business_type_name); ?></td>
					<td>
						<a href="<?php echo e(route('businesstype.edit',['id'=>$business_type->id])); ?>" class = "btn btn-info"><i class="edit outline icon"></i></a>
        				<a href="<?php echo e(route('businesstype.destroy',['id'=>$business_type->id])); ?>" onclick="return getConfirm(this);" class = "btn btn-danger"><i class="trash alternate outline icon"></i></a>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Reestr code\company-register\company-register\resources\views/businesstype/index.blade.php ENDPATH**/ ?>