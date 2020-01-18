@extends('layouts.master')
@section('title','Edit Company')
@section('content')
  <div class="row">
    <div class="ui text container">
      <form class="ui form" action="{{route('companies.update')}}" method = "post">
        @csrf
        <div class="field">
          <label for="firstname">Firstname:</label>
          <input type="text" name = "firstname" id = "firstname" class="form-control" required value = "{{$company->firstname}}">
        </div>
        <div class="field">
          <label for="lastname">Lastname:</label>
          <input type="text" name = "lastname" id = "lastname" class="form-control" required value = "{{$company->lastname}}">
        </div>
        <div class="field">
          <label for="department">Department:</label>
          <input type="text" name = "department" id = "department" class="form-control" required value = "{{$company->department}}">
        </div>
        <div class="field">
          <label for="phone">Phone Number:</label>
          <input type="text" name = "phone" id = "phone" class="form-control" required value = "{{$company->phone}}">
        </div>
        <input type="hidden" name="id" value = "{{$company->id}}">
        <button type = "submit" class = "ui button">Submit</button>
      </form>
    </div>
  </div>
@endsection