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
  <title>Cart</title>
  <?php require_once("top-module.php"); ?>
</head>
  <?php require_once("header-nav-module.php"); ?>
  echo gettype($_SESSION['cart']);
<body>
  <main>
    <?
    $getCart= array_keys($_SESSION['cart']);

    for($i=0; $i<sizeof($getCart); $i++) { 
    $index = $$pega_array = $_SESSION["dados"][$i]; 
  ?>

  </main>
<?php require_once("footer-module.php"); ?>
  </body>
</html>