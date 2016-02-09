<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Phalcon PHP Framework</title>
        {{ stylesheet_link('css/bootstrap.min.css') }}
        {{ stylesheet_link('css/flags.css') }}
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <header class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-content" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    {{ link_to('', 'Tennis', 'class': 'navbar-brand') }}
                </header>

                <div id="navbar-content" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ router.getControllerName() == '' ? 'active' : '' }}">{{ link_to('', 'Accueil') }}</li>
                        <li class="{{ router.getControllerName() == 'classement' ? 'active' : '' }}">{{ link_to('classement', 'Classement') }}</li>
                        <li class="{{ router.getControllerName() == 'joueur' ? 'active' : '' }}">{{ link_to('joueur', 'Joueur') }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 80px;">
            {{ flash.output() }}

            {{ content() }}
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        {{ javascript_include('js/jquery.min.js') }}
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <!-- Latest compiled and minified JavaScript -->
        {{ javascript_include('js/bootstrap.min.js') }}
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    </body>
</html>
