<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Bachelorarbeit - Authentifizierungsprototyp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Bachelorarbeit - Authentifizierungsprototyp</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbartop" aria-controls="navbartop" aria-expanded="false" aria-label="Navbar umschalten">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbartop">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName() == "oidc") active @endif" href="/oidc">OpenID Connect</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName() == "saml") active @endif" href="/saml">SAML</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName() == "radius") active @endif" href="/radius">RADIUS</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link @if(Route::current()->getName() == "dashboard") active @endif" href="/dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/logout">Ausloggen</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
        @yield('content')
        </div>
    </body>
    <footer>
        <!-- JavaScript -->
        <!-- Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </footer>
</html>
