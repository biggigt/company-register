@extends('layouts.master')
@section('title','Edit Company')
@section('content')
  <div class="row">
    <div class="ui text container">
      
      <form class="ui form" action="{{route('companies.update')}}" method = "post">
        @csrf
        <div class="field">
          <label for="business_type">Business type:</label>
          <input type="text" name = "business_type" id = "business_type" class="form-control" required value = "{{$company->business_type}}">
        </div>
        <div class="field">
          <label for="name">Name:</label>
          <input type="text" name = "name" id = "name" class="form-control" required value = "{{$company->business_type}}">
        </div>
        <div class="field">
          <label for="regnumber">Registration #:</label>
          <input type="text" name = "regnumber" id = "regnumber" class="form-control" required value = "{{$company->regnumber}}">
        </div>
        <div class="field">
          <label for="facility_type">Type of facility:</label>
          <input type="text" name = "facility_type" id = "facility_type" class="form-control" required value = "{{$company->facility_type}}">
        </div>
        <div class="field">
          <label for="subject_acting">Subject acting:</label>
          <input type="text" name = "subject_acting" id = "subject_acting" class="form-control" required value = "{{$company->subject_acting}}">
        </div>
        <div class="field">
          <label for="subject_owner">Subject owner:</label>
          <input type="text" name = "subject_owner" id = "subject_owner" class="form-control" required value = "{{$company->subject_owner}}">
        </div>
        <input type="hidden" name="id" value = "{{$company->id}}">
        <button type = "submit" class = "ui button">Submit</button>
      </form>
    </div>
  </div>
@endsection