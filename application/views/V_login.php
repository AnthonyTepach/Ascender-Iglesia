<html>
  <head>
    <title>ASCENDER IGLESIA | Iniciar sesión</title>
    <?php include 'header.php';?>
    <script type="text/javascript">

				$(document).ready(function(){
					$( "button" ).on( "click", function() {
              var user=$( '#inputEmail' ).val();
              var pass=$( '#inputPassword' ).val();
              if (user=='') {
                $( '#spUs' ).show();
                if (pass=='') {
                  $( '#spPs' ).show();
                }else{
                  $( '#spPs' ).hide();
                }
              }else{
                  $( '#spUs' ).hide();
                  if (pass=='') {
                    $( '#spPs' ).show();
                  }else{
                    $( '#spPs' ).hide();

                    $.ajax({
                         type:'POST',
                         url:'C_login/loging',
                         data:{'user':user,'pass':pass},
                         success:function(data){
                             $('#resultdiv').html(data);
                         }
                     });

                  }
              }
							});

				});

		</script>
  </head>
    <body class="text-center" style="background-image: url('https://k33.kn3.net/taringa/E/3/0/2/C/4/luismi222222/C5A.jpg');background-repeat: no-repeat;
    background-size: 100%;">

      <div class="container col-sm-4">
      <hr><br>
      <form class="form-signin">
   <div class="text-center mb-4">
     <center>
     <img width="100%" class="mb-4" src="https://static.wixstatic.com/media/580797_b408b846aae149809a3c424a9ccad6ba.png/v1/fill/w_384,h_127,al_c,usm_0.66_1.00_0.01/580797_b408b846aae149809a3c424a9ccad6ba.png" alt="" >
   </center>
     </div>
<center>

   <div class="form-label-group col-sm-11">
     <input type="text" id="inputEmail" name="user" class="form-control" placeholder="Usuario" required autofocus>
     <span id="spUs" class="badge badge-secondary" style="color:#B60F0F; font-size:15px; display:none;">Ingresa el usuario</span>
     <hr>
   </div>

   <div class="form-label-group col-sm-11">
     <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Contraseña" required>
     <span id="spPs" class="badge badge-secondary" style="color:#B60F0F; font-size:15px; display:none;">Ingresa la contraseña  </span>
    <br>
   </div>


   <button class="btn btn-lg btn-primary btn-block" type="button">Iniciar sesión</button>
   <hr>
   <div id="resultdiv">

   </div>
   <hr>
 </center>
   <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018 ASCENDER IGLESIA | IP: <?=$_SERVER['REMOTE_ADDR']."<br>" . date("d") . "/" . date("m") . "/" . date("Y")?></p>
 </form>
</div>
    </body>
</html>
