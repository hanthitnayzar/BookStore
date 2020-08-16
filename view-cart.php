<?php
session_start();
if (!isset($_SESSION['cart'])) {
	header("location:index.php");
	exit();
}
include("admin/confs/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Cart</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style type="text/css">
	form label{
		display: block;
		margin-top: 8px;
	}
</style>
<body>
<h1>View Cart</h1>
<div class="sidebar">
	<ul class="cats">
		<li><a href="index.php">&laquo; Continue Shopping</a></li>
		<li><a href="clear-cart.php" class="del">&times; Clear cart</a></li>
	</ul>
</div>

<div class="main">
	<table>
		<tr>
			<th>Book Title</th>
			<th>Quantity</th>
			<th>Unit Price</th>
			<th>Price</th>
		</tr>

		<?php
		$total=0;
		foreach ($_SESSION['cart'] as $id => $qty) :
		$result=mysqli_query($conn,"SELECT title,price from books WHERE id=$id");
		$row=mysqli_fetch_assoc($result);
		$total +=$row['price'] * $qty;

		// To check database
		// echo "$result";

		// to check if id is carry or not
		// print_r($_SESSION);
		?>
		<tr>
			<td><?php echo $row['title'] ?></td>
			<td><?php echo $qty ?></td>
			<td>$<?php echo $row['price']; ?></td>
			<td>$<?php echo $row['price'] * $qty ?></td>
		</tr>
	<?php endforeach; ?>
	<tr >
		<td colspan="3" align="right"><b>Total;</b></td>
		<td>$<?php echo $total; ?></td>
	</tr>
	</table>

	<div class="order-form">
		<h2>Order Now</h2>
		<form action="submit-order.php" method="post">
			<label for="name">Your Name</label>
			<input type="text" name="name">

			<label for="email">Email</label>
			<input type="text" name="email">                 

			<label for="address">Address</label>
			<input type="address" name="address">
			<br><br>
			<input type="submit" value="Submit Order">
			<a href="index.php">Continue Shopping</a>
		</form>
	</div>
</div>

<div class="footer">
	&copy;<?php echo date("Y"); ?> .All right reserved.
</div>
</body>
</html>