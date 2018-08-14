<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ASCENDER IGLESIA | Ministerios</title>
    <?php include 'header.php';?>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary  sticky-top">
  	  <a class="navbar-brand" href="#">
  	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
  	   	Ministerios
  	  </a>
  	   <a class="navbar-brand" href="<?php echo base_url().'Inicio'?>">
  	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
    	    Regresar
  	  </a>
  	</nav>
    <!---->
    <div class="container">

      <hr>

      <div class="row text-center">

            <div class="col-sm">
              <a href="#Ministerios">
                <button type="button" class="btn btn-outline-primary" name="button">
                    <img width="300px" src=<?php echo base_url().'assets/img/Iconos/png/browser.png'?> class="d-inline-block align-top" alt="">
                    <p>Crear Ministerios</p>
                </button>
              </a>
            </div>
            <div class="col-sm">
              <a href="<?=base_url('C_ministerios/allMinis')?>">
                <button type="button" class="btn btn-outline-primary" name="button">
                  <img width="300px" src=<?php echo base_url().'assets/img/Iconos/png/browser-9.png'?> class="d-inline-block align-top" alt="">
                  <p>Ver Ministerios</p>
                </button>
                </a>
            </div>
            <div class="col-sm">
              <a href="#">
                <button type="button" class="btn btn-outline-primary" name="button" href="">
                  <img width="300px" src=<?php echo base_url().'assets/img/Iconos/png/browser-13.png'?> class="d-inline-block align-top" alt="">
                  <p>Asignar Ministerios</p>
                </button>
              </a>
            </div>
    </div>
    </div>


  </body>
</html>
