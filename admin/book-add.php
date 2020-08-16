<?php
include("confs/auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include("confs/config.php");
$title=$_POST['title'];
$author=$_POST['author'];
$summary=$_POST['summary'];
$price=$_POST['price'];
$category_id=$_POST['category_id'];
$cover=$_FILES['cover'];
$tmp=$_FILES['cover']['tmp_name'];

// print_r($_FILES);

if($cover) {
 move_uploaded_file($tmp, "covers/$cover");
 }

 $sql = "INSERT INTO books (
 title, author, summary, price, category_id,
 cover, created_date, modified_date
 ) VALUES (
 '$title', '$author', '$summary', '$price',
 '$category_id', '$cover', now(), now()
 )";
 mysqli_query($conn, $sql);
 header("location: book-list.php");


?>
</body>
</html>