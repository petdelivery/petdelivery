@extends('layouts.app')

@section('content')

<!-- -->
<div class="row hero_image">
    
</div>
<hr>
<!-- -->
<div class="container">


    <div class="row">

        @foreach($articles as $article)
        <div class=" panel col-md-4 bordered">
            <a class="btn" href="article/{{$article->id}}">
                <img src="http://placehold.it/350x150">
            </a>
            <h4>
                {{ $article->title}}
            </h4>
            <p>
                {{ $article->description}}
            </p>
            <p>
                <a class="btn" href="article/{{ $article->id}}">{{ $article->precio }} --> Ordenar</a>
            </p>
        </div>
        
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Haz tus pedidos por whatsapp</div>

                <div class="panel-body">
                    305-7064871
                </div>
            </div>
        </div>
    </div>




    <div class="row hidden">
        <div class="col-md-4">
            <blockquote>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                </p> <small>Someone famous <cite>Source Title</cite></small>
            </blockquote>
        </div>
        <div class="col-md-4">
            <blockquote>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                </p> <small>Someone famous <cite>Source Title</cite></small>
            </blockquote>
        </div>
        <div class="col-md-4">
            <blockquote>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                </p> <small>Someone famous <cite>Source Title</cite></small>
            </blockquote>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
</div>
<footer>
    <div class="row text-center" style="background:black;color;white;">

        derechos registrados
        
    </div>
</footer>
@endsection
