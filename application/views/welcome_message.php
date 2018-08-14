<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ASCENDER IGLESIA | </title>
	<?php include 'header.php';?>
	<style type="text/css">
		/*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #FFF;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #ff1a75;

}


/*
 * Base structure
 */

html,
body {
  height: 100%;
   background-image: url("https://wallpaperstock.net/azul-vi%C3%B1etas-wallpapers_28443_2560x1600.jpg");
}
body {
  color: #fff;

  text-align: center;
  text-shadow: 0 .05rem .1rem rgba(0,0,0,.5);
}

/* Extra markup and styles for table-esque vertical and horizontal centering */
.site-wrapper {
  display: table;
  width: 100%;
  height: 100%; /* For at least Firefox */
  min-height: 100%;
  box-shadow: inset 0 0 5rem rgba(0,0,0,.5);
}
.site-wrapper-inner {
  display: table-cell;
  vertical-align: top;
}
.cover-container {
  margin-right: auto;
  margin-left: auto;
}

/* Padding for spacing */
.inner {
  padding: 2rem;
}


/*
 * Header
 */

.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255,255,255,.5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255,255,255,.25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * Cover
 */

.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * Footer
 */

.mastfoot {
  color: rgba(255,255,255,.5);
}


/*
 * Affix and center
 */

@media (min-width: 40em) {
  /* Pull out the header and footer */
  .masthead {
    position: fixed;
    top: 0;
  }
  .mastfoot {
    position: fixed;
    bottom: 0;
  }

  /* Start the vertical centering */
  .site-wrapper-inner {
    vertical-align: middle;
  }

  /* Handle the widths */
  .masthead,
  .mastfoot,
  .cover-container {
    width: 100%; /* Must be percentage or pixels for horizontal alignment */
  }
}

@media (min-width: 62em) {
  .masthead,
  .mastfoot,
  .cover-container {
    width: 42rem;
  }
}
	</style>
</head>
<body>
	 <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"></h3>
              <nav class="nav nav-masthead">

              </nav>
            </div>
          </header>

          <main role="main" class="inner cover">
            <h1 class="cover-heading" style="font-size: 500%;  border-bottom-color: rgba(255,255,255,.25);">Ascender Iglesia</h1>
            <p class="lead" style="font-size: 175%">Base de datos - Membresías - Eventos</p>
            <p class="lead">
              <a href="<?php  base_url()?>Inicio" class="btn btn-lg btn-secondary" style="width: 300px" >Inicio</a>
            </p>
          </main>

          <footer class="mastfoot">
            <div class="inner">
              <p>

                <p>
                 Developed by <a href="http://www.computerforms.com.mx/">@ComputerForms</a> in  <a href="https://getbootstrap.com/">Bootstrap</a>.
                </p>
            </div>
          </footer>

        </div>

      </div>

    </div>


	<!--<div class="card" style="width: 100%;">
	  <img class="card-img-top" src="assets/img/principal.png" alt="Card image cap">
	  <a href="<?php echo base_url().'index.php/Inicio'?>" class="btn btn-primary">Inicio</a>
	  <div class="card-body">

	    <a href="<?php echo base_url().'index.php/Inicio'?>" class="btn btn-primary">Inicio</a>
	  </div>
	</div>-->
	<script src="<?php echo base_url();?>assets/js/particules.js"></script>
	<script src="<?php echo base_url();?>assets/js/particula.js"></script>
</body>
</html>
