@extends('layout')

@section('title', 'Создание статьи')

@section('content')
    <div class="app shadow">
        <div class="app-img">
            <img class="app" src="/img/example.png">
        </div>
        <div class="app_about">
            <form action="{{route('article_store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div>
                        <label class="form-label" for="time">Название:</label>
                        <input class="form-control" name="title" type="text" placeholder="Название" required>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="time">Время приготовления(в минутах):</label>
                        <input type="text" name="time" class="form-control" maxlength="3"
                               placeholder="Время приготовления" required>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="time">Сложность приготовления:</label>
                        <select class="form-select" name="difficulty" id="difficulty" required>
                            @foreach($difficulties as $difficulty)
                                <option value="{{$difficulty->id}}">{{$difficulty->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Автор: {{ Auth::user()->name }}</label>
                    </div>
                    <div id="ingredients">
                        <label class="form-label">Ингридиенты:</label>
                        <textarea name="ingredients" class="form-control" placeholder="Ингредиенты"
                                  rows="10" required></textarea>
                        <button id="addIngredient" class="button" type="button" name="addIngredient">Добавить ингридиент</button>
                    </div>
                    <div>
                        <label class="form-label">Рецепт:</label>
                        <textarea name="description" class="form-control" placeholder="Описание статьи"
                                  rows="10" required></textarea>
                    </div>
                    <div id="tags">
                        <button id="addTag" class="button" type="button" name="addTag">Добавить тег</button>
                    </div>
                    <div>
                        <label for="photo" class="form-label">Добавить фотографию фотографию:</label>
                        <input type="file" class="form-control" name="photo" accept="image/jpeg,image/png" required>
                    </div>
                    <div>
                        <button class="button" type="submit">Добавить статью</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
