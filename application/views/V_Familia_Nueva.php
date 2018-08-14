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
	    Familia . Nueva Familia
	  </a>
	  <a class="navbar-brand" href="<?php echo base_url().'Familia'?>">
	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

	    Regresar
	  </a>
	  <!--
	  <a class="navbar-brand" href="<?php echo base_url().'index.php/C_Registro/consulta_miembros'?>">


	    Ver Miembros
	    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>

	  </a>-->
	</nav>

	<div class="container">
		<br>
		<?=form_open_multipart(base_url()."Guardar_Familia")?>


		 	<div class="row">

		 		<div class="col-sm">
		 			<label class="col-form-label" for="formGroupExampleInput">Código:</label>
		 			<input type="text" class="form-control" placeholder="Código" id="txtcod" style="text-transform:uppercase;" name="txtcod" required="">
		 		</div>
		 	</div>
		 	<div class="row">
			 	<div class="col-sm">
			    	<label class="col-form-label">Apellidos de la familia:</label>
			    	<input type="text" class="form-control" style="text-transform:uppercase;" placeholder="Apellidos de la familia" id="txtNom" name="txtNom" required="">
			    </div>

			</div>

			<div class="row">
				<div class="col-sm">
					<label class="col-form-label">Descripción:</label>
					<textarea  class="form-control" name="txtdesc" id="txtdesc" placeholder="Descripción"></textarea>
				</div>
			</div>
			<br>


			<input type="submit" value="Guardar"  class="btn btn-primary float-right" />
		<?=form_close()?>

	</div>
</body>
</html>
