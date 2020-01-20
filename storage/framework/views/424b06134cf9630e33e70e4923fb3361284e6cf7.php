<?php $__env->startSection('title','Edit business type'); ?>
<?php $__env->startSection('content'); ?>
	<div class="ui two column grid">
		<div class="four wide column">
			<div class="ui vertical menu">
			  <a class="item">
			    <h4 class="ui header">View all</h4>
			    <p>Check out our new promotions</p>
			  </a>
			  <a class="item">
			    <h4 class="ui header">Create</h4>
			    <p>Check out our collection of coupons</p>
			  </a>
			  <a class="item">
			    <h4 class="ui header">Rebates</h4>
			    <p>Visit our rebate forum for information on claiming rebates</p>
			  </a>
			</div>
		</div>
		<div class="six wide column">
			<form class="ui form" action="<?php echo e(route('businesstype.update')); ?>" method = "post">
		        <?php echo csrf_field(); ?>
		        <div class="field">
		          <label for="code">Type code:</label>
		          <input type="text" name = "business_type_code" id = "business_type_code" class="form-control" required value = "<?php echo e($business_type->code); ?>">
		        </div>
		        <div class="field">
		          <label for="business_type_name">Name:</label>
		          <input type="text" name = "business_type_name" id = "business_type_name" class="form-control" required value="<?php echo e($business_type->business_type_name); ?>">
		        </div>
		        <input type="hidden" name="id" value = "<?php echo e($business_type->id); ?>">
		        <button type = "submit" class = "ui button">Save</button>
		    </form>
		</div>
	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Reestr code\company-register\company-register\resources\views/businesstype/edit.blade.php ENDPATH**/ ?>