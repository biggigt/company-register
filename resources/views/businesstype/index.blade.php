@extends('layouts.master')
@section('title','Companies list')
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
		
		<table class="ui celled table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Code</th>
					<th>Business type name</th>
					<th>Options</th>
				</tr>
			</thead>
			@foreach($business_types as $business_type)
				<tr class="text-center">
					<td>{{ $business_type->id }}</td>
					<td>{{ $business_type->code }}</td>
					<td>{{ $business_type->business_type_name }}</td>
					<td>
						<a href="{{route('businesstype.edit',['id'=>$business_type->id])}}" class = "btn btn-info"><i class="edit outline icon"></i></a>
        				<a href="{{route('businesstype.destroy',['id'=>$business_type->id])}}" onclick="return confirm('Вы уверены что хотите удалить запись?');" class = "btn btn-danger"><i class="trash alternate outline icon"></i></a>
					</td>
				</tr>
			@endforeach
		</table>
	</div>
@endsection