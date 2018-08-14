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
	<title>ASCENDER IGLESIA | Asignar familia</title>
	<?php include 'header.php';?>
  <script type="text/javascript">

      $(document).ready(function(){
        $( "button" ).on( "click", function() {

            $("input:checkbox[name=chMie]:checked").each(function() {
              var ch=$('input:radio:checked').val();
              if (ch == undefined) {
                alert("Porfavor selecciona la familia");
                return false;
              }else{
              var miem=$(this).val();
              //alert("Agregando a "+miem+ " a "+ ch );
                $.ajax({
                  type:'POST',
                  url:'C_familias/asigna',
                  data:{'id_fam':ch,'id_miembro':miem},
                  success:function(data){
                   $('#resultdiv').html(data);
                   }
                    });

            }
       });


            });

    });

  </script>
</head>
<body>

  <nav class="navbar navbar-dark bg-primary sticky-top">
	  <a class="navbar-brand" href="#">
	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
	    Familia . Asignar a persona
	  </a>
	   <a class="navbar-brand" href="<?php echo base_url().'Familia'?>">
	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>

	    Regresar
	  </a>
	</nav>
  <div class="container">
    <div id="resultdiv">
      <div class="row">



<div class="col-sm">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded box-shadow">
     <img class="mr-3" src="http://cdn.onlinewebfonts.com/svg/img_546066.png" alt="" width="48" height="48">
     <div class="lh-100">
       <h6 class="mb-0 text-white lh-100">Miembros</h6>
       <small>Ascender Iglesia</small>
     </div>
   </div>
           <?php foreach($mie -> result() as $row){?>

             <li class="media">
                <img  for="<?= $row -> amat_miembro.$row -> id_miembro?>" class="mr-3" width="40px"src="<?= base_url('upload/miembros/')?><?=$row -> nom_imagen?>" alt="<?= $row -> amat_miembro.$row -> id_miembro?>">&nbsp;&nbsp;&nbsp;
                <div class="media-body">
                  <div class="form-check form-check-inline">
                    <input name="chMie" class="form-check-input" type="checkbox" id="<?= $row -> amat_miembro.$row -> id_miembro?>" value="<?= $row -> id_miembro?>">
                    <label style="text-transform:uppercase;" class="form-check-label" for="<?= $row -> amat_miembro.$row -> id_miembro?>"><?= $row -> nom_miembro?> <?= $row -> apat_miembro?> <?= $row -> amat_miembro?></label>
                  </div>
                </div>
              </li>

           <?php }?>
           </div>

           <div class="col-sm">
             <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded box-shadow">
                <img class="mr-3" src="http://cdn.onlinewebfonts.com/svg/img_54625.png" alt="" width="48" height="48">
                <div class="lh-100">
                  <h6 class="mb-0 text-white lh-100">Familias</h6>
                  <small>Ascender Iglesia</small>
                </div>
              </div>
              <?php foreach($fam -> result() as $row){?>

                <li class="media">
                   <img   class="mr-3" width="100px"src="<?= base_url('upload/familias/icono.png')?>" alt="<?= $row -> Apellidos.$row -> id_fam?>">&nbsp;&nbsp;&nbsp;
                   <div class="media-body">
                     <div class="form-check form-check-inline">
                       <input class="form-check-input" type="radio" name="chFam" id="<?= $row -> id_fam.$row -> Apellidos?>" value="<?= $row -> id_fam?>">
                       <label style="text-transform:uppercase;" class="form-check-label" for="<?= $row -> id_fam.$row -> Apellidos?>"><?= $row -> Apellidos?></label>
                     </div>
                   </div>
                 </li>

              <?php }?>
              <button type="button" class="btn btn-primary btn-lg btn-block">Asignar</button>
           </div>

</div>
		</div>
	</div>
</body>
</html>
