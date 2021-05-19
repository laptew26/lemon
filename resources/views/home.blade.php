@extends('layout')

@section('title')
    Главная
@endsection

@section('head')
    <script src="/js/slider.js" defer></script>
@endsection

@section('logo')
    <div class="logo">
        <img src="/img/logo.png" alt="logo">
    </div>
@endsection
@section('content')
    <div class="bg-white shadow">
        <div class="slider">
            <div class="item">
                <img src="/img/example.png" alt="Первый слайд">
                <div class="slideText">Прыкольный слайд 1</div>
            </div>

            <div class="item">
                <img src="/img/example.png" alt="Второй слайд">
                <div class="slideText">Прыкольный слайд 2</div>
            </div>

            <div class="item">
                <img src="/img/example.png" alt="Третий слайд">
                <div class="slideText">Прыкольный слайд 3</div>
            </div>

            <a class="prev" onclick="minusSlide()">&#10094;</a>
            <a class="next" onclick="plusSlide()">&#10095;</a>
        </div>

        <div class="slider-dots">
            <span class="slider-dots_item" onclick="currentSlide(1)"></span>
            <span class="slider-dots_item" onclick="currentSlide(2)"></span>
            <span class="slider-dots_item" onclick="currentSlide(3)"></span>
        </div>
    </div>

    @include('components.articles_cards')

    </div>
@endsection
