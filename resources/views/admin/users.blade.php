@extends('layout')

@section('title')
    Пользователи
@endsection

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">update</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>#</td>
                <td>#</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
