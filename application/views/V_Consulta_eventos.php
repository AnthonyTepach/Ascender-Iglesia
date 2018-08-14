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
	    Eventos . Ver Eventos
	  </a>
	   <a class="navbar-brand" href="<?php echo base_url().'Eventos'?>">
	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

	    Regresar
	  </a>
	</nav>
<br>
<div class="container">
	<div class="row">
		<?php
		foreach($consulta -> result() as $row){
		?>

			<div class="col-sm">
				<div class="card" style="width: 19rem; height:500px;">
					<a href="<?php echo base_url();?>upload/eventos/<?php echo $row -> imagen_evento;?>" id="<?php echo $row -> codigo_evento;?>">
				  <img width="18rem" height="200rem" class="card-img-top" src="<?php echo base_url();?>upload/eventos/<?php echo $row -> imagen_evento;?>" alt="<?php echo $row -> nom_evento;?>">
					</a>
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $row -> codigo_evento;?>-<?php echo $row -> nom_evento;?></h5>
				    <p class="card-text">
							<b>Fecha del evento:</b> <?php echo $row -> fecha_evento;?> <b>Hora:</b> <?php echo $row -> horario.' <b>hrs</b>';?>
							<br>
							<b>Cupo:</b> <?php echo $row -> cupo.' Personas';?>
							<br>
							<b>Lugar:</b> <?php echo $row -> Lugar;?>
						</p>
		   				<a class="btn btn-primary" href="<?php echo base_url().'Ver_Evento/'.$row -> id_evento;?>">Más info. <i class="fa fa-info-circle" aria-hidden="true"></i></a>&nbsp;
							<a class="btn btn-danger" href="<?php echo base_url().'Elimina_Evento/'.$row -> id_evento;?>">Eliminar <i class="fa fa-trash-o" aria-hidden="true"></i></a>
			      </a>
				  </div>
				</div>
			</div>


		<?php }?>
</div>

  </tbody>
</table>
</div>


</body>
</html>
