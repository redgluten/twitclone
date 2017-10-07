@extends('layouts.public')

@section('title')
Publier un nouveau tweet
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="{{ url('tweets') }}" method="POST">
                    {{ csrf_field() }}

                    {{-- Erreurs --}}
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <p><strong>Houps&#xA0;!</strong> Veuillez corriger les éléments suivants&#xA0;:</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="content">Votre tweet</label>
                        <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@stop
