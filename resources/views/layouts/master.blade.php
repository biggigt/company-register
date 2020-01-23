<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/semantic/semantic.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="{{ asset('assets/semantic/semantic.min.js') }}"></script>
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
	    
	    @guest
            <div class="right item"><a class="ui button" href="{{ route('login') }}">{{ __('Login') }}</a></div>
            @if (Route::has('register'))
                <div class="item"><a class="ui primary button" href="{{ route('register') }}">{{ __('Register') }}</a></div>
            @endif
        @else
            <div class="right item">
            	<div class="ui dropdown">
        			<div class="text">{{ Auth::user()->name }}</div>
					<i class="dropdown icon"></i>
					<div class="menu">
		                <div class="item">
		                    <a class="ui basic" href="{{ route('logout') }}"
		                       onclick="event.preventDefault();
		                                     document.getElementById('logout-form').submit();">
		                        <i class="sign out alternate icon"></i>{{ __('Logout') }}
		                    </a>

		                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                        @csrf
		                    </form>
		                </div>
	            	</div>	
	            </div>
            </div>
        @endguest
	  </div>
	</div>
<div class="ui container" style="padding-top: 20px;">
	@if (session('info'))
		@component('notification')
			{{ session('info') }}
		@endcomponent
	@endif
  	@yield('content')
</div>
</body>
@yield('scripts')
<script type="text/javascript">
  $('.ui.dropdown')
    .dropdown()
  ;
  $(document).ready(function(){
  	$(".notification").delay(4000).slideUp(300);
    });
</script>
</html>