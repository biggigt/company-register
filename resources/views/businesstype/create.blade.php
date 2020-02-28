@extends('layouts.master')
@section('title','Create business type')
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
	          <label for="code">Type code:</label>
	          <input type="text" name = "business_type_code" id = "business_type_code" class="form-control" required>
	        </div>
	        <div class="field">
	          <label for="business_type_name">Name:</label>
	          <input type="text" name = "business_type_name" id = "business_type_name" class="form-control" required>
	        </div>
	        <button type = "submit" class = "ui button">Create</button>
	    </form>
		  </div>
		</div>
		
	</div>
	
@endsection