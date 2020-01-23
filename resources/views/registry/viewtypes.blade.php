@extends('layouts.master')
@section('title','Registries list')
@section('content')
	<div class="ui two column grid">
		<div class="four wide column">
			<div class="ui vertical menu">
			  <a class="item" href="/registrytypes">
			    <h4 class="ui header">View all</h4>
			    <p>Check out our new promotions</p>
			  </a>
			  <a class="item" href="/registrytypes/create">
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
							<th>Name</th>
							<th>Registry description</th>
							<th>Options</th>
						</tr>
					</thead>
					@foreach($registryTypes as $registryType)
						<tr class="text-center">
							<td>{{ $registryType->id }}</td>
							<td>{{ $registryType->registryType }}</td>
							<td>{{ $registryType->registryDescription }}</td>
							<td>
								<a href="{{route('registry.edit',['id'=>$registryType->id])}}" class = "btn btn-info"><i class="edit outline icon"></i></a>
                				<a href="{{route('registry.destroy',['id'=>$registryType->id])}}" class = "btn btn-danger"><i class="trash alternate outline icon"></i></a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection