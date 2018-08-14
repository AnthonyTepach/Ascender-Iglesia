<!DOCTYPE html>
<html>
<head>
	<title>ASCENDER IGLESIA | Eventos</title>
	<?php include 'header.php';?>

<script type="text/javascript">

	 function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
</head>
<body>
	<nav class="navbar navbar-dark bg-primary sticky-top">
	  <a class="navbar-brand" href="#">
	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
	    Eventos . Nuevo evento
	  </a>
	  <a class="navbar-brand" href="<?php echo base_url().'Eventos'?>">
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
		<?=form_open_multipart(base_url()."index.php/Guardar_Evento")?>

			<div class="row">
				<div class="col-sm">

					<input id="uploadImage" type="file" class="form-control" name="userfile" onchange="PreviewImage();" />
		 		</div>
			</div>
		 	<div class="row">
		 		<div class="col-3">
		 			<img id="uploadPreview"  class="rounded float-left" style="width: 200px" />
		 		</div>

		 		<div class="col-sm">
		 			<label class="col-form-label" for="formGroupExampleInput">Código:</label>
		 			<input type="text" class="form-control" placeholder="Código" id="txtcod" name="txtcod" required="">
		 		</div>
		 	</div>
		 	<div class="row">
			 	<div class="col-sm">
			    	<label class="col-form-label">Nombre del evento:</label>
			    	<input type="text" class="form-control" placeholder="Nombre del evento" id="txtNom" name="txtNom" required="">
			    </div>
			    <div class="col-sm">
			    	<label class="col-form-label">Lugar:</label>
			      <input type="text" class="form-control" placeholder="Lugar" id="txtlugar" name="txtlugar" required="">
			    </div>
			    <div class="col-sm">
			    	<label class="col-form-label">Cupo:</label>
			      <input type="text" class="form-control" placeholder="Cupo" id="txtcupo" name="txtcupo" required="">
			    </div>
			</div>
			<div class="row">
				<div class="col-sm">
					<label class="col-form-label">Fecha:</label>
			      <input type="date" class="form-control" placeholder="Fecha" id="txtfecha" name="txtfecha" required="">
				</div>
				<div class="col-sm">
					<label class="col-form-label">Horario:</label>
			      <input type="time" class="form-control" placeholder="Horario" id="txthora" name="txthora" required="">
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
