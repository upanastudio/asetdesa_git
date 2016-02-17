<?php 
	ob_start();
	require_once("connect/database.php");
	function autoload($class){
		$namafile = $class.'.php';
		include_once $namafile;
	}

	spl_autoload_register('autoload');

	try {
		$pagemodel		= new pagemodel_model($db);
		$input			= new input_model($db);
		$libs			= new libs_model($db);
		$user			= new user_model($db);
	} catch(Exception $e) {
		echo "Menemukan kesalahan: ".$e->getMessage()."\n";
	}
?>
