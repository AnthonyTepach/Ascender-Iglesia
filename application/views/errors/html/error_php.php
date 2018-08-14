

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>


<body>


	 <main role="main">

		 <!-- Main jumbotron for a primary marketing message or call to action -->
		 <div class="jumbotron">
			 <div class="container">
				 <h1 class="display-3"><?php echo $severity; ?></h1>
				 <h4 style="color:red;">A PHP Error was encountered</h4>
				 <p><b>Message:</b> <?= $message;?></p>
				 <p><b>Filename:</b> <?php echo $filepath; ?></p>
				 <p><b>Line Number:</b> <?php echo $line; ?></p>
				 <?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

				 	<p><b>Backtrace:</b></p>
				 	<?php foreach (debug_backtrace() as $error): ?>

				 		<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>

				 			<p style="margin-left:10px">
				 			File: <?php echo $error['file'] ?><br />
				 			Line: <?php echo $error['line'] ?><br />
				 			Function: <?php echo $error['function'] ?>
				 			</p>

				 		<?php endif ?>

				 	<?php endforeach ?>

				 <?php endif ?>
			 </div>
		 </div>


	 </main>

	</body>
	</html>
