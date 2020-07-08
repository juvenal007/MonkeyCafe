        <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
            <div class="container">
                <a href="<?php base_url(); ?>" class="logo">
                    <img src="<?php base_url(); ?>assets/images/logo.svg" alt="Logo del sitio">
                </a>

            <!--    <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i> -->

                <button type="button" class="boton-buscar hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>

            <!--    <form action="#" id="bloque-buscar" class="collapse">
                    <div class="contenedor-bloque-buscar">
                        <input type="text" placeholder="Buscar...">
                        <input type="submit" value="Buscar">
                    </div>
                </form> -->

                <nav id="menu-principal" class="collapse">
                    <ul>
                        <li class="active"><a href="<?= base_url(); ?>">Inicio</a></li>
                        <li><a href="<?= base_url('nosotros'); ?>">Nosotros</a></li>
                        <li><a href="<?= base_url('servicios'); ?>">Servicios</a></li>
                        <li><a href="<?= base_url('contacto'); ?>">Contacto</a></li>
                        
                    </ul>
                </nav>

            </div>
        </header>