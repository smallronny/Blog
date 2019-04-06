<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creative Portfolio & Agency Template is a simple Smooth Personal Portfolio and Agency Based Template" />
    <meta name="keywords" content="Personal, Portfolio, Agency, Onepage, Html, Business" />

    <!--====== TITLE TAG ======-->
    <title>Desarrollo Web</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/stellarnav.min.css">
    <link rel="stylesheet" href="css/progressbar.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">



    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER 
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>
    -->

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
         <!--  <div class="top-bar-area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="call-to-action">
                            <p><i class="fa fa-phone"></i> <a href="callto:+8801744430440">+880 1911 854 378</a></p>
                            <p><i class="fa fa-envelope-o"></i> <a href="mailto:backpiper.com@gmail.com">backpiper.com@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="header-social-bookmark">
                            <ul class="social-bookmark">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand logo" ><img src="img/logo.png" alt="logo"></a>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li class="active"><a href="#home">Inicio</a></li>
                                 <li><a href="#service">Servicios</a></li>
                                <li><a href="#portfolio">Portafolio</a></li>
                                <li><a href="#client">Clientes</a></li>
                                <li><a href="#pricing">Precios</a></li>
                                <li><a href="#news">Blog</a></li>
                                <li><a href="#contact">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
    </header>
    <!--END TOP AREA-->

    <!--WELCOME SLIDER AREA-->
    <div class="welcome-slider-area white">
        <div class="welcome-single-slide">
            <div class="slide-bg-one slide-bg-overlay"></div>
            <div class="welcome-area">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-7 col-lg-6 col-sm-12 col-xs-12">
                            <div class="welcome-text">
                                 
                                <h1>Creamos Tecnologia, Desarrollamos tu Web</h1>
                                <p>Diseños modernos, interactivos, funcionales y optimizados para escalar en buscadores. Páginas diseñadas para captar clientes.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="welcome-single-slide">
            <div class="slide-bg-three slide-bg-overlay"></div>
            <div class="welcome-area">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-7 col-lg-6 col-sm-12 col-xs-12">
                            <div class="welcome-text">
                                 <h1>Creamos Tecnologia, Desarrollamos tu Web</h1>
                                <p>Diseños modernos, interactivos, funcionales y optimizados para escalar en buscadores. Páginas diseñadas para captar clientes.</p>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--WELCOME SLIDER AREA END-->

 

    <!--SERVICE AREA-->
    <section class="service-area section-padding" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Nuestros Servicios</h2>
                        <p>La Tecnología es nuestra pasión, por eso te ofrecemos un servicio eficiente, económico y de la más alta calidad. 
Unete a nuestra familia y se diferente a tu competencia, SE EL MEJOR.</p>
                    </div>
                </div>
            </div>
            <div class="row flex-v-center">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service right wow fadeIn">
                        <div class="service-icon">
                            <div class="i fa fa-rocket"></div>
                        </div>
                         <h4>Desarrollo Web</h4>
              <p>Desarramos tu Página Web a la medida, adaptandolas a todos tus dispositivos</p>
                    </div>
                    <div class="single-service right wow fadeIn">
                        <div class="service-icon">
                            <div class="i fa fa-camera"></div>
                        </div>
                       <h4>Páginas Webs Administrables</h4>
              <p>Toma el control de tu página, actualiza post, edita, crea, promociona nuevos productos y servicios en tu sitio web.</p>
                    </div>
                    <div class="single-service right mbzero wow fadeIn">
                        <div class="service-icon">
                            <div class="i fa fa-desktop"></div>
                        </div>
                         <h4>E-Commerce</h4>
              <p>Si lo que quieres es incrementar sus ventas, desarrollamos tu tienda electrónica exitosa con diseños modernos</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 hidden-sm">
                    <div class="service-image text-center wow fadeIn">
                        <img src="img/service/service-mockup.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service left wow fadeIn">
                        <div class="service-icon">
                            <div class="i fa fa-cog"></div>
                        </div>
                         <h4>Posicionamiento Seo</h4>
              <p>Si aun no tienes presencia en internet, esta es la oportunidad de darte a conocer posicionando tu página en los primeros lugares de los navegadores</p>
                    </div>
                    <div class="single-service left wow fadeIn">
                        <div class="service-icon">
                            <div class="i fa fa-bullhorn"></div>
                        </div>
                         <h4>Redes Sociales</h4>
              <p>Si no tienes el tiempo de administrar las redes sociales, tu mercadolibre, te ofrecemos excelentes planes a tu medida</p>
                    </div>
                    <div class="single-service left mbzero wow fadeIn">
                        <div class="service-icon">
                            <div class="i fa fa-cog"></div>
                        </div>
                        <h4>Hosting</h4>
              <p>Te ofrecemos excelentes y comodos planes de alojamiento para tu web, con correos coorporativos, certificados SSL y atención 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SERVICE AREA END-->

    <!--PORTFOLIO AREA-->
    <section class="portfolio-area padding-100-70 white-gray-bg" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Proyectos Terminados</h2>
                        <p>En LeapCodes siempre estamos un paso adelante y llevamos a su empresa las ultimas tecnologias relacionadas con los herramientas de interaccion entre sus clientes y su empresa, que sin duda alguna se traduciran en productividad y el logro de sus objetivos</p>
                    </div>
                </div>
            
          <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="portfolio-menu-content wow fadeIn">
                        <ul class="portfolio-menu">
                            <li class="active" data-filter="*">todos</li>
                            <li data-filter=".web">Html</li>
                            <li data-filter=".photography">Web Administrable</li>
                            <li data-filter=".development">E-COMMERCE </li>
                            <li data-filter=".marketing">Aplicaciones </li>
                            <li data-filter=".digital">Digital Media </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row portfolio-list wow fadeIn">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 marketing photography portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_1.jpg" alt="">
                        </div> 
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 digital development portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 photography marketing portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_3.jpg" alt="">
                        </div>
                    </div>
                </div>
        </div>
        <hr class="hr-home">
                <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 web digital portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 development marketing portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_5.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 web portfolio-item">
                    <div class="single-portfolio white">
                        <div class="portfolio-thumb">
                            <img src="img/portfolio/portfolio_6.jpg" alt="">
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!--PORTFOLIO AREA END-->

    <!--PROMO AREA-->
    <section class="promo-area section-padding relative">
        <div class="area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="promo-content text-center white wow fadeIn">
                        <h2>La web de tu empresa es tu vitrina Online</h2>
                        <a href="#" class="download-button">Calcular Costo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PROMO AREA END-->

 

    <!--INFO AREA-->
    <section class="info-area white-gray-bg">
        <div class="container">
            <div class="row flex-v-center">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="intro-image wow fadeIn">
                        <img src="img/intro/intro-bg.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="intro-content wow fadeInRight">
                        <h6 class="high-light">¿Qué es una App?</h6>
                        <p>Una Aplicación móvil o App es un programa que se instala en el Smartphone o Tablet del cliente.De esta manera la App pasa a formar parte del celular, un lugar privilegiado en la que toda marca querría estar. El ícono que la identifica, con la imagen de su empresa, estará visible en todo momento, recordando al usuario nuestra existencia, tanto cuando la vaya a usar como cuando esté realizando otra tarea.</p>
                        <p>Recuerde que cuando el usuario está trabajando, mira el celular, cuando está aburrido, mira el celular, cuando está viajando, mira el celular, cuando está comunicándose, mira el celular, cuando se está divirtiendo, mira el celular, cuando lee el correo, consulta la agenda, etc., mira el celular.</p>
                        <a href="#" class="read-more">Leer Más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--INFO AREA END-->
 

    <!--PRICING AREA-->
    <section class="price-area padding-100-70 white-gray-bg" id="pricing">
        <div class="container">

                <div class="row">
                        <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                            <div class="area-title text-center wow fadeIn">
                                <h2>El plan ideal para ti</h2>
                             </div>
                        </div>
                    </div>

            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-price center wow fadeInUp" data-wow-delay="0.2s">
                        
                        <div class="price-rate white">
                            <h2>Plan Inicio</h2>
                        </div>
                        <div class="price-details">
                            
                <span>1 Sitio Web</span>
                <ul>
                 <li>Certificado de Seguridad (SSL) Incluido</li>
                  <li>Dominio Incluido</li>
                  <li>1 GB Espacio en Disco SSD</li>
                  <li>8 GB Transf. Mensual</li>
                  <li>20 Cuentas de correo</li>
                  <li>6 Páginas de Contenidos</li>
                  <li>1 Año de Alojamiento Web</li>
                  <li>2 Cuentas FTP</li>
                  <li>2 Bases de datos</li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                        </div>
                        <div class="buy-now-button">
                            <a href="#" class="read-more">Solicitar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-price center wow fadeInUp" data-wow-delay="0.3s">
                       
                        <div class="price-rate white">
                           <h2>Plan Popular</h2>
                        </div>
                        <div class="price-details">
                             
                <span>1 Sitio Web</span>
                 <ul>
                  <li>Certificado de Seguridad (SSL) Incluido</li>
                  <li>Dominio Incluido</li>
                  <li>5 GB Espacio en Disco SSD</li>
                  <li>25 GB Transf. Mensual</li>
                  <li>5 Bases de datos</li>
                  <li>20 Cuentas de correo</li>
                  <li>14 Páginas de Contenidos</li>
                  <li>1 Año de Alojamiento Web</li>
                  <li>Cuentas FTP Ilimitado</li>
                  <li>Posicionamiento SEO</li>
                  <li>Creaciòn de cuentas para Redes Sociales</li>
                </ul>
                        </div>
                        <div class="buy-now-button">
                            <a href="#" class="read-more">Solicitar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-price center wow fadeInUp" data-wow-delay="0.4s">
                        
                        <div class="price-rate white">
                            <h2>Plan Premium</h2>
                        </div>
                        <div class="price-details">
                             
                <span>1 Sitio Web</span>
                <ul>
                 <li>Certificado de Seguridad (SSL) Incluido</li>
                  <li>1 Año de Alojamiento</li>
                  <li>Dominio Incluido</li>
                  <li>Base de Datos Ilimitado</li>
                  <li>Cuentas de Correo Ilimitado</li>
                  <li>Espacio en Disco SSD Ilimitado</li>
                  <li>Cuentas FTP Ilimitado</li>
                  <li>Diseño de Logo</li>
                  <li>Posicionamiento SEO</li>
                  <li>Paginas de Contenidos Ilimitado</li>
                  <li>Creaciòn y Admin. cuentas para Redes Sociales</li>

                </ul>
                        </div>
                        <div class="buy-now-button">
                            <a href="#" class="read-more">Solicitar</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--PRICING AREA END-->

    <!--BLOG AND FEED AREA-->
    <section class="blog-and-feed-area section-padding white-gray-bg" id="news">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Enterate con nosotros</h2>
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 hidden-sm">
                    <div class="feed-widget twitter-feed mb50 wow fadeIn">
                        <h4>facebook</h4>
                        <ul>
                            <li>
                                <div class="twitter-icon"><i class="fa fa-twitter"></i></div>
                                <a href="#">@_sumonrahman</a>: Lorem ipsum dolors sit amets sums consectetur adipicing elit sed do eiusmod eset tempor incididunt ut labore.
                            </li>
                            <li>
                                <div class="twitter-icon"><i class="fa fa-twitter"></i></div>
                                <a href="#">@_sumonrahman</a>: Lorem ipsum dolors sit amets sums consectetur adipicing elit sed do eiusmod eset tempor incididunt ut labore.
                            </li>
                            <li>
                                <div class="twitter-icon"><i class="fa fa-twitter"></i></div>
                                <a href="#">@_sumonrahman</a>: Lorem ipsum dolors sit amets sums consectetur adipicing elit sed do eiusmod eset tempor incididunt ut labore.
                            </li>
                            <li>
                                <div class="twitter-icon"><i class="fa fa-twitter"></i></div>
                                <a href="#">@_sumonrahman</a>: Lorem ipsum dolors sit amets sums consectetur adipicing elit sed do eiusmod eset tempor incididunt ut labore.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="feed-widget blog-feed mb50 wow fadeIn">
                        <h4>Blog </h4>
                      
                        <div class="blog-list">
                            <div class="single-blog">
                                <div class="blog-thumb">
                                    <img src="img/blog/blog-1.jpg" alt="">
                                </div>
                                <div class="blog-details">
                                
                                    <h4><a href="#">The User Experience</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a></p>
                                    <p class="blog-meta">Posted by <a href="#">admin</a> at <a href="#">04 Feb, 2017</a></p>
                                </div>
                            </div>
                            <div class="single-blog">
                                <div class="blog-thumb">
                                    <img src="img/blog/blog-2.jpg" alt="">
                                </div>
                                <div class="blog-details">
                                    <h4><a href="#">The User Experience</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <p>
 
                </p><a href="#">Read More</a></p>
                                    <p class="blog-meta">Posted by <a href="#">admin</a> at <a href="#">04 Feb, 2017</a></p>
                                </div>
                            </div>
                            <div class="single-blog">
                                <div class="blog-thumb">
                                    <img src="img/blog/blog-3.jpg" alt="">
                                </div>
                                <div class="blog-details">
                                    <h4><a href="#">The User Experience</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a></p>
                                    <p class="blog-meta">Posted by <a href="#">admin</a> at <a href="#">04 Feb, 2017</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
                <div class="hidden-md col-lg-4 col-sm-6 col-xs-12">
                    <div class="feed-widget insta-feed wow fadeIn">
                        <h4>Instagram</h4>
                        <ul>
                            <li>
                                <a href="#"><img src="img/instagram/insta_1.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_2.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_3.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_4.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_5.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_6.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_7.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_8.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_9.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>nuestros clientes</h2>
                     </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="client-slider mt50 wow fadeIn">
                        <div class="single-client">
                            <img src="img/client/client-1.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-2.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-3.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-4.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-5.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-1.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-2.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-3.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-4.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="img/client/client-5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AND FEED AREA END-->

    <!--CONTACT US AREA-->
    <section class="contact-area padding-top white-gray-bg" id="contact">
        <div class="contact-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="contact-details-content wow fadeIn">
                            <h2>Contáctenos</h2>
                              <div class="contact-address-details">
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h5>Dirección</h5>
                                        <p>Valencia, Edo-Carabobo, Venezuela</p>
                                    </div>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h5>Teléfonos</h5>
                                        <p>+58 41274745038</p>
                                    </div>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h5>Email</h5>
                                        <p>leapcodes@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="contact-form mb50 wow fadeIn">
                            <h2>Enviar Mensaje</h2>

                            <?php
        if($this->session->flashdata("success"))
        {
            ?>
            <div class="">
                <?php echo $this->session->flashdata("success") ?>
            </div>
            <?php
        }
        ?>
          
                           <?php echo form_open(base_url("contacto/send")) ?>
                            
                                <div class="form-group" id="name-field">
                                    <div class="form-input">
                                        <input type="text" class="form-control" id="form-name" name="name" placeholder="Nombre.." required>
                                      
                                    </div>
                                </div>
                                <div class="form-group" id="email-field">
                                    <div class="form-input">
                                        <input type="email" class="form-control" id="form-email" name="email" placeholder="Email.." required>
                                    </div>   
                                </div>
                               
                                <div class="form-group" id="message-field">
                                    <div class="form-input">
                                        <textarea type="text" class="form-control" rows="6" id="form-message" name="message" placeholder="Escriba su mensaje..." required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php echo form_submit("send", "Enviar", array("class" => "btn btn-success btn-lg pull-right")) ?>

                                </div>
                       
                     

        <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--CONTACT US AREA END-->

    <!--FOOER AREA-->
    <div class="footer-area white">
        <div class="footer-top-area padding-100-50 dark-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-social-bookmark text-center wow fadeIn">
                            <h2>Siguenos</h2>
                            <ul class="social-bookmark">
                                <li><a class="facebook" href="https://www.facebook.com/Leapcodes/"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                
                             </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area deep-dark-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center wow fadeIn">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a href="https://leapcodes.com.ve" target="_blank">LeapCodes</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/vendor/jquery.appear.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/stellarnav.min.js"></script>
 
    <script src="js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="js/main.js"></script>
 
</body>

</html>
