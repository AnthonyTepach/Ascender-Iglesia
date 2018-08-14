<!DOCTYPE html>
<html>
<head>
	<title>ASCENDER IGLESIA | Registro</title>
	<?php include 'header.php';?>
</head>
<body>
	<nav class="navbar navbar-dark bg-primary sticky-top">
	  <a class="navbar-brand" href="#">
	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
	    Registro
	  </a>
	   <a class="navbar-brand" href="<?php echo base_url().'Inicio'?>">
	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

	    Regresar
	  </a>
	</nav>
	<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php base_url();?>Inicio">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registro</li>
  </ol>
</nav>
	<br>
	<br>
	<br>
	<br>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<a href="<?= base_url()?>Registro_Miembro" >
					<img width="250 px" src=<?php echo base_url().'assets/img/Iconos/png/user-23.png'  ?> class="rounded mx-auto d-block" alt="..."><center><p class="btn btn-primary" style="font-size: 200%;">Nuevo miembro</p></center>
					</a>
				</div>
				<div class="col-sm">
					<a href="<?= base_url()?>Registro_Invitado">
					<img width="250 px" src=<?php echo base_url().'assets/img/Iconos/png/notepad-7.png'  ?> class="rounded mx-auto d-block" alt="..."><center><p class="btn btn-primary" style="font-size: 200%;">Nuevo invitado</p></center>
					</a>
				</div>
			</div>
		</div>


</body>
</html>
