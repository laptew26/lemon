@extends('layout')

@section('title')
    Статья №{{$article->id}}
@endsection

@section('content')
    <div class="article shadow">
        <div class="article-img">
            <img class="app" src="/img/example.png">
        </div>
        <div class="article-header">
            <div class="mb-3">
                <div class="d-flex align-items-center">
                    <h2>{{$article->title}}</h2>
                    @foreach($article->tags as $tag)
                        <a href="{{route('tag_show', $tag->id)}}">#{{$tag->name}}</a>
                    @endforeach
                </div>
                <span>~{{$article->time}} минут | {{$article->difficulty->name}}</span>
                @if(isOwner($article->id))
                    <a href="{{route('article_edit', $article->id)}}" class="button edit-button">Редактировать</a>
                @endif
            </div>
            <div class="article-about">
                <span>Автор:</span>
                <a href="{{route('user_show', $article->user->id)}}">{{$article->user->name}}</a>
            </div>
            <p class="article-body">Что понадобится:</p>
            <p>{{$article->ingredients}}</p>
            <p class="article-body">Как готовить:</p>
            <p>{{$article->description}}</p>
        </div>
    </div>



{{--    <div class="app shadow">--}}
{{--        <div class="app-img">--}}
{{--            <img class="app" src="/img/{{$article->photo}}">--}}
{{--        </div>--}}
{{--        <div class="app_about">--}}
{{--            <div class="mb-3">--}}
{{--                <h2>{{$article->title}}</h2>--}}
{{--                <span>~{{$article->time}} минут | {{$article->difficulty->name}}</span>--}}
{{--                @if(isOwner($article->id))--}}
{{--                    <a href="{{route('article_edit', $article->id)}}" class="button update">Редактировать</a>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--            <div class="app-author">--}}
{{--                <p class="app-about-title">Автор:</p>--}}
{{--                <span>{{$article->user->name}}</span>--}}
{{--            </div>--}}
{{--            <p class="app-about-title">Ингридиенты:</p>--}}
{{--            <p>{{$article->ingredients}}</p>--}}
{{--            <p class="app-about-title">Рецепт:</p>--}}
{{--            <p>{{$article->description}}</p>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
