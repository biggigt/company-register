@extends('layouts.master')
@section('title','Создать субъект')
@section('content')
  <div class="ui container">
      <div class="ui menu" >
        <a class="item" href="/subject/create">
          Добавить
        </a>
        <a class="item" href="/subjects">
          Просмотреть
        </a>
      </div>
      <div class="ui two column centered grid">
        <div class="column">
          <form class="ui form" action="{{route('subject.store')}}" method = "post">
            @csrf
            <div class="field">
              <label for="subject_type_dropdown">Subject type:</label>
              <select id="subject_type_dropdown" name="subject_type_dropdown" class="ui search dropdown">
                <option value="">Выберите ОПФ</option>
                @foreach($subject_types as $subject_type)
                  <option value="{{ $subject_type->id }}">{{ $subject_type->code }}</option>
                @endforeach
              </select>
            </div>
            <div class="field">
              <label for="name">Name:</label>
              <input type="text" name = "name" id = "name" class="form-control" required>
            </div>
            <div class="field">
              <label for="address">Address:</label>
              <input type="text" name = "address" id = "address" class="form-control" required>
            </div>
            <div class="field">
              <label for="coate">Coate:</label>
              <input type="text" name = "coate" id = "coate" class="form-control">
            </div>
            <div class="field">
              <label for="inn">INN:</label>
              <input type="text" name = "inn" id = "inn" class="form-control">
            </div>
            <div class="field">
              <label for="inn">Comment:</label>
              <input type="text" name = "comment" id = "comment" class="form-control">
            </div>
            <button type = "submit" class = "ui button">Submit</button>
          </form>
        </div>
      </div>
  </div>
@endsection
