@extends('layouts.master')
@section('title','Create facility type')
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
		<div class="six wide column">
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
	
@endsection