<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo e(asset('assets/semantic/semantic.min.css')); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="<?php echo e(asset('assets/semantic/semantic.min.js')); ?>"></script>
</head>
<body>
	<div class="ui attached stackable menu">
	  <div class="ui container">
	  	<div class="item">
			<img src="/assets/images/logo1.jpg">
		</div>
	    <a class="item" href="/">
	      <i class="home icon"></i> Главная
	    </a>
	    <a class="item" href="/companies">
	      <i class="grid layout icon"></i> Предприятия
	    </a>
	    <a class="item">
	      <i class="mail icon"></i> Дополнительно
	    </a>
	    <div class="ui simple dropdown item">
	      Справочники
	      <i class="dropdown icon"></i>
	      <div class="menu">
	        <a class="item" href="/businesstypes"><i class="edit icon"></i> Business type</a>
	        <a class="item"><i class="globe icon"></i> Choose Language</a>
	        <a class="item"><i class="settings icon"></i> Account Settings</a>
	      </div>
	    </div>
	    <div class="right item">
	      <div class="ui input"><input type="text" placeholder="Search..."></div>
	    </div>
	    <div class="item">Username</div>
	  </div>
	</div>
<div class="ui container" style="padding-top: 20px;">
  <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
<?php echo $__env->yieldContent('scripts'); ?>
</html><?php /**PATH D:\Reestr code\company-register\company-register\resources\views/layouts/master.blade.php ENDPATH**/ ?>