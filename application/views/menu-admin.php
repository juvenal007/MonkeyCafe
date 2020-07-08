<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!isset($_SESSION)) {
    redirect(base_url('login'));
}
$admin = $this->session->userdata('admin');
if ($admin[0]->tipo != "ADMIN") {
    redirect(base_url('login'));
}
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
    <style>

    </style>
    <body class="paginas-internas">

        <div id="contenido">

            <section class="bienvenidos">

                <?php $this->load->view('template/header'); ?>



                <div class="texto-encabezado text-xs-center">
                    <div class="container">
                        <h1 class="display-4 wow bounceIn">Configuracion</h1>
                        <p class="wow bounceIn" data-wow-delay=".3s">Editar textos y titulos</p>

                    </div>
                </div>

            </section>
            <section class="ruta p-y-1">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 text-xs-left">                           
                            Bienvenido <strong>{{sesion[0].nombreUsuario}} {{sesion[0].apellidoPaterno}}  </strong>
                        </div>
                        <div class="col-xs-6 text-xs-right">
                            <a href="<?= base_url(); ?>">Inicio</a> » Configuracion
                        </div>
                    </div>
                </div>
            </section>
            <main class="p-y-1 fondo-crema">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">         

                            <div class="card">                                
                                <div class="card-header  bg-danger">
                                    <h3 class="text-xs-center text-white">Nosotros</h3>
                                </div>                                

                                <div class="card-body">

                                    <ul class="list-group list-group-flush">                                                                              
                                        <li class="list-group-item">                                            
                                            <div class="container">
                                                <h5><strong>Titulo Nosotros</strong></h5>
                                                <div class="form-group row">
                                                    <label for="tituloNosotros" class="col-md-6 col-form-label">{{home.titulo1}}</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" id="nombre" name="tituloNosotros" data-toggle="tooltip" data-placement="top" title="Ingrese Titulo" v-bind:value='home.titulo1' v-model='titulo1'>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">

                                            <div class="container">
                                                <h5><strong>Cuerpo Titulo</strong></h5>
                                                <div class="form-group row">
                                                    <label for="cuerpoNosotros" class="col-md-6 col-form-label">{{home.subtitulo1}}</label>
                                                    <div class="col-md-6">
                                                        <textarea rows='3' class="form-control" type="text" id="nombre" name="cuerpoNosotros" data-toggle="tooltip" data-placement="top" title="Ingrese Cuerpo Titulo" v-bind:value='home.subtitulo1' v-model='subtitulo1'>
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="list-group-item">
                                            <div class="container">
                                                <h5><strong>Misión</strong></h5>
                                                <div class="form-group row">
                                                    <label for="mision" class="col-md-6 col-form-label">{{home.subtitulo2}}</label>
                                                    <div class="col-md-6">
                                                        <textarea rows='3' class="form-control" type="text" id="nombre" name="mision" data-toggle="tooltip" data-placement="top" title="Ingrese Mision" v-bind:value='home.subtitulo2' v-model='subtitulo2'>
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="container">
                                                <h5><strong>Visión</strong></h5>
                                                <div class="form-group row">
                                                    <label for="vision" class="col-md-6 col-form-label">{{home.titulo2}}</label>
                                                    <div class="col-md-6">
                                                        <textarea rows='3' class="form-control" type="text" id="nombre" name="vision" data-toggle="tooltip" data-placement="top" title="Ingrese Vision" v-bind:value='home.titulo2' v-model='titulo2'>
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="container">
                                                <h5><strong>Misión</strong></h5>
                                                <div class="form-group row">
                                                    <label for="valores" class="col-md-6 col-form-label">{{home.cuerpo2}}</label>
                                                    <div class="col-md-6">
                                                        <textarea rows='3' class="form-control" type="text" id="nombre" name="valores" data-toggle="tooltip" data-placement="top" title="Ingrese Valores" v-bind:value='home.cuerpo2' v-model='cuerpo2'>
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>      



                            <div class="card">                                
                                <div class="card-header  bg-success">
                                    <h3 class="text-xs-center text-white">Datos Personales</h3>
                                </div>                                

                                <div class="card-body">
                                    <ul class="list-group list-group-flush">                                                                              
                                        <li class="list-group-item">                                            
                                            <div class="container">
                                                <h5><strong>Nombre Pagina</strong></h5>
                                                <div class="form-group row">
                                                    <label for="nombrePagina" class="col-md-6 col-form-label">{{home.nombrePagina}}</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" id="nombre" name="tituloNosotros" data-toggle="tooltip" data-placement="top" title="Ingrese Nombre de la Pagina" v-bind:value='home.nombrePagina' v-model='nombrePagina'>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="container">
                                                <h5><strong>Telefono</strong></h5>
                                                <div class="form-group row">
                                                    <label for="telefono" class="col-md-6 col-form-label">{{home.telefono}}</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" id="nombre" name="telefono" data-toggle="tooltip" data-placement="top" title="Ingrese Telefono de contacto" v-bind:value='home.telefono' v-model='telefono'>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="list-group-item">
                                            <div class="container">
                                                <h5><strong>Nombre Contacto</strong></h5>
                                                <div class="form-group row">
                                                    <label for="contacto" class="col-md-6 col-form-label">{{home.nombre}}</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" id="nombre" name="contacto" data-toggle="tooltip" data-placement="top" title="Ingrese Nombre de titular" v-bind:value='home.nombre' v-model='nombre'>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="list-group-item">
                                            <div class="container">
                                                <h5><strong>Correo Contacto</strong></h5>
                                                <div class="form-group row">
                                                    <label for="correo" class="col-md-6 col-form-label">{{home.correo}}</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" id="nombre" name="correo" data-toggle="tooltip" data-placement="top" title="Ingrese Correo de contacto" v-bind:value='home.correo' v-model='correo'>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                            <button type="submit" @click='updateHome()' class="btn btn-block btn-primary pad-med">Guardar</button>     
                            <br>                           
                            <div id="mensajeGuardar" class="alert alert-success collapse">
                                <a id="cerrarMensajeContacto" href="#" class="close">&times;</a>
                                <strong>¡Modificaciones Realizadas Correctamente!</strong> 
                            </div>
                            <div class="card">                                
                                <div class="card-header  bg-primary">
                                    <h3 class="text-xs-center text-white">Mensajes Contacto</h3>
                                </div>                                

                                <div class="card-body">

                                    <ul class="list-group list-group-flush">                                                                              
                                        <li class="list-group-item">                                            
                                            <div class="container">
                                                <table class="table table-hover table-bordered table-dark">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nombre</th>
                                                            <th>Telefono</th>
                                                            <th>Email</th>
                                                            <th>Mensaje</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody v-for = 'c in mensajes'>
                                                        <tr>
                                                            <td>{{c.idcontacto}}</td>
                                                            <td>{{c.nombreContacto}}</td>
                                                            <td>{{c.telefonoContacto}}</td>
                                                            <td>{{c.emailContacto}}</td>
                                                            <td><a @click='modalMensaje(c)' class="btn btn-primary btn-circle"><i class="fa fa-list"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>    
                                    </ul>                                
                                </div>
                            </div>

                            <a class="btn btn-primary" href="<?= base_url('logout'); ?>" role="button">LOGOUT</a>

                        </div>
                    </div>
                </div>




                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">ID Mensaje: <span id='idContacto'></span><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></h5>
                                
                            </div>
                            <div class="modal-body">
                                <p><strong>Nombre: </strong><span id='nombreContacto'></span></p>
                                <p><strong>Fecha: </strong><span id='fechaContacto'></span></p>
                                <p><strong>Telefono: </strong><span id='telefonoContacto'></span></p>
                                <p><strong>Email: </strong><span id='emailContacto'></span></p>
                                <p><strong>Mensaje: </strong></p><p id='mensajeContacto'></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                
                            </div>
                        </div>
                    </div>
                </div>




                <pre>{{$data}}</pre>
            </main>

        </div>

        <?php $this->load->view('template/footer'); ?>

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