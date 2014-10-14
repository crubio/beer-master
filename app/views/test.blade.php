<!-- Mock up test page -->
<!doctype html>
<html>
    <head>
        <title></title>
        <!-- <link href="css/index.css" rel="stylesheet"> -->
        <link href="css/test/index.css" rel="stylesheet">
        <!-- we need jQuery for a few things on this page -->
        {{ HTML::script('http://code.jquery.com/jquery-latest.min.js')}}
        {{ HTML::script('js/test/test.js')}}

        <!-- html5shiv creates elements that can't be read in IE8 (header, nav, footer, section etc) -->
        <!-- It uses JS createElement() to create missing elements so they can be styled by CSS
        <!--[if lt IE 9]>
             <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- A way to target IE8 -->
        <!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
    </head>
    <body>
        <!-- PAGE CONTENT -->
        <section class="container border">
            <!-- NAVIGATION -->
            <!-- change to header instead of section -->
            <header class="row group">
                <nav id="nav" class="col span-70">
                    <ul class="nav-menu">
                        <li>Web Design <span class="down-arrow"></span></li>
                        <li>GUI <span class="down-arrow"></span></li>
                        <li>Mobile Dev <span class="down-arrow"></span></li>
                        <li>
                            Graphic Design <span class="down-arrow"></span>
                            <ul class="nav-sub-menu">
                                <li><a href="#"> Fireworks</a></li>
                                <li><a href="#"> Flash</a></li>
                                <li><a href="#"> Icon design</a></li>
                                <li><a href="#"> Illustrator</a></li>
                                <li><a href="#"> Logo design</a></li>
                                <li><a href="#"> Photoshop</a></li>
                                <li><a href="#"> Typography</a></li>
                                <li><a href="#"> Vector graphics</a></li>
                                <li><a href="#"> Graphic design archive <span class="right-arrow"></span></a></li>
                            </ul>
                        </li>
                        <li>Freelance <span class="down-arrow"></span></li>
                        <li>Resources <span class="down-arrow"></span></li>
                        <li>Inspiration <span class="down-arrow"></span></li>
                    </ul>
                </nav>
                <!-- SEARCH -->
                <form class="pull-right input-group" action="#" method="POST">
                    <input class="search-box" type="text" placeholder="Search here...">
                    <button class="btn btn-right"type="submit">Search</button>
                </form>
            </header>
            <!-- PAGE CONTENT -->
            <section class="row group">
                <!-- LEFT COLUMN -->
                <section class="col span-70">
                    <article class="content-box row group">
                        <div class="col span-25">
                            <div class="img-box">
                                <img src="http://placehold.it/130x130">
                                <span class="img-descr">Such competition</span>
                            </div>
                        </div>
                        <div class="col span-75">
                            <h2 class="border-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
                            <div class="border-bottom padding-top-bottom">
                                <time>Febuary 25, 2014</time><span class="pull-right"><a href="#">10 comments</a> and <a href="#">22 Reactions</a></span>
                            </div>
                            <div class="border-bottom padding-top-bottom">
                                <span>Topics <span class="right-arrow"></span><a href="#">Competition</a></span><a href="" class="pull-right">Author <span class="right-arrow"></span></a>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                        </div>
                    </article>
                    <article class="content-box row group">
                        <!-- image holder box needs border corners and a border and some padding -->
                        <div class="col span-25">
                            <div class="img-box">
                                <img src="http://placehold.it/130x130">
                                <span class="img-descr">many products</span>
                            </div>
                        </div>
                        <div class="col span-75">
                            <h2 class="border-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
                            <div class="border-bottom padding-top-bottom">
                                <time>Febuary 27, 2014</time><span class="pull-right"><a href="#">No comments</a> and <a href="#">52 Reactions</a></span>
                            </div>
                            <div class="border-bottom padding-top-bottom">
                                <span>Topics <span class="right-arrow"></span><a href="#">Sponsor</a></span><a href="" class="pull-right">Author <span class="right-arrow"></span></a>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                        </div>
                    </article>
                    <article class="content-box row group">
                        <!-- image holder box needs border corners and a border and some padding -->
                        <div class="col span-25">
                            <div class="img-box">
                                <img src="http://placehold.it/130x130">
                                <span class="img-descr">wowe!</span>
                            </div>
                        </div>
                        <div class="col span-75">
                            <h2 class="border-bottom padding-top-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
                            <div class="border-bottom">
                                <time>Febuary 29, 2014</time><span class="pull-right"><a href="#">10 comments</a> and <a href="#">22 Reactions</a></span>
                            </div>
                            <div class="border-bottom padding-top-bottom">
                                <span>Topics <span class="right-arrow"></span><a href="#">Prizes</a></span><a href="" class="pull-right">Author <span class="right-arrow"></span></a>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                            </p>
                        </div>
                    </article>
                </section>
                <!-- RIGHT COLUMN -->
                <section class="col span-30 right-column">
                    <!-- our tabs widget -->
                    <section class="tabs border">
                        <!-- Tab list (group class clears the float)-->
                        <ul class="tabs-menu group">
                            <li class="active"><a href="" data-tab-id="1">Subscribe & follow</a></li>
                            <li><a href="" data-tab-id="2">RSS via email</a></li>
                        </ul>
                        <!-- tab content sections -->
                        <div class="tabs-content">
                            <div class="tabs-panel" data-content-id="1">
                                <ul class="secondary-content-list social-list">
                                    <li><a href="">RSS feed</a><span class="deemphasized-text"> - 33344 subscribers</span></li>
                                    <li><a href="">Google+</a><span class="deemphasized-text"> - 3344 followers</span></li>
                                    <li><a href="">Twitter</a><span class="deemphasized-text"> - 44344 followers</span></li>
                                    <li><a href="">Facebook</a><span class="deemphasized-text"> - 12344 likes</span></li>
                                </ul>
                            </div>
                            <div class="tabs-panel" data-content-id="2">
                                I wrote this as a small jQuery widget for a tabbed box functionality.
                                I can be a plugin at some point with options and other things, but for 
                                now its pretty cool!  Everything happens in the scope of the .tabs dom tree
                                so more boxes won't mess with each other.
                            </div>
                        </div>
                        
                    </section>

                    <section class="tabs border">
                        <ul class="tabs-menu group">
                            <li class="active"><a href="" data-tab-id="1">Subscribe & follow</a></li>
                            <li><a href="" data-tab-id="2">RSS via email</a></li>
                            <li><a href="" data-tab-id="3">extra!</a></li>
                        </ul>
                        <div class="tabs-content">
                            <div class="tabs-panel border-bottom" data-content-id="1">
                                <ul class="secondary-content-list article-list">
                                    <li><a href="">Top 50 of that thing</a></li>
                                    <li><a href="">Top 50 of this thing, and this entry is a bit longer now</a></li>
                                    <li><a href="">Many many icons</a></li>
                                    <li><a href="">Very Christmas! Toolbox, textures, brushes and patterns, ohh my!</a></li>
                                    <li><a href="">Wow such jQuery! Very useful plugins from 2012</a></li>
                                </ul>
                            </div>
                            <div class="tabs-panel border-bottom" data-content-id="2">
                                Adding another box is easy and can be done from an array
                                of things to iterate over without knowing much about the module.
                            </div>
                            <div class="tabs-panel border-bottom" data-content-id="3">
                                The box uses classes to decrease the coupling as the CSS and JS
                                are not tied so closely to the HTML elements.
                            </div>
                        </div>
                    </section>
                    <!-- Some ad -->
                    <div><img src="http://placehold.it/160x160"></div>
                    
                </section>
            </section>
        </section>
    </body>
</html>