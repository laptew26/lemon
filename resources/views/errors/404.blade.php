@extends('layout')

@section('title', __('Такой страницы не найдено'))
@section('code', '404')

@if($exception)
    @section('content')
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-12 text-center">
                <h5>{{$exception->getMessage()}}</h5>
            </div>
        </div>
    @endsection
@else
    @section('content', __('Такой страницы не найдено'))
@endif
