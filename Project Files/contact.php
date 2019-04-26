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
				<a href="contact.html" class="nav-links linkActive">Contact Us</a>
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
			<div class = "slide contactTitleImage">
				<div class = "image-text">
					<b><span>Questions? We're Here For You.</span></b>
				</div>			
			</div>
		</div>
	</div>
	
	<?php
		include("accountconfig.php");	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subj = $_POST['subj'];
		$msg = $_POST['msg'];
		$fcheck1 = $_POST['fcheck1'];
		$echeck1 = $_POST['echeck1'];
		
		if ($fcheck1 != "" || $echeck1 != ""){
			header('location: contact.html');
		}
		
		$sql = "INSERT INTO ContactForm (Name, Email, Subject, Message) VALUES ('$name', '$email', '$subj', '$msg')";	
		
		
		if ($conn->query($sql) === TRUE) {
			echo "<br/><h2 class = 'subtitle' align = 'center'>Thank You!</h2>";
			echo "<p align = 'center'>Thank you for contacting us. We will get back to you shortly.</p>";
		} else {
			echo "<br/><h2 class = 'subtitle' align = 'center'>Error.</h2>";
			echo "<p align = 'center'>Sorry! There was an error submitting your message. Please Try Again.</p>";
		}
		
	?>

</body>
</html>

