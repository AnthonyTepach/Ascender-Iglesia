<!DOCTYPE html>
<html>
<head>
	<title>ASCENDER IGLESIA | Eventos</title>
	<?php include 'header.php';?>
	<style type="text/css">
	.fondoTransparente
									{
									/*Div que ocupa toda la pantalla*/

									top:0px;
									left:0px;
									width:100%;
									height:100%;
									text-align: center;
									background-image:url('<?php echo base_url();?>upload/eventos/<?php foreach($evento -> result() as $row){echo $row -> imagen_evento;}?>');
									/*IE*/
									filter: alpha(opacity=50);
									/*FireFox Opera*/
									opacity: .8;
									}
	</style>
</head>
<body>
<nav class="navbar navbar-dark bg-primary sticky-top">
	  <a class="navbar-brand" href="#">
	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
	    	Eventos . <?php foreach($evento -> result() as $row){echo ' '.$row -> nom_evento;}?>

	  </a>
	   <a class="navbar-brand" href="<?php echo base_url().'Ver_Eventos'?>">
	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

	    Regresar
	  </a>
	</nav>

	<div class="container">

		<div class="fondoTransparente"><br>
			<h1 class="display-4"><b><?php foreach($evento -> result() as $row){echo ' '.$row -> nom_evento;}?><b></h1>
		</div>
		<div class="jumbotron" style="text-aling: justify;">
			 <p class="lead"><?php foreach($evento -> result() as $row){echo ' '.$row -> observaciones;}?></p>
  	</div>
		<div class="row">
			<div class="col-sm">
				<ul class="list-group">
  				<li class="list-group-item active">Miembros</li>
					<?php
					foreach($miembro -> result() as $row){
					 ?>
					 <li class="list-group-item" >
						 <?php echo $row -> nom_miembro." ".$row -> apat_miembro." ".$row -> amat_miembro.' ' ;?>
						 <span class="badge badge-primary">
							 <?php echo $row -> edad_miembro?>
							  años
							</span>

							<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#<?php echo $row -> codigo_miembro;?>">
  							Más info.
							</button>
						</li>
						<!-- Modal -->
						<div class="modal fade" id="<?php echo $row -> codigo_miembro;?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row -> codigo_miembro;?>" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="<?php echo $row -> codigo_miembro;?>"><?php echo $row -> nom_miembro." ".$row -> apat_miembro." ".$row -> amat_miembro.' ' ;?></h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
										<p>Observaciones:</p>
										<p style="font-weight: normal; text-aling:justify;"><?php echo $row -> observaciones;?></p>
						        <p>Niños:</p> <p style="font-weight: normal; text-aling:justify;"><?php echo $row -> ninos;?></p>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
						      </div>
						    </div>
						  </div>
						</div>
				 <?php }?>
				</ul>
			</div>
			<div class="col-sm">
				<ul class="list-group">
  				<li class="list-group-item active">Invitados</li>
					<?php
					foreach($invitado -> result() as $row){
					 ?>
					 <li class="list-group-item"  >
						 <?php echo $row -> nom_invitado." ".$row -> apat_inivtado." ".$row -> amat_invitado ;?>
						 <span class="badge badge-primary">
							<?php echo $row -> edad_invitado?>
							 años
						 </span>
						 <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#<?php echo $row -> codigo_invitado;?>">
							 Más info.
						 </button>
					 </li>
					 <!-- Modal -->
 					<div class="modal fade" id="<?php echo $row -> codigo_invitado;?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row -> codigo_invitado;?>" aria-hidden="true">
 						<div class="modal-dialog" role="document">
 							<div class="modal-content">
 								<div class="modal-header">
 									<h5 class="modal-title" id="<?php echo $row -> codigo_invitado;?>"><?php echo $row -> nom_invitado." ".$row -> apat_inivtado." ".$row -> amat_invitado ;?></h5>
 									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 										<span aria-hidden="true">&times;</span>
 									</button>
 								</div>
 								<div class="modal-body">
 									<p>Observaciones:</p>
 									<p style="font-weight: normal; text-aling:justify;"> <?php echo $row -> observaciones;?></p>
 									<p>Niños:</p> <p style="font-weight: normal; text-aling:justify;"><?php echo $row -> ninos;?></p>
 								</div>
 								<div class="modal-footer">
 									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
 								</div>
 							</div>
 						</div>
 					</div>


				 <?php }?>
				</ul>
			</div>
		</div>
<br>
<br>
	</div>
</body>
</html>
