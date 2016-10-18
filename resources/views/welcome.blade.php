@extends('layouts.app')

@section('content')

<!-- -->
<div class="row backg">
  <div class="container">
     <div id="carousel" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
               
                <div class="item active">
                  <img src="/assets/images/home.jpg" class="img-responsive"/>
                  <h1>Comida para gatos a domicilio</h1>
                  
                </div>
                
                <div class="item">
                  <img src="/assets/images/home2.jpg" class="img-responsive"/>
                  <h2> Comida para perros a domicilio</h2>
                </div>
              </div>
    </div>
    </div>
</div>

<hr>
<!-- -->
<div class="row dark">
  <div class="container">
      <div class="row">
        <h2>Las mejores marcas de comida para tu mascota al mejor precio.</h2>
        {{ isset($noticiaciones)? $noticiaciones:''}}
    
          @foreach($articles as $article)
          <div class="col-md-4 bordered">
            <div class="product-description-home">
              <a class="btn" href="article/{{$article->id}}">
                  <img src="/uploads/{{$article->image}}" width="100%" class="img-responsive img-home border-gradient">
              </a>
              <h3>
                  {{ $article->title}}
              </h3>
              <p>
                  {{ $article->description}}
              </p>
            </div>
            <div class="text-center bg-info">
              <b>${{ $article->precio }} </b>
            </div>
             <div class="text-center bg-verde">
              <a class="btn" href="product/{{ $article->id}}">Ver mas</a>
            </div>
          </div>
          
          @endforeach
      </div>
      <hr>
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default text-center">
                  <div class="panel-heading bg-success">Haz tus pedidos por whatsapp</div>

                  <div class="panel-body text-center">
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
</div>

<section class="testimonials hidden">
  <div class="inner">
    <h2>What <span>our customers</span> are saying</h2>

    <div class="row">
      <div class="col-md-4">
        <blockquote>
          <p>
            "The Transloadit crew has built something simple, elegant, powerful and fun."
          </p>

          <cite>
            <a href="https://twitter.com/joestump">Joe Stump</a> - founder of Sprint.ly
            <img src="/img/testimonials/joe_stump-quanted.png">
          </cite>
        </blockquote>
      </div>

      <div class="col-md-4">
        <blockquote>
          <p>
            "Thanks to Transloadit, Coursera now has a 1-click photo upload!"
          </p>

          <cite>
            <a href="https://twitter.com/pamelafox">Pamela Fox</a> - engineer at Coursera
            <img src="/img/testimonials/pamela_fox-quanted.png">
          </cite>
        </blockquote>
      </div>

      <div class="col-md-4">
        <blockquote>
          <p>
            "Transloadit is a great way to save time and money in dev and server costs!"
          </p>
          <cite>
            <a href="https://twitter.com/accme">Peter Gerard</a> - founder of Distrify
            <img src="/img/testimonials/peter_gerard-quanted.png">
          </cite>
        </blockquote>
      </div>
    </div>

  </div>
</section>


<div class="hidden"> 
@foreach($posts as $post)
<div>{{$post->title}}</div>
@endforeach()
</div>

<div class="tilesrow hidden">
        

        <div class="container dynamicTile">
        <div class="row ">
            <div class="col-sm-2 col-xs-4">
                <div id="tile1" class="tile">
                
                 <div class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                       <img src="https://www.ciudaddemascotas.com/projects/Slider_Marcas/images/hills.jpg" class="img-responsive"/>
                    </div>
                    <div class="item">
                       <img src="https://www.ciudaddemascotas.com/projects/Slider_Marcas/images/proplan.jpg" class="img-responsive"/>
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
                      <img src="https://www.ciudaddemascotas.com/projects/Slider_Marcas/images/tasteofthewild.jpg" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="https://www.ciudaddemascotas.com/projects/Slider_Marcas/images/nutra-nuggets.jpg" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="https://www.ciudaddemascotas.com/projects/Slider_Marcas/images/total-max-3.png" class="img-responsive"/>
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


</div><!-- fin tiles-->
<footer>
    <div class="row text-center" style="background:black;color;white;">

        derechos registrados <a href="https://api.instagram.com/oauth/authorize/?client_id=5857a47c222b43e39816def813eeaf8d&redirect_uri=http://www.petdelivery.co&response_type=code" target="_blank">Instagram</a>
        
    </div>
</footer>
@endsection
