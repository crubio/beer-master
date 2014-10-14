<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Christopher A. Rubio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>a css slideshow</title>

    <!-- <link rel="stylesheet" href="/css/global.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/test/slideshow.css">
</head>
<body>
    <header>

    </header>

    <section class="container">
        <div id="content-slider">
            <div id="slider">
                <div id="mask">
                    <ul>
                        <!--images-->
                        <li id="first" class="first-animation">
                            <a href="#"><img src="/img/blues.jpg"></a>
                            <div class="tooltip"><h1>The Blues are Still Blue</h1></div>
                        </li>
                        <li id="second" class="second-animation">
                            <a href="#"><img src="/img/brickman.jpg"></a>
                            <div class="tooltip"><h1>Push Brickman to Open Old Wounds</h1></div>
                        </li>
                        <li id="third" class="third-animation">
                            <a href="#"><img src="/img/lazy_jane.jpg"></a>
                            <div class="tooltip"><h1>Lazy Line Painter Jane</h1></div>
                        </li>
                        <li id="fourth" class="fourth-animation">
                            <a href="#"><img src="/img/dcw.jpg"></a>
                            <div class="tooltip"><h1>Dear Catastrophe Waitress</h1></div>
                        </li>
                    </ul>
                </div><!--/mask-->
                <div class="progress-bar"></div>
            </div><!--/sider-->
        </div><!--/content-slider-->
    </section>
</body>
</html>