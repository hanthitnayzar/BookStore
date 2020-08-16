<?php  
include("confs/auth.php")
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		form{
			margin-top: 8px;
			display: block;
		}
	</style>
</head>
<body>
<h1>New Category</h1>
<ul class="menu">
	<li><a href="book-list.php">Manage Books</a></li>
	<li><a href="cat-list.php">Manage Categories</a></li>
	<li><a href="orders.php">Manage Orders</a></li>
	<li><a href="logout.php">Logout</a></li>
</ul>
<form action="cat-add.php" method="post">
	<label name="name">Name</label>
	<input type="text" name="name" id="name">

	<label name="remark">Remark</label>
	<textarea name="remark" id="remark"></textarea>

	<input type="submit" name="Add Category">
</form>
</body>
</html>
