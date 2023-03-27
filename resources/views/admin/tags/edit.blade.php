@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <h1>Редактирование категории</h1>

            <!-- Основной контент -->

            <!-- Форма создания категории -->
            {!! Form::open(['route' => ['tags.update', $tag->id], 'method' => 'put']) !!}
                <div class="form-group">
                    <label for="category-name">Название тэга (укр):</label>
                    <input type="text" class="form-control" id="category-name" name="title" value="{{ $tag->title }}">

                    <label for="category-name">Название тэга (рус):</label>
                    <input type="text" class="form-control" id="category-name" name="title_ru" value="{{ $tag->title_ru }}">

                    <label for="category-name">Цвет тэга:</label>
                    <input type="text" class="form-control" id="category-name" name="color" value="{{ $tag->color }}">
                </div>
                <div class="button-group">
                    <div>
                        <a class="btn btn-default" href="{{ route('tags.index') }}">Назад</a>

                    </div>
                    <div class="text-right">
                        <button class="btn btn-success pull-right">Изменить</button>
                    </div>
                </div>

            {!! Form::close() !!}
        </div>

    </div>
@endsection
