<?php
		$fcheck1 = $_POST['fcheck1'];
		$echeck1 = $_POST['echeck1'];
		$pcheck1 = $_POST['pcheck1'];
		$confirmcheck1 = $_POST['confirmcheck1'];
		
		if ($fcheck1 != "" || $echeck1 != "" || $pcheck1 != "" || $confirmcheck1 != ""){
			header('location: account.html');
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
		$name1 = $_POST['name'];
		$email1 = $_POST['email'];
		$un = $_POST['un'];
		$pwd = $_POST['pwd'];
		$ques = $_POST['ques'];
		$ans = $_POST['ans'];
		
		$sql = "INSERT INTO Users (Name, Email, Username, Password, Question, Answer) VALUES ('$name1', '$email1', '$un', '$pwd', '$ques', '$ans')";	
		
		
		if ($conn->query($sql) === TRUE) {
			echo "<br/><h2 class = 'subtitle' align = 'center'>Account Successfully Created</h2>";
			echo "<p align = 'center'>Please check your email to verify your account details</p></br>";
			echo "<div align = 'center'><a href = 'account.html'><button class = 'submitButton'>Login</button></a></div>";
		} else {
			echo "<br/><h2 class = 'subtitle' align = 'center'>Error. Please Try Again.</h2>";
		}
		
		
		
		
		
	?>

</body>
</html>

