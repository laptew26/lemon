@extends('layout')

@section('title', 'Авторизация')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6 bg-white">
                <form action="{{route('doLogin')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="emailLog" class="form-label">Эл. почта:</label>
                        <input class="form-control" type="email" name="email" id="email" maxlength="40" required
                               placeholder="Эл. почта">
                    </div>
                    <div class="mb-3">
                        <label for="passwordLog" class="form-label">Пароль:</label>
                        <input class="form-control" type="password" name="password" id="password" maxlength="30" required
                               placeholder="Пароль">
                    </div>
                    <button type="submit" id="logBtn" class="button">Авторизация</button>
                    <div class="d-flex">
                        <p class="m-1">Не зарегистрированы?</p>
                        <a class="m-1 menu-item" href="{{route('showRegister')}}">Регистрация</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
