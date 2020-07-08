<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139564986-1"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-139564986-1');
        </script>

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

        <div id="contenido">

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

                        <div class="col-md-8">
                            <h2 class="m-b-2">Formulario de contacto</h2>




                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label">Nombre</label>

                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo" v-model='nombreContacto'>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label">Email</label>

                                <div class="col-md-8">
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Ingrese su email" data-toggle="tooltip" data-placement="top" title="Ingrese su email" v-model='emailContacto'>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label">Telefono</label>

                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="email" name="telefono" placeholder="Ingrese su telefono" data-toggle="tooltip" data-placement="top" title="Ingrese su telefono" v-model='telefonoContacto'>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="mensaje" class="col-md-4 col-form-label">Mensaje</label>

                                <div class="col-md-8">
                                    <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder="Ingrese su mensaje" data-toggle="tooltip" data-placement="top" title="Ingrese un mensaje" v-model='mensajeContacto'></textarea>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 offset-md-4">
                                    <div class="g-recaptcha" data-sitekey="6Ldu7qIUAAAAAD2YpAPA6pD1Rd8weSYgve-YcJLn"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" @click='enviar()' class="btn btn-primary">Enviar</button>
                                    <button type="reset" @click='limpiar()' class="btn btn-secondary">Limpiar</button>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <h3>Escribenos</h3>
                            <p>Ante cualquier consulta o duda, no lo pienses, escribenos y nos pondremos en contacto con usted.</p>
                            <div id="mensajeContacto" class="alert alert-success collapse">
                                <a id="cerrarMensajeContacto" href="#" class="close">&times;</a>
                                <strong>¡Mensaje enviado correctamente!</strong> 
                            </div>
                            <div id="mensajeContactoError" class="alert alert-danger collapse">
                                <a id="cerrarMensajeContactoError" href="#" class="close">&times;</a>
                                <strong>¡Error faltan datos!</strong> 
                            </div>
                        </div>
                    </div>
                </div>
            </main>

           
            

            <?php $this->load->view('template/footer'); ?>
         
            
        </div>

        <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

        <!-- Carga de archivos  JS -->

        <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/tether.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })

        </script>

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

