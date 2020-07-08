<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <title>Contacto - MONKEY CAFE | Cafe y gelato</title>
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
    <section class="bienvenidos">

        <?php $this->load->view('template/header'); ?>


        <div class="texto-encabezado text-xs-center">
            <div class="container">
                <h1 class="display-4 wow bounceIn">Contacto</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Estamos listos para ayudarte</p>

            </div>
        </div>

    </section>
    <section class="ruta p-y-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="<?= base_url(); ?>">Inicio</a> » Contacto
                </div>
            </div>
        </div>
    </section>
    <main class="p-y-1 fondo-crema">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>
        </div>
    </main>



    <?php $this->load->view('template/footer'); ?>

    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

    <!-- Carga de archivos  JS -->

    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/tether.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>

        <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/smooth-scroll.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/sitio.js"></script>

</body>

</html>


