<?php
	if(isset($method)):
		date_default_timezone_set('Asia/Jakarta');
		// include('../../lib');
		$aksi = ROOT."controllers/home_control.php?model=home&method="; // halaman untuk eksekusi

		switch($method) {
			default:
				include "404.php";
				break;

			case '':
				echo '

			<h2>Ini halaman depan</h2>
			<hr/>
			<a href="'.ROOT.'pagemodel">Halaman Pagemodel</a>

				';
				break;

			
		}

	endif;
?>
