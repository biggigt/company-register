<?php $__env->startSection('title','Registries list'); ?>
<?php $__env->startSection('content'); ?>
<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item" href="/">
          <i class="home icon"></i> Главная
        </a>
        <a class="item">
          <i class="table icon"></i> Реестры
        </a>
        <div class="ui simple dropdown item">
          <i class="building icon"></i> Предприятия
          <i class="dropdown icon"></i>
          <div class="menu">
            <a class="item" href="/companies"><i class="bars icon"></i> Просмотр</a>
            <a class="item" href="/create"><i class="plus square outline icon"></i> Добавить</a>
          </div>
        </div>
        <div class="ui simple dropdown item">
          <i class="clipboard outline icon"></i> Справочники
          <i class="dropdown icon"></i>
          <div class="menu">
            <a class="item" href="/businesstypes"><i class="edit icon"></i> ОПФ</a>
            <a class="item" href="/registrytypes"><i class="globe icon"></i> Реестры</a>
            <a class="item" href="/facility"><i class="settings icon"></i> Виды предприятий</a>
          </div>
        </div>
        <div class="right item">
          <a class="ui inverted button">Log in</a>
          <a class="ui inverted button">Sign Up</a>
        </div>
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui inverted header">
        Реестр предприятий
      </h1>
      <h2>ГИВФБ ПКР</h2>
      <div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div>
    </div>

  </div>

  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">We Help Companies and Companions</h3>
          <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
          <h3 class="ui header">We Make Bananas That Can Dance</h3>
          <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
        </div>
        <div class="six wide right floated column">
          <img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="center aligned column">
          <a class="ui huge button">Check Them Out</a>
        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"What a Company"</h3>
          <p>Предприятия вошедшие в реестр ЕАЭС</p>
          <div class="ui statistic">
            <div class="label">
              Предприятий
            </div>
            <div class="value">
              190
            </div>
          </div>
        </div>
        <div class="column">
          <h3>"I shouldn't have gone with their competitor."</h3>
          <p>
            Внутренний реестр предприятий
          </p>
          <div class="ui statistic">
            <div class="value">
              5,550
            </div>
            <div class="label">
              Предприятий
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
      <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
      <a class="ui large button">Read More</a>
      <h4 class="ui horizontal header divider">
        <a href="#">Case Studies</a>
      </h4>
      <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
      <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
      <a class="ui large button">I'm Still Quite Interested</a>
    </div>
  </div>


  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Reestr code\company-register\company-register\resources\views/fancy.welcome.blade.php ENDPATH**/ ?>
