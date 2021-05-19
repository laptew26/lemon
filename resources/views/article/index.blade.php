@extends('layout')

@section('title')
    Статьи
    @endsection

    @section('content')
    @include('components.articles_cards')
    {{$articles->render()}}
    <br>
    </div>
@endsection
