@extends('layouts.master')
@section('title','View subject')

@section('content')
  <div class="row">
    <div class="ui container">
      <div class="ui menu" >
        <a class="item" href="/subject/create">
          Добавить
        </a>
        <a class="item" href="/subjects">
          Просмотреть
        </a>
      </div>
      <h4 class="ui horizontal divider header">
        <i class="bar chart icon"></i>
        Описание субъекта
      </h4>
      <table class="ui definition table">
        <tbody>
          <tr>
            <td class="two wide column">Название</td>
            <td>{{$subject->subject_type}} '{{$subject->name}}'</td>
          </tr>
          <tr>
            <td>Адрес</td>
            <td>{{$subject->address}}</td>
          </tr>
          <tr>
            <td>Код COATE</td>
            <td>{{$subject->coate}}</td>
          </tr>
          <tr>
            <td>ИНН</td>
            <td>{{$subject->inn}}</td>
          </tr>
          <tr>
            <td>Комментарий</td>
            <td>{{$subject->comment}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection