<!DOCTYPE html>
<html>
<head>
	<title>ASCENDER IGLESIA | Asignar evento</title>
</head>

	<?php include 'header.php';?>
	<script type="text/javascript">

			$(document).ready(function(){
				$( "button" ).on( "click", function() {
						var tipo=$("#txttipo option:selected").text();
						var eve=$("#txteve option:selected").val();
						var nin=$("#txtnin").val();
						var obj=$("#txtob").val();
						if (tipo=="Miembro") {
							$("input:checkbox[name=chMie]:checked").each(function() {
									var miem=$(this).val();
									$.ajax({
													type:'POST',
													url:'C_Eventos/guardar_asignacion',
													data:{'txttipo':tipo,'txtid':miem,'txteve':eve,'txtnin':nin,'txtob':obj},
													success:function(data){
													$('#resultdiv').html(data);
													}
													});
								});
						}else if (tipo=="Invitado") {
							$("input:checkbox[name=chIn]:checked").each(function() {
								var miem=$(this).val();
								$.ajax({
												type:'POST',
												url:'C_Eventos/guardar_asignacion',
												data:{'txttipo':tipo,'txtid':miem,'txteve':eve,'txtnin':nin,'txtob':obj},
												success:function(data){
												$('#resultdiv').html(data);
												}
												});
							});
						}
			});
	});

	</script>
	<script type="text/javascript">
	$( document ).ready(function() {
    cargarNombres();
});
		function cargarNombres() {
			var tipo=$("#txttipo option:selected").text();
			var micapa= document.getElementById('selD');
			if (tipo=="Invitado") {
				micapa.innerHTML= '<?php foreach($invitado -> result() as $row){ echo '<li class="media"><img  for="" class="mr-3" width="40px"src="'.base_url('upload/invitados/').$row-> nom_imagen.'" alt="">&nbsp;&nbsp;&nbsp;<div class="media-body"><div class="form-check form-check-inline"><input name="chIn" class="form-check-input" type="checkbox" id="'.$row -> NombreCompleto.$row -> id_invitado.'" value="'.$row -> id_invitado.'"><label style="text-transform:uppercase;" class="form-check-label" for="'.$row -> NombreCompleto.$row -> id_invitado.'">'.$row -> NombreCompleto.'</label></div></div></li>'; } ?>';
				}else if (tipo=="Miembro"){
				micapa.innerHTML= '<?php foreach($miembro -> result() as $row){ echo '<li class="media"><img  for="" class="mr-3" width="40px"src="'.base_url('upload/miembros/').$row-> nom_imagen.'" alt="">&nbsp;&nbsp;&nbsp;<div class="media-body"><div class="form-check form-check-inline"><input name="chMie" class="form-check-input" type="checkbox" id="'.$row -> NombreCompleto.$row -> id_miembro.'" value="'.$row -> id_miembro.'"><label style="text-transform:uppercase;" class="form-check-label" for="'.$row -> NombreCompleto.$row -> id_miembro.'">'.$row -> NombreCompleto.'</label></div></div></li>'; } ?>';
				}
		}
	</script>
</head>
<body>


	<nav class="navbar navbar-dark bg-primary sticky-top">
	  <a class="navbar-brand" href="#">
	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
	    Eventos . Asignar a persona
	  </a>
	   <a class="navbar-brand" href="<?php echo base_url().'Eventos'?>">
	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

	    Regresar
	  </a>
	</nav>
	<br>
	<div class="container">

		<div id="resultdiv">
			<div >

					<select class="form-control" id="txttipo"  name="txttipo" required="" onchange="cargarNombres()">
							<option value="Miembro">Miembro</option>
							<option value="Invitado">Invitado</option>
						</select>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded box-shadow">
				     <img class="mr-3" src="http://cdn.onlinewebfonts.com/svg/img_546066.png" alt="" width="48" height="48">
				     <div class="lh-100">
				       <h6 class="mb-0 text-white lh-100">Miembros / Invitados</h6>
				       <small>Ascender Iglesia</small>
				     </div>
				   </div>
					 <!--pintar lista-->
					 <div id="selD"></div>
				</div>
				<div class="col-sm">
					<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded box-shadow">
				     <img class="mr-3" src="http://cdn.onlinewebfonts.com/svg/img_54625.png" alt="" width="48" height="48">
				     <div class="lh-100">
				       <h6 class="mb-0 text-white lh-100">Eventos</h6>
				       <small>Ascender Iglesia</small>
				     </div>
				   </div>
					 <label class="col-form-label">Seleccione el evento:</label>
 					<select class="form-control" id="txteve"  name="txteve" required="">
 						<?php foreach($evento -> result() as $row){?>
 							<option value="<?php echo $row -> id_evento;?>"><?php echo $row -> nom_evento;?></option>
 						<?php }?>
 					</select>
					<label class="col-form-label">Niños:</label>
					<input type="text" class="form-control" placeholder="Niños" id="txtnin" name="txtnin" required="">
					<label class="col-form-label">Observaciones</label>
					<textarea class="form-control" placeholder="Observaciones" id="txtob" name="txtob"></textarea>
					  <button type="button" class="btn btn-primary btn-lg btn-block">Asignar</button>
				</div>
			</div>

		</div>

	</div>

</body>
</html>
