<?php
	class libs_model {
		public function waktu($wkt) {
			$jam = substr($wkt, 0, 2);
			$menit = substr($wkt, 3, 2);
			if ($jam < 12) {
				$AMPM = "AM";
				if ($jam == 0) $jam = 12;
			} else {
				$AMPM = "PM";
				if ($jam != 12) $jam = $jam-12;
			}

			return $jam.':'.$menit.' '.$AMPM;
		}

		public function tgl_indo($tgl) {
			if ($tgl == "0000-00-00") {
				return "-";
			} else {
				$tanggal = date("j", strtotime($tgl));
				$bulan = $this->getBulan(substr($tgl,5,2));
				$tahun = substr($tgl, 0, 4);
				return $tanggal.' '.$bulan.' '.$tahun;
			}
		}

		public function getBulan($bln) {
			switch ($bln){
				case 1: 
					return "Januari";
					break;
				case 2:
					return "Februari";
					break;
				case 3:
					return "Maret";
					break;
				case 4:
					return "April";
					break;
				case 5:
					return "Mei";
					break;
				case 6:
					return "Juni";
					break;
				case 7:
					return "Juli";
					break;
				case 8:
					return "Agustus";
					break;
				case 9:
					return "September";
					break;
				case 10:
					return "Oktober";
					break;
				case 11:
					return "November";
					break;
				case 12:
					return "Desember";
					break;
			}
		}

		public function makeLogoPath($logo) {
			$logo = strtolower($logo);
			$logo = trim($logo, " ");
			$value = preg_replace('~[\\\\/:*?"<>|]~', '', $logo);
			$value = preg_replace("~[']~", "", $value);
			$value = str_replace(" ", "", $value);
			$value = $value.".jpg";
			return $value;
		}

		public function anti_injection($data) {
			$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
			return $filter;
		}

		public function cek_login() {
			@session_start();
			$timeout=$_SESSION['timeout'];
			if(time()<$timeout) {
				$this->timer();
				return true;
			} else {
				unset($_SESSION['timeout']);
				return false;
			}
		}

		public function stringHtml($text) {
			$text = trim($text);
			$save = trim(htmlentities($text, ENT_QUOTES));
			$save = str_replace('\\', '&#92;', $save);
			return $save;
		}

		public function changeLink($v) {
			$v = strtolower($v);
			$v = trim($v, " ");
			$value = preg_replace('~[\\\\/:*?"<>|]~', '', $v);
			$value = preg_replace("~[']~", "", $value);
			$value = str_replace(" ", "-", $value);
			$value = $value.".html";
			return $value;
		}

		public function timer() {
			@session_start();
			$time = 10000;
			return $_SESSION['timeout'] = time() + $time;
		}

		public function unsavequery($text) {
			$save = html_entity_decode($text, ENT_QUOTES);
			return $save;
		}

		public function uploadFile($folder, $file) {
			//kode untuk upload ke folder gambar
			$tmp_name = $file["tmp_name"];
			$ext = explode('.',$file['name']);
			$extension = $ext[sizeof($ext)-1];
			$extension = strtolower($extension);

			$namaberu = uniqid().".".$extension;
			// $namaberu = $id.'_'.$tipe.'.'.$extension;

			$name = $folder.$namaberu;

			//fungsi cut dari temp file ke yang kita mau
			$size = ceil($file['size']/1024); // disini misalkan tidak ada file maka akan 0

			if($size <= 10260) { 
				if(move_uploaded_file($tmp_name, $name)) {
					return $namaberu;
				} else {
					return '';
				}; //fungsi untuk memindahkan gambar 
			} else {
				return false;
			}
		}

		public function deleteFile($url, $data) {
			$hapus = $url.$data;
			if (file_exists("$hapus")) {
				unlink("$hapus");
				return true;
			} else {
				return false;
			}
		}

		public function uploadImageToFolder($folder, $file) {
			//kode untuk upload ke folder gambar 
			$tmp_name = $file["tmp_name"];
			$ext = explode('.',$file['name']);
			$extension = $ext[sizeof($ext)-1];
			$extension = strtolower($extension);
			$namaberu = uniqid().'.'.$extension;
			$name = $folder.$namaberu;
			
			//fungsi cut dari temp file ke yang kita mau
			$size = ceil($file['size']/1024); // disini misalkan tidak ada file maka akan 0
			@$cek =  empty($file)?array():getimagesize($file['tmp_name']);
			// var_dump($cek);

			if(!empty($cek['mime']) and $size <= 1026) { 
				if($extension == 'png' or $extension == 'jpg' or $extension == 'jpeg' or $extension == 'JPEG' or $extension == 'JPG' or $extension == 'PNG') {
					if(move_uploaded_file($tmp_name, $name)) {
						return $namaberu;
					} else {
						return '';
					}; //fungsi untuk memindahkan gambar 
				} else {
					return '';
				}
			} else {
				return false;
			}
		}

		public function uploadImageToFolderThumbnail($folder, $filename) {
			$tujuan = $folder.'thumbnails';
			$final_width_of_image = 270;
			$path_to_image_directory = $folder;
			$path_to_thumbs_directory = $folder.'thumbnails/';

			if(preg_match('/[.](jpg)$/', $filename)) {
				$im = imagecreatefromjpeg($path_to_image_directory . $filename);
			} else if (preg_match('/[.](gif)$/', $filename)) {
				$im = imagecreatefromgif($path_to_image_directory . $filename);
			} else if (preg_match('/[.](png)$/', $filename)) {
				$im = imagecreatefrompng($path_to_image_directory . $filename);
			}

			$ox = imagesx($im);
			$oy = imagesy($im);
			$nx = $final_width_of_image;
			$ny = floor($oy * ($final_width_of_image / $ox));
			$nm = imagecreatetruecolor($nx, $ny);
			imagecopyresized($nm, $im, 0,0,0,0,$nx,$ny,$ox,$oy);

			if(!file_exists($path_to_thumbs_directory)) {
				if(!mkdir($path_to_thumbs_directory)) {
					die("Folder tidak tersedia");
				}
			}

			imagejpeg($nm, $path_to_thumbs_directory . $filename);
			imagedestroy($im);
			imagedestroy($nm);
		}
	}
?>
