@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <div class="panel col-sm-4">
                    <div class="panel-heading">Tienda en linea</div>
                    <div class="panel-body">
    <ul>@if(isset($articles))
        @foreach($articles as $article)
        <li>{{$article->title}}</li>
        @endforeach
        @endif
    </ul>
                        

                    </div>

                   </div>
                   <div class="col-sm-8">
                    <div class="panel">
                        <div class="panel-heading"></div>
                        <div class="panel-body">

                        </div>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
