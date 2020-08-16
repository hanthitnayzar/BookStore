<?php
session_start();
$name=$_POST['name'];
$password=$_POST['password'];

if ($name == "admin"  and $password= "pipo987") {
	$_SESSION['auth'] =true;
	echo "<script>window.open('book-list.php','_self')</script>";
}else {
	
echo "<script>window.open('index.php','_self')</script>";

}
?>