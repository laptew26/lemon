@extends('layout')

@section('title')
    Тег #{{$tag->name}}
@endsection

@section('content')
    @include('components.articles_cards', $articles = $tag->articles)
@endsection
