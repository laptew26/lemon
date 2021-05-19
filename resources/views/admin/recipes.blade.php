@extends('layout')

@section('title')
    Рецепты
@endsection

@section('content')
    {{$articles->render()}}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td><a href="{{route('article_show', $article->id)}}">{{$article->title}}</a></td>
                <td>{{$article->description}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$articles->render()}}
@endsection
