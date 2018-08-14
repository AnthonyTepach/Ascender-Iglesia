<!DOCTYPE html>
<html>
<head>
	<title>ASCENDER IGLESIA | Eventos</title>
	<?php include 'header.php';?>
</head>
<body>
	<nav class="navbar navbar-dark bg-primary sticky-top">
	  <a class="navbar-brand" href="#">
	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
	    Eventos
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
  	<a  href="<?php echo base_url().'Nuevo_Evento';?>" role="button">
  	<img width="200 px" src=<?php echo base_url().'assets/img/Iconos/png/calendar.png'  ?> class="rounded mx-auto d-block" alt="...">
  	<center><p class="btn btn-primary" style="font-size: 200%;">Crear nuevo evento</p></center>
  </a>
  </div>
  <div class="col-sm">
  	<a href="<?php echo base_url().'Ver_Eventos';?>" role="button">
  	<img width="200 px" src=<?php echo base_url().'assets/img/Iconos/png/calendar-10.png'  ?> class="rounded mx-auto d-block" alt="...">
  	<center><p class="btn btn-primary" style="font-size: 200%;">Ver eventos</p></center>
  </a>
  </div>
  <div class="col-sm">
  	<a  href="<?php echo base_url().'Asignar_Eventos';?>" role="button">
  	<img width="200 px" src=<?php echo base_url().'assets/img/Iconos/png/calendar-19.png'  ?> class="rounded mx-auto d-block" alt="...">
  	<center><p class="btn btn-primary" style="font-size: 200%;">Asignar evento a persona</p></center>
  </a>
  </div>
</div>
<br>
</div>
</body>
</html>
