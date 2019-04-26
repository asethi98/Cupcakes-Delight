<?php

session_start();

//After completing the purchase, the items should be removed from the cart.
unset($_SESSION["cart"]);

?>

<!doctype html>
<html>
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
			<div class = "slide paymentTitleImage">
				<div class = "image-text">
					<b><span>Confirmation</span></b>
				</div>			
			</div>
		</div>
	</div>


	</br></br></br>
	
	<div align = "center"> <?php echo "Hi, " . $_SESSION['name'] . "!";?> Thank you for your order. It will be ready by tomorrow. </div>

	</br></br>
	
	<div align = "center"> Your order confirmation number is:  <?php echo rand(1000,4000) ?>. </div>
		
	</br></br>
		
	<h2 class="subtitle" align = "center">Want more cupcakes? Check these out!</h2>
		
	</br></br></br>

	<div class = "productsContainer">
		<div class="product">
			<div class="cupcake3 shrink"> 
				<div class="name" align=center> Unicorn Cupcake </div>
				<div class="price" align=center> $2.50 </div>
				<button type="button" onclick="location.href = 'cupcake3.php'"></button>
			</div>
		</div>
		
		<div class="product">
			<div class="cupcake4 shrink"> 
				<div class="name" align=center> Fruity Tooty </div>
				<div class="price" align=center> $2.00 </div>
				<button type="button" onclick="location.href = 'cupcake4.php'"></button>
			</div>
		</div>
		
		<div class="product">
			<div class="cupcake5 shrink"> 
				<div class="name" align=center> Triple Chocolate Cupcake </div>
				<div class="price" align=center> $1.75 </div>
				<button type="button" onclick="location.href = 'cupcake5.php'"></button>
			</div>
		</div>
	</div>
	
</body>
</html>