@extends('layouts.app')

@section('content')
    <div class="container">
        @include('flash::message')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Добавление пользователей через страницу гильдии</div>

                    <?php if (!empty($added)): ?>
                    Добавлены пользователи:
                    <ul class="alert-success">
                        <?php foreach ($added as $username):?>
                        <li><?=$username?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                    <div class="card-body">

                        {!! Form::open(['route' => 'add-from-guild-page','files' => true ,'method' => 'post']) !!}

                        <div class="form-group">
                        <?=Form::file('file', $attributes = []); ?>

                        <?=Form::submit('Отправить');?>
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
