<!DOCTYPE html>
<html>
<head>
	<title>ASCENDER IGLESIA | Invitados</title>
	<?php include 'header.php';?>
</head>
<body>
	<nav class="navbar navbar-dark bg-primary sticky-top">
	  <a class="navbar-brand" href="#">
	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
	    Registro . Invitado nuevo
	  </a>
	  <a class="navbar-brand" href="<?php echo base_url().'Registro'?>">
	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

	    Regresar
	  </a>
	 
	</nav>
	<BR>
	<BR>
	<div class="container">

		<?=form_open_multipart(base_url()."Guardar_Invitado")?>

		<label class="col-form-label" for="formGroupExampleInput">Código</label>
		 	<input type="text" class="form-control" placeholder="Código" id="txtcod" name="txtcod"  >
		 <div class="row">
		 	<div class="col-sm">
		    	<label class="col-form-label">Nombre(s):</label>
		    	<input type="text" class="form-control" placeholder="Nombre (s)" id="txtNom" name="txtNom"  >
		    </div>
		    <div class="col-sm">
		    	<label class="col-form-label">Apellido paterno:</label>
		      <input type="text" class="form-control" placeholder="Apellido Paterno" id="txtapat" name="txtapat"  >
		    </div>
		    <div class="col-sm">
		    	<label class="col-form-label">Apellido materno:</label>
		      <input type="text" class="form-control" placeholder="Apellido Materno" id="txtamat" name="txtamat"  >
		    </div>
		  </div>
		  <div class="row">
		  		<div class="col-sm">
			    	<label class="col-form-label">Edad: </label>
			    	<input type="text" class="form-control" placeholder="Edad" id="txtedad" name="txtedad"  >
			    </div>
			    <div class="col-sm">
			    	<label class="col-form-label">Fecha de nacimiento:</label>
			      <input type="DATE"  class="form-control" placeholder="YYYY-MM-DD" id="txtfNac" name="txtfNac"  >
			    </div>

		  </div>
		  <div class="row">
		  	<div class="col-sm">
			    	<label class="col-form-label">Estado civil:</label>
			      	<select class="form-control" id="exampleFormControlSelect1" name="txtcivil" name="txtcivil"  >
				      <option value="Soltero/a">Soltero/a</option>
				      <option value="Casado/a">Casado/a</option>
				      <option value="Viudo/a">Viudo/a</option>
				       <option value="Divorciado/a"> Divorciado/a</option>
				    </select>
			    </div>
			     <div class="col-sm">
			    	<label class="col-form-label">Sexo:</label>
			      	<select class="form-control" id="exampleFormControlSelect1" name="txtsexo" name="txtsexo"  >
				      <option value="Hombre">Masculino</option>
				      <option value="Mujer">Femenino</option>
				    </select>
			    </div>
		  </div>
		   <div class="row">
		  		<div class="col-sm">
			    	<label class="col-form-label">Lada: </label>
			    	<input type="text" class="form-control" placeholder="Lada" id="txtlada" name="txtlada"  >
			    </div>
			    <div class="col-sm">
			    	<label class="col-form-label">Teléfono:</label>
			      <input type="text" class="form-control" placeholder="Teléfono" id="txttel" name="txttel"  >
			    </div>
			    <div class="col-sm">
			    	<label class="col-form-label">Móvil:</label>
			      <input type="text" class="form-control" placeholder="Móvil" id="txtmovil" name="txtmovil"  >
			    </div>

		  </div>
		  <div class="row">
		  		<div class="col-sm">
			    	<label class="col-form-label">E-mail: </label>
			    	<input type="email" class="form-control" placeholder="E-mail" id="txtemail" name="txtemail" >
			    </div>
			    <div class="col-sm">
			    	<label class="col-form-label">Domicilio: </label>
			    	<input type="text" class="form-control" placeholder="Domicilio" id="txtdom" name="txtdom"  >
			    </div>
			     <div class="col-sm">
			    	<label class="col-form-label">N°: </label>
			    	<input type="text" class="form-control" placeholder="N°" id="txtnum" name="txtnum" >
			    </div>



		  </div>
		   <div class="row">
		  		<div class="col-sm">
			    	<label class="col-form-label">Ciudad: </label>
			    	<input type="text" class="form-control" placeholder="Ciudad" id="txtciudad" name="txtciudad"   >
			    </div>
			    <div class="col-sm">
			    	<label class="col-form-label">País: </label>
			    	<input type="text" class="form-control" placeholder="País" id="txtpais" name="txtpais"  >
			    </div>
			    <div class="col-sm">
			    	<label class="col-form-label">Iglesia: </label>
			    	<input type="text" class="form-control" placeholder="Iglesia" id="txtclas" name="txtclas"  >
			    </div>
			    <div class="col-sm">
			    	<label class="col-form-label">Hospedaje: </label>
			    	<input type="text" class="form-control" placeholder="Hospedaje" id="txtninis" name="txtminis"  >
			    </div>
			</div>
			<br>
			<input id="uploadImage" type="file" class="form-control" name="userfile"/>
			<input type="submit" value="Guardar"  class="btn btn-primary" />
	<?=form_close()?>
	</div>

</body>
</html>
