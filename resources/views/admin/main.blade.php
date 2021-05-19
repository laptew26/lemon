@extends('layout')

@section('title')
    Панель администратора
@endsection

@section('content')
    <a href="{{route('admin.recipe_index')}}">Рецептики</a>
    <a href="{{route('admin.user_index')}}">Пользователи</a>
@endsection
