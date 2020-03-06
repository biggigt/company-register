@extends('layouts.master')
@section('title','Редактирование вида деятельности предприятий')
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
				<form class="ui form" action="{{route('activity.update')}}" method = "post">
			        @csrf
			        <div class="field">
			          <label for="activity_code">Type code:</label>
			          <input type="text" name = "activity_code" id = "activity_code" class="form-control" required value = "{{$activity->code}}">
			        </div>
			        <div class="field">
			          <label for="activity_type_name">Name:</label>
			          <input type="text" name = "activity_type_name" id = "activity_type_name" class="form-control" required value="{{$activity->activity_type_name}}">
			        </div>
			        <input type="hidden" name="id" value = "{{$activity->id}}">
			        <button type = "submit" class = "ui button">Save</button>
			    </form>
			</div>
		</div>
	</div>
	
@endsection