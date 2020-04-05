@extends('layouts.master')
@section('title','Добавить вид общественно-правовой формы')
@section('content')
	<div class="ui container">
		<div class="ui menu" >
			<a class="item" href="/businesstypes">
			  Просмотреть
			</a>
			<a class="item" href="/businesstypes/create">
			  Добавить
			</a>
		</div>
		<div class="ui two column centered grid">
		  <div class="column">
		  	<form class="ui form" action="{{route('businesstype.store')}}" method = "post">
	        @csrf
	        <div class="field">
	          <label for="code">Сокращение:</label>
	          <input type="text" name = "business_type_code" id = "business_type_code" class="form-control" required>
	        </div>
	        <div class="field">
	          <label for="business_type_name">Название:</label>
	          <input type="text" name = "business_type_name" id = "business_type_name" class="form-control" required>
	        </div>
	        <button type = "submit" class = "ui button">Добавить</button>
	    </form>
		  </div>
		</div>

	</div>

@endsection
