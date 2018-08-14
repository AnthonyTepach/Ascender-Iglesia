<!DOCTYPE html>
<html>
<head>


	<title>ASCENDER IGLESIA | Membresías</title>
	<?php include 'header.php';?>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
      	var h=<?= $Hombre?>;
      	var m=<?= $Mujer?>;
        var data = google.visualization.arrayToDataTable([
          ['Sexo', 'Cantidad'],
          ['Hombres',     h],
          ['Mujeres',    m]
        ]);

        var options = {
          title: 'Miembros',
          pieHole: 0.2,
					colors: ['#0099ff', '#ff1a75']
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
       google.charts.setOnLoadCallback(drawChart2);
      function drawChart2() {
      	var h=<?= $HombreI?>;
      	var m=<?= $MujerI?>;
        var data = google.visualization.arrayToDataTable([
          ['Sexo', 'Cantidad'],
          ['Hombres',     h],
          ['Mujeres',    m]
        ]);

        var options = {
          title: 'Invitados',
          pieHole: 0.2,
          colors: ['#0099ff', '#ff1a75']
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart.draw(data, options);
      }
       google.charts.setOnLoadCallback(edadM);
      function edadM() {
      	var b=<?= $bebeM?>;
      	var n=<?= $ninoM?>;
      	var a=<?= $adolM?>;
      	var j=<?= $joveM?>;
      	var ad=<?= $AdultM?>;

        var data = google.visualization.arrayToDataTable([
          ['Edades', 'Cantidad'],
          ['Bebes',     b],
          ['Niños',    n],
          ['Adolecentes',    a],
          ['Jovenes',    j],
          ['Adultos',    ad]
        ]);

        var options = {
          title: 'Miembros',
          pieHole: 0.2,

        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart3'));
        chart.draw(data, options);
      }
      google.charts.setOnLoadCallback(edadI);
      function edadI() {
      	var b=<?= $bebeI?>;
      	var n=<?= $ninoI?>;
      	var a=<?= $adolI?>;
      	var j=<?= $joveI?>;
      	var ad=<?= $AdultI?>;

        var data = google.visualization.arrayToDataTable([
          ['Edades', 'Cantidad'],
          ['Bebes',     b],
          ['Niños',    n],
          ['Adolecentes',    a],
          ['Jovenes',    j],
          ['Adultos',    ad]
        ]);

        var options = {
          title: 'Invitados',
          pieHole: 0.2,

        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart4'));
        chart.draw(data, options);
      }
    </script>
		<script type="text/javascript">

				$(document).ready(function(){
					$( "a" ).on( "click", function() {
							$("#diveda").hide();
							$("#divigle").hide();
							$("#divgen").hide();
							$("#divinv").hide();
							$("#divmie").hide();
							$("#divmuj").hide();
							$("#divhom").hide();
							$("#divbeb").hide();
							$("#divnin").hide();
							$("#divjov").hide();
							$("#divadl").hide();
							$("#divadol").hide();
							var idiv= "#div"+$( this ).attr("id");
							var valuea=$( this ).attr("value");

							if( $(idiv).is(":visible") ){
								$(idiv).hide();
							}else{
								$(idiv).show();
							}
							});

				});

		</script>
</head>
<body>
	<nav class="navbar navbar-dark bg-primary  sticky-top">
	  <a class="navbar-brand" href="#">
	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
	   	Membresías
	  </a>
	   <a class="navbar-brand" href="<?php echo base_url().'Inicio'?>">
	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

	    Regresar
	  </a>
	</nav>


	    <div class="nav-scroller bg-white box-shadow">
	      <nav class="nav nav-underline">


					<a class="nav-link" href="#" id="beb" value="bebe">Bebes
						<span class="badge badge-pill bg-light align-text-bottom"><?= $bebeM+$bebeI?></span>
					</a>
					<a class="nav-link" href="#" id="nin" value="nino">Niños
						<span class="badge badge-pill bg-light align-text-bottom"><?= $ninoM+$ninoI?></span>
					</a>
					<a class="nav-link" href="#" id="jov" value="joven">Jovenes
						<span class="badge badge-pill bg-light align-text-bottom"><?= $joveM+$joveI?></span>
					</a>
					<a class="nav-link" href="#" id="adol" value="adolecente">Adolecentes
						<span class="badge badge-pill bg-light align-text-bottom"><?= $adolM+$adolI?></span>
					</a>
					<a class="nav-link" href="#" id="adl" value="adulto">Adultos
						<span class="badge badge-pill bg-light align-text-bottom"><?= $AdultM+$AdultI?></span>
					</a>

					<a class="nav-link" href="#" id="hom">Hombres
						<span class="badge badge-pill bg-light align-text-bottom"><?= $Hombre+$HombreI?></span>
					</a>
					<a class="nav-link" href="#" id="muj">Mujeres
						<span class="badge badge-pill bg-light align-text-bottom"><?= $Mujer+$MujerI?></span>
					</a>

					<a class="nav-link" href="#" id="gen">Generos</a>
	        <a class="nav-link" href="#" id="eda">Edades</a>
	      </nav>
	    </div>


	<main role="main">

      <div class="container">
        <!-- Example row of columns -->
				<div id="divigle">
					<hr>
					<div class="row text-center">
						<div class="col-sm">
								<img src="<?=base_url('upload/inp/1.webp')?>">
						</div>
						<br>
						<div class="col-sm">
								<img src="<?=base_url('upload/inp/2.webp')?>">
						</div>
						<br>
						<div class="col-sm">
								<img src="<?=base_url('upload/inp/3.webp')?>">
						</div>
					</div>

				</div>


				<div id="divadol" style="display:none;">
					<div class="my-3 p-3 bg-white rounded box-shadow">
						<h5>Adolecentes</h5>
						<hr>
						<div class="row">
							<div class="col-sm">
								<h6>Miembros</h6>
								<?php
								$a=0;
									foreach($CadoleM -> result() as $row){
										$a++;
										echo $a.'-'.$row-> nom_miembro.' '.$row-> apat_miembro.' '.$row-> amat_miembro;
										echo "<br>";

									}
								?>
							</div>
							<div class="col-sm">
								<h6>Invitados</h6>
								<?php
								$a=0;
									foreach($CadoleI -> result() as $row){
										$a++;
										echo $a.'-'.$row-> nom_invitado.' '.$row-> apat_inivtado.' '.$row-> amat_invitado;
										echo "<br>";

									}
								?>
							</div>
						</div>
					</div>
				</div>


<div id="divgen" style="display:none;">

	<div class="my-3 p-3 bg-white rounded box-shadow">

		<h5>Gráficas por generos</h5>
<hr>
		<div id="donutchart"></div>
		<div id="donutchart2"></div>
	</div>

</div>
<div id="diveda" style="display:none;">

	<div class="my-3 p-3 bg-white rounded box-shadow">
		<h5>Gráficas por edades</h5>
		<hr>
		<div id="donutchart3"></div>

		<div id="donutchart4"></div>

</div>
</div>
<div id="divhom" style="display:none;">
	<div class="my-3 p-3 bg-white rounded box-shadow">
		<h5>Hombres</h5>
		<hr>
		<div class="row">
			<div class="col-sm">
				<h6>Miembros</h6>
				<?php
				$a=0;
				foreach($ShM -> result() as $row){

						$a++;
						echo $a.'-'.$row-> nom_miembro.' '.$row-> apat_miembro.' '.$row-> amat_miembro;
						echo "<br>";

					}
				?>
			</div>
			<div class="col-sm">
				<h6>Invitados</h6>
				<?php
				$a=0;
				foreach($ShI -> result() as $row){

						$a++;
						echo $a.'-'.$row-> nom_invitado.' '.$row-> apat_inivtado.' '.$row-> amat_invitado;
						echo "<br>";

					}
				?>
			</div>
		</div>

	</div>
</div>
<div id="divmuj" style="display:none;">

	<div class="my-3 p-3 bg-white rounded box-shadow">
		<h5>Mujeres</h5>
		<hr>
		<div class="row">
			<div class="col-sm">
				<h6>Miembros</h6>
				<?php
				$a=0;
				foreach($SmM -> result() as $row){

						$a++;
						echo $a.'-'.$row-> nom_miembro.' '.$row-> apat_miembro.' '.$row-> amat_miembro;
						echo "<br>";

					}
				?>
			</div>
			<div class="col-sm">
				<h6>Invitados</h6>
				<?php
				$a=0;
				foreach($SmI -> result() as $row){

						$a++;
						echo $a.'-'.$row-> nom_invitado.' '.$row-> apat_inivtado.' '.$row-> amat_invitado;
						echo "<br>";

					}
				?>
			</div>
		</div>

</div>
</div>
<div id="divnin" style="display:none;">
	<div class="my-3 p-3 bg-white rounded box-shadow">
		<h5>Niños</h5>
		<hr>
		<div class="row">
			<div class="col-sm">
				<h6>Miembros</h6>
				<?php
				$a=0;
					foreach($CninoM -> result() as $row){
						$a++;
						echo $a.'-'.$row-> nom_miembro.' '.$row-> apat_miembro.' '.$row-> amat_miembro;
						echo "<br>";

					}
				?>
			</div>
			<div class="col-sm">
				<h6>Invitados</h6>
				<?php
				$a=0;
					foreach($CninoI -> result() as $row){
						$a++;
						echo $a.'-'.$row-> nom_invitado.' '.$row-> apat_inivtado.' '.$row-> amat_invitado;
						echo "<br>";

					}
				?>
			</div>
		</div>
	</div>
</div>
<div id="divjov" style="display:none;">
	<div class="my-3 p-3 bg-white rounded box-shadow">
		<h5>Jovenes</h5>
		<hr>
		<div class="row">
			<div class="col-sm">
				<h6>Miembros</h6>
				<?php
				$a=0;
					foreach($CjoveM -> result() as $row){
						$a++;
						echo $a.'-'.$row-> nom_miembro.' '.$row-> apat_miembro.' '.$row-> amat_miembro;
						echo "<br>";

					}
				?>
			</div>
			<div class="col-sm">
				<h6>Invitados</h6>
				<?php
				$a=0;
					foreach($CjoveI -> result() as $row){
						$a++;
						echo $a.'-'.$row-> nom_invitado.' '.$row-> apat_inivtado.' '.$row-> amat_invitado;
						echo "<br>";

					}
				?>
			</div>
		</div>
	</div>
</div>
<div id="divbeb" style="display:none;">
	<div class="my-3 p-3 bg-white rounded box-shadow">
		<h5>Bebes</h5>
		<hr>
		<div class="row">
			<div class="col-sm">
				<h6>Miembros</h6>

			</div>
			<div class="col-sm">
				<h6>Invitados</h6>
			</div>
		</div>
	</div>
</div>
<div id="divadl" style="display:none;">
	<div class="my-3 p-3 bg-white rounded box-shadow">
		<h5>Adultos</h5>
		<hr>
		<div class="row">
		<div class="col-sm">
			<h6>Miembros</h6>
			<?php
			$a=0;
				foreach($CadlM -> result() as $row){
					$a++;
					echo $a.'-'.$row-> nom_miembro.' '.$row-> apat_miembro.' '.$row-> amat_miembro;
					echo "<br>";

				}
			?>
		</div>
		<div class="col-sm">
			<h6>Invitados</h6>
			<?php
			$a=0;
				foreach($CadlI -> result() as $row){
					$a++;
					echo $a.'-'.$row-> nom_invitado.' '.$row-> apat_inivtado.' '.$row-> amat_invitado;
					echo "<br>";

				}
			?>
		</div>
	</div>
	</div>
</div>
      </div> <!-- /container -->

    </main>


</body>
</html>
