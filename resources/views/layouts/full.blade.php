<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.pjax.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>

    <div class="content">   
        <!--  {{ config('app.name', 'Soundclound') }}-->
        <div id="header">
                <div class="profil">
                    <img class="profil" src="/img/profil.svg" />
                    <span>Profil</span>
                    <!-- Authentication Links -->
                    @guest
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @else
                        <li> Bonjour {{ Auth::user()->name }} </li>
                        <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                 Logout
                            </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </div>
        </div>
        <div class="container">
            <div id="menu">
                <div class="center">
                    <a href="{{ url('/') }}">
                    <img class="logo" src="/img/logo.svg" />
                        </a>
                    <hr/>
                
                    <form id="search">
                        <input  class="recherche" type="search" name="search" required placeholder=" Votre recherche"/>
                        <input class="btEnvoyer" type="submit"/>
                    </form>
                    
                    <div class="itemFlex">
                        <img src="/img/rock.svg" />
                        <span>Rock</span>
                    </div>

                    <div class="itemFlex">
                        <img src="/img/classique.svg" />
                        <span>Classique</span>
                    </div>

                    <div class="itemFlex">
                        <img src="/img/pop.svg" />
                        <span>Pop</span>
                    </div>

                    <div class="itemFlex">
                        <img src="/img/rap.svg" />
                        <span>Rap</span>
                    </div>

                    <hr/>

                    <div class="itemFlex">
                        <img class="plus" src="/img/plus.svg" />
                        <span>Playlists</span>
                    </div>

                    <div class="itemFlex">
                        <img class="plus" src="/img/plus.svg" />
                        <a href="/nouvelle" data-pjax><span>Upload</span></a>
                    </div>

                </div>
        
            </div>

            <div class="banierePub">
                <img class="pub" src="/img/baniere_pub.svg" />
                <main id="pjax-container">
                    @yield('content')
                </main>
            </div>
        
        </div>
            <audio id="audio" controls>
                <source src="" type="audio/mp3" />
            </audio>
    </div>
</body>
</html>