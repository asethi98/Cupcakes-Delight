<?php
	include ("cartconfig.php");
?>


<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css"  href = "sheet.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href = "https://fonts.googleapis.com/css?family=Satisfy|Slabo+27px" rel="stylesheet">
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
				<a href="products.html" class="nav-links linkActive">Products</a>
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
				<a href="cart.php" class="nav-links"><i class="fas fa-shopping-cart"></i></a>
			</li>
		</ul>
	</nav>
	
	<div class = "wrap1">
		<div id = "headerImage">
			<div class = "slide productsTitleImage">
				<div class = "image-text">
					<b><span>Products</span></b>
				</div>			
			</div>
		</div>
	</div>
	
	<br/>
	<br/>
	
	
	<b><div align=center class = "subtitle">Caramel Pecan Cupcake</div></b>
	
	<div class = "cupcakesContainer">
		<div class="cupcake">
			<div> <img src="images/Cupcake6.jpg" width = "400" height = "450"> </div>
		</div>
		
		<div class="cupcake">
			<div align = "center">
				This pecan cupcake is made with a moist vanilla and cinnamon cupcake with plenty of toasted butter pecans. It's topped with 
				light cinnamon and sweet caramel.
			</div>
			
			<b><div> Price: $2.00 each</div></b>
		
			<?php 
			$sql = "SELECT * FROM Products WHERE ID = 6";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					$row6 = mysqli_fetch_array($result);
				}
			?>
			
			<form method="post" action="cart.php?action=add&id=<?php echo $row6["ID"]; ?>">
				<label>Quantity</label>
				<br/>
				<input type="number" name="quantity" value = "1">
				<input type="hidden" name="hidden_name" value="<?php echo $row6["ProductName"]; ?>">
				<input type="hidden" name="hidden_price" value="<?php echo $row6["Price"]; ?>">
				<input type="hidden" name="hidden_inventory" value="<?php echo $row6["Inventory"]; ?>">
				<input type="submit" class = "submitButton" name="add" style="margin-top: 5px;" value="Add to Cart">
			</form>
			<p class = "stockStatus"><?php 
				if ($row6["Inventory"] < 10) {
					echo "Low In Stock";
				}
			?></p>
		</div>
	</div>
	
	<script src="script.js"></script>
</body>
</html>