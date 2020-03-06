@extends('layouts.master')
@section('title','Добавить новый вид деятельности для предприятий')
@section('content')
	<div class="ui container">
		<div class="ui menu" >
			<a class="item" href="/activity">
			  Просмотреть
			</a>
			<a class="item" href="/activity/create">
			  Добавить
			</a>
		</div>
		<div class="ui two column centered grid">
			<div class="column">
				<form class="ui form" action="{{route('activity.store')}}" method = "post">
			        @csrf
			        <div class="field">
			          <label for="activity_code">Код:</label>
			          <input type="text" name = "activity_code" id = "activity_code" class="form-control" required>
			        </div>
			        <div class="field">
			          <label for="activity_type_name">Вид деятельности:</label>
			          <input type="text" name = "activity_type_name" id = "activity_type_name" class="form-control" required>
			        </div>
			        <button type = "submit" class = "ui button">Добавить</button>
			    </form>
			</div>
		</div>
	</div>
@endsection