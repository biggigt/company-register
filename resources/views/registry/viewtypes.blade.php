@extends('layouts.master')
@section('title','Список реестров')
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

		<table class="ui celled table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Название</th>
					<th>Описание реестра</th>
					<th>Действия</th>
				</tr>
			</thead>
			@foreach($registryTypes as $registryType)
				<tr class="text-center">
					<td>{{ $registryType->id }}</td>
					<td>{{ $registryType->registryType }}</td>
					<td>{{ $registryType->registryDescription }}</td>
					<td>
						<a href="{{route('registry.edit',['id'=>$registryType->id])}}" class = "btn btn-info"><i class="edit outline icon"></i></a>
        				<a href="{{route('registry.destroy',['id'=>$registryType->id])}}" onclick="return getConfirm(this);" class = "btn btn-danger"><i class="trash alternate outline icon"></i></a>
					</td>
				</tr>
			@endforeach
		</table>
	</div>
@endsection
