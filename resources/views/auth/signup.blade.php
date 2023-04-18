@extends('layout')

@section('title')
    Вход в аккаунт | Anion.ua
@endsection

@section('content')

    <div class="login-container">
        <h1 class="login-title">Регистрация</h1>
        {!! Form::open(['route' => 'register', 'method' => 'post', 'novalidate' => true]) !!}
            <label for="name">ФИО:</label>
            <input type="text" id="name" name="name" class="login-input" required>

            <label for="email">Адрес электронной почты:</label>
            <input type="email" id="email" name="email" class="login-input" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" class="login-input" required>

            <label for="password">Подтверждение пароля:</label>
            <input type="password" id="password" name="password_confirmation" class="login-input" required>

            <input type="submit" value="Войти" class="login-submit" style="background-color: #000000;">
        {!! Form::close() !!}
    </div>
@endsection
