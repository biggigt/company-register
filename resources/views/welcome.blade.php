@extends('layouts.master')
@section('title','Реестр предприятий | Добро пожаловать')
@section('content')
<h1 class="ui center aligned icon header">
    <div class="content">
        <div class="sub header">Государственная инспекция по ветеринарной и фитосанитарной безопасности при Правительсте КР</div>
    </div>
</h1>
<div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
        <div class="row">
            <div class="eight wide column">
                <h3 class="ui header">Реестры предприятий</h3>
                <p>Информационная система "Реестр предприятий" разработана ГИВФБ при ПКР. ИС хранит в себе данные о юридических лицах прошедших регистрацию в реестры экспортирующих предприятий.</p>
                <h3 class="ui header">Подробная информация</h3>
                <p>Тел для справок и технической поддержки: 44-55-66</p>
            </div>
            <div class="six wide right floated column">
                <img src="assets/images/logo.png" class="ui rounded image">
            </div>
        </div>
        <div class="row">
            <div class="center aligned column">
                <a class="ui huge button">Перейти к реестру</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<style type="text/css">
    .ui.vertical.stripe {
        padding: 8em 0em;
    }

    .ui.vertical.stripe h3 {
        font-size: 2em;
    }

    .ui.vertical.stripe .button+h3,
    .ui.vertical.stripe p+h3 {
        margin-top: 3em;
    }

    .ui.vertical.stripe .floated.image {
        clear: both;
    }

    .ui.vertical.stripe p {
        font-size: 1.33em;
    }

    .ui.vertical.stripe .horizontal.divider {
        margin: 3em 0em;
    }
</style>
@stop