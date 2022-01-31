<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dreamland Amusements</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body>
        <header>
            <a href="/">
                <img src="/images/logo.png" alt="Dreamland Amusements" />
            </a>
        </header>

        <section id="intro">
            <div id="overlay"></div>
            <h1 class="text-center text-white">Welcome to your<br />dream vacation!</h1>
            <video autoplay muted loop>
                <source src="/videos/ferris-wheel.mp4" type="video/mp4">
            </video>
        </section>

        <section class="page-content">
            <div class="container">
                @yield('content')
            </div>
        </section>

        <footer class="text-center mt-4 mb-4">
            <small class="text-muted">
                © {{ date('Y') }} Carnival Corporation. All rights reserved.
            </small>
        </footer>

        <script src="/js/app.js"></script>
    </body>
</html>
