@extends('layouts.master')
@section('title','Список видов деятельности')
@section('content')
<div class="ui container">
  <div class="ui menu">
    <a class="item" href="/activity">
      Просмотреть
    </a>
    <a class="item" href="/activity/create">
      Добавить
    </a>
  </div>
  <table class="ui celled table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Код</th>
        <th>Название вида деятельности</th>
        <th>Options</th>
      </tr>
    </thead>
    @foreach($activities as $activity)
    <tr class="text-center">
      <td>{{ $activity->id }}</td>
      <td>{{ $activity->code }}</td>
      <td>{{ $activity->activity_type_name }}</td>
      <td>
        <a href="{{route('activity.edit',['id'=>$activity->id])}}" class="btn btn-info"><i class="edit outline icon"></i></a>
        <a href="{{route('activity.destroy',['id'=>$activity->id])}}" class="btn btn-danger"><i class="trash alternate outline icon"></i></a>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection