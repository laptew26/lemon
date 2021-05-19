@extends('layout')

@section('title')
    Статья №{{$article->id}}
@endsection

@section('content')
    <div class="app shadow">
        <div class="app-img">
            <img class="app" src="/img/{{$article->photo}}">
        </div>
        <div class="app_about">
            <form action="{{route('article_update', $article->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div>
                        <label class="form-label" for="time">Название:</label>
                        <input class="form-control" name="title" type="text" value="{{$article->title}}"
                               placeholder="{{$article->title}}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="time">Время приготовления(в минутах):</label>
                        <input type="text" name="time" class="form-control" maxlength="3" value="{{$article->time}}"
                               placeholder="{{$article->time}}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="time">Сложность приготовления:</label>
                        <select class="form-select" name="difficulty" id="difficulty">
                            @foreach($difficulties as $difficulty)
                                <option value="{{$difficulty->id}}">{{$difficulty->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Автор: {{$article->user->name}}</label>
                    </div>
                    <div>
                        <label class="form-label">Ингридиенты:</label>
                        <textarea name="ingredients" class="form-control" placeholder="{{$article->ingredients}}"
                                  rows="10">{{$article->ingredients}}</textarea>
                    </div>
                    <div>
                        <label class="form-label">Рецепт:</label>
                        <textarea name="description" class="form-control" placeholder="{{$article->description}}"
                                  rows="10">{{$article->description}}</textarea>
                    </div>
                    <div id="tags">
                        <button id="addTag" class="button" type="button" name="addTag">Добавить тег</button>
                        @foreach($article->tags as $tag)
                            <div class="row" id="tag-{{$tag->id}}">
                                <div class="col-10">
                                    <input type="text" class='form-control' name='tags[]' value="{{$tag->name}}" placeholder='{{$tag->name}}'>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-warning" name="btn-tag" id="tag-{{$tag->id}}">Х</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <label for="photo" class="form-label">Сменить фотографию:</label>
                        <input type="file" class="form-control" name="photo" accept="image/jpeg,image/png">
                    </div>
                    <div>
                        <button class="button" type="submit">Отредактировать</button>
                        <a class="button button-danger" href="{{route('article_destroy', $article->id)}}">Удалить</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
