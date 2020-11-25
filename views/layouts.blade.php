<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/starter-template/starter-template.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="/js/toastr.js.map"></script>
    <script src="/js/toastr.min.js"></script>
    <link rel="stylesheet" href="/css/toastr.css">
    <link href="https://getbootstrap.com/docs/4.0/examples/starter-template/starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @if($_SERVER['REQUEST_URI']=='/') active @endif">
                <a class="nav-link" href="/">Калькулятор</a>
            </li>
            <li class="nav-item  @if($_SERVER['REQUEST_URI']=='/history') active @endif">
                <a class="nav-link" href="/history">История</a>
            </li>
            <li class="nav-item  @if($_SERVER['REQUEST_URI']=='/settings') active @endif">
                <a class="nav-link" href="/settings">Настройки</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
</body>
</html>
