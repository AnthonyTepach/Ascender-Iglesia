<!DOCTYPE html>
<html>
<head>
	<title>ASCENDER IGLESIA | Buscar</title>
	<?php include 'header.php';?>

</head>
<body>
<nav class="navbar navbar-dark bg-primary sticky-top">
	  <a class="navbar-brand" href="#">
	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
	   	Buscar
	  </a>
	   <a class="navbar-brand" href="<?php echo base_url().'Inicio'?>">
	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

	    Regresar
	  </a>
	</nav>

	<br>
	<br>

	<div class="container">
		<?=form_open_multipart(base_url()."Buscar")?>

		<div class="row">
			<div class="col-4">
				<select class="form-control" id="txttipo"  name="txttipo" required="">
					<option value="Código">Código</option>
					<option value="Nombre">Nombre</option>
					<option value="Ministerio">Ministerio</option>
				</select>
			</div>
			<div class="col-sm">

				    <div class="input-group">
				         <span class="input-group-btn">
				        <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
				      <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" id="txtbuscar" name="txtbuscar">
				      <span class="input-group-btn">
				        <div class="group-control">
				            <input type="submit"  class="btn btn-primary" value="ir" >
				        </div>


				      </span>
				    </div>

			</div>
		</div>
		<?=form_close()?>
<br>
<div class="container" id="resultado">

</div>


    <?php
    	if ($result == null) {

    	}else{?>
    	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col-3">Código</th>
      <th scope="col">Nombre Completo</th>
      <th scope="col">Fecha registro</th>
      <th scope="col-2">Edad</th>
      <th scope="col">Ministerio</th>
      <th scope="col">E-Mail</th>

      <th scope="col">Móvil</th>
    </tr>
  </thead>
  <tbody>
    	<?php foreach($result -> result() as $row){
  	 ?>
	    <tr>

	      <td><?php echo $row -> id_miembro ;?></td>
	      <td><?php echo $row -> codigo_miembro ;?></td>
	      <td><?php echo $row -> nom_miembro ;?></td>
	      <td><?php echo $row -> fecha_ingreso_mimebro ;?></td>
	      <td><?php echo $row -> edad_miembro.' años' ;?></td>
	      <td><?php echo $row -> Ministerio_miembro ;?></td>
	      <td><a href="mailto:<?php echo $row -> email_miembro ;?>"><?php echo $row -> email_miembro ;?></a></td>
	      <td><?php echo $row -> movil_miembro ;?></td>

	    </tr>
   	<?php }
   }
   	?>

  </tbody>
</table>




	</div>
</body>
</html>
