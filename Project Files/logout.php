<?php
	echo '<script>window.location.href = "index.html";</script>';
	session_start();
	// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy();
?>
<html>
<body>
<script>
</body>
</html>