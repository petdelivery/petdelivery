@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center"> 
                   <h1>La mejor comida para mascotas al norte de Bogotà</h1> 
                </div>
                <div class="panel-body">
        <div class="row">
        	<form action="/orden" method="post">
				<div class="col-sm-4">
	            @foreach($articles as $article)
	            <div class=" panel panel-body bordered">
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
	                    <select class="form-control" name="cantidad">
						  <option selected="selected" value="1">1 x ${{ $article->precio }} </option>
						  <option value="2">2 x ${{ ($article->precio * 2) - 2000 }} </option>
						  <option value="3">3 x ${{ ($article->precio * 3 ) - 3000}} </option>
						  <option value="4">4 x ${{ ($article->precio * 4) - 4000 }} </option>
						</select>
	                </p>
	            </div>
	            @endforeach
	            <input type="hidden" name="_token" value="{{ csrf_token() }}">
	            <input type="hidden" name="producto" value="{{ $article->id }}">
				</div>
				<div class="col-sm-8">
					
				  <div class="form-group">
				    <label for="email">Correo electronico</label>
				    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="name">Nombre</label>
				    <input name="direccion" type="text" class="form-control" id="name" placeholder="Email">
				  </div>
				   <div class="form-group">
				    <label for="direccion">Direccion</label>
				    <input name="direccion" type="text" class="form-control" id="direccion" placeholder="direccion">
				  </div>
				  <div class="form-group">
				    <label for="telefono">Numero de telefono</label>
				    <input name="telefono" type="text" class="form-control" id="telefono" placeholder="telefono">
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox" name="llamame"> Llamame
				    </label>
				  </div>
				  <button type="submit"  class="btn btn-success">Enviar</button>
				</div>
			</form>
        </div>
        <hr>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Tambien puedes hacer tus pedidos por whatsapp</div>

                <div class="panel-body text-center">
                   <a href="whatsapp://send?text=http://www.petdelivery.co" data-action="share/whatsapp/share">
                 <h3>  	305-7064871</h3>
                   </a> 
                   <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.petdelivery.co&layout=button_count&size=small&mobile_iframe=true&appId=500499870153256&width=91&height=20" width="91" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="row text-center" style="background:black;color;white;">

       Todos los  derechos reservados
        
    </div>
</footer>
@endsection
