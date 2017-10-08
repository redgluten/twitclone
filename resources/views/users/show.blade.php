@extends('layouts.public')

@section('title')
{{ $user->name }}
@stop

@section('content')
    <div class="container">
        <div class="row">

            {{-- Infos utilisateur --}}
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ '@' . $user->name }}</div>
                    <ul class="list-group">
                        <li class="list-group-item">Inscrit : {{ $user->created_at->diffForHumans() }}</li>
                        <li class="list-group-item">Tweets : <span class="badge">{{ count($tweets) }}</span></li>
                    </ul>
                </div>
            </div>

            {{-- Timeline --}}
            <div class="col-md-6">
                <h3>Tweets</h3>
                @foreach ($tweets as $tweet)
                    <div class="media well">
                        <a class="media-left" href="#">
                            <!-- Photo de profil -->
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"><a href="{{ url('users/' . $tweet->user_id) }}">{{ '@' . $tweet->user->name }}</a><small class="pull-right text-muted">{{ $tweet->created_at->diffForHumans() }}</small></h5>
                            {{ $tweet->content }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
