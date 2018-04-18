<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>StickMusic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/404.css')}}" rel="stylesheet">

       
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="#">{{Auth::user()->name}}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}">Se connecter</a>
                        <a href="{{ route('register') }}">Inscription</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   Erreur 404
                </div>

                <div class="links">
                   la page n'existe pas
 
                </div>
            </div>
        </div>
   

    </body>
</html>