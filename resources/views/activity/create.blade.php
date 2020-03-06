@extends('layouts.master')
@section('title','Добавить новый статус для предприятий')
@section('content')
	<div class="ui container">
		<div class="ui menu" >
			<a class="item" href="/status">
			  Просмотреть
			</a>
			<a class="item" href="/status/create">
			  Добавить
			</a>
		</div>
		<div class="ui two column centered grid">
			<div class="column">
				<form class="ui form" action="{{route('status.store')}}" method = "post">
			        @csrf
			        <div class="field">
			          <label for="status_code">Код:</label>
			          <input type="text" name = "status_code" id = "status_code" class="form-control" required>
			        </div>
			        <div class="field">
			          <label for="status_name">Название статуса:</label>
			          <input type="text" name = "status_name" id = "status_name" class="form-control" required>
			        </div>
			        <button type = "submit" class = "ui button">Добавить</button>
			    </form>
			</div>
		</div>
	</div>
@endsection