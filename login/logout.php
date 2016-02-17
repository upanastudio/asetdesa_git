<?php 
	session_start();
	session_unset();
	session_destroy();
	
	include "../libs/path.php";
	header("location:".ROOT."login");
?>
