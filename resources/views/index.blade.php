@extends('layouts.public')

@section('title')
Accueil
@stop

@section('content')
    <div class="container">
        <div class="row">
            <h1>Dernier tweets</h1>

            <div class="col-md-6">

                @foreach($tweets as $tweet)
                    <div class="media well">
                        <a class="media-left" href="#">
                            <!-- Photo de profil -->
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">@??<small class="pull-right text-muted">{{ $tweet->created_at->diffForHumans() }}</small></h4>
                            {{ $tweet->content }}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
