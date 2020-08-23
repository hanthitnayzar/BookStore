<?php
include("confs/config.php");
include("confs/auth.php");
$id=$_GET['id'];
$sql="DELETE FROM books WHERE id='$id'";
mysqli_query($conn,$sql);

echo "<script>window.open('book-list.php','_self')</script>";                                                                                             
?>