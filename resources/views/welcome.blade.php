@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">

        @foreach($articles as $article)
        <div class=" panel col-md-4">
            <h2>
                {{ $article->title}}
            </h2>
            <p>
                {{ $article->description}}
            </p>
            <p>
                <a class="btn" href="#">{{ $article->precio }} --> Ordenar</a>
            </p>
        </div>
        
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">PETDELIVERY</div>

                <div class="panel-body">
                    PETDELIVERY
                </div>
            </div>
        </div>
    </div>




    <div class="row">
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
@endsection
