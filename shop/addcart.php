<?php
	session_start();
	$id = $_POST["id"];
	$aantal = $_POST["aantal"];
	$size = $_POST["size"];
	$_SESSION['cart'];

	$pizza = array($id, $aantal, $size);

	array_push($_SESSION["cart"], $pizza);
	foreach ($_SESSION["cart"] as $p) {
		echo "Pizza $p[0] | $p[1] | $p[2] <br>";
	}
?>
