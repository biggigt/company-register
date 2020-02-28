@extends('layouts.master')
@section('title','Create facility type')
@section('content')
	<div class="ui container">
		<div class="ui menu" >
			<a class="item" href="/registrytypes">
			  Просмотреть
			</a>
			<a class="item" href="/registrytypes/create">
			  Добавить
			</a>
		</div>
		<div class="ui two column centered grid">
			<div class="column">
				<form class="ui form" action="{{route('registry.store')}}" method = "post">
			        @csrf
			        <div class="field">
			          <label for="registry_type_name">Registry name:</label>
			          <input type="text" name = "registry_type_name" id = "registry_type_name" class="form-control" required>
			        </div>
			        <div class="field">
			          <label for="registry_type_description">Description:</label>
			          <input type="text" name = "registry_type_description" id = "registry_type_description" class="form-control" required>
			        </div>
			        <button type = "submit" class = "ui button">Create</button>
			    </form>
			</div>
		</div>
	</div>
	
@endsection