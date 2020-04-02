@extends('layouts.master')
@section('title','Добавить предприятие в реестр')
@section('content')
	<div class="ui container">
		<div class="ui menu" >
			<a class="item" href="/status">
			  Просмотреть статусы
			</a>
			<a class="item" href="/registry/include">
			  Добавить в реестр
			</a>
		</div>
		<div class="ui two column centered grid">
			<div class="column">
				<form class="ui form" action="{{route('registry.include')}}" method = "post">
			        @csrf
			        <div class="field">
			          <label for="registry_name">Registry name:</label>
			          <select name = "registry_name" id = "registry_name" class="ui search dropdown" required>
			          	<option value="">Выберите реестр</option>
		                @foreach($registry_types as $registry)
		                  <option value="{{ $registry->id }}">{{ $registry->name }}</option>
		                @endforeach
			          </select>
			        </div>
			        <div class="field">
			          <label for="company_name">Название предприятия:</label>
			          <select name = "company_name" id = "company_name" class="ui search dropdown" required>
			          	<option value="">Выберите предприятие</option>
		                @foreach($companies as $company)
		                  <option value="{{ $company->id }}">{{ $company->name }}</option>
		                @endforeach
			          </select>
			        </div>
			        <div class="field">
			          <label for="company_name">ТН ВЭД:</label>
			          <select name = "company_name" id = "company_name" class="ui search dropdown" required>
			          	<option value="">Выберите код ТН ВЭД</option>
		                @foreach($harmonizedscs as $harmonizedsc)
		                  <option value="{{ $harmonizedsc->id }}">{{$harmonizedsc->code}} {{$harmonizedsc->hsc_name}}</option>
		                @endforeach
			          </select>
			        </div>
			        <div class="field">
			          <label for="activityTypes">Виды деятельности:</label>
			          <select id="activityTypes" name="activityTypes[]" multiple="" class="ui fluid dropdown" required>
			          	<option value="">Выберите виды деятельности</option>
						@foreach($activity_types as $activity_type)
		                  <option value="{{ $activity_type->code }}">{{ $activity_type->activity_type_name }}</option>
		                @endforeach
					  </select>
			        </div>
			        <div class="field">
			          <label for="status">Статус:</label>
			          <select name = "status" id = "status" class="ui search dropdown" required>
			          	<option value="">Выберите статус</option>
		                @foreach($statuses as $status)
		                  <option value="{{ $status->id }}">{{ $status->status }}</option>
		                @endforeach
			          </select>
			        </div>
			        <div class="field">
			          <label for="act">Акт и другие подтверждающие документы:</label>
			          <input type="text" name = "act" id = "act" class="form-control" required>
			        </div>
			        <div class="field">
			          <label for="status">Дата внесения в реестр на бумаге:</label>
			          <div class="ui calendar" name="cdate" id="cdate">
					    <div class="ui input left icon">
					      <i class="calendar icon"></i>
					      <input type="text" placeholder="Date">
					    </div>
					  </div>
			        </div>
			        <div class="field">
			          <label for="registry_type_description">Description:</label>
			          <input type="text" name = "registry_type_description" id = "registry_type_description" class="form-control">
			        </div>
			        <button type = "submit" class = "ui button">Добавить</button>
			    </form>
			</div>
		</div>
	</div>
	
@endsection

@section('scripts')
<script type="text/javascript">
	$('#cdate').calendar({
		type: 'date'
	});
</script>
@stop
