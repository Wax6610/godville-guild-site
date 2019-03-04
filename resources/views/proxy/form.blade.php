@extends('layouts.app')

@section('content')
<div class="container">
    @include('flash::message')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавление нового прокси-сервера </div>

                <div class="card-body">

                    {!! Form::open(['route' => 'proxy.store','method' => 'post']) !!}

                    <div class="form-group">
                        <?=Form::label('address', 'IP Адрес');?>
                        <?=Form::input("text",'address', null ,['placeholder' => '127.0.0.1', "class" => "form-control"]) ?>
                    </div>
                    <div class="form-group">
                        <?=Form::label('port', 'Порт');?>
                        <?=Form::input("text",'port', null ,['placeholder' => '80', "class" => "form-control"])?>
                    </div>
                        <?=Form::submit('Отправить',['class' => 'btn btn-primary']);?>
                        {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

