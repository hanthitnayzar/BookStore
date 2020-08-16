<?php
include("confs/auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1>Edit Page</h1>
<ul class="menu">
	<li><a href="book-list.php">Manage Books</a></li>
	<li><a href="cat-list.php">Manage Categories</a></li>
	<li><a href="orders.php">Manage Orders</a></li>
	<li><a href="logout.php">Logout</a></li>
</ul>
<?php
include("confs/config.php");
$id=$_GET['id'];
$result=mysqli_query($conn, "SELECT * FROM categories WHERE id = $id");
$row=mysqli_fetch_assoc($result);
?>
</body>
</html>