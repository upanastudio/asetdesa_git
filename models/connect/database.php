<?php 
	// $db = new PDO('mysql:host=localhost; dbname=db_name; charset=utf8', 'db_user', 'db_password');
	$db = new PDO('mysql:host=localhost; dbname=asetdesa; charset=utf8', 'root', '');

	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
