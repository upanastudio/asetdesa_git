<?php
	if(isset($method)):
		date_default_timezone_set('Asia/Jakarta');
		$aksi = ROOT."controllers/pagemodel_control.php?model=pagemodel&method="; // halaman untuk eksekusi

		switch($method) {
			default:
				include "404.php";
				break;

			case '':
				echo '

		//coding start...
				<h2>Ini halaman depan dari pagemodel</h2><hr/>
				<table>
					<tr><td>Apa</td><td>Foto</td><td>Tindakan</td></tr>
				';
				$i = 1;
				$data = $pagemodel->getDataLengkap();
				foreach($data as $data) {
					echo '
					<tr><td>'.$data['apa'].'</td><td>'.$data['file_upload'].'</td>
						<td><a href="'.ROOT.'pagemodel/lihat/'.$data['id'].'">Lihat</a> | <a href="'.ROOT.'pagemodel/edit/'.$data['id'].'">Edit</a> | <a href=\'javascript: hapusData("'.$data['id'].'");\'>Hapus</a></td>
					</tr>
					';
					$i++;
				}
				echo '
				</table><hr/>
				<a href="'.ROOT.'pagemodel/tambah">Tambah</a>
		//coding end...

				';
				break;

			case 'tambah':
				echo '

		//coding start...
				<h2>Ini halaman tambah data dari pagemodel</h2><hr/>
				<form role="form" enctype="multipart/form-data" action="'.$aksi.'tambah" method="POST">
					<table>
						<tr><td>Apa</td><td>: <input type="text" name="apa" required/><br/></td></tr>
						<tr><td>Foto</td><td>: <input type="file" name="file" accept="image/*"></td></tr>
						<tr><td><br/></td></tr>
						<tr><td></td><td>. <button type="submit" name="tambah">SUBMIT</button></td></tr>
					</table>
					<hr/><a href="'.ROOT.'pagemodel">Kembali</a>
				</form>
		//coding end...

				';
				break;
			
			case 'lihat':
				if(filter_var($parameter, FILTER_VALIDATE_INT)) {
					$data=$pagemodel->getDataById($parameter);
					if (empty($data['id'])) {
						include "404.php";
					} else {
						echo '

		//coding start...
				<h2>Ini halaman lihat data dari pagemodel</h2><hr/>
				<table>
					<tr><td>Apa</td><td>: '.$data['apa'].'</td></tr>
					<tr><td>Foto</td><td>: <a href="'.ROOT.'upload/files/'.$data['file_upload'].'" target="_blank">'.$data['file_upload'].'</a></td></tr>
					<tr><td><br/></td></tr>
					<tr><td></td><td>. <a href="'.ROOT.'pagemodel/edit/'.$data['id'].'">Edit</a></td></tr>
				</table>
				<hr/><a href="'.ROOT.'pagemodel">Kembali</a>
		//coding end...

						';
						break;
					}
				} else {
					header("location: ".ROOT."pagemodel");
					return false;
				}
				
			case 'edit':
				if(filter_var($parameter, FILTER_VALIDATE_INT)) {
					$data=$pagemodel->getDataById($parameter);
					if (empty($data['id'])) {
						include "404.php";
					} else {
						echo '

		//coding start...
				<h2>Ini halaman edit data dari pagemodel</h2><hr/>
				<form role="form" enctype="multipart/form-data" action="'.$aksi.'edit" method="POST">
					<table>
						<tr><td>Apa</td><td>: <input type="text" name="apa" value="'.$data['apa'].'"/><br/></td></tr>
						<tr><td>Foto</td><td>: <input type="file" name="file" accept="image/*"></td></tr>
						<tr><td><br/></td></tr>
						<input type="hidden" name="file_upload" value="'.$data['file_upload'].'"/>
						<input type="hidden" name="id" value="'.$data['id'].'"/>
						<tr><td></td><td>. <button type="submit" name="edit">UPDATE</button></td></tr>
					</table>
					<hr/><a href="'.ROOT.'pagemodel/lihat/'.$data['id'].'">Kembali</a>
				</form>
		//coding end...

						';
						break;
					}
				} else {
					header("location:".ROOT."pagemodel");
					return false;
				}
		}
?>

<?php endif; ?>
