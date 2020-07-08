<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139564986-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139564986-1');
</script>

        <title>MONKEY CAFE | Cafe y gelato</title>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="cafe, gelato, monkeycafe, santiago, cafeteria" content="cafe, gelato, monkeycafe, santiago, cafeteria"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?php base_url(); ?>assets/favicon.ico">

        <!-- Cargando fuentes -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Cargando iconos -->

        <link href='<?= base_url(); ?>assets/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
     
        <!-- Carga de Galeria de imágenes -->
        <link rel="stylesheet" href="<?php base_url(); ?>assets/css/owl.carousel.min.css">

        <!-- Carga de archivos css -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos.css">
    </head>

    <body>
        <div id="contenido">
            <section class="bienvenidos">
                <?php $this->load->view('template/header'); ?>
                <div class="texto-encabezado text-xs-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="display-4 wow bounceIn">Monkey Café Gelato</h1>
                                <br />
                                <h5 class="wow bounceIn" data-wow-delay=".3s"></h5>
                                <br />
                            </div>
                            <div class="col-md-4 offset-md-2 hidden-sm-down">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <i class="fa fa-coffee fa-5x wow bounceInLeft" aria-hidden="true"  data-wow-delay=".1s"></i>
                                    </div>
                                    <div class="col-xs-6">
                                        <i class="fa fa-child fa-5x wow bounceInUp" aria-hidden="true"  data-wow-delay=".1s"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 hidden-sm-down">
                                <h5 class="wow bounceIn" data-wow-delay=".3s">Juntamos el sabor del café y del helado</h5>
                            </div>
                            <div class="col-md-12">
                                <br />
                                <a href="<?= base_url('contacto'); ?>" class="btn btn-primary btn-lg">Ponte en contacto</a>
                            </div>



                        </div>

                    </div>

                </div>
                <div class="flecha-bajar text-xs-center">
                    <a data-scroll href="#agencia"> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                </div>

            </section>
            <section class="agencia p-y-1" id="agencia">

                <div class="container">


                    <div class="row">

                        <div class="col-md-8 col-xl-9 wow bounceIn" data-wow-delay=".3s">
                            <h2 class="h3 text-xs-center text-md-left font-weight-bold">Monkey Cafe & Gelato</h2>
                            <p>El emprendimiento personal se desarrolla cuando una persona posee una necesidad ya sea por cesantía, ingresos insuficientes o algún desafío; lamentablemente los dos primeros
                            tipos de emprendimiento tienen muy poca posibilidad de sobrevivir, debido a que cualquier cosa que se pueda vender sirve. En esta situación lo ideal seria alguna asesoría, pero una simple asesoría no sirve
                            ya que se necesita una idea de negocio estable y un capital inicial; la única solución. seria incorporarse a una franquicia, cosa que seria muy dificil a los grandes montos y garantías solicitadas.</p>
                           

                        </div>
                        <div class="col-md-4 col-xl-3 wow bounceIn" data-wow-delay=".6s">
                            <img src="<?php base_url(); ?>assets/images/oficial.png" alt="La agencia" class="img-fluid">
                        </div>
                    </div>
                </div>

            </section>
            <section class="tu-mejor-eleccion p-y-1 fondo-crema">
                <div class="container">
                   

                    <h2 class="h3 text-xs-center font-weight-bold">¿Porque somos <span>tu mejor elección?</span></h2>
                    <p class="text-xs-center">
                        
                        Bajo costo y preocupado por su rentabilidad
                    </p>

                    <div class="row flex-parent align-items-center">
                        <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-left">
                            <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                                <i class="fa fa-comment-o" aria-hidden="true"></i>

                                <div class="contenedor-eleccion">
                                    <h4>Dulces poco comunes</h4>
                                <p class="hidden-md-down">Contamos con dulces que atractivos y novedosos.</p>
                                </div>
                            </li>
                            <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".8s">
                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                <div class="contenedor-eleccion">
                                    <h4>Rentabilidad asegurada</h4>
                                    <p class="hidden-md-down">Sabemos lo importante para nuestros clientes.</p>
                                </div>
                            </li>
                            <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay="1s">

                                <i class="fa  fa-users" aria-hidden="true"></i>

                                <div class="contenedor-eleccion">
                                    <h4>Productos hechos por nosotros</h4>
                                <p class="hidden-md-down">De primera linea hacia su disposición.</p>
                                </div>
                            </li>
                        </ul>

                        <div class="hidden-md-down col-lg-4 flex-child">
                            <img src="<?php base_url(); ?>assets/images/carro.jpg" alt="MONKEY CAFE" class="img-fluid bordeRedondo">
                        </div>

                        <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                            <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
                                <i class="fa  fa-street-view" aria-hidden="true"></i>
                                <div class="contenedor-eleccion">
                                    <h4>Ayudamos en donde ubicarte</h4>
                                   <p class="hidden-md-down">Lo asesoramos en todos los aspectos.</p>
                                </div>
                            </li>
                            <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                <div class="contenedor-eleccion">
                                    <h4>Flete es parte nuestra</h4>
                                    <p class="hidden-md-down">olvidese de andar comprando</p>
                                </div>
                            </li>
                            <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay="1.1s">
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <div class="contenedor-eleccion">
                                    <h4>Oferta de productos para días fríos y calurosos</h4>
                                    <p class="hidden-md-down">Para cualquier momento del dia</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <main class="servicios p-y-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="text-xs-center font-weight-bold">Nuestros Servicios</h2>
                        </div>
                    </div>
                    <div class="row">
                        <article class="col-xs-12 col-md-4 wow bounceInLeft" data-wow-delay=".3s">
                            <img src="<?php base_url(); ?>assets/images/servicio1.svg" alt="La agencia" class="hidden-md-up">
                            <img src="<?php base_url(); ?>assets/images/servicio1.png" class="hidden-sm-down maximo" alt="La agencia">
                            <h3><a href="#"> Productos </a></h3>
                            <p class="hidden-sm-down">Entrega de productos directo en su punto de venta</p>
                            

                        </article>

                        <article class="col-xs-12 col-md-4 wow bounceInUp text-xs-center" data-wow-delay=".6s">
                            <img src="<?php base_url(); ?>assets/images/servicio1.svg" alt="La agencia" class="hidden-md-up">
                            <img src="<?php base_url(); ?>assets/images/servicio1.png" class="hidden-sm-down maximo" alt="La agencia" width="150px" height="150px">
                            <h3><a href="#">MonkeyCafe</a></h3>
                            <p class="hidden-sm-down">Marca registrada no vera otro punto de venta similar ni con productos similares.</p>
                       
                        </article>

                        <article class="col-xs-12 col-md-4 wow bounceInRight text-xs-center" data-wow-delay="1s">
                            <img src="<?php base_url(); ?>assets/images/servicio1.svg" alt="La agencia" class="hidden-md-up">
                            <img src="<?php base_url(); ?>assets/images/servicio1.png" class="hidden-sm-down maximo" alt="La agencia" width="150px" height="150px">
                            <h3><a href="#">Beneficios</a></h3>
                            <p class="hidden-sm-down">Nuestro helado posee un tiempo de fusión más alto que los tradicionales, se podríua trabajar aprox 5 hrs continuadas, sin derretirse y sin fuente de energía.</p>
                       
                        </article>

                    </div>
                </div>
            </main>


            <section class="ultimos-proyectos p-y-1 fondo-crema">
                <div class="container">
                    <h2 class="text-xs-center font-weight-bold">Galeria de imagenes</h2>
                    <br />

                    <div class="owl-carousel">
                        <a href="#">
                            <h4>IMAGEN 1</h4>
                            <img src="<?php base_url(); ?>assets/images/proyecto1.jpg" alt="App Lima Travels">
                        </a>

                        <a href="#">
                            <h4>IMAGEN 2</h4>
                            <img src="<?php base_url(); ?>assets/images/proyecto2.jpg" alt="Apps Uber">
                        </a>

                        <a href="#">
                            <h4>IMAGEN 3</h4>
                            <img src="<?php base_url(); ?>assets/images/proyecto3.jpg" alt="App Pizza Perú">
                        </a>

                        <a href="#">
                            <h4>IMAGEN 4</h4>
                            <img src="<?php base_url(); ?>assets/images/proyecto4.jpg" alt="App Muebles Hoy">
                        </a>

                        <a href="#">
                            <h4>IMAGEN 5</h4>
                            <img src="<?php base_url(); ?>assets/images/proyecto5.jpg" alt="App Clima Perú">
                        </a>

                        <a href="#">
                            <h4>IMAGEN 6</h4>
                            <img src="<?php base_url(); ?>assets/images/proyecto6.jpg" alt="App  Playa">
                        </a>


                    </div>
                </div>
            </section>

        
        <?php $this->load->view('template/footer'); ?>
            <!--   <pre>{{$data}}</pre> 
        </div>

        <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

        <!-- Carga de archivos  JS -->

        <script src="<?php base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript">
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    autoWidth: false,
    navText: ['<i class="fa fa-arrow-circle-left" title="Anterior"></i>', '<i class="fa  fa-arrow-circle-right" title="Siguiente"></i>'],
    responsive: {
        0: {
            items: 1
        },
        500: {
            items: 2,
            margin: 20
        },
        800: {
            items: 3,
            margin: 20
        },
        1000: {
            items: 4,
            margin: 20
        }
    }
});
        </script>
        <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
        
        <script src="<?= base_url(); ?>assets/js/smooth-scroll.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/tether.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/sitio.js"></script>



    </body>

</html>
