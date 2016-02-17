<?php
	session_start();
	if(isset($_GET['model'])): // for secure
		ob_start();
		date_default_timezone_set('Asia/Jakarta');
		require "../libs/path.php";
		require "../model/class.php";

		$model = $_GET['model'];
		$method = $_GET['method'];
		$model;

		if($model == 'pagemodel' AND $method == 'tambah') {
			if(isset($_POST['tambah'])) {
				$apa			= $_POST['apa'];

				//sanitasi
				$apa			= filter_var($apa, FILTER_SANITIZE_STRING);

				if($_FILES['file']['tmp_name'] != "") {
					$file_upload = $libs->uploadFile('../upload/files/',$_FILES['file']);
				}

				$pagemodel->insertData($apa, $file_upload);
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";
				header("location:".ROOT."pagemodel");
			}
		}

		if($model == 'pagemodel' AND $method == 'edit') {
			if(isset($_POST['edit'])) {
				$apa			= $_POST['apa'];
				$file_upload	= $_POST['file_upload'];
				$id				= $_POST['id'];

				//sanitasi
				$apa			= filter_var($apa,FILTER_SANITIZE_STRING);

				if($_FILES['file']['tmp_name'] != "") {
					$libs->deleteFile("../upload/files/",$file_upload);
					$file_upload = $libs->uploadFile('../upload/files/',$_FILES['file']);
				}

				$pagemodel->updateData($apa, $file_upload, $id);
				echo "<script> alert('Data Berhasil Diperbarui'); </script>";
				header("location:".ROOT."pagemodel/lihat/".$id);
			}
		}

		if($model == 'pagemodel' AND $method == 'hapus') {
			$id = filter_var($_GET['id'],FILTER_VALIDATE_INT);
			$data = $pagemodel->getDataById($id);
			$libs->deleteFile("../upload/files/",$data['file_upload']);

			$pagemodel->deleteData($id);
			echo "<script> alert('Data Berhasil Dihapus'); </script>";
			header("location:".ROOT."pagemodel");
		}

	endif;
?>
