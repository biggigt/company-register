@extends('layouts.master')

@section('content')
<div class="ui container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="ui center aligned basic segment">
                            <p>Вы вошли в систему!</p>
                        </div>
                        <div class="ui placeholder segment">
                            <div class="ui two column stackable center aligned grid">
                                <div class="ui vertical divider">ИЛИ</div>
                                <div class="middle aligned row">
                                    <div class="column">
                                        <div class="ui icon header">
                                            <i class="search icon"></i>
                                            Найти предприятие
                                        </div>
                                        <div class="field">
                                            <div class="ui search">
                                                <div class="ui icon input">
                                                    <input class="prompt" type="text" placeholder="Найти предприятие...">
                                                    <i class="search icon"></i>
                                                </div>
                                                <div class="results"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui icon header">
                                            <i class="world icon"></i>
                                            Добавить нового субъекта и предприятие
                                        </div>
                                        <div class="ui primary button">
                                            Добавить
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
