<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Plateforme de microblogging">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="screen" title="no title">

    <title>Twitter</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Dernier tweets</h1>

            <div class="col-md-6">
                <div class="media well">
                    <a class="media-left" href="#">
                        <img class="media-object" src="" alt="Avatar image">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">@toto<small class="pull-right text-muted">2h</small></h4>
                        140 caractères c’est très peu pour dire pas grand chose…
                    </div>
                </div>

                <div class="media well">
                    <a class="media-left" href="#">
                        <img class="media-object" src="" alt="Avatar image">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">@jeannotlapin<small class="pull-right text-muted">3h</small></h4>
                        C’est comme si c’était 2005 à nouveau
                    </div>
                </div>

                <div class="media well">
                    <a class="media-left" href="#">
                        <img class="media-object" src="" alt="Avatar image">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">@napoleondu93<small class="pull-right text-muted">1j</small></h4>
                        Du haut de cette application Laravel 5.3, 20000 lignes de codes vous contemplent
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
