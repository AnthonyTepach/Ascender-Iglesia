<!DOCTYPE html>
<html>
<head>
	<title>ASCENDER IGLESIA | Familias</title>
	<?php include 'header.php';?>

</head>
<body>
	<nav class="navbar navbar-dark bg-primary sticky-top">
	  <a class="navbar-brand" href="#">
	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
	    Familias
	  </a>
	   <a class="navbar-brand" href="<?php echo base_url().'Inicio'?>">
	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

	    Regresar
	  </a>
	</nav>

<div class="container">
<br>
<br>
<br>
<br>
<div class="row">
  <div class="col-sm">
  	<a  href="<?php echo base_url().'Familia_nueva';?>" role="button">
  	<img width="200 px" src=<?php echo base_url().'assets/img/Iconos/png/user-40.png'  ?> class="rounded mx-auto d-block" alt="...">
  	<center><p class="btn btn-primary" style="font-size: 200%;">Crear nueva familia</p></center>
  </a>
  </div>
  <div class="col-sm">
  	<a href="<?php echo base_url().'Ver_familias';?>" role="button">
  	<img width="200 px" src=<?php echo base_url().'assets/img/Iconos/png/user-50.png'  ?> class="rounded mx-auto d-block" alt="...">
  	<center><p class="btn btn-primary" style="font-size: 200%;">Ver familias</p></center>
  </a>
  </div>
  <div class="col-sm">
  	<a  href="<?php echo base_url().'Asignar_familia';?>" role="button">
  	<img width="200 px" src=<?php echo base_url().'assets/img/Iconos/png/user-59.png'  ?> class="rounded mx-auto d-block" alt="...">
  	<center><p class="btn btn-primary" style="font-size: 200%;">Asignar persona a familia</p></center>
  </a>
  </div>
</div>
<br>
</div>
</body>
</html>
