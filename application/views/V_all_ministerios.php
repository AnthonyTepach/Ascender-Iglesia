<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ASCENDER IGLESIA | Ministerios</title>
    <?php include 'header.php';?>
    <script type="text/javascript">
      $(document).ready(function() {
      alert("Hola");
      });
    </script>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary  sticky-top">
  	  <a class="navbar-brand" href="#">
  	    <img src=<?php echo base_url().'assets/img/logos/logo.png'?> width="35" height="35" class="d-inline-block align-top" alt="">
  	   	Ministerios
  	  </a>
  	   <a class="navbar-brand" href="<?php echo base_url('Ministerios')?>">
  	   	<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
    	    Regresar
  	  </a>
  	</nav>
    <!---->
    <div class="container-fluid">
         <div class="row">
           <nav class="col-md-2 d-none d-md-block bg-light sidebar">
             <div class="sidebar-sticky">
               <ul class="nav flex-column">
                 <li class="nav-item">
                   <a class="nav-link active" href="#">
                     <span data-feather="home"></span>
                     Ascender Iglesia <span class="sr-only">(current)</span>
                   </a>
                 </li>


               </ul>

               <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                 <span>Ministerios</span>
                 <a class="d-flex align-items-center text-muted" href="#">
                   <span data-feather="plus-circle"></span>
                 </a>
               </h6>
               <ul class="nav flex-column mb-2">
                 <?php foreach ($ministerios -> result() as $fila ) {
                   # code...
                 ?>
                 <li class="nav-item">
                   <a class="nav-link" href="#">
                     <span data-feather="file-text"></span>
                     <?=$fila-> nom_minsterio?>
                   </a>
                 </li>

                 <?php }?>
               </ul>
             </div>
           </nav>

           <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
             <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               <h1 class="h2">Dashboard</h1>
               <div class="btn-toolbar mb-2 mb-md-0">
                 <div class="btn-group mr-2">
                   <button class="btn btn-sm btn-outline-secondary">Share</button>
                   <button class="btn btn-sm btn-outline-secondary">Export</button>
                 </div>
                 <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                   <span data-feather="calendar"></span>
                   This week
                 </button>
               </div>
             </div>

               <p>
                 <?php foreach ($ministerios -> result() as $fila ) {
                   # code...
                 ?>
                   <?= '<div class="row>"'.$fila-> nom_minsterio.' <br> '.$fila-> encargado_min.' <br> '.$fila-> des_ministerio.'</div>'?>
                 <?php }?>
               </p>

           </main>
         </div>
       </div>

  </body>
</html>
