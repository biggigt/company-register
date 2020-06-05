@extends('layouts.master')
@section('title','Список кодов ТН ВЭД')
@section('content')
<div class="ui container">
  <div class="ui menu">
    <a class="item" href="/harmonizedsc">
      Просмотреть
    </a>
    <a class="item" href="/harmonizedsc/create">
      Добавить
    </a>
  </div>
  <table class="ui celled table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Код ТН ВЭД</th>
        <th>Родительский код ТН ВЭД</th>
        <th>Название ТН ВЭД</th>
        <th>Действия</th>
      </tr>
    </thead>
    @foreach($harmonizedscs as $harmonizedsc)
    <tr class="text-center">
      <td>{{ $harmonizedsc->id }}</td>
      <td>{{ $harmonizedsc->code }}</td>
      <td>{{ $harmonizedsc->parent_code }}</td>
      <td>{{ $harmonizedsc->hsc_name }}</td>
      <td>
        <a href="{{route('harmonizedsc.edit',['id'=>$harmonizedsc->id])}}" class="btn btn-info"><i class="edit outline icon"></i></a>
        <a href="{{route('harmonizedsc.destroy',['id'=>$harmonizedsc->id])}}" onclick="return getConfirm(this);" class="btn btn-danger"><i class="trash alternate outline icon"></i></a>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection