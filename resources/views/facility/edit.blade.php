@extends('layouts.master')
@section('title','Редактировать вид предприятия')
@section('content')
	<div class="ui container">
        <div class="ui menu" >
            <a class="item" href="/facility">
                Просмотреть
            </a>
            <a class="item" href="/facility/create">
                Добавить
            </a>
        </div>
        <div class="ui two column centered grid">
            <div class="column">
                <form class="ui form" action="{{route('facility.update')}}" method = "post">
                    @csrf
                    <div class="field">
                      <label for="facility_type_code">Код:</label>
                      <input type="text" name = "facility_type_code" id = "facility_type_code" class="form-control" required value = "{{$facility_type->code}}">
                    </div>
                    <div class="field">
                      <label for="facility_type_name">Название:</label>
                      <input type="text" name = "facility_type_name" id = "facility_type_name" class="form-control" required value="{{$facility_type->facility_type_name}}">
                    </div>
                    <input type="hidden" name="id" value = "{{$facility_type->id}}">
                    <button type = "submit" class = "ui button">Сохранить изменения</button>
                </form>
            </div>
        </div>
    </div>

@endsection
