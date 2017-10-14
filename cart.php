<?php
  session_start();
   // include_path='C:\xampp\php\PEAR'
  //session_destroy();


$v_ticket = $_SESSION[cart];

//PEGA A CHAVE DO ARRAY
$key = array_keys($v_ticket);

//EXIBE
for($i=0; $i<sizeof($key); $i++) {
$index = $key[$i];

	if(!empty($v_ticket[$index]) { 

	$checkout[$index][movie] = $v_ticket[$index][movie];
	$checkout[$index][session] = $v_ticket[$index][session];
	$checkout[$index][seat] = $v_ticket[$index][seat];
	$checkout[$index][quantity] = $v_ticket[$index][quantity];
	$checkout[$index][price] = $v_ticket[$index][price];
	}
}

//GRAVA NA SESSÃO
$_SESSION[cart] = $checkout;
?>

<html>
<head>
<title>Shopping Cart</title>
  <?php require_once("top-module.php"); ?>
</head>
  <?php require_once("header-nav-module.php"); ?>

<body>

<table>
<tr>
<td><>Shopping Cart: </td>
</tr>
</table>
<br>
<table>
<tr>
<td>Movie</td>
<td>Session</td>
<td>Seat</td>
<td> Quantity</td>
<td> Price</td>
</tr>

<?
//PEGA A CHAVE
$key_cart = array_keys($_SESSION[cart]);

//EXIBE OS PRODUTOS DA CESTA
for($i=0; $i<sizeof($key_cart); $i++) { 
$index = $key_cart[$i]; 
?>

<tr>
<td></td>
<td><? echo $_SESSION[cart][$index][Movie]; ?></td>
<td><? echo $_SESSION[cart][$index][Session]; ?></td>
<td><? echo $_SESSION[cart][$index][Seat]; ?></td>
<td><? echo $_SESSION[cart][$index][Quantity]; ?></td>
<td><? echo $_SESSION[cart][$index][Price]; ?></td>
</tr>

<?
}//FECHA FOR ?>
</body>
</html>
  </main>
<?php require_once("footer-module.php"); ?>
  </body>
</html>