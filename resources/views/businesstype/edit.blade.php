@extends('layouts.master')
@section('title','Редактирование общественно-правовой формы')
@section('content')
	<div class="ui container">
        <div class="ui menu" >
            <a class="item" href="/businesstypes">
                Просмотреть
            </a>
            <a class="item" href="/businesstypes/create">
                Добавить
            </a>
        </div>
        <div class="ui two column centered grid">
            <div class="column">
                <form class="ui form" action="{{route('businesstype.update')}}" method = "post">
                    @csrf
                    <div class="field">
                      <label for="code">Сокращение:</label>
                      <input type="text" name = "business_type_code" id = "business_type_code" class="form-control" required value = "{{$business_type->code}}">
                    </div>
                    <div class="field">
                      <label for="business_type_name">Название:</label>
                      <input type="text" name = "business_type_name" id = "business_type_name" class="form-control" required value="{{$business_type->business_type_name}}">
                    </div>
                    <input type="hidden" name="id" value = "{{$business_type->id}}">
                    <button type = "submit" class = "ui button">Сохранить изменения</button>
                </form>
            </div>
        </div>
    </div>

@endsection
