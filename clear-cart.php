<?php
session_start();
unset($_SESSION['cart']);
 
mysqli_query($conn,$sql);
echo "<script>window.open('index.php','_self')</script>";
?>