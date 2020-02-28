@extends('layouts.master')
@section('title','Create facility type')
@section('content')
	<div class="ui container">
		<div class="ui menu" >
			<a class="item" href="/facility">
			  Просмотреть
			</a>
			<a class="item" href="/facility/create">
			  Добавить
			</a>
		</div>
		<div class="ui two column centered grid">
			<div class="column">
				<form class="ui form" action="{{route('facility.store')}}" method = "post">
			        @csrf
			        <div class="field">
			          <label for="facility_type_code">Type code:</label>
			          <input type="text" name = "facility_type_code" id = "facility_type_code" class="form-control" required>
			        </div>
			        <div class="field">
			          <label for="facility_type_name">Name:</label>
			          <input type="text" name = "facility_type_name" id = "facility_type_name" class="form-control" required>
			        </div>
			        <button type = "submit" class = "ui button">Create</button>
			    </form>
			</div>
		</div>
	</div>
	
@endsection