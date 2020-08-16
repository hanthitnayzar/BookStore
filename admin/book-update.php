<?php
include("confs/auth.php");
include("confs/config.php");
$id=$_POST['id'];
$title=$_POST['title'];
$author=$_POST['author'];
$summary=$_POST['summary'];
$price=$_POST['price'];
$category_id=$_POST['category_id'];
$cover=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name'];

// print_r($_FILES);

if ($cover) {
	move_uploaded_file($tmp,"covers/$cover");
	$sql="UPDATE books SET title='$title',author='$author',summary='$summary',price='$price',category_id='$category_id',cover='$cover', modified_date=now() WHERE id=$id";
} else {
	$sql="UPDATE books SET title='$title',author='$author',summary='$summary',price='$price',category_id='$category_id',cover='$cover',modified_date=now() WHERE id=$id";
}

// echo "$sql";
mysqli_query($conn,$sql);
echo "<script>window.open('book-list.php','_self')</script>";
?>