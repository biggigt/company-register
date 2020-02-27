@extends('layouts.master')
@section('title','View Company')

@section('content')
  <div class="row">
    <div class="ui text container">
      @component('notification')
          <strong>Whoops!</strong> Something went wrong!
      @endcomponent
      <a class="ui tag label">Внутренний реестр</a>
      <a class="ui red tag label">Реестр ЕАЭС</a>
      <a class="ui green tag label">Featured</a>
      <h4 class="ui horizontal divider header">
        <i class="bar chart icon"></i>
        Описание предприятия
      </h4>
      <table class="ui definition table">
        <tbody>
          <tr>
            <td class="two wide column">Название</td>
            <td>{{$company->business_type}} '{{$company->name}}'</td>
          </tr>
          <tr>
            <td>Регистрационный номер</td>
            <td>{{$company->id}} {{$company->regnumber}}</td>
          </tr>
          <tr>
            <td>Тип предприятия</td>
            <td>{{$company->facility_type}}</td>
          </tr>
          <tr>
            <td>Субъект Х</td>
            <td>{{$company->subject_acting}}</td>
          </tr>
          <tr>
            <td>Субъект В</td>
            <td>{{$company->subject_owner}}</td>
          </tr>
        </tbody>
      </table>
      <!-- <div class="ui message">
        <div class="header">
          {{$company->name}}
        </div>
        <div class="ui form">
          <div class="two fields">
            <div class="field">
              <label>Name</label>
              <input readonly="" type="text" value="{{$company->business_type}} '{{$company->name}}'">
            </div>
            <div class="field">
              <label>Registration number</label>
              <input readonly="" type="text" value="{{$company->id}} {{$company->regnumber}}">
            </div>
          </div>
          <div class="two fields">
            <div class="field">
              <label>Facility type</label>
              <input readonly="" type="text" value="{{$company->facility_type}}">
            </div>
            <div class="field">
              <label>Subject acting</label>
              <input readonly="" type="text" value="{{$company->subject_acting}}">
            </div>
          </div>
          <div class="two fields">
            <div class="field">
              <label>Subject owner</label>
              <input readonly="" type="text" value="{{$company->subject_owner}}">
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
@endsection
@section('scripts')
<script type="text/javascript">
  $('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  })
  ;
</script>
@stop