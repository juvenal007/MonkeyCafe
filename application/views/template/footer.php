    <footer class="piedepagina p-y-1" role="contentinfo">
        <div class="container">
          <div class="row">
            <div class="col-xs-2 offset-xs-5">
              <ul class="redes-sociales">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
                  <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i> </a></li>
              </ul>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-xs-12 col-md-4">
              <h5 class="text-xs-left">NUESTROS DATOS</h5>
              <ul class="text-xs-left">
                <li><?php echo $nombrePagina;  ?></li>
                <li><?php echo $telefono;  ?></li>
                <li><?php echo $nombre;  ?></li>
                <li><?php echo $correo;  ?></li>
              </ul>
            </div>
            <div class="col-xs-12 col-md-4">
              <h5 class="text-xs-left">MAPA DEL SITIO</h5>
              <ul class="text-xs-left">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="<?= base_url('contacto'); ?>">Contacto</a></li>
                <li><a href="<?= base_url('nosotros'); ?>">Nosotros</a></li>
                <li><a href="<?= base_url('servicios'); ?>">Servicios</a></li>
                <li><a href="<?= base_url('menu-admin'); ?>">Configuracion</a></li>
               
              </ul>
            </div>
            <div class="col-xs-12 col-md-4">
              <img src="<?php base_url(); ?>assets/images/logo-color.svg" alt="Logo" class="maximo-footer"> <br />
              <img src="<?php base_url(); ?>assets/images/monkeycafe.svg" alt="MonkeyCafe" class="maximo-letra">
            </div>
          </div>
            <p>2019 © MONKEY CAFE Todos los derechos reservados <br />
            https://www.monkeycafe.cl - <?php echo $correo;  ?></p>
        </div>

    </footer>