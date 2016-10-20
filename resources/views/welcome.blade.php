@extends('layouts.app')

@section('content')

<!-- -->
<div class="row backg">
    <h1 style="text-indent:-200%;color:white;">Comida para perros al norte de bogota</h1>
    <div class="container">
         <div id="carousel" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="/assets/images/home.jpg" class="img-responsive"/>
                      <h2>Comida para gatos a domicilio</h2>
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
            <div class="text-center bg-info precio">
              <b >${{ $article->precio }} </b>
            </div>
             <div class="text-center bg-verde comprar">
              <a class="btn" href="product/{{$article->id}}">Comprar</a>
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

<section class="testimonials ">
  <div class="container">
    <h2>lo que dicen nuestros <span>clientes </span></h2>

    <div class="row">
      <div class="col-md-4">
        <blockquote>
          <p>
            "El servicio al cliente es de lo mejor"
          </p>

          <cite>
            <a href="">Diana Gomez</a> - Dueña de sheldon
            <img src="http://placekitten.com/40/40">
          </cite>
        </blockquote>
      </div>

      <div class="col-md-4">
        <blockquote>
          <p>
            "Una preocupacion menos"
          </p>

          <cite>
            <a href="">Oliverto Gomez</a> - engineer at Coursera
            <img src="http://placekitten.com/40/40">
          </cite>
        </blockquote>
      </div>

      <div class="col-md-4">
        <blockquote>
          <p>
            "El mejor servicio y a muy buen precio."
          </p>
          <cite>
            <a href="">Mariana</a> - founder of Distrify
            <img src="http://placekitten.com/40/40">
          </cite>
        </blockquote>
      </div>
    </div>

  </div>
</section>


<div class="hidden posts"> 
@foreach($posts as $post)
    <div class="post">
         <div class="post-title">      {{$post->title}} </div>
         <div class="post-content">   {{$post->content}} </div>
    </div>
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
                       <img src="http://placekitten.com/300/300" class="img-responsive"/>
                    </div>
                    <div class="item">
                       <img src="http://placekitten.com/300/300" class="img-responsive"/>
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
                      <img src="http://placekitten.com/300/300" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="http://placekitten.com/300/300" class="img-responsive"/>
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
                      <img src="http://placekitten.com/300/300" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="http://placekitten.com/300/300" class="img-responsive"/>
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
                      <img src="http://placekitten.com/300/300" class="img-responsive"/>
                    </div>
                    <div class="item">
                      <img src="http://placekitten.com/300/300" class="img-responsive"/>
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
