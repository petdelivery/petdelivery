@extends('layouts.app')

@section('content')

<!-- -->
<div class='blurImg'>
  <div style="background-image: url('https://d262ilb51hltx0.cloudfront.net/fit/c/1600/1280/gradv/29/81/60/darken/25/1*4ncz3hLxmL8E_bUh-0z62w.jpeg')"></div>
  <div class='blur' style="background-image: url('https://d262ilb51hltx0.cloudfront.net/fit/c/1600/1280/gradv/29/81/40/darken/50/blur/50/1*4ncz3hLxmL8E_bUh-0z62w.jpeg')"></div>
</div>
<header>
  <div>
    <h1>
      Medium
    </h1>
    <p>
      Everyone’s stories and ideas
    </p>
    <a href='https://medium.com/' title='Medium'>Learn more</a>
  </div>
  <nav role='navigation'>
    <ul>
      <li>
        <a class='active' href='#'>Reading List</a>
      </li>
      <li>
        <a href='#'>Bookmarks</a>
      </li>
      <li>
        <a href='#'>Top 100</a>
      </li>
    </ul>
  </nav>
</header>
<div class='container'>
  <div></div>
</div>


<!-- -->
<div class="container">


    <div class="row">

        @foreach($articles as $article)
        <div class=" panel col-md-4">
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
