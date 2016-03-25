
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>URL.co</title>
    <meta name="keywords" content="url">
    <meta name="description" content="Save URL">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta property="og:title" content="URL.co">
    <meta property="og:type" content="website">
    <meta property="og:url" content="url.co">
    <meta property="og:site_name" content="URL.co">
    <meta property="og:description" content="Save URL">

    <!-- Styles -->
    <link rel="stylesheet" href="{!! asset('landing/css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('landing/css/animate.css') !!}">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="{!! asset('landing/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('landing/css/main.css') !!}">

    <script src="{!! asset('landing/js/modernizr-2.7.1.js') !!}"></script>

</head>

<body>


<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-nav">
                <a href="/">URL.co</a>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <a href="#">Ingresar</a>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>

<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 signin navbar-nav">
                <a href="/">URL.co</a>
            </div>
            <div class="col-xs-6 signin text-right navbar-nav">
                <a href="{!! route('twitter_login') !!}">Ingresar</a>
            </div>
        </div>

        <div class="row header-info">
            <div class="col-sm-10 col-sm-offset-1 text-center">
                <h1 class="wow fadeIn">URL.co</h1>
                <br />
                <p class="lead wow fadeIn" data-wow-delay="0.5s">Somos una alternativa diferente para que guardes tus URLs o marcadores y las compartas con tus amigos.</p>
                <br />

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <div class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                                <a href="#be-the-first" class="btn btn-secondary btn-lg scroll">Leer mas</a>
                            </div>
                            <div class="col-xs-6 text-left wow fadeInUp" data-wow-delay="1.4s">
                                <a href="{!! route('twitter_login') !!}" class="btn btn-primary btn-lg">Registrarse via <i class="fa fa-twitter fa-lg"></i></a>
                            </div>
                        </div><!--End Button Row-->
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<div class="mouse-icon hidden-xs">
    <div class="scroll"></div>
</div>

<section id="be-the-first" class="pad-xl">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center margin-30 wow fadeIn" data-wow-delay="0.6s">
                <h2>En todos los lugares</h2>
                <p class="lead">Guarda tus marcadores y accede a ellos desde cualquier dispositivo.</p>
            </div>
        </div>

        <div class="iphone wow fadeInUp" data-wow-delay="1s">
            <img src="{!! asset('landing/img/iphone2.png') !!}">
        </div>
    </div>
</section>
<!--
<section id="main-info" class="pad-xl">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.4s">
                <hr class="line purple">
                <h3>App Feature One Here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
            </div>
            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.8s">
                <hr  class="line blue">
                <h3>App Feature One Here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
            </div>
            <div class="col-sm-4 wow fadeIn" data-wow-delay="1.2s">
                <hr  class="line yellow">
                <h3>App Feature One Here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
            </div>
        </div>
    </div>
</section>
-->
<!--Pricing-->
<!--
<section id="pricing" class="pad-lg">
    <div class="container">
        <div class="row margin-40">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <h2 class="white">Pricing</h2>
                <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut.</p>
            </div>
        </div>

        <div class="row margin-50">

            <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1s">
                <br />
                <ul class="list-unstyled pricing-table text-center">
                    <li class="headline"><h5 class="white">Personal</h5></li>
                    <li class="price"><div class="amount">$5<small>/m</small></div></li>
                    <li class="info">2 row section for you package information. You can include all details or icons</li>
                    <li class="features first">Up To 25 Projects</li>
                    <li class="features">10GB Storage</li>
                    <li class="features">Other info</li>
                    <li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
                </ul>
            </div>

            <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="0.4s">
                <ul class="list-unstyled pricing-table active text-center">
                    <li class="headline"><h5 class="white">Professional</h5></li>
                    <li class="price"><div class="amount">$12<small>/m</small></div></li>
                    <li class="info">2 row section for you package information. You can include all details or icons</li>
                    <li class="features first">Up To 25 Projects</li>
                    <li class="features">10GB Storage</li>
                    <li class="features">Other info</li>
                    <li class="features">Other info</li>
                    <li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
                </ul>
            </div>

            <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1.3s">
                <br />
                <ul class="list-unstyled pricing-table text-center">
                    <li class="headline"><h5 class="white">Business</h5></li>
                    <li class="price"><div class="amount">$24<small>/m</small></div></li>
                    <li class="info">2 row section for you package information. You can include all details or icons</li>
                    <li class="features first">Up To 25 Projects</li>
                    <li class="features">10GB Storage</li>
                    <li class="features">Other info</li>
                    <li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
                </ul>
            </div>

        </div>

    </div>
</section>
-->
<!--
<section id="invite" class="pad-lg light-gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <i class="fa fa-envelope-o margin-40"></i>
                <h2 class="black">Get the invite</h2>
                <br />
                <p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut.</p>
                <br />

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <form role="form">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Request Invite</button>
                        </form>
                    </div>
                </div>--><!--End Form row-->
<!--
            </div>
        </div>
    </div>
</section>
-->

<section id="press" class="pad-sm">
    <div class="container">

        <div class="row margin-30 news-container">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="0.8s">
                <a href="#" target="_blank">
                    <img class="news-img pull-left" src="{!! asset('landing/img/press-01.jpg') !!}" alt="Tech Crunch">
                    <p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut.<br />
                        <small><em>Tech Crunch - January 15, 2015</em></small></p>
                </a>
            </div>
        </div>

        <div class="row margin-30 news-container">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="1.2s">
                <a href="#" target="_blank">
                    <img class="news-img pull-left" src="{!! asset('landing/img/press-02.jpg') !!}" alt="Forbes">
                    <p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut. <br />
                        <small><em>Forbes - Feb 25, 2015</em></small></p>
                </a>
            </div>
        </div>

    </div>
</section>


<footer>
    <div class="container">

        <div class="row">
            <div class="col-sm-8 margin-20">
                <ul class="list-inline social">
                    <li>Buscanos en </li>
                    <li><a href="https://twitter.com/urldotco"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>

            <div class="col-sm-4 text-right">
                <p><small>Copyright &copy; 2016. Derechos Reservados. <br>
            </div>
        </div>

    </div>
</footer>


<!-- Javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{!! asset('landing/js/jquery-1.11.0.min.js') !!}"><\/script>')</script>
<script src="{!! asset('landing/js/wow.min.js') !!}"></script>
<script src="{!! asset('landing/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('landing/js/main.js') !!}"></script>


</body>
</html>