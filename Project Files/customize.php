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
				<a href="products.html" class="nav-links">Products</a>
			</li>
			<li>
				<a href="customize.php" class="nav-links linkActive">Custom Design</a>
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
			<div class = "slide customizeTitleImage">
				<div class = "image-text">
					<b><span>Create Your Own Cupcake</span></b>
				</div>			
			</div>
		</div>
	</div>
	<br/>
	<div class = "containerCustomize">
		<div class = "itemsCustomize" style = "justify-content: center; height: 600px">
			
			<div><form method="post" action="cart.php?action=add&id=<?php echo $row1["ID"]; ?>"></div>
			
			<p><b>Name</b></p>
			<input type = "text" id = "name" name = "name" placeholder = "First and Last Name" onchange = "checkFullName();" required>
			<div id = "fcheck" style = "color: #f98181;"></div>
			<br/>	
			
			<p><b>Select a Cake</b></p>
			<select id="selectedCake" name = "Cake" onchange="selectCakeBase()" required>
				<option>None</option>
				<option value="0">Vanilla</option>
				<option value="1">Lemon</option>
				<option value="2">Chocolate</option>
				<option value="3">Red Velvet</option>
			</select>
		
			<br/>	
				
			<p><b>Select a Frosting</b></p>
			<select id="selectedFrosting" name = "Frosting" onchange="selectFrosting()" required>
				<option>None</option>
				<option value="0">Lemon</option>
				<option value="1">Strawberry</option>
				<option value="2">Chocolate</option>
				<option value="3">Vanilla</option>					
			</select>
		
			<br/>

			
			<p><b>Select a Topping</b></p>
			<select id = "selectedTopping" name = "Topping" onchange="selectTopping()" required>
				<option>None</option>
				<option value="0">Sprinkles</option>
				<option value="1">Chocolate Chips</option>
				<option value="2">Peanuts</option>	
			</select>
			
			<br/>
			
			
			<?php 
			$sql = "SELECT * FROM Products WHERE ID = 7";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					$row1 = mysqli_fetch_array($result);
				}
			?>
			
			
			<p><b>Quantity</b></p>
			<input type="text" name="quantity" value = "1">
			<br/>
			<input type="hidden" name="hidden_name" value="<?php echo $row1["ProductName"]; ?>">
			<input type="hidden" name="hidden_price" value="<?php echo $row1["Price"]; ?>">
			<input class = "submitButton" name = "add" type = "Submit">
			
			
			</form>
		</div>
	
			
		<div class = "itemsCustomize" style = "background-color: #f4c3c3; padding-top: 90px;">
			<div id="showTopping"></div>
			<div id="showFrosting"></div>
			<div id="showCake"></div>
		</div>
	</div>
	
	<script src="script.js"></script>
</body>
</html>