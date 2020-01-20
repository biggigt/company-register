@extends('layouts.master')
@section('title','Companies list')
@section('content')
	<div class="ui two column grid">
		<div class="four wide column">
			<div class="ui vertical menu">
			  <a class="item" href="/businesstypes">
			    <h4 class="ui header">View all</h4>
			    <p>Check out our new promotions</p>
			  </a>
			  <a class="item" href="/businesstypes/create">
			    <h4 class="ui header">Create</h4>
			    <p>Check out our collection of coupons</p>
			  </a>
			</div>
		</div>
		<div class="ten wide column">
			<div class="col-sm-12">
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
                				<a href="{{route('businesstype.destroy',['id'=>$business_type->id])}}" class = "btn btn-danger"><i class="trash alternate outline icon"></i></a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection