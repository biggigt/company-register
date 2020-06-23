@extends('layouts.master')
@section('title','Предприятия вошедшие в реестр')
@section('content')
  <div class="ui container">

    <table class="ui small compact celled table">
      <thead>
        <tr>
            <th>#</th>
            <th>Основная информация</th>
            <th>Хоз субъект, осуществляющий деятельность</th>
            <th>Хоз субъект - владелец</th>
            <th>Продукция и виды деятельности</th>
            <th class="three wide">Статус</th>
            @guest
            @else
            <th>Действия</th>
            @endguest
        </tr>
      </thead>
      @foreach($companies as $company)
        <tr class = "text-center top aligned">
          <td>{{ $loop->iteration }}</td>
          <td><b>Номер:</b> {{ $company->regnumber }}<br>
              <b>Название:</b> {{$company->business_code}} "{{$company->name}}"<br>
              <b>Адрес:</b> {{$company->address}}<br>
              <b>Тип предприятия:</b> {{$company->facility_type_name}}
          </td>
          <td>{{ $company->sa_name }} -> {{ $company->sa_address }}</td>
          <td>{{ $company->so_name }} -> {{ $company->so_address }}</td>
          <td><b>{{ $company->hsc_code }} {{ $company->hsc_name }}</b><br>
              [<i>{{ $company->activity_types }}</i>]
          </td>
          <td class="{{$company->status_color}}">
              <b>{{ $company->status }}</b> | {{ $company->countries_id }} | Акт: {{ $company->act }} | Внесен: {{ $company->c_date }}
          </td>
            @guest
            @else
          <td><a href="{{route('companies.view',['id'=>$company->id])}}" class = "btn btn-info"><i class="folder open outline icon"></i></a>
              <a href="{{route('companies.edit',['id'=>$company->id])}}" class = "btn btn-info"><i class="edit outline icon"></i></a>
              <a href="{{route('companies.destroy',['id'=>$company->id])}}" class = "btn btn-danger"><i class="trash alternate outline icon"></i></a></td>
            @endguest
        </tr>
      @endforeach
        <tfoot>
        <tr><th>{{$companies->total()}}</th>
            <th>Всего записей в текущем реестре</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            @guest
            @else
            <th></th>
            @endguest
        </tr></tfoot>
    </table>
    {{ $companies->links('vendor.pagination.semantic-ui') }}
  </div>
@endsection
