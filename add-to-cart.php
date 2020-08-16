<?php
	session_start();
	$id=$_GET['id'];
	$_SESSION['cart'][$id]++;


	echo "<script>window.open('index.php','_self')</script>";
?>
