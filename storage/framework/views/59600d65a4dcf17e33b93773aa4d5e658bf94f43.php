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
  <style type="text/css">
    .footer.segment {
      padding: 5em 0em;
    }
  </style>
</head>
<body>
<div class="pusher"><div class="full height">
<div class="toc" style="width:250px;position: fixed;height: 100%;"><div class="ui vertical inverted menu" style="width: 250px;height: 100%;background: #005d9c;border-radius: 0px;overflow: auto;">
<a class="item" href="/introduction/getting-started.html">
  <b>Реестр предприятий</b>
</a>
<a class="item" href="/introduction/new.html">
  <b>1.0.1</b>
</a>
<div class="item">
  <div class="header">Реестры</div>
  <div class="menu">
	<a class="item" href="/registry/view">Последние добавленные</a>
  	<a class="item" href="/introduction/integrations.html">
    ЕАЭС</a>
  	<a class="item" href="/introduction/build-tools.html">
    Внутренний реестр</a>
  	<a class="item" href="/introduction/advanced-usage.html">
    1а</a>
  </div>
</div>
<div class="item">
  <div class="header">Предприятия</div>
  <div class="menu">
    
      <a class="item" href="/companies">
        Просмотр
      </a>
    
      <a class="item" href="/create">
        Добавить
      </a>
    
  </div>
</div>
<div class="item">
  <div class="header">Cубъекты</div>
  <div class="menu">
    
      <a class="item" href="/subjects">
        Просмотр
      </a>
    
      <a class="item" href="/subject/create">
        Добавить
      </a>
    
  </div>
</div>
<div class="item">
  <div class="header">Присвоение/обновление статуса</div>
  <div class="menu">
    
      <a class="item" href="/subjects">
        Добавить в реестр
      </a>
    
      <a class="item" href="/subject/create">
        Просмотреть/обновить статусы
      </a>
    
  </div>
</div>
<div class="item">
  <div class=" header">Справочники</div>
  <div class="menu">
      <a class="item" href="/businesstypes">ОПФ</a>
      <a class="item" href="/registrytypes">Реестры</a>
      <a class="item" href="/facility">Виды предприятий</a>
  </div>
</div>
<div class="item">
	<div class="ui accordion inverted">
	  <div class="title">
	    Поиск и фильтры
	    <i class="dropdown icon"></i>
	  </div>
	  <div class="content">
	  	<label for="s_regnumber">Номер в реестре</label>
	  	<div class="ui fluid input small">
		  <input name="s_regnumber" id="s_regnumber" type="text" placeholder="Номер..." class="form-control">
		</div>
		<div class="ui divider"></div>
	  	<label for="s_name">Название предприятия</label>
	  	<div class="ui fluid input small">
		  <input name="s_name" id="s_name" type="text" placeholder="Название..." class="form-control">
		</div>
		<div class="ui divider"></div>
	  	<label for="dd">Вид объекта</label>
	  	<select id = "dd" name="dd" class="ui fluid search dropdown small">
		  <option value="">Выберите</option>
		  <option value="ML">Молокоперерабатывающие предприятия</option>
		  <option value="MT">Мясоперерабатывающие предприятия</option>
		  <option value="HO">Охотхозяйства</option>
		  <option value="Bee">Пасеки</option>
		</select>
		<div class="ui divider"></div>
		<label for="s_name">ИНН субъекта</label>
	  	<div class="ui fluid input small">
		  <input name="s_name" id="s_name" type="text" placeholder="Название..." class="form-control">
		</div>
		<div class="ui divider"></div>
	  	<label for="dd">Статус</label>
	  	<select id = "dd" name="dd" class="ui fluid search dropdown small">
		  <option value="">Выберите</option>
		  <option value="ML">Разрешено</option>
		  <option value="MT">Временный заперт</option>
		  <option value="HO">Усиленный контроль</option>
		</select>

	    <p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
	  </div>
	</div>
</div>
<div class="item" style="position: relative;bottom: 0px;">
	<div class=" header"></div>
	  <div class="menu" style="padding: 1em;">
	  	<p>АИС "Реестр предприятий"</p>
		<p>© 2020 «ГИВФБ при ПКР»</p>
	  </div>
	</div>
</div>

</div>
</div>

<div class="article" style="margin-left: 250px;padding-top: 10px;">
	<div class="ui horizontal divider"><?php echo $__env->yieldContent('title'); ?></div>
<!-- <div class="ui container" style="padding-top: 20px;position: relative;min-height: 80%;"> -->
	<?php if(session('info')): ?>
		<?php $__env->startComponent('notification'); ?>
			<?php echo e(session('info')); ?>

		<?php echo $__env->renderComponent(); ?>
	<?php endif; ?>
  	<?php echo $__env->yieldContent('content'); ?>
<!-- </div> -->
<!-- <div class="ui  vertical footer segment" style="border-top: 1pxborder-top: 1px solid #DDDDDD;
    box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.08) inset;
    background-color: #FAFAFA;
    padding-top: 2em; solid #DDDDDD;
    box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.08) inset;
    background-color: #FAFAFA;
    padding-top: 2em;position: fixed;bottom: 0px;padding: 1em;width: 100%;">
  <div class="ui center aligned container">
    <div class="ui stackable grid">
      <div class="three wide column">
        <h4 class="ui header">РЕЕСТРЫ ПРЕДПРИЯТИЙ</h4>
        <div class="ui link list">
          <a class="item" href="https://www.transifex.com/organization/semantic-org/" target="_blank">Подать заявку</a>
          <a class="item" href="https://github.com/Semantic-Org/Semantic-UI/issues" target="_blank">Узнать больше о реестре</a>
        </div>
      </div>
      <div class="three wide column">
        <h4 class="ui header">ГИВФБ при ПКР</h4>
        <div class="ui link list">
          <a class="item" href="https://github.com/Semantic-Org/Semantic-UI" target="_blank">Веб-сайт</a>
          <a class="item" href="http://forums.semantic-ui.com" target="_blank">Контакты</a>
        </div>
      </div>
      <div class="seven wide right floated column">
        <h4 class="ui header">АИС "Реестр предприятий"</h4>
        <p>© 2020 «ГИВФБ при ПКР»</p>
      </div>
    </div>
  </div>
</div> -->
</div>

</div>
</div>
</body>

<?php echo $__env->yieldContent('scripts'); ?>
<script type="text/javascript">
  $('.ui.dropdown')
    .dropdown()
  ;
  function myFunction() {
  	$('.ui.sidebar')
	  .sidebar('toggle')
	;
  };
  $('.accordion')
  .accordion({
    selector: {
      trigger: ' .title '
    }
  })
;
  
  $(document).ready(function(){
  	$(".notification").delay(4000).slideUp(300);
    });
</script>
</html><?php /**PATH /Users/k.dzhunushaliev/dev/company-register/resources/views/layouts/master.blade.php ENDPATH**/ ?>