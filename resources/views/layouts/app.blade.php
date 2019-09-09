<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div id="app">
        <h1 class="text-center  display-1 policetitre ">ETHOS</h1>
        <div class="text-center">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="..\images\ethologo.png" alt="">

            </a>
        </div>

        <nav class="navbar fixed-top navbar-expand-md navbar-light shadow-sm">
            <div class="container">


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav" style="margin:0 auto;">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('ACCEUIL ') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('objectif') }}">{{ __('NOS OBJECTIFS ') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profil') }}">{{ __('PROFIL RECHERCHÉ ') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">{{ __('NOUS CONTACTER ') }}</a>
                        </li>
                        @auth

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('actu') }}">{{ __('ACTUALITÉ MEMBRES ') }}</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                UTILISATEUR <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->isAdmin)
                                <a class="dropdown-item" href="{{ route('posts.index') }}">Gestion des articles</a>
                                <a class="dropdown-item" href="{{ route('comments.index') }}">Gestion des commentaires</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Se déconnecter') }}
                                </a>



                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <!-- user connecté -->
                        @elseauth


                        @endauth

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('SE CONNECTER') }}</a>
                        </li>

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __("S'ENREGISTRER") }}</a>
                        </li>
                        @endif
                        @endguest







                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if (session('status'))
            <div class="alert @if(session('type')){{ session('type') }}@else alert-info @endif" role="alert">
                {{ session('status') }}
            </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>

</html>