@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <div class="panel col-sm-4">
                    <div class="panel-heading">Articulos</div>
                    <a class="btn btn-default">Nuevo Articulo</a> 
                    <div class="panel-body">

                    </div>

                   </div>
                   <div class="col-sm-8">
                    <div class="panel">
                        <div class="panel-heading">Articulos</div>
                        <div class="panel-body">
                            @foreach ($articulos as $articulo)
                                {{$articulo->title}}<br>
                             @endforeach
                        </div>
                        <div class="panel-footer">Nuevo Articulo<br>

                            <div>
                            <form   action="article/new" method="_POST">
                                <input type="text" name="title" >
                                <input type="text" name="description">
                                <button class="btn btn-default">Crear nuevo articulo</button>
                            </form>
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
