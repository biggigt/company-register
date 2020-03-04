@extends('layouts.master')
@section('title','Редактирование статуса предприятий')
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
				<form class="ui form" action="{{route('status.update')}}" method = "post">
			        @csrf
			        <div class="field">
			          <label for="status_code">Type code:</label>
			          <input type="text" name = "status_code" id = "status_code" class="form-control" required value = "{{$status->code}}">
			        </div>
			        <div class="field">
			          <label for="status_name">Name:</label>
			          <input type="text" name = "status_name" id = "status_name" class="form-control" required value="{{$status->name}}">
			        </div>
			        <input type="hidden" name="id" value = "{{$status->id}}">
			        <button type = "submit" class = "ui button">Save</button>
			    </form>
			</div>
		</div>
	</div>
	
@endsection