@extends('layouts.master')
@section('title','Просмотр данных о предприятии')

@section('content')
  <div class="row">
    <div class="ui text container">
      <a class="ui tag label">Внутренний реестр</a>
      <a class="ui red tag label">Реестр ЕАЭС</a>
      <a class="ui green tag label">Featured</a>
      <h4 class="ui horizontal divider header">
        <i class="bar chart icon"></i>
        Описание предприятия
      </h4>
      <table class="ui definition table">
        <tbody>
          <tr>
            <td class="two wide column">Название</td>
            <td>{{$company->business_type}} '{{$company->name}}'</td>
          </tr>
          <tr>
            <td>Регистрационный номер</td>
            <td>{{$company->id}} {{$company->regnumber}}</td>
          </tr>
          <tr>
            <td>Тип предприятия</td>
            <td>{{$company->facility_type}}</td>
          </tr>
          <tr>
            <td>Субъект Х</td>
            <td>{{$company->subject_acting}}</td>
          </tr>
          <tr>
            <td>Субъект В</td>
            <td>{{$company->subject_owner}}</td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
@endsection
