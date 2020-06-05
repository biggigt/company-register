@extends('layouts.master')
@section('title','Список статусов предприятий')
@section('content')
<div class="ui container">
  <div class="ui menu">
    <a class="item" href="/status">
      Просмотреть
    </a>
    <a class="item" href="/status/create">
      Добавить
    </a>
  </div>
  <table class="ui celled table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Код</th>
        <th>Название статуса</th>
        <th>Действия</th>
      </tr>
    </thead>
    @foreach($statuses as $status)
    <tr class="text-center">
      <td>{{ $status->id }}</td>
      <td>{{ $status->code }}</td>
      <td>{{ $status->status }}</td>
      <td>
        <a href="{{route('status.edit',['id'=>$status->id])}}" class="btn btn-info"><i class="edit outline icon"></i></a>
        <a href="{{route('status.destroy',['id'=>$status->id])}}" onclick="return getConfirm(this);" class="btn btn-danger"><i class="trash alternate outline icon"></i></a>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection