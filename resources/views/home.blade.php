@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    @if(isset($articles))
                    @foreach($articles as $article)
                       <div class="panel col-sm-12">
                            <div class="panel-heading">{{$article->title}}</div>
                            <div class="panel-body">
                                {{$article->description}}
                                {{$article->precio}}
                                {{$article->category}}
                            </div>

                       </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
