@extends('layouts.master')
@section('title','Регистрация предприятия в реестре')
@section('content')
  <div class="ui container">
    <div class="ui text container">
      <div class="ui message">
        <div class="header">
          Changes in Service
        </div>
        <p>We just updated our privacy policy here to better service our customers. We recommend reviewing the changes.</p>
      </div>
      <form class="ui form" action="{{route('companies.store')}}" method = "post">
        @csrf
        <div class="field">
          <label for="business_type_dropdown">Организационно-правовая форма:</label>
          <select id="business_type_dropdown" name="business_type_dropdown" class="ui search dropdown">
            <option value="">Выберите ОПФ</option>
            @foreach($business_types as $business_type)
              <option value="{{ $business_type->id }}">{{ $business_type->code }}</option>
            @endforeach
          </select>
        </div>
        <div class="field">
          <label for="name">Название предприятия:</label>
          <input type="text" name = "name" id = "name" class="form-control" placeholder="Введите название предприятия" required>
        </div>
        <div class="field">
          <label for="regnumber">Регистрационный номер:</label>
          <input type="text" name = "regnumber" id = "regnumber" class="form-control" placeholder="Введите присвоенный регистрационный номер" required>
        </div>
        <div class="field">
          <label for="address">Полный адрес:</label>
          <input type="text" name = "address" id = "address" class="form-control" placeholder="Введите полный адрес" required>
        </div>
        <div class="field">
          <label for="facility_type_dropdown">Вид предприятия:</label>
          <select id="facility_type_dropdown" name="facility_type_dropdown" class="ui search dropdown" required>
            <option value="">Выберите вид предприятия</option>
            @foreach($facility_types as $facility_type)
              <option value="{{ $facility_type->id }}">{{ $facility_type->facility_type_name }}</option>
            @endforeach
          </select>
        </div>
        <div class="field">
          <label for="subject_acting_dropdown">Субъект, осуществляющий деятельность:</label>
          <select name = "subject_acting_dropdown" id = "subject_acting_dropdown" class="ui search dropdown" required>
            <option value="">Выберите субъекта</option>
            @foreach($subjects as $subject)
              <option value="{{ $subject->id }}">{{$subject->subject_type}} "{{ $subject->name }}"</option>
            @endforeach
          </select>
        </div>
        <div class="field">
          <label for="subject_owner_dropdown">Субъект - владелец:</label>
          <select name = "subject_owner_dropdown" id = "subject_owner_dropdown" class="ui search dropdown" required>
            <option value="">Выберите субъекта</option>
            @foreach($subjects as $subject)
              <option value="{{ $subject->id }}">{{$subject->subject_type}} "{{ $subject->name }}"</option>
            @endforeach
          </select>
        </div>
        <button type = "submit" class = "ui button">Соханить</button>
      </form>
    </div>
  </div>
@endsection
