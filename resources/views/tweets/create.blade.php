@extends('layouts.public')

@section('title')
Publier un nouveau tweet
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="" method="POST">
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
