@extends('layout')

@section('title')
    Пользователи
@endsection

@section('content')
    <div class="bg-cards shadow">
        <div class="row">
            @foreach($users as $user)
                <div class="col-4 mb-3">
                    <div class="card">
                        <a href="{{route('user_show', $user->id)}}"><img src="/img/example.png" class="card-img-top"
                                                                         alt="#"></a>
                        <div class="card-body">
                            <div class="card-title">
                                <a href="{{route('user_show', $user->id)}}"><h4>{{$user->name}}</h4></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{$users->render()}}
        <br>
    </div>
@endsection
