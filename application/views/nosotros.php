<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <head>
        <title>Nosotros - MONKEY CAFE | Cafe y gelato</title>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/favicon.ico">

        <!-- Cargando fuentes -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Cargando iconos -->
        <link href='<?= base_url(); ?>assets/css/font-awesome.min.css' rel='stylesheet' type='text/css'>


        <!-- Carga de archivos css -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos.css">
    </head>

    <body class="paginas-internas">

        <div id="contenido">

            <section class="bienvenidos">

                <?php $this->load->view('template/header'); ?>


                <div class="texto-encabezado text-xs-center">

                    <div class="container">
                        <h1 class="display-4">Nosotros</h1>
                        <p class="wow bounceIn" data-wow-delay=".3s">¿Quienes somos? y ¿Que hacemos?.</p>

                    </div>

                </div>

            </section>
            <section class="ruta p-y-1">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-xs-right">
                            <a href="<?= base_url(); ?>">Inicio</a> » Nosotros

                        </div>
                    </div>
                </div>
            </section>
            <main class="p-y-1 fondo-crema">
                <div class="container">
                    <div class="row">
                        <article class="col-md-8">
                            <h2>{{titulo1}}</h2>
                            <p>{{subtitulo1}}</p>
                            <div id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <h4 class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#tab-mision"> MISIÓN </a>
                                    </h4>
                                    <div id="tab-mision" class="panel-collapse collapse in">
                                        <p>{{subtitulo2}}</p>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <h4 class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-vision" >VISIÓN</a>
                                    </h4>
                                    <div id="tab-vision" class="panel-collapse collapse">
                                        <p>{{titulo2}}</p> 
                                    </div>
                                </div>


                                <div class="panel panel-default">
                                    <h4 class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-valores" >VALORES</a>
                                    </h4>
                                    <div id="tab-valores" class="panel-collapse collapse">
                                        <p>{{cuerpo2}}</p>                                       
                                    </div>
                                </div>
                            </div>

                        </article>
                        <aside class="col-md-4">
                            <img src="<?= base_url(); ?>assets/images/nosotros.svg" alt="Nosotros">
                        </aside>


                    </div>
                </div>
            </main>

            <?php $this->load->view('template/footer'); ?>

        </div>

        <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

        <!-- Carga de archivos  JS -->

        <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/smooth-scroll.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/sitio.js"></script>
        <script src="<?= base_url(); ?>assets/js/vue.js"></script>
        <script src="<?= base_url(); ?>assets/js/axios.min.js"></script>
        <script src="<?= base_url(); ?>assets/vue/configuraciones.js"></script>


    </body>

</html>

