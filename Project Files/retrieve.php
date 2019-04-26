<?php 
	session_start();
	
	include("accountconfig.php");	
					
	if(isset($_SESSION["username"])) {
		//echo $_SESSION["username"];
	}else {
		$_SESSION["username"] = $_POST["un"];
		//echo $_SESSION["username"];
	}
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
	
	<br/>
	
	<div class = "accountContainer">
		<div class = "formItem" style = "justify-content: space-evenly; height: 300px;">
			<h2 class = "subtitle" style = "margin-top: 10px;">Verification</h2>	
			<br/>
			<div><form action = "check.php" method="POST"></div>
			
				<label style = "color: #757575;">Security Question</label>
				<select id = "question" name = "ques" align = "center" required>
					<option value="Pet Name">What is your pet's name?</option>
					<option value="City of Birth">Which city were you born in?</option>
					<option value="Best Friend's Name">What is your best friend's name?</option>
					<option value="Mom's Nickname">What is your mom's nickname?</option>
				</select>
				<div></div>

				<br/>
				
				<input type = "text" id = "answer" placeholder = "Answer" name = "ans">
				<div></div>
				
				<br/>

				<input class = "submitButton" type = "Submit" value = "Verify"></input>
			
			</form>

		</div>
	</div>	
</body>
</html>	