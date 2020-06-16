@extends('layouts.master')
@section('title','Редактировать субъект')

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
      <form class="ui form" action="{{route('subject.update')}}" method = "post">
        @csrf
        <div class="field">
          <label for="subject_type">ОПФ:</label>
          <input type="text" name = "subject_type" id = "subject_type" class="form-control" required value = "{{$subject->subject_type}}">
        </div>
        <div class="field">
          <label for="name">Название/ФИО:</label>
          <input type="text" name = "name" id = "name" class="form-control" required value = "{{$subject->name}}">
        </div>
        <div class="field">
          <label for="address">Полный адрес:</label>
          <input type="text" name = "address" id = "address" class="form-control" required value = "{{$subject->address}}">
        </div>
        <div class="field">
          <label for="coate">Код Coate:</label>
          <input type="text" name = "coate" id = "coate" class="form-control" value = "{{$subject->coate}}">
        </div>
        <div class="field">
          <label for="inn">ИНН:</label>
          <input type="text" name = "inn" id = "inn" class="form-control" value = "{{$subject->inn}}">
        </div>
        <div class="field">
          <label for="comment">Комментарий:</label>
          <input type="text" name = "comment" id = "comment" class="form-control" value = "{{$subject->comment}}">
        </div>
        <input type="hidden" name="id" value = "{{$subject->id}}">
        <button type = "submit" class = "ui button">Сохранить</button>
      </form>
    </div>
  </div>
@endsection
