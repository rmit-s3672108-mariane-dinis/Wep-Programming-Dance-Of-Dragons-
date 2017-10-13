<?php
  session_start();
   // include_path='C:\xampp\php\PEAR'
  //session_destroy();

  if (isset($_POST["append"])) {
    $_SESSION['cart'][]=$_POST;
  } 
  else if (isset($_POST["checkout"])){
    $_SESSION['cart'][]=$_POST;
    header('Location: cart.php');
  }
  //unset ($_SESSION['cart']);
  // session_unset();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- meta http-equiv="X-Frame-Options" content="deny" -->
	<title>Siverado Cinema</title>	
	<?php require_once("top-module.php"); ?>
</head>
<body>
	<?php require_once("header-nav-module.php"); ?>
	<?php  echo ( $msg ); ?>
<main>
	<div class="-u-full-width u-pull-right u-pull-left" id="banner">
	</div>
<!-- .container is main centered wrapper -->
	<article>
		<div class="container">
			<div class="row">
				<div class="twelve columns">
					<h1 class="title">Time for a Change</h1>
					<h2 class="title">Silverado proudly presents its new 3D rooms</h2>
		    		<p>Forget traveling big distances just to watch a movie on 3D. We bring the latest technology next to you. Silverado Cinema is opening its newest rooms with 3D, with the best image and sound quality you've ever experienced. </p>
		    	</div>
		    </div>
				<div class="row">
				<div class="four columns dimension">
					<ul>Premium Seats</ul>
					<li>Large seats with table</li>
					<li>12 central seats</li>
					<a class="button button-primary" href="showing.php">Book Now</a>
				</div>
				<div class="four columns dimension">
					<ul>Standard Seats</ul>
					<li>Fully renovated</li>
					<li>40 lateral seats</li>
					<a class="button button-primary" href="showing.php">Book Now</a>
				</div>
				<div class="four columns dimension">
					<ul>Bean Bag Seats</ul>
					<li>Fun and confortable</li>
					<li>13 front seats</li>
					<a class="button button-primary" href="showing.php">Book Now</a>
				</div>
			</div>
		</div>
	</article>
</main>
<?php require_once("footer-module.php"); ?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</body>
</html>