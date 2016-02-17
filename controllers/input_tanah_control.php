<?php
	session_start();
	if(isset($_GET['model'])): // for secure
		ob_start();
		date_default_timezone_set('Asia/Makassar');
		require "../libs/path.php";
		require "../models/class.php";

		$model = $_GET['model'];
		$method = $_GET['method'];
		$model;

		if($model == 'tanah' AND $method == 'tambah') {
			if(isset($_POST['tambah'])) {
				$kode_barang			= $_POST['kode_barang'];
				$jb						= $input->getNamaBarangByKB($kode_barang);
				$jenis_barang			= $jb['nama_barang'];
				$register				= $_POST['register'];
				$luas_tanah				= $_POST['luas_tanah'];
				$tanggal_beli			= $_POST['tanggal_beli'];
				$alamat					= $_POST['alamat'];
				$hak						= $_POST['hak'];
				$no_sertifikat			= $_POST['no_sertifikat'];
				$tanggal_sertifikat	= $_POST['tanggal_sertifikat'];
				$penggunaan				= $_POST['penggunaan'];
				$asal_usul				= $_POST['asal_usul'];
				$harga					= $_POST['harga'];
				$keterangan				= $_POST['keterangan'];

				//sanitasi
				// $apa						= filter_var($apa, FILTER_SANITIZE_STRING);

				$input->insertData($kode_barang, $jenis_barang, $register, $luas_tanah, $tanggal_beli, $alamat, $hak, $no_sertifikat, $tanggal_sertifikat, $penggunaan, $asal_usul, $harga, $keterangan);
				header("location:".ROOT."laporan?act=add");
			}
		}

		if($model == 'tanah' AND $method == 'edit') {
			if(isset($_POST['edit'])) {
				$kode_barang			= $_POST['kode_barang'];
				$jb						= $input->getNamaBarangByKB($kode_barang);
				$jenis_barang			= $jb['nama_barang'];
				$register				= $_POST['register'];
				$luas_tanah				= $_POST['luas_tanah'];
				$tanggal_beli			= $_POST['tanggal_beli'];
				$alamat					= $_POST['alamat'];
				$hak						= $_POST['hak'];
				$no_sertifikat			= $_POST['no_sertifikat'];
				$tanggal_sertifikat	= $_POST['tanggal_sertifikat'];
				$penggunaan				= $_POST['penggunaan'];
				$asal_usul				= $_POST['asal_usul'];
				$harga					= $_POST['harga'];
				$keterangan				= $_POST['keterangan'];
				$id						= $_POST['id'];

				//sanitasi
				// $apa			= filter_var($apa,FILTER_SANITIZE_STRING);

				$input_tanah->updateData($kode_barang, $jenis_barang, $register, $luas_tanah, $tanggal_beli, $alamat, $hak, $no_sertifikat, $tanggal_sertifikat, $penggunaan, $asal_usul, $harga, $keterangan, $id);
				header("location:".ROOT."laporan?act=upd");
			}
		}

		if($model == 'tanah' AND $method == 'hapus') {
			$id = filter_var($_POST['id'],FILTER_VALIDATE_INT);

			$input->deleteData($id);
			header("location:".ROOT."laporan?act=del");
		}

	endif;
?>
