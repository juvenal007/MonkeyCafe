<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (isset($_SESSION)) {
    $this->session->sess_destroy();
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
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }
        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #f61E37;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
            background: #8c1220;
        }
        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }
        .form .message a {
            color: #4CAF50;
            text-decoration: none;
        }
        .form .register-form {
            display: none;
        }
        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }
        .container:before, .container:after {
            content: "";
            display: block;
            clear: both;
        }
        .container .info {
            margin: 50px auto;
            text-align: center;
        }
        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }
        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }
        .container .info span a {
            color: #000000;
            text-decoration: none;
        }
        .container .info span .fa {
            color: #EF3B3A;
        }
        body {
            background: #ffeed6; /* fallback for old browsers */
            background: -webkit-linear-gradient(right, #ffeed6, #ffeed6);
            background: -moz-linear-gradient(right, #ffeed6, #ffeed6);
            background: -o-linear-gradient(right, #ffeed6, #ffeed6);
            background: linear-gradient(to left, #ffeed6, #ffeed6);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;      
        }
    </style>

    <body class="paginas-internas">


        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-10 offset-xs-1 col-sm-6 offset-sm-3 col-md-6 offset-md-3">
                        <div class="login-page">
                            <div class="form login-form">   
                                <img src="<?php base_url(); ?>assets/images/logo-color.svg" alt="Logo" class="maximo-footer"> <br />
                                <img src="<?php base_url(); ?>assets/images/monkeycafe.svg" alt="MonkeyCafe" class="maximo-letra">
                                <p></p>
                                <input autocomplete="off" type="text" placeholder="usuario" v-model='usuario' />
                                <input @keyup="iniciarEnter" autocomplete="new-Password" type="password" placeholder="password" v-model='password'/>
                                <button @click='iniciar()'>INICIAR SESION</button>      
                                <p class="message font-weight-bold">V1.0</p>

                            </div>
                        </div>
                    </div>                
                </div>
            </div>

            <pre>{{$data}}</pre>

        </main>   
      
        <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/vue.js"></script>
        <script src="<?= base_url(); ?>assets/js/axios.min.js"></script>
        <script src="<?= base_url(); ?>assets/vue/login.js"></script>
    </body>

</html>


