@extends('layouts.master')
@section('title','Companies list')
@section('content')
  <div class="row">
    <div class="col-sm-12">
      <table class="ui celled table">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department</th>
            <th>Phone No.</th>
            <th>Actions</th>
            <th>Actions</th>
          </tr>
        </thead>
        @foreach($companies as $company)
          <tr class = "text-center">
            <td>{{ $company->id }}</td>
            <td>{{ $company->firstname }}</td>
            <td>{{ $company->lastname }}</td>
            <td>{{ $company->department }}</td>
            <td>{{ $company->phone }}</td>
            <td><a href="{{route('companies.edit',['id'=>$company->id])}}" class = "btn btn-info">Edit</a></td>
            <td><a href="{{route('companies.destroy',['id'=>$company->id])}}" class = "btn btn-danger">Delete</a></td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection