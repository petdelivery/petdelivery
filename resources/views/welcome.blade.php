@extends('layouts.app')

@section('content')

<!-- -->
<div>
     <div class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="http://handsontek.net/demoimages/tiles/neews.png" class="img-responsive"/>
                </div>
                <div class="item">
                  <img src="http://handsontek.net/demoimages/tiles/neews2.png" class="img-responsive"/>
                </div>
              </div>
    </div>
</div>
<div class="row hero_image">
    
</div>
<hr>
<!-- -->
<div class="container">


    <div class="row">

        @foreach($articles as $article)
        <div class=" panel col-md-4 bordered">
            <a class="btn" href="article/{{$article->id}}">
                <img src="/uploads/{{$article->image}}" width="100%" class="img-responsive">
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

<div class="tilesrow">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <div class="container dynamicTile">
        <div class="row ">
            <div class="col-sm-2 col-xs-4">
                <div id="tile1" class="tile">
                
                 <div class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                       <img src="http://handsontek.net/demoimages/tiles/twitter1.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                       <img src="http://handsontek.net/demoimages/tiles/twitter2.png" class="img-responsive"/>
                    </div>
                  </div>
                </div>
                 
                </div>
            </div>
            <div class="col-sm-2 col-xs-4">
                <div id="tile2" class="tile">
                 
                 <div class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="http://handsontek.net/demoimages/tiles/hot.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="http://handsontek.net/demoimages/tiles/hot2.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="http://handsontek.net/demoimages/tiles/hot3.png" class="img-responsive"/>
                    </div>
                  </div>
                </div>
                 
                </div>
            </div>
            <div class="col-sm-2 col-xs-4">
                <div id="tile3" class="tile">
                 
                <div class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                       <img src="http://handsontek.net/demoimages/tiles/weather2.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                       <img src="http://handsontek.net/demoimages/tiles/weather.png" class="img-responsive"/>
                    </div>
                    </div>
                 </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-4">
                <div id="tile4" class="tile">
                 
                <div class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="http://handsontek.net/demoimages/tiles/facebook3.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="http://handsontek.net/demoimages/tiles/facebook2.png" class="img-responsive"/>
                    </div>
                  </div>
                </div>
                 
                </div>
            </div>
            <div class="col-sm-2 col-xs-4">
                <div id="tile5" class="tile">
                 
                 <div class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="http://handsontek.net/demoimages/tiles/neews.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="http://handsontek.net/demoimages/tiles/neews2.png" class="img-responsive"/>
                    </div>
                  </div>
                </div>
                 
                </div>
            </div>
            <div class="col-sm-2 col-xs-4">
                <div id="tile6" class="tile">
                 
                 <div class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="http://handsontek.net/demoimages/tiles/skype.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="http://handsontek.net/demoimages/tiles/skype2.png" class="img-responsive"/>
                    </div>
                  </div>
                </div>
                 
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 col-xs-8">
                <div id="tile7" class="tile">
                 
                <div class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="http://handsontek.net/demoimages/tiles/gallery.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="http://handsontek.net/demoimages/tiles/gallery2.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="http://handsontek.net/demoimages/tiles/gallery3.png" class="img-responsive"/>
                    </div>
                  </div>
                </div>
                 
                </div>
            </div>
            <div class="col-sm-2 col-xs-4">
                <div id="tile8" class="tile">
                 
                 <div class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                       <img src="http://handsontek.net/demoimages/tiles/music.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                       <img src="http://handsontek.net/demoimages/tiles/music2.png" class="img-responsive"/>
                    </div>
                    </div>
                 </div>
                 
                </div>
            </div>
            <div class="col-sm-2 col-xs-4">
                <div id="tile9" class="tile">
                 
                  <div class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="http://handsontek.net/demoimages/tiles/calendar.png" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="http://handsontek.net/demoimages/tiles/calendar2.png" class="img-responsive"/>
                    </div>
                  </div>
                </div>
                 
                </div>
            </div>
            <div class="col-sm-4 col-xs-8">
                <div id="tile10" class="tile">
                 
                   <div class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <h3 class="tilecaption"><i class="fa fa-child fa-4x"></i></h3>
                    </div>
                    <div class="item">
                      <h3 class="tilecaption">Gatos</h3>
                    </div>
                    <div class="item">
                      <h3 class="tilecaption">Perros</h3>
                    </div>
                    <div class="item">
                      <h3 class="tilecaption">Accesorios</h3>
                    </div>
                  
                  </div>
                </div>
                 
                </div>
            </div>
          
        </div>

</div><!-- fin tiles-->
<footer>
    <div class="row text-center" style="background:black;color;white;">

        derechos registrados
        
    </div>
</footer>
@endsection
