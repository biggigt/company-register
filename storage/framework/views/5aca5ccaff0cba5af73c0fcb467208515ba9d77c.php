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
	    <div class="ui simple dropdown item">
	      Предприятия
	      <i class="dropdown icon"></i>
	      <div class="menu">
	        <a class="item" href="/companies"><i class="edit icon"></i> View</a>
	        <a class="item" href="/create"><i class="globe icon"></i> Add</a>
	      </div>
	    </div>
	    <a class="item">
	      <i class="mail icon"></i> Реестры
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
	    
	    <?php if(auth()->guard()->guest()): ?>
            <div class="right item"><a class="ui button" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></div>
            <?php if(Route::has('register')): ?>
                <div class="item"><a class="ui primary button" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></div>
            <?php endif; ?>
        <?php else: ?>
            <div class="right item">
            	<div class="ui dropdown">
        			<div class="text"><?php echo e(Auth::user()->name); ?></div>
					<i class="dropdown icon"></i>
					<div class="menu">
		                <div class="item">
		                    <a class="ui basic" href="<?php echo e(route('logout')); ?>"
		                       onclick="event.preventDefault();
		                                     document.getElementById('logout-form').submit();">
		                        <i class="sign out alternate icon"></i><?php echo e(__('Logout')); ?>

		                    </a>

		                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
		                        <?php echo csrf_field(); ?>
		                    </form>
		                </div>
	            	</div>
	            </div>
            </div>
        <?php endif; ?>
	  </div>
	</div>
<div class="ui container" style="padding-top: 20px;">
  <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
<?php echo $__env->yieldContent('scripts'); ?>
<script type="text/javascript">
  $('.ui.dropdown')
    .dropdown()
  ;
</script>
</html><?php /**PATH D:\Reestr code\company-register\company-register\resources\views/layouts/master.blade.php ENDPATH**/ ?>