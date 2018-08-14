<!DOCTYPE html>
<html>
<head>
	<title>ASCENDER IGLESIA | Inicio</title>
	<?php include 'header.php';?>
</head>
<body>

	<!-- Image and text -->
<nav class="navbar navbar-dark bg-primary sticky-top">
  <a class="navbar-brand" href="#">
    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
    Principal
  </a>

   <a class="navbar-brand" href="<?= base_url()?>">
	   	 Cerrar sesión
			 <i class="fa fa-sign-out" aria-hidden="true"></i>
	  </a>
</nav>


	  	<div class="container">
				<div class="row">
					<div class="col-sm">
						<hr>
						<a href="<?= base_url('Ver_Miembros')?>">
							<button type="button" class="btn btn-outline-primary" name="button">
								<img width="170 px" src=<?php echo base_url().'assets/img/Iconos/png3/users.png'  ?> class="rounded mx-auto d-block" alt="...">
					    		<p>Miembros</p>
							</button>
						</a>
					</div>
					<div class="col-sm">
						<hr>
						<a href="<?= base_url('Ver_Invitados')?>">
							<button type="button" class="btn btn-outline-primary" name="button">
								<img width="170 px" src=<?php echo base_url().'assets/img/Iconos/png3/users.png'  ?> class="rounded mx-auto d-block" alt="...">
					    	<p>Invitados</p>
							</button>
						</a>
					</div>
					<div class="col-sm">
						<hr>
						<a href="<?= base_url()?>Registro">
							<button type="button" class="btn btn-outline-primary" name="button">
							<img width="170 px" src=<?php echo base_url().'assets/img/Iconos/png3/users.png'  ?> class="rounded mx-auto d-block" alt="...">
				    	<p>Registro</p>
							</button>
						</a>
					</div>
					<div class="col-sm">
						<hr>
						<a href="<?= base_url('Membresia')?>">
							<button type="button" class="btn btn-outline-primary" name="button">
								<img width="170 px" src=<?php echo base_url().'assets/img/Iconos/png2/009-pie-chart.png'  ?> class="rounded mx-auto d-block" alt="...">
					   <p>Membresia</p>
							</button>
						</a>
					</div>
					<div class="col-sm">
						<hr>
						<a href="<?= base_url('Eventos')?>">
							<button type="button" class="btn btn-outline-primary" name="button">
								<img width="170 px" src=<?php echo base_url().'assets/img/Iconos/png3/calendar-7.png'  ?> class="rounded mx-auto d-block" alt="...">
					    	<p>Eventos</p>
							</button>
						</a>
					</div>
					<div class="col-sm">
						<hr>
						<a href="<?= base_url('Ministerios')?>">
							<button type="button" class="btn btn-outline-primary" name="button">
								<img width="170 px" src=<?php echo base_url().'assets/img/Iconos/png3/network.png'?> class="rounded mx-auto d-block" alt="...">
								<p>Ministerios</p>
							</button>
						</a>
					</div>
					<div class="col-sm">
						<hr>
						<a href="<?= base_url('Familia')?>">
							<button type="button" class="btn btn-outline-primary" name="button">
								<img width="170 px" src=<?php echo base_url().'assets/img/Iconos/png3/users-1.png'  ?> class="rounded mx-auto d-block" alt="...">
					    	<p>Familia</p>
							</button>
						</a>
					</div>
					<div class="col-sm">
						<hr>
						<a href="<?= base_url('Buscar')?>">
							<button type="button" class="btn btn-outline-primary" name="button">
								<img width="170 px" src=<?php echo base_url().'assets/img/Iconos/png3/search.png'  ?> class="rounded mx-auto d-block" alt="...">
					    	<p>Buscar</p>
							</button>
						</a>
					</div>
				</div>
	  		<br>

		</div>


</body>
</html>
