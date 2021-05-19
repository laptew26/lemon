<div class="bg-white shadow">
    <div class="row">
        @foreach($articles as $article)
            <div class="col-xl-4 col-md-6 col-sm-12 mb-3">
                <div class="card">
                    <a href="{{route('article_show', $article->id)}}"><img src="/img/example.png" class="card-img-top"
                                                                     alt="#"></a>
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{route('article_show', $article->id)}}"><h4>{{$article->title}}</h4></a>
                            <p class="card-text">~{{$article->time}} минут | {{$article->difficulty->name}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
