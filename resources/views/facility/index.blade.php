@extends('layouts.master')
@section('title','Виды предприятий')
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

		<table class="ui celled table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Код</th>
					<th>Название</th>
					<th>Действия</th>
				</tr>
			</thead>
			@foreach($facility_types as $facility_type)
				<tr class="text-center">
					<td>{{ $facility_type->id }}</td>
					<td>{{ $facility_type->code }}</td>
					<td>{{ $facility_type->facility_type_name }}</td>
					<td>
						<a href="{{route('facility.edit',['id'=>$facility_type->id])}}" class = "btn btn-info"><i class="edit outline icon"></i></a>
        				<a href="{{route('facility.destroy',['id'=>$facility_type->id])}}" onclick="return confirm('Вы уверены что хотите удалить запись?');" class = "btn btn-danger"><i class="trash alternate outline icon"></i></a>
					</td>
				</tr>
			@endforeach
		</table>
	</div>
@endsection
