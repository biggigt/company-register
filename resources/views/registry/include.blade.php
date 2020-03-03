@extends('layouts.master')
@section('title','Create facility type')
@section('content')
	<div class="ui container">
		<div class="ui menu" >
			<a class="item" href="/status">
			  Просмотреть статусы
			</a>
			<a class="item" href="/registry/include">
			  Добавить в реестр
			</a>
		</div>
		<div class="ui two column centered grid">
			<div class="column">
				<form class="ui form" action="{{route('registry.include')}}" method = "post">
			        @csrf
			        <div class="field">
			          <label for="registry_name">Registry name:</label>
			          <select name = "registry_name" id = "registry_name" class="ui search dropdown" required>
			          	<option value="">Выберите реестр</option>
		                @foreach($registries as $registry)
		                  <option value="{{ $registry->id }}">{{ $registry->name }}</option>
		                @endforeach
			          </select>
			        </div>
			        <div class="field">
			          <label for="company_name">Название предприятия:</label>
			          <select name = "company_name" id = "company_name" class="ui search dropdown" required>
			          	<option value="">Выберите предприятие</option>
		                @foreach($companies as $company)
		                  <option value="{{ $company->id }}">{{ $company->name }}</option>
		                @endforeach
			          </select>
			        </div>
			        <div class="field">
			          <label for="status">Статус:</label>
			          <select name = "status" id = "status" class="ui search dropdown" required>
			          	<option value="">Выберите статус</option>
		                @foreach($statuses as $status)
		                  <option value="{{ $status->id }}">{{ $status->name }}</option>
		                @endforeach
			          </select>
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