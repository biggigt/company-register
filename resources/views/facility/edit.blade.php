@extends('layouts.master')
@section('title','Edit facility type')
@section('content')
	<div class="ui two column grid">
		<div class="four wide column">
			<div class="ui vertical menu">
			  <a class="item" href="/facility">
			    <h4 class="ui header">View all</h4>
			    <p>Check out our new promotions</p>
			  </a>
			  <a class="item" href="/facility/create">
			    <h4 class="ui header">Create</h4>
			    <p>Check out our collection of coupons</p>
			  </a>
			</div>
		</div>
		<div class="six wide column">
			<form class="ui form" action="{{route('facility.update')}}" method = "post">
		        @csrf
		        <div class="field">
		          <label for="facility_type_code">Type code:</label>
		          <input type="text" name = "facility_type_code" id = "facility_type_code" class="form-control" required value = "{{$facility_type->code}}">
		        </div>
		        <div class="field">
		          <label for="facility_type_name">Name:</label>
		          <input type="text" name = "facility_type_name" id = "facility_type_name" class="form-control" required value="{{$facility_type->facility_type_name}}">
		        </div>
		        <input type="hidden" name="id" value = "{{$facility_type->id}}">
		        <button type = "submit" class = "ui button">Save</button>
		    </form>
		</div>
	</div>
	
@endsection