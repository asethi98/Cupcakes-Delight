<?php

	session_start();
	include("accountconfig.php");
		$un = $_POST["un"];
		$pwd = $_POST["pwd"];
		$sql = "SELECT Name FROM Users WHERE Username='$un' AND Password='$pwd'";
		$result = $conn->query($sql);
		
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$_SESSION["name"] = $row["Name"];
				//echo "Welcome " . $row["Name"] . "<br>";
				//echo "<h2 class = 'subtitle' align = 'center'>Welcome, " . $_SESSION['name'] . "!</h2>";
			}
		}
		else{
			//echo "<h2 class = 'subtitle' align = 'center'>Error Logging In. Please Try Again.</h2>";
		}

?>

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
				<a href="login.php" class="nav-links linkActive">Account</a>
			</li>
			<li><a href="" class="nav-links"><?php echo "Welcome, " . $_SESSION["name"] . "!";?></a>
			</li>
			<li>
				<a href="cart.php" class="nav-links"><i class="fas fa-shopping-cart"></i></a>
			</li>
		</ul>
	</nav>
	
	
	
	<div class = "wrap1">
		<div id = "headerImage">
			<div class = "slide accountTitleImage">
				<div class = "image-text">
					<b><span>Your Account</span></b>
				</div>			
			</div>
		</div>
	</div>
	
	<?php
		
		include("accountconfig.php");
		$un = $_POST["un"];
		$pwd = $_POST["pwd"];
		$sql = "SELECT Name FROM Users WHERE Username='$un' AND Password='$pwd'";
		$result = $conn->query($sql);
		
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$_SESSION["name"] = $row["Name"];
				//echo "Welcome " . $row["Name"] . "<br>";
			}
			echo "<br/><br/><h2 class = 'subtitle' align = 'center'>Welcome, " . $_SESSION['name'] . "!</h2>";
		
		//if the session variable is set even if this page is reloaded, display the welcome message
		}else if(isset($_SESSION["name"])){
			echo "<br/><br/><h2 class = 'subtitle' align = 'center'>Welcome, " . $_SESSION['name'] . "!</h2>";
		
		//if the session variable is not set / user login info is incorrect, redirect to the account.html page
		}else {
			echo '<script>window.location.href = "account.html";</script>';
		}

		$conn->close();

	?>
	<br/>
	<br/>
	<div align = "center"><button class = "submitButton" type="button" onclick="location.href = 'logout.php'">Sign Out</button></div>

</body>
</html>

