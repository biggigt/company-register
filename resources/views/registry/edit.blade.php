@extends('layouts.master')
@section('title','Edit registry type')
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
			<form class="ui form" action="{{route('registry.update')}}" method = "post">
		        @csrf
		        <div class="field">
		          <label for="registry_type_name">Type code:</label>
		          <input type="text" name = "registry_type_name" id = "registry_type_name" class="form-control" required value = "{{$registryType->registryType}}">
		        </div>
		        <div class="field">
		          <label for="registry_type_description">Name:</label>
		          <input type="text" name = "registry_type_description" id = "registry_type_description" class="form-control" required value="{{$registryType->registryDescription}}">
		        </div>
		        <input type="hidden" name="id" value = "{{$registryType->id}}">
		        <button type = "submit" class = "ui button">Save</button>
		    </form>
		</div>
	</div>
	
@endsection