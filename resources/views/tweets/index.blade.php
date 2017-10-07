@extends('layouts.public')

@section('title')
Tweets
@stop

@section('content')
<div class="container">

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Utilisateur</th>
                    <th>Contenu</th>
                    <th>Date de création</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tweets as $tweet)
                    <tr>
                        <td>??</td>
                        <td>{{ $tweet->content }}</td>
                        <td>{{ $tweet->created_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $tweets->links() }}

</div>
@stop
