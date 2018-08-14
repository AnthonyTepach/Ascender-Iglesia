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
	    Familia . Ver familias
	  </a>
	   <a class="navbar-brand" href="<?php echo base_url().'Familia'?>">
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
		<div class="card" style="width: 18rem;">
		 <div class="card-body">
			 <h5 class="card-title" style="text-transform: uppercase;"><?php echo $row -> Apellidos;?> </h5>
			 <h6 class="card-subtitle mb-2 text-muted"><a href="http://ascenderiglesia.com">AscenderIglesia</a></h6>
			 <p class="card-text"><?php echo $row -> desc_fam;?></p>
			 <a href="<?php echo base_url().'C_Familias/verAF/'.$row -> id_fam;?>" class="card-link">Ver familiares <i class="fa fa-eye" aria-hidden="true"></i></a>
			 <a href="<?php echo base_url().'C_Familias/elimina/'.$row -> id_fam;?>" class="card-link" style="color:red;">Eliminar <i class="fa fa-trash-o" aria-hidden="true"></i></a>
		 </div>
	 </div>
	  <br>
 </div>

	 <?php }?>
</div>

</div>


</body>
</html>
