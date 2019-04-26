<?php
	include ("cartconfig.php");
?>


<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css"  href = "sheet.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href = "https://fonts.googleapis.com/css?family=Satisfy|Slabo+27px" rel="stylesheet">
<style>
	table, td, th {
		align-content: center;
		font-size: 20px;
	}
</style>
</head>
<body>
	<nav class="navigationBar">
		<span class="navbar-toggle" id="navBarToggle">
			<i class="fas fa-bars"></i>
		</span>
		
		<b><a href="index.html" class="logo">Cupcakes Delight</a></b>
		<ul class="main-nav" id="mainNav">
			<li>
				<a href="index.html" class="nav-links">Home</a>
			</li>
			<li>
				<a href="products.html" class="nav-links">Products</a>
			</li>
			<li>
				<a href="customize.php" class="nav-links">Custom Design</a>
			</li>
			<li>
				<a href="contact.html" class="nav-links">Contact Us</a>
			</li>
			<li>
				<a href="login.php" class="nav-links">Account</a>
			</li>
			<li>
				<a href="cart.php" class="nav-links linkActive"><i class="fas fa-shopping-cart"></i></a>
			</li>
		</ul>
	</nav>
	
	
	
	<div class = "wrap1">
		<div id = "headerImage">
			<div class = "slide cartTitleImage">
				<div class = "image-text">
					<b><span>Shopping Cart</span></b>
				</div>			
			</div>
		</div>
	</div>
	
	<div class = "cartContainer">
		<div class = "cartItem">
		<h2 class="subtitle" align = "center">Your Items</h2>
		<table cellpadding = "20">
			<tr>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Price Details</th>
				<th>Total Price</th>
				<th>Remove Item</th>
			</tr>

			<?php
				if(!empty($_SESSION["cart"])){
					$total = 0;
					foreach ($_SESSION["cart"] as $key => $value) {
			?>
			
			<tr>
				<td align = "center"><?php echo $value["productName"]; ?></td>
				<td align = "center"><?php echo $value["productQuantity"]; ?></td>
				<td align = "center">$ <?php echo $value["productPrice"]; ?></td>
				<td align = "center">
				$ <?php echo number_format($value["productQuantity"] * $value["productPrice"], 2); ?></td>
				<td align = "center"><a href="cart.php?action=delete&id=<?php echo $value["productID"]; ?>"><span><i class="fas fa-trash"></i></span></a></td>

			</tr>
			
			<?php
			$total = $total + ($value["productQuantity"] * $value["productPrice"]);
					}
			?>
			
			<tr>
				<td colspan = "3" align="right">Total</td>
				<th align = "center">$ <?php echo number_format($total, 2); ?></th>
				<td></td>
			</tr>
			
			</table>
		
			<a href = "payment.html" align = "center"><button class = "submitButton" style = "margin-top: 30px;">Continue</button></a>
			
			<?php
				}
			?>
		
		</div>
	</div>
	

	
	<script src="script.js"></script>
	
</body>
</html>