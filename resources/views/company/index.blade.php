@extends('layouts.master')
@section('title','Список предприятий')
@section('content')
<div class="ui container" >
  <div class="ui menu" >
    <a class="item" href="/companies">
      Просмотреть
    </a>
    <a class="item" href="/create">
      Добавить
    </a>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <table class="ui celled table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Регистрационный номер</th>
            <th>Тип предприятия</th>
            <th>Хоз субъект</th>
            <th>Субъект владелец</th>
            <th>Действия</th>
          </tr>
        </thead>
        @foreach($companies as $company)
          <tr class = "text-center">
            <td>{{ $company->id }}</td>
            <td>{{ $company->business_types->code }} "{{ $company->name }}"</td>
            <td>{{ $company->regnumber }}</td>
            <td>{{ $company->facility_types->facility_type_name }}</td>
            <td>{{ $company->subject_actings->name }}</td>
            <td>{{ $company->subject_owners->name }}</td>
            <td><a href="{{route('companies.view',['id'=>$company->id])}}" class = "btn btn-info"><i class="folder open outline icon"></i></a>
                <a href="{{route('companies.edit',['id'=>$company->id])}}" class = "btn btn-info"><i class="edit outline icon"></i></a>
                <a href="{{route('companies.destroy',['id'=>$company->id])}}" onclick="return getConfirm(this);" class = "btn btn-danger"><i class="trash alternate outline icon"></i></a></td>
            </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
