<!DOCTYPE html>
<html>
<head>
	<title>ASCENDER IGLESIA | Asignar familia</title>
</head>
	<?php include 'header.php';?>

</head>
<body>


	<nav class="navbar navbar-dark bg-primary sticky-top">
	  <a class="navbar-brand" href="#">
	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
	    Eventos . Asignar a persona
	  </a>
	   <a class="navbar-brand" href="<?php echo base_url().'Familia'?>">
	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

	    Regresar
	  </a>
	</nav>
	<br>
	<br>
	<div class="container">
		<?=form_open_multipart(base_url()."C_Familias/asigna")?>
			<div class="row">
				<div class="col-sm">
					<label class="col-form-label">Asignar:</label>
						<select class="form-control" id="txtq"  name="txtq" required="" >
					      <?php foreach($mie -> result() as $row){?>
							<option value="<?php echo $row -> id_miembro;?>"><?php echo $row -> nom_miembro;?> <?php echo $row -> apat_miembro;?> <?php echo $row -> amat_miembro;?></option>
						<?php }?>
					    </select>
				</div>
			</div>
			<div class="row">
			<div class="col-sm">
					<label class="col-form-label">Seleccione la familia:</label>
					<select class="form-control" id="txtf"  name="txtf" required="">
						<?php foreach($fam -> result() as $row){?>
							<option value="<?php echo $row -> id_fam;?>"><?php echo $row -> Apellidos;?></option>
						<?php }?>
					</select>
				</div>

				<div class="col-sm">
					<label class="col-form-label">Tipo:</label>
					<select class="form-control" id="txttipo"  name="txttipo" required="">
						<option value="Hijo/a">Hijo/a</option>
						<option value="Padre">Padre</option>
						<option value="Madre">Madre</option>
					</select>
				</div>
			</div>


			<br>
			<input type="submit" value="Guardar"  class="btn btn-primary float-right" />

		<?=form_close()?>
	</div>

</body>
</html>
