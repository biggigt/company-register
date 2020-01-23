@extends('layouts.master')
@section('title','Companies list')
@section('content')
  <div class="row">
    <div class="col-sm-12">
      <table class="ui celled table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Registration number</th>
            <th>Facility type</th>
            <th>Subject acting</th>
            <th>Subject owner</th>
            <th>Options</th>
          </tr>
        </thead>
        @foreach($companies as $company)
          <tr class = "text-center">
            <td>{{ $company->id }}</td>
            <td>{{ $company->business_type }} "{{ $company->name }}"</td>
            <td>{{ $company->regnumber }}</td>
            <td>{{ $company->facility_type }}</td>
            <td>{{ $company->subject_acting }}</td>
            <td>{{ $company->subject_owner }}</td>
            <td><a href="{{route('companies.view',['id'=>$company->id])}}" class = "btn btn-info"><i class="folder open outline icon"></i></a>
              <a href="{{route('companies.edit',['id'=>$company->id])}}" class = "btn btn-info"><i class="edit outline icon"></i></a>
                <a href="{{route('companies.destroy',['id'=>$company->id])}}" class = "btn btn-danger"><i class="trash alternate outline icon"></i></a></td>
            
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection