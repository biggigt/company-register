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
	      <i class="home icon"></i> Home
	    </a>
	    <a class="item" href="/companies">
	      <i class="grid layout icon"></i> Browse
	    </a>
	    <a class="item">
	      <i class="mail icon"></i> Messages
	    </a>
	    <div class="ui simple dropdown item">
	      More
	      <i class="dropdown icon"></i>
	      <div class="menu">
	        <a class="item"><i class="edit icon"></i> Edit Profile</a>
	        <a class="item"><i class="globe icon"></i> Choose Language</a>
	        <a class="item"><i class="settings icon"></i> Account Settings</a>
	      </div>
	    </div>
	    <div class="right item">
	      <div class="ui input"><input type="text" placeholder="Search..."></div>
	    </div>
	    <div class="item"><?php echo e(Auth::user()->name); ?></div>
	  </div>
	</div>
<div class="ui container" style="padding-top: 20px;">
  <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html><?php /**PATH /Users/k.dzhunushaliev/dev/company-register/resources/views/layouts/master.blade.php ENDPATH**/ ?>