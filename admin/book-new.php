<?php
include("confs/auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		form label{
			margin-top: 10px;
			display: block;
		}
	</style>
</head>
<body>

<h1>Book New</h1>
<ul class="menu">
	<li><a href="book-list.php">Manage Books</a></li>
	<li><a href="cat-list.php">Manage Categories</a></li>
	<li><a href="orders.php">Manage Orders</a></li>
	<li><a href="logout.php">Logout</a></li>
</ul>
<form action="book-add.php" method="post" enctype="multipart/form-data">
	<label for="title">Book title</label>
	<input type="text" name="title" id="title">

	<label for="author">Author</label>
	<input type="text" name="author" id="author">

	<label for="summary">Summary</label>
	<textarea name="summary" id="summary"></textarea>

	<label for="price">Price</label>
	<input type="text" name="price" id="price">

	<label for="categories">Category</label>
	<select name="category_id" id="categories">
		<option value="0">Choose One</option>
	

<?php
include("confs/config.php");
$result=mysqli_query($conn,"SELECT * FROM categories");
while ($row=mysqli_fetch_assoc($result)):
?>
<option value="<?php echo $row['id'] ?>">
	<?php echo $row['name'] ?>	
</option>
<?php endwhile; ?>
</select> 
<label for="cover">Cover</label>
<input type="file" name="cover" id="cover"><br><br><br>

<input type="submit" name="Add Book">
<a href="book-list.php" class="back"></a>
</form>
</body>
</html>