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
<div class="col-sm-8">
	
		<input type="text" placeholder="Nombre">
		<input type="text" placeholder="Email">
		<input type="text" placeholder="Telefono">
		<button>Ordenar</button>
	
	

</div>
</form>
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
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
