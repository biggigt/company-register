@extends('layouts.master')
@section('title','Subjects list')
@section('content')
<div class="ui container" >
  <div class="ui menu" >
    <a class="item" href="/subject/create">
      Добавить
    </a>
    <a class="item" href="/subjects">
      Просмотреть
    </a>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <table class="ui celled table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Название/ФИО</th>
            <th>Адрес</th>
            <th>Код COATE</th>
            <th>ИНН</th>
            <th>Комментарий</th>
            <th>Действия</th>
          </tr>
        </thead>
        @foreach($subjects as $subject)
          <tr class = "text-center">
            <td>{{ $subject->id }}</td>
            <td>{{ $subject->subject_type }} "{{ $subject->name }}"</td>
            <td>{{ $subject->address }}</td>
            <td>{{ $subject->coate }}</td>
            <td>{{ $subject->inn }}</td>
            <td>{{ $subject->comment }}</td>
            <td><a href="{{route('subject.view',['id'=>$subject->id])}}" class = "btn btn-info"><i class="folder open outline icon"></i></a>
              <a href="{{route('subject.edit',['id'=>$subject->id])}}" class = "btn btn-info"><i class="edit outline icon"></i></a>
                <a href="{{route('subject.destroy',['id'=>$subject->id])}}" class = "btn btn-danger"><i class="trash alternate outline icon"></i></a></td>
            
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection