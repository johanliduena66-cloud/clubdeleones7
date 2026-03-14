<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Club de Leones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="images/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{url('/')}}/plantilla/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{url('/')}}/plantilla/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{url('/')}}/plantilla/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{url('/')}}/plantilla/css/flexslider.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{url('/')}}/plantilla/fonts/flaticon/font/flaticon.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{url('/')}}/plantilla/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/')}}/plantilla/css/owl.theme.default.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{url('/')}}/plantilla/css/style.css">

    <!-- Modernizr JS -->
    <script src="{{url('/')}}/plantilla/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body> 


    <div id="colorlib-page">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="border js-fullheight">

            @guest
                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
            @else

                {{ Auth::user()->name }}
                <br>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest


            <h1 id="colorlib-logo"><a href="{{url('/')}}"><img src="{{url('/')}}/plantilla/images/logo.png" width="180"/></a></h1>
            


   
    <div class="container">
        <br>
    </div>        
            
            
            <nav id="colorlib-main-menu" role="navigation">
                <ul>
                    <li class="colorlib-tive"><a href="{{url('/')}}/index">Inicio</a></li>
                    <li><a href="{{url('/')}}/actividades">Actividades de Servicio</a></li>
                    <li><a href="{{url('/')}}/galeriash">Festival Homenageados</a></li>
                    <li><a href="{{url('/')}}/galerias">Festival Galería de imágenes</a></li>
                    <li><a href="{{url('/')}}/videos">Festival Galería de Videos</a></li>
                    <li><a href="{{url('/')}}/presidentes">Gestión de Administrativa</a></li>
                    <li><a href="{{url('/')}}/usuarios">Usuarios del Sistema</a></li>
                   
                </ul>
            </nav>


<h1 id="colorlib-logo"><a href="{{url('/')}}"><img src="{{url('/')}}/plantilla/images/logo2.png" width="150"/></a></h1>



        </aside>

        <div id="colorlib-main">
            <aside id="colorlib-hero" class="js-fullheight">
                <div class="flexslider js-fullheight">
                    <ul class="slides">
                    <li style="background-image: url({{url('/')}}/plantilla/images/g1.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <!--<div class="desc">
                                            <h1>An Inspiring Built Space</h1>
                                            <h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
                                                <p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
                                            </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url({{url('/')}}/plantilla/images/g3.jpeg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <!--<div class="desc">
                                            <h1>Interior Design Studio</h1>
                                                <h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
                                                <p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
                                            </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url({{url('/')}}/plantilla/images/g2.jpeg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <!--<div class="desc">
                                            <h1>The National Gallery</h1>
                                                <h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
                                                <p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
                                            </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
            </aside>

            <div class="colorlib-blog">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">Noticias</span>
                            <h2 class="colorlib-heading">Noticias recientes</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="#" class="blog-img"><img src="{{url('/')}}/plantilla/images/g11.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc">
                                    <span><small>Agosto 14, 2018 </small> | <small> Guainía </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                    <h3><a href="blog.html">Título de noticia</a></h3>
                                    <p>Cuerpo de noticia,Cuerpo de noticia,Cuerpo de noticia,Cuerpo de noticia,Cuerpo de noticia,Cuerpo de noticia,Cuerpo de noticia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{url('/')}}/plantilla/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="{{url('/')}}/plantilla/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="{{url('/')}}/plantilla/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="{{url('/')}}/plantilla/js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="{{url('/')}}/plantilla/js/jquery.flexslider-min.js"></script>
    <!-- Sticky Kit -->
    <script src="{{url('/')}}/plantilla/js/sticky-kit.min.js"></script>
    <!-- Owl carousel -->
    <script src="{{url('/')}}/plantilla/js/owl.carousel.min.js"></script>
    <!-- Counters -->
    <script src="{{url('/')}}/plantilla/js/jquery.countTo.js"></script>
    
    
    <!-- MAIN JS -->
    <script src="{{url('/')}}/plantilla/js/main.js"></script>

    </body>
</html>

