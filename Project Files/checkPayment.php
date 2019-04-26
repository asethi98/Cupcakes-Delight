<!doctype html>
<html>
<head>
</head>
<body>

	<?php
		$ccheck1 = $_POST['ccheck1'];
		$ncheck1 = $_POST['ncheck1'];
		$scheck1 = $_POST['scheck1'];
		$acheck1 = $_POST['acheck1'];
		$bacheck1 = $_POST['bacheck1'];
		$pcheck1 = $_POST['pcheck1'];
		
		if ($ccheck1 != "" || $ncheck1 != "" || $scheck1 != "" || $acheck1 != "" || $bacheck1 != "" || $pcheck1 != ""){
			header('location: payment.html');
		}else {
			header('location: completeOrder.php');
		}
	?>
	
</body>
</html>