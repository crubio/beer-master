<?php
    // Path variable
    $path = Request::path()."-page";
?>
<!doctype html>
<html>
    <head>
        <title>
            @section('title')

            @show
        </title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="Christopher A. Rubio">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="tg-awBAOXG4pUiYhgTRiVnDxQ1vG0TW7xS4QET7oZQQ" />
        <!-- CSS here -->
        {{ HTML::style('css/global.css')}}
        {{ HTML::style('css/bootstrap.min.css')}}
        {{ HTML::style('css/beer/beer.css')}}
        {{ HTML::style('css/home/index.css')}}
    </head>
    <body class="<?=$path?>">
        <nav>
            <ul class="clearfix">
                <li><a href="/">Home</a></li>
                <li><a href="/beers">Beer</a></li>
                <li><a href="/resume">Resume</a></li>
            </ul>
            <a href="#" id="pull">Menu</a>
        </nav>

        <!-- Content -->
        <div class="wrap">
        @yield('content')
    </div>
        <!-- Scripts are placed here -->
        {{ HTML::script('http://code.jquery.com/jquery-latest.min.js')}}
        {{ HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js')}}
        {{ HTML::script('http://ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular-route.js')}}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/angular/app.js')}}
        {{ HTML::script('js/angular/beercontroller.js') }}
        <!-- Analytics -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-48259705-1', 'roob.io');
          ga('send', 'pageview');

        </script>
    </body>
</html>