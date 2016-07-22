@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                   <h1>La mejor comida para mascotas al norte de Bogotà</h1> 
                </div>

                <div class="panel-body">


        <div class="row">
        	<form action="">
<div class="col-sm-4">
	

            @foreach($articles as $article)
            <div class=" panel panel-default bordered">
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
                    <select class="form-control">
					  <option selected="selected">1 x {{ $article->precio }} </option>
					  <option>2 x{{ $article->precio * 2 }} </option>
					  <option>3 x {{ $article->precio * 3 }} </option>
					  <option>4 x {{ $article->precio*4 }} </option>
					</select>
                </p>
            </div>


            @endforeach
</div>
<div class="col-sm-8">
	
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Numero de telefono</label>
    <input name="telefono" type="text" class="form-control" id="telefono" placeholder="telefono">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="llamame"> llamame
    </label>
  </div>
  <button type="submit"  class="btn btn-default">Enviar</button>
</div>
</form>
        </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tambien puedes hacer tus pedidos por whatsapp</div>

                <div class="panel-body">
                    305-7064871
                </div>
            </div>
        </div>
    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
