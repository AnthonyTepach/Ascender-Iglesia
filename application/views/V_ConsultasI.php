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
	     Consulta de Invitados
	  </a>
    <a class="navbar-brand" href="<?= base_url('Inicio')?>">
      <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

      Regresar
    </a>
	</nav>
	<div class="cen">
		<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col-sm">#</th>
      <th scope="col-sm">Código</th>
      <th scope="col-sm">Nombre Completo</th>
       <th scope="col-sm-2">Edad</th>
      <th scope="col-sm">Domicilio</th>
      <th scope="col-sm">Móvil</th>
      <th scope="col-sm">E-mail</th>

      <th scope="col-sm">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  	 <?php
		foreach($consulta -> result() as $row){
  	 ?>
    <tr>
      <th scope="row"><?php echo $row -> id_invitado;?></th>
      <td><?php echo $row -> codigo_invitado;?></td>
      <td><?php echo $row -> nom_invitado." ".$row -> apat_inivtado." ".$row -> amat_invitado ;?></td>
      <td><?php echo $row -> edad_invitado." años" ;?></td>
      <td><?php echo $row -> domicilio_invitado." ".$row -> num_invitado.", ".$row -> ciudad_invitado.", ".$row -> pais_invitado;?></td>
      <td><?php echo $row -> movil_invitado;?></td>
      <td><a href=<?php echo 'mailto:'.$row -> email_invitado;?> target="_top"><?php echo $row -> email_invitado;?></a></td>

      <td><a href="<?php echo base_url().'index.php/C_Registro/delete_by_idI/'.$row -> id_invitado;?>"><center><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></center></a></td>


    </tr>
   	<?php }?>
  </tbody>
</table>
	</div>


</body>
</html>
