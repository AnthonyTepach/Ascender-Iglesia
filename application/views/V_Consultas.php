<!DOCTYPE html>

<html>
<head>
	<title>ASCENDER IGLESIA | Miembros</title>
	<?php include 'header.php';?>

</head>
<body>


	<nav class="navbar navbar-dark bg-primary sticky-top">
	  <a class="navbar-brand" href="#">
	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
	    Consulta de Miembros
	  </a>



    <a class="navbar-brand" href="<?= base_url('Inicio')?>">
      <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

      Regresar
    </a>

	</nav>
	<div class="container">
<?= $pagination_n?>
<div class="row">

		<?php
	 foreach($consulta -> result() as $row){
		?>
		<div class="col-sm">
		<div class="card border-primary" style="width: 11rem;" title="<?php echo '#'.$row -> codigo_miembro;?>">
			<img width="11rem" height="190rem"class="card-img-top" src="<?php echo base_url().'upload/miembros/'.$row -> nom_imagen?>" alt="<?php echo base_url().'upload/miembros/'.$row -> nom_miembro?>">
			<div class="card-body">
				<h5 class="card-title"><?php echo $row -> codigo_miembro;?></h5>
				<p class="card-text" style=" text-transform:uppercase;font-size:10px;"><?php echo $row -> nom_miembro.' '.$row -> apat_miembro ;?></p>
				<center>
				<div class="btn-group btn-group-sm" role="group" aria-label="..." style="text-align:center; font-size:25px;">
					<center>
					<a href="#" data-toggle="modal" data-target="<?php echo '.vcard'.$row -> id_miembro;?>" class="card-link" data-toggle="popover" title="Ver más acerca de...<?php echo $row -> nom_miembro;?>"><i class="fa fa-external-link" aria-hidden="true"></i></a>
					<a href="#"data-toggle="modal" data-target="<?php echo '#'.$row -> id_miembro.'exampleModalLong';?>" class="card-link" data-toggle="popover" title="Editar información de...<?php echo $row -> nom_miembro;?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					<a href="#" onclick="if (confirm('¿Está seguro de emininar a este miembro?')) {location.href ='<?php echo base_url()?>index.php/C_Registro/delete_by_idM/<?php echo $row -> id_miembro?>';} else {alert('Uff.. Estuvo cerca ')}" class="card-link" style="color:red;"data-toggle="popover" title="Eliminar a...<?php echo $row -> nom_miembro;?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				</center>
				</div>
			</center>
			</div>
		</div>
		<br>
	</div>
		<?php }?>

</div>

<!--Modals para editar y ver info-->
  	 <?php
		foreach($consulta -> result() as $row){
  	 ?>


		 <div class="modal fade <?php echo 'vcard'.$row -> id_miembro;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		   <div class="modal-dialog modal-lg">
		     <div class="modal-content">
					 <div class="media">

					  <img class="mr-3 align-middle" width="200px" src="<?php echo base_url().'upload/miembros/'.$row -> nom_imagen?>" alt="Generic placeholder image">
					  <div class="media-body">
					    <h5 class="mt-0"><?php echo $row -> codigo_miembro.'-'.$row -> nom_miembro.' '.$row -> apat_miembro.' '.$row -> amat_miembro ;?></h5>
							<p>
								<b>Fecha de nacimiento: </b><span><?php echo $row -> 	fnaci_miembro;?></span>
								<BR>
								 <b>Edad: </b><span><?php echo $row -> edad_miembro;?></span>
								 <BR>
								<b>Estado civil: </b><span><?php echo $row -> estado_civil_m;?></span>
								<BR><BR>
								<b>DOMICILIO</b><BR><span style="text-transform:uppercase;"><?php echo $row -> domicilio_miembro.' '.$row -> num_miembro.', '.$row -> ciudad_miembro.', '.$row -> pais_miembro.'.' ;?></span>
								<br><br>
								<b>CONTACTO</b><br><span><b>E-mail: </b><a href="mailto:<?php echo $row -> 	email_miembro;?>"><?php echo $row -> 	email_miembro;?></a></span>
								<br>

								<?php
								$dir='https://maps.googleapis.com/maps/api/geocode/json?address='.$row -> domicilio_miembro.'+'.$row -> num_miembro.',+'.$row -> ciudad_miembro.'&key=AIzaSyDwODdNRX3FYyBZV3v6Yrir1C6QAOJ8wzk'

								?>

								<span id="format_dir">Dirección</span>


								<span></span>
							</p>
					    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					  </div>
					</div>
		     </div>
		   </div>
		 </div>



<div class="modal fade" id="<?php echo $row -> id_miembro.'exampleModalLong';?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Miembro: <?php echo ' '.$row -> nom_miembro." ".$row -> apat_miembro." ".$row -> amat_miembro ;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
          $ids=  $row -> id_miembro;
        ?>
        <?=form_open_multipart(base_url().'index.php/C_Registro/updateM/'.$ids)?>
        <label class="col-form-label" for="formGroupExampleInput">Código</label>
      <input type="text" class="form-control" placeholder="Código" id="txtcod" name="txtcod" value="<?php echo $row -> codigo_miembro;?>" required="">
     <div class="row">
      <div class="col-sm">
          <label class="col-form-label">Nombre(s):</label>
          <input type="text" class="form-control" value="<?php echo $row -> nom_miembro;?>" placeholder="Nombre (s)" id="txtNom" name="txtNom" required="">
        </div>
        <div class="col-sm">
          <label class="col-form-label">Apellido paterno:</label>
          <input type="text" class="form-control" placeholder="Apellido Paterno" value="<?php echo $row -> apat_miembro;?>" id="txtapat" name="txtapat" required="">
        </div>
        <div class="col-sm">
          <label class="col-form-label">Apellido materno:</label>
          <input type="text" class="form-control" placeholder="Apellido Materno" value="<?php echo $row -> amat_miembro;?>" id="txtamat" name="txtamat" required="">
        </div>
      </div>
      <div class="row">
          <div class="col-4">
            <label class="col-form-label">Edad: </label>
            <input type="text" class="form-control" placeholder="Edad" value="<?php echo $row -> edad_miembro;?>" id="txtedad" name="txtedad" required="">
          </div>
          <div class="col-sm">
            <label class="col-form-label">Fecha de nacimiento:</label>
            <input type="DATE"  class="form-control" placeholder="yyyy-MM-dd" id="txtfNac"  name="txtfNac" required="">
          </div>

      </div>
      <div class="row">
        <div class="col-5">
            <label class="col-form-label">Estado civil:</label>
              <select class="form-control" id="exampleFormControlSelect1" name="txtcivil" name="txtcivil" required="">
              <option value="Soltero/a">Soltero/a</option>
              <option value="Casado/a">Casado/a</option>
              <option value="Viudo/a">Viudo/a</option>
               <option value="Divorciado/a"> Divorciado/a</option>
            </select>
          </div>
           <div class="col-sm">
            <label class="col-form-label">Sexo:</label>
              <select class="form-control" id="exampleFormControlSelect1" name="txtsexo" name="txtsexo" required="">
              <option value="Hombre">Masculino</option>
              <option value="Mujer">Femenino</option>
            </select>
          </div>
      </div>
       <div class="row">
          <div class="col-2">
            <label class="col-form-label">Lada: </label>
            <input type="text" class="form-control" placeholder="Lada" value="<?php echo $row -> Lada_miembro;?>" id="txtlada" name="txtlada" required="">
          </div>
          <div class="col-5">
            <label class="col-form-label">Teléfono:</label>
            <input type="text" class="form-control" placeholder="Teléfono" value="<?php echo $row -> telefono_miembro;?>" id="txttel" name="txttel" required="">
          </div>
          <div class="col-5">
            <label class="col-form-label">Móvil:</label>
            <input type="text" value="<?php echo $row -> movil_miembro;?>" class="form-control" placeholder="Móvil" id="txtmovil" name="txtmovil" required="">
          </div>

      </div>
      <div class="row">
          <div class="col-sm">
            <label class="col-form-label">E-mail: </label>
            <input type="email"  value="<?php echo $row -> email_miembro;?>" class="form-control" placeholder="Móvil" id="txtmovil" class="form-control" placeholder="E-mail" id="txtemail" name="txtemail" >
          </div>
          <div class="col-sm">
            <label class="col-form-label">Domicilio: </label>
            <input type="text" value="<?php echo $row -> domicilio_miembro;?>" class="form-control" placeholder="Domicilio" id="txtdom" name="txtdom" required="">
          </div>
           <div class="col-2">
            <label class="col-form-label">N°: </label>
            <input type="text" value="<?php echo $row -> num_miembro;?>"  class="form-control" placeholder="N°" id="txtnum" name="txtnum" >
          </div>



      </div>
       <div class="row">
          <div class="col -3">
            <label class="col-form-label">Ciudad: </label>
            <input type="text"  value="<?php echo $row -> ciudad_miembro;?>" class="form-control" placeholder="Ciudad" id="txtciudad" name="txtciudad" required="" >
          </div>
          <div class="col-3">
            <label class="col-form-label">País: </label>
            <input type="text" value="<?php echo $row -> pais_miembro;?>" class="form-control" placeholder="País" id="txtpais" name="txtpais" required="">
          </div>
          <div class="col-3">
            <label class="col-form-label">Clasificación: </label>
            <input type="text" value="<?php echo $row -> Clasificacion_miembro;?>" class="form-control" placeholder="Clasificación" id="txtclas" name="txtclas" required="">
          </div>
          <div class="col-3">
            <label class="col-form-label">Ministerio: </label>
            <input type="text" value="<?php echo $row -> Ministerio_miembro;?>" class="form-control" placeholder="Ministerio" id="txtninis" name="txtminis" required="">
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" class="form-control btn-primary" value="Actualizar" >
        <?=form_close()?>
      </div>
    </div>
  </div>
</div>

   	<?php }?>

	</div><!--fin container--->




</body>
</html>
