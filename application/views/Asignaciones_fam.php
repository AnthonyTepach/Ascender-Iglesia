<!DOCTYPE html>

<html>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113263361-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113263361-1');
</script>


	<title>ASCENDER IGLESIA | Familias</title>

	<?php include 'header.php';?>

</head>

<body>

<nav class="navbar navbar-dark bg-primary sticky-top">

	  <a class="navbar-brand" href="#">

	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">

	    	Familia .

	  	 <?php

		foreach($familia -> result() as $row){

			echo ' '.$row -> Apellidos;

		}

  	 	?>

	  </a>

	   <a class="navbar-brand" href="<?php echo base_url().'Ver_familias'?>">

	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>



	    Regresar

	  </a>

	</nav>



	<div class="container">

		<br>

		<br>

			<table class="table table-bordered">

  <thead class="thead-light">



    <tr>

     <th colspan="5"><center><?php

    foreach($familia -> result() as $row){

      echo 'Familia '.$row -> Apellidos;

    }

      ?></center></th>



    </tr>

  </thead>

  <tbody>

  	 <tr>



      <th scope="col">Miembro</th>



      <th scope="col">Edad</th>



    </tr>



    <?php

    foreach($invitado -> result() as $row){

     ?>

    <tr>



       <td><?php echo $row -> nom_miembro." ".$row -> apat_miembro." ".$row -> amat_miembro ;?></td>





      <td><?php echo $row -> edad_miembro." años" ;?></td>



    </tr>

    <?php }?>



	</div>

</body>

</html>
