@extends('layouts.master')
@section('title','Добавить новый Код ТН ВЭД')
@section('content')
	<div class="ui container">
		<div class="ui menu" >
			<a class="item" href="/harmonizedsc">
			  Просмотреть
			</a>
			<a class="item" href="/harmonizedsc/create">
			  Добавить
			</a>
		</div>
		<div class="ui two column centered grid">
			<div class="column">
				<form class="ui form" action="{{route('harmonizedsc.store')}}" method = "post">
			        @csrf
						<div class="field">
							<label for="hsc_code">Код ТН ВЭД:</label>
			         	<input type="text" name = "hsc_code" id = "hsc_code" class="form-control" required>
			        	</div>
			        <div class="field">
			          <label for="parent_code">Родительский код ТН ВЭД:</label>
			          <input type="text" name = "parent_code" id = "parent_code" class="form-control" required>
			        </div>
			        <div class="field">
			          <label for="hsc_name">Название ТН ВЭД:</label>
			          <input type="text" name = "hsc_name" id = "hsc_name" class="form-control" required>
			        </div>
			        <div class="field">
						<label>Описание ТН ВЭД:</label>
						<textarea rows="2" style="margin-top: 0px; margin-bottom: 0px; height: 125px;" name = "hsc_description" id = "hsc_description" class="form-control"></textarea>
					</div>
			        <button type = "submit" class = "ui button">Добавить</button>
			    </form>
			</div>
		</div>
	</div>
@endsection