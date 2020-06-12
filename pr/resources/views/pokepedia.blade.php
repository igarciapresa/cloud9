<!DOCTYPE html>
<html dir="ltr" lang="es">
    <head>
        <meta name="robots" content="noindex, nofollow" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Pokepedia</title>
        <link rel="icon" href="{{ url('pokepedia/images/favicon.ico') }}">
        <link rel="stylesheet" href="{{ url('pokepedia/css/style.css') }}"/>
        <link rel="stylesheet" href="{{ url('pokepedia/css/page.css') }}"/>
        <script src="{{ url('pokepedia/lib/jquery/jquery.js') }}"></script>
        <script src="{{ url('pokepedia/js/config.js') }}"></script>
    </head>
    <body class="ltr">
        <div id="mw-page-base"></div>
        <div id="mw-head-base"></div>
        <div id="content" class="mw-body">
            <div id="bodyContent" class="mw-body-content">
                <h1>{{$title ?? ''}}</h1>
                <div class="config-page-wrapper">
                    <div class="config-page">
                        {{-- @include('include.aside') --}}
                        @yield('aside')
                        @if (isset($subtitle))
                            <h2>{{$subtitle}}</h2>
                        @endif
                        <div class="config-section">
                            @if (isset($contenido))
                                <h2>{{ $contenido ?? '' }}</h2>
                            @endif
                            @yield('content')
                            {{-- @include('include.help') --}}
                        </div>
                        <div class="visualClear"></div>
                    </div>
                    <div class="visualClear"></div>
                </div>
            </div>
        </div>
        <div id="mw-panel">
            <div class="portal" id="p-logo">
                <a style="background-image: url( {{ url('pokepedia/images/pokemon-logo.png') }} );" href="." title="PokePedia"></a>
            </div>
            <div class="portal">
                <div class="body">
                    <ul>
                        <li>
                            <a href="{{ url('.') }}">
                                PokePedia
                            </a>
                        </li>
                        @auth
                            <li>
                                <a href="{{ url('.') }}">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ url('login') }}">
                                    Login
                                </a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
            <div class="portal">
                <div class="body">
                    <ul>
                        @guest
                            <li>
                                <a href="{{ url('login') }}">
                                    Login
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('register') }}">
                                    Register
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('password/reset') }}">
                                    Password
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ url('logout') }}">
                                    Logout
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>