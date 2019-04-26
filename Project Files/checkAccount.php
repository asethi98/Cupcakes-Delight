<!doctype html>
<html>
<head>
</head>
<body>

	<?php
		$fcheck1 = $_POST['fcheck1'];
		$echeck1 = $_POST['echeck1'];
		$pcheck1 = $_POST['pcheck1'];
		$confirmcheck1 = $_POST['confirmcheck1'];
		
		if ($fcheck1 != "" || $echeck1 != "" || $pcheck1 != "" || $confirmcheck1 != ""){
			header('location: account.html');
		}else {
			header('location: register.php');
		}
	?>
	
</body>
</html>