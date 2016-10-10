@extends('layouts.app')

@section('content')

<!-- -->
<div class="row">
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
<div class=" row padre">
<div class="hijo col-md-2"><a href="/Gatos/hills-comida-gato" target="_blank"><img id="hills_slider" src="https://www.ciudaddemascotas.com/projects/Slider_Marcas/images/hills.jpg" alt="image05"></a></div>
<div class="hijo col-md-2"><a href="/Gatos/pro-plan-comida" target="_blank"><img id="proplan_slider" src="https://www.ciudaddemascotas.com/projects/Slider_Marcas/images/proplan.jpg" alt="image05"  ></a></div>
<div class="hijo col-md-2"><a href="/Gatos/taste-of-the-wild-comida" target="_blank"><img id="taste_slider" src="https://www.ciudaddemascotas.com/projects/Slider_Marcas/images/tasteofthewild.jpg" alt="image05" ></a></div>
<div class="hijo col-md-2"><a href="/Gatos/nutra-nuggets-comida" target="_blank"><img id="nutra_slider" src="https://www.ciudaddemascotas.com/projects/Slider_Marcas/images/nutra-nuggets.jpg" alt="image05" ></a></div>
<div class="hijo col-md-2"><a href="/Gatos/total-max-cat-comida" target="_blank"><img id="totalmax_slider" src="https://www.ciudaddemascotas.com/projects/Slider_Marcas/images/total-max-3.png" alt="image05" ></a></div>
<div class="hijo col-md-2"><a href="/Gatos/diamond-comida" target="_blank"><img id="diamond_slider" src="https://www.ciudaddemascotas.com/projects/Slider_Marcas/images/diamond.jpg" alt="image01"  ></a></div>
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

        <div class="row   windowstiles hidden">
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

        derechos registrados <a href="https://api.instagram.com/oauth/authorize/?client_id=5857a47c222b43e39816def813eeaf8d&redirect_uri=http://www.petdelivery.co&response_type=code" target="_blank">Instagram</a>
        
    </div>
</footer>
@endsection
