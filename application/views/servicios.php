<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <head>
        <title>Servicios - MONKEY CAFE | Cafe y gelato</title>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/favicon.ico">

        <!-- Cargando fuentes-->
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
                    <h1 class="display-4  wow bounceIn">Servicios</h1>
                    <p class="wow bounceIn" data-wow-delay=".3s">Apoyamos a nuestros socios.</p>

                </div>

            </div>

        </section>
        <section class="ruta p-y-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-right">
                        <a href="<?= base_url(); ?>">Inicio</a> » Servicios

                    </div>
                </div>
            </div>
        </section>
        <main class="p-y-1 lista-servicios">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <article class="item-servicios">
                            <i class="fa fa-bullseye" aria-hidden="true"></i>
                            <h4>Productos</h4>

                            <p>
                                Entrega de productos directo en su punto de venta, no tendra que moverse de su lugar de trabajo, nosotros nos encargamos del despacho.
                            </p>
                            

                        </article>
                    </div>


                    <div class="col-md-4">
                        <article class="item-servicios">
                            <i class="fa fa-bullhorn" aria-hidden="true"></i>
                            <h4>MonkeyCafe</h4>
                            <p>
                                Marca registrada, no vera otro punto de venta similar ni con productos similares, este punto le dará un valor agregado a su negocio.
                            </p>
                           

                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="item-servicios">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <h4>Beneficios</h4>
                            <p>
                                Nuestro helado posee un tiempo de fusión más alto que los tradicionales, se podría trabajar hasta 5 hrs aprox continuadas, sin derretirse y sin fuente de energia.
                            </p>
                           

                        </article>
                    </div>

                </div>
            </div>
        </main>







        <?php $this->load->view('template/footer'); ?>

        
    </div>
        
        <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>




        <!-- Modal 1  -->
        <div class="modal fade" id="servicio1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Desarrollo de Aplicaciones Mobiles</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-8">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                            </div>

                            <div class="col-md-4">
                                <img src="<?= base_url(); ?>assets/images/servicio-1.svg" alt="" width="200" class="img-fluid m-x-auto">
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>


        <!-- Modal 2  -->
        <div class="modal fade" id="servicio2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Consultoría Tecnológica</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-8">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                            </div>

                            <div class="col-md-4">
                                <img src="<?= base_url(); ?>assets/images/servicio-2.svg" alt="" width="200" class="img-fluid m-x-auto">
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>


        <!-- Modal 2  -->
        <div class="modal fade" id="servicio3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Marketing y publicidad Movil</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-8">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                            </div>

                            <div class="col-md-4">
                                <img src="<?= base_url(); ?>assets/images/servicio-3.svg" alt="" width="200" class="img-fluid m-x-auto m-t-2">
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>


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
