<?php
	if(isset($method)):
		date_default_timezone_set('Asia/Makassar');
		$aksi_tanah = ROOT."controllers/input_tanah_control.php?model=tanah&method=";
		$aksi_peralatan = ROOT."controllers/input_peralatan_control.php?model=peralatan&method=";
		$aksi_gedung = ROOT."controllers/input_gedung_control.php?model=gedung&method=";
		$aksi_jalan = ROOT."controllers/input_jalan_control.php?model=jalan&method=";
		$aksi_asetlain = ROOT."controllers/input_asetlain_control.php?model=asetlain&method=";
		$aksi_konstruksi = ROOT."controllers/input_konstruksi_control.php?model=konstruksi&method=";

		switch($method) {
			default:
				include "404.php";
				break;

			case '':
				echo '

					<div class="content-header">
		<h2 class="content-header-title">Laporan Inventaris</h2>
		<ol class="breadcrumb">
		  <li><a href="./index.html">Beranda</a></li>
		  <li><a href="javascript:;">Laporan</a></li>
		  <li class="active">Laporan Inventaris Aset </li>
		</ol>
	  </div> <!-- /.content-header -->

	  <div class="row">

		<div class="col-md-8">
	  
		</div>

		<div class="col-md-4 col-sidebar-right">

		  <p><a href="javascript:;" class="btn btn-jumbo btn-primary btn-block">Tambah / Edit Data <br /></a></p>

		</div>

	  </div>

	  <!--Edit / Tambah data-->


	  <div class="row">
		<div class="col-md-12">

		   <div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Aset Tetap</h3>
				<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
			  </div>
			  <div class="panel-body">

				<div class="tabellaporan"> <!--Tabel Laporan (tanah)-->
				

				  <h4 class="heading">
					Tanah
				  </h4>

<form id="hapusSubmit" action="'.$aksi_tanah.'hapus" method="POST">
	<input type="hidden" id="hapus_id" name="id" value="">
</form>

				  <table class="table table-bordered table-highlight">
					<thead>
					  <tr >
						<th rowspan="3">No</th>
						<th rowspan="3">Jenis/Nama Barang</th>
						<th colspan="2" style="text-align: center;">Nomor</th>
						<th rowspan="3">Luas (m2)</th>
						<th rowspan="3">Tahun Pengadaan</th
						>
						<th rowspan="3">Letak/ Alamat</th>
						<th colspan="3" style="text-align: center;">Status Tanah</th>
						<th rowspan="3">Penggunaan</th>
						<th rowspan="3">Asal-Usul</th>
						<th rowspan="3">Harga</th>
						<th rowspan="3"> Keterangan</th>
						<th rowspan="3">Aksi</th>
					  </tr>

					   <tr class="headingtable2">
						 
						 <td rowspan="2">Kode Barang</td>                       
						 <td rowspan="2">Register</td>
						 
						 <td rowspan="2">Hak</td>
						 <td colspan="2" style="text-align: center;">Sertifikat</td>
						 
					   </tr>


					   <tr class="headingtable2">
						 
						 <td>Tanggal</td>                       
						 <td>Nomor</td>
						
						 
					   </tr>
					   
					   <tr class="headingtable3" >
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>7</td>
						<td>8</td>
						<td>9</td>
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td>14</td>
						<td>&nbsp;</td>
					   </tr>

					</thead>
					<tbody>
		';

		$i = 1;
		$total = 0;
		$data = $input->getDataLengkap();
		foreach ($data as $data) {
			echo '
					<tr>
						<td>'.$i.'</td>
						<td>'.$data['jenis_barang'].'</td>
						<td>'.$data['kode_barang'].'</td>
						<td>'.$data['register'].'</td>
						<td>'.$data['luas_tanah'].'</td>
						<td>'.$data['tanggal_beli'].'</td>
						<td>'.$data['alamat'].'</td>
						<td>'.$data['hak'].'</td>
						<td>'.$data['no_sertifikat'].'</td>
						<td>'.$data['tanggal_sertifikat'].'</td>
						<td>'.$data['penggunaan'].'</td>
						<td>'.$data['asal_usul'].'</td>
						<td>'.$data['harga'].'</td>
						<td>'.$data['keterangan'].'</td>
						<td><a href="'.ROOT.'edit?tab=tanah">Edit</a> | <a href="#" onclick="hapusData(\''.$data['id'].'\')">Hapus</a></td>
					</tr>
			';
			$i++;
			$total += $data['harga'];
		}

		echo '

					  <tr class="jumlahtabel">
					   <td>&nbsp;</td>
					   <td colspan="11" style="text-align: center;">JUMLAH ASET TETAP (TANAH)</td>
					   <td>'.$total.'</td>
					   <td></td>
					   <td></td>
						
					  </tr>
					  <tr>
					   
					  </tr>
					  <tr>
						
					  </tr>
					</tbody>
				  </table>

				  
				</div > <!--Tabel Laporan (Tanah)-->

				<br><br>

				<div class="tabellaporan "> <!--Tabel Laporan (Peralatan dan Mesin)-->
				

				  <h4 class="heading">
					Peralatan dan Mesin
				  </h4>

				  <table class="table table-bordered table-highlight ">
					<thead >
					  <tr >
						<th rowspan="2">No</th>
						<th rowspan="2">Kode Barang</th>
						<th rowspan="2">Jenis/Nama Barang</th>
						<th rowspan="2">No. Register</th>
						<th rowspan="2">Merek/Tipe</th
						><th rowspan="2">Ukuran/CC</th>
						<th rowspan="2">Bahan</th>
						<th rowspan="2">Tahun Pembelian</th>
						<th colspan="5" style="text-align: center;">Nomor</th>
						<th rowspan="2">Asal-Usul</th>
						<th rowspan="2">Harga</th>
						<th rowspan="2">Keterangan</th>
						<th rowspan="2">Jumlah Barang</th>
						<th rowspan="2">Aksi</t
						  h>
					  </tr>

					   <tr class="headingtable2">
						 <td>Pabrik</td>
						 <td>Rangka</td>
						 <td>Mesin</td>
						 <td>Polisi</td>
						 <td>BPKB</td>
					   </tr>
					   <tr class="headingtable3" >
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>7</td>
						<td>8</td>
						<td>9</td>
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td>14</td>
						<td>15</td>
						<td>16</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					   </tr>

					</thead>
					<tbody>
					  <tr>
					   <td>1</td>
					   <td>0206020128</td>                     
					   <td>Kursi Tamu</td>
					   <td>0001</td>
					   <td>&nbsp;</td>
					   <td>&nbsp;</td>
					   <td>Campuran</td>
					   <td>2008</td>
					   <td>&nbsp;</td>
					   <td>&nbsp;</td>
					   <td>&nbsp;</td>
					   <td>&nbsp;</td>
					   <td>&nbsp;</td>
					   <td>APBD</td>
					   <td> 7.800.000 </td>
					   <td>Dikuasai Pemda</td>
					   <td>&nbsp;</td>
					   <td><a href="">Edit</a></td>
					 </tr>

					  <tr class="jumlahtabel">
					   <td>&nbsp;</td>
					   <td colspan="13" style="text-align: center;">JUMLAH TOTAL ASET TETAP (PERALATAN DAN MESIN)</td>
					   <td> 7.800.000 </td>
					   <td></td>
					   <td>&nbsp;</td>
					   <td></td>
						
					  </tr>
					  <tr>
					   
					  </tr>
					  <tr>
						
					  </tr>
					</tbody>
				  </table>

				  
				</div> <!--Tabel Laporan (Peralatan dan Mesin)-->

				<br><br>

				<div class="tabellaporan "> <!--Tabel Laporan (Gedung dan Bangunan)-->
				

				  <h4 class="heading">
					Gedung dan Bangunan
				  </h4>

				  <table class="table table-bordered table-highlight ">
					<thead >
					  <tr >
						<th rowspan="2">No</th>
						<th rowspan="2">Jenis/Nama Barang</th>
						<th colspan="2" style="text-align: center;">Nomor</th>
						
						<th rowspan="2"> Kondisi Bangunan</th>
						<th colspan="2" style="text-align: center;">Konstruksi Bangunan</th
						><th rowspan="2">Luas Lantai </th>
						<th rowspan="2">Alamat</th>
						<th colspan="2" style="text-align: center;">Dokumen</th>
						<th rowspan="2">Luas M2</th>
						<th rowspan="2">Status Tanah</th>
						<th rowspan="2">No. Kode Tanah</th>
						<th rowspan="2">Asal-Usul</th>
						<th rowspan="2">Harga</th>
						<th rowspan="2">Keterangan</th>
						<th rowspan="2">Aksi</th>
					  </tr>

					   <tr class="headingtable2">
						 <td>Kode Barang</td>
						 <td>Register</td>
						 <td>Bertingkat/ Tidak</td>
						 <td>Beton/ Tidak</td>
						 <td>Tanggal</td>
						 <td>nomor</td>
						 
					   </tr>
					   <tr class="headingtable3" >
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>7</td>
						<td>8</td>
						<td>9</td>
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td>14</td>
						<td>15</td>
						<td>16</td>
						<td>17</td>
						<td></td>
					   </tr>

					</thead>
					<tbody>
					  <tr>
					   <td>1</td>
					   <td>Bangunan Kantor Desa</td>                     
					   <td>0311010101</td>
					   <td>0001</td>
					   <td>KB</td>
					   <td>Tidak</td>
					   <td>Beton</td>
					   <td>70</td>
					   <td>Pincara</td>
					   <td>2008</td>
					   <td>APBD</td>
					   <td>&nbsp;</td>
					   <td>70</td>
					   <td>Milik</td>
					   <td>APBD</td>
					   <td>133000000</td>
					   <td>&nbsp;</td>
					   <td><a href="">Edit</a></td>
					 </tr>

					  <tr class="jumlahtabel">
					   <td>&nbsp;</td>
					   <td colspan="14" style="text-align: right;">JUMLAH TOTAL ASET TETAP (PERALATAN DAN MESIN)</td>
					   <td> 7.800.000 </td>
					   
					   <td></td>
					   <td>&nbsp;</td>
					  </tr>
					  <tr>
					   
					  </tr>
					  <tr>
						
					  </tr>
					</tbody>
				  </table>

				</div> <!--Tabel Laporan (Gedung dan Bangunan)-->

				<br><br>

				<div class="tabellaporan "> <!--Tabel Laporan (JALAN, IRIGASI DAN JARINGAN)-->
				

				  <h4 class="heading">
					JALAN, IRIGASI DAN JARINGAN
				  </h4>

				  <table class="table table-bordered table-highlight ">
					<thead >
					  <tr >
						<th rowspan="2">No</th>
						<th rowspan="2">Jenis/Nama Barang</th>
						<th colspan="2" style="text-align: center;">Nomor</th>
						
						<th rowspan="2"> Konstruksi</th>
						<th rowspan="2">Panjang</th>
						<th rowspan="2">Lebar </th>
						<th rowspan="2">Luas</th>
						<th rowspan="2">Lokasi</th>
						<th colspan="2" style="text-align: center;">Dokumen</th>
						<th rowspan="2">Status Tanah</th>
						<th rowspan="2">No. Kode Tanah</th>
						<th rowspan="2">Asal-Usul</th>
						<th rowspan="2">Harga</th>
						<th rowspan="2">Kondisi</th>
						<th rowspan="2">Keterangan</th>
						<th rowspan="2">Aksi</th>
					  </tr>

					   <tr class="headingtable2">
						 <td>Kode Barang</td>
						 <td>Register</td>
						 <td>Tanggal</td>
						 <td>nomor</td>
						 
					   </tr>
					   <tr class="headingtable3" >
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>7</td>
						<td>8</td>
						<td>9</td>
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td>14</td>
						<td>15</td>
						<td>16</td>
						<td>17</td>
						<td></td>
					   </tr>

					</thead>
					<tbody>
					  <tr>
					   <td>1</td>
					   <td>Bangunan Kantor Desa</td>                     
					   <td>0311010101</td>
					   <td>0001</td>
					   <td>KB</td>
					   <td>200 km</td>
					   <td>3 m</td>
					   <td>70 m</td>
					   <td>Pincara</td>
					   <td>2008</td>
					   <td>APBD</td>
					   <td>&nbsp;</td>
					   <td>70</td>
					   <td>Milik</td>
					   <td>APBD</td>
					   <td>133000000</td>
					   <td>&nbsp;</td>
					   <td><a href="">Edit</a></td>
					 </tr>

					  <tr class="jumlahtabel">
					   <td>&nbsp;</td>
					   <td colspan="14" style="text-align: right;">JUMLAH TOTAL ASET TETAP (JALAN, IRIGASI, DAN JARINGAN)</td>
					   <td> 133000000 </td>
					   <td>&nbsp;</td>
					   
					   <td></td>
						
					  </tr>
					  <tr>
					   
					  </tr>
					  <tr>
						
					  </tr>
					</tbody>
				  </table>

				  
				</div> <!--Tabel Laporan (JALAN, IRIGASI DAN JARINGAN)-->

				<br><br>

				<div class="tabellaporan "> <!--Tabel Laporan (ASET TETAP LAINNYA)-->
				

				  <h4 class="heading">
					ASET TETAP LAINNYA
				  </h4>

				  <table class="table table-bordered table-highlight ">
					<thead >
					  <tr >
						<th rowspan="2">No</th>
						<th rowspan="2">Jenis/Nama Barang</th>
						<th colspan="2" style="text-align: center;">Nomor</th>
					   
						<th colspan="2" style="text-align: center;">Buku Perpustakaan</th>
						<th colspan="3" style="text-align: center;">Barang Bercorak Kesenian/ Kebudayaan</th>
						<th colspan="2" style="text-align: center;">Hewan/Ternak dan Tumbuhan</th>
						<th rowspan="2">Tahun Cetak /
						   Pembelian</th>
						<th rowspan="2">Jumlah</th>
						<th rowspan="2">Asal-Usul</th>
						<th rowspan="2">Harga</th>
						<th rowspan="2">Keterangan</th>
						<th rowspan="2">Aksi</th>
					  </tr>

					   <tr class="headingtable2">
						 <td>Kode Barang</td>
						 <td>Register</td>
						 <td>Judul/Pencipta</td>
						 <td>Spesifikasi</td>
						 <td>Asal Daerah</td>
						 <td>Pencipta</td>
						 <td>Bahan</td>
						 <td>Jenis</td>
						 <td>ukuran</td>
						 
					   </tr>
					   <tr class="headingtable3" >
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>7</td>
						<td>8</td>
						<td>9</td>
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td>14</td>
						<td>15</td>
						<td>16</td>
						<td>17</td>
					   </tr>

					</thead>
					<tbody>
					  <tr>
					   <td>1</td>
					   <td>Buku </td>                     
					   <td>0311010101</td>
					   <td>0001</td>
					   <td>Aku ?</td>
					   <td>Baru</td>
					   <td>Makassar</td>
					   <td>Dg. Gaga</td>
					   <td>Kertas</td>
					   <td>Jilid</td>
					   <td>30x20</td>
					   <td>2015</td>
					   <td>5</td>
					   <td>Donasi</td>
					   <td>150000</td>
					   <td>&nbsp;</td>
					   <td><a href="">Edit</a></td>
					 </tr>

					  <tr class="jumlahtabel">
					   <td>&nbsp;</td>
					   <td colspan="13" style="text-align: right;">JUMLAH TOTAL ASET TETAP (JALAN, IRIGASI, DAN JARINGAN)</td>
					   <td> 133000000 </td>
					   <td>&nbsp;</td>
					   <td>&nbsp;</td>
					  
						
					  </tr>
					  <tr>
					   
					  </tr>
					  <tr>
						
					  </tr>
					</tbody>
				  </table>

				  
				</div> <!--Tabel Laporan (ASET TETAP LAINNYA)-->

				<br><br>

				<div class="tabellaporan "> <!--Tabel Laporan (KONSTRUKSI DALAM PENGERJAAN)-->
				

				  <h4 class="heading">
					ASET TETAP LAINNYA
				  </h4>

				  <table class="table table-bordered table-highlight ">
					<thead >
					  <tr >
						<th rowspan="2">No</th>
						<th rowspan="2">Jenis/Nama Barang</th>
						<th rowspan="2">Bangunan</th>
						<th colspan="2" style="text-align: center;">Konstruksi Bangunan</th>

						<th rowspan="2">Luas</th>
						<th rowspan="2">Lokasi</th>

					   
						<th colspan="2" style="text-align: center;">Dokumen</th>
						<th rowspan="2">Tanggal Mulai</th>
						<th rowspan="2">Status Tanah</th>
						<th rowspan="2">No. Kode Tanah</th>
						<th rowspan="2">Asal-Usul</th>
						<th rowspan="2">Nilai Kontrak</th>
						<th rowspan="2">Keterangan</th>
						<th rowspan="2">Aksi</th>
					  </tr>

					   <tr class="headingtable2">
						 <td>Bertingkat/ Tidak</td>
						 <td>Beton/ Tidak</td>
						 <td>Tanggal</td>
						 <td>Nomor</td>
						 
						 
					   </tr>
					   <tr class="headingtable3" >
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>7</td>
						<td>8</td>
						<td>9</td>
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td>14</td>
						<td>15</td>
						<td>16</td>
					   </tr>

					</thead>
					<tbody>
					  <tr>
					   <td>1</td>
					   <td>Bangunan Kantor Desa</td>                     
					  
					   <td>P</td>
					   
					   <td>Tidak</td>
					   <td>Beton</td>
					   <td>70</td>
					   <td>Pincara</td>
					   <td>12/6/2016</td>
					   <td>002</td>
					   <td>12/6/2016</td>
					   <td>Milik</td>
					   <td>90</td>
					   <td>APBD</td>
					   <td>133000000</td>
					   <td>&nbsp;</td>
					   <td><a href="">Edit</a></td>
					 </tr>

					  <tr class="jumlahtabel">
					   <td>&nbsp;</td>
					   <td colspan="12" style="text-align: right;">JUMLAH KONSTRUKSI DALAM PENGERJAAN</td>
					   <td> 133000000 </td>
					   <td>&nbsp;</td>
					   <td>&nbsp;</td>
					  
						
					  </tr>
					  <tr>
					   
					  </tr>
					  <tr>
						
					  </tr>
					</tbody>
				  </table>

				  
				</div> <!--Tabel Laporan (KONSTRUKSI DALAM PENGERJAAN)-->




				



				
						  
			  </div>
		   </div>





	  </div>





			<h4>Laporan Rekap Desa </h4>
			<hr />
			<div class="list-group">

			  <a href="javascript:;" class="list-group-item">
				<i class="fa fa-envelope"></i> 
				&nbsp;&nbsp;<strong>Kirim</strong> Rekapitulasi
			  </a>

			  

			  <a href="javascript:;" class="list-group-item">
				<i class="fa fa-print"></i>
				&nbsp;&nbsp;<strong>Print</strong> Rekapitulasi
			  </a>

			  <a href="javascript:;" class="list-group-item">
				<i class="fa fa-copy"></i>
				&nbsp;&nbsp;<strong>Simpan</strong> Rekapitulasi
			  </a>

			  <a href="javascript:;" class="list-group-item">
				<i class="fa fa-times"></i>
				&nbsp;&nbsp;<strong>Hapus</strong> Rekapitulasi
			  </a>

			</div>
	  


  <style>
  .panel-heading span {
      margin-top: -20px;
      font-size: 15px;
  }
  .row {
      margin-top: 40px;
      padding: 0 10px;
  }
  .clickable {
      cursor: pointer;
  }

  .headingtable2{
    font-weight: bold;
    font-size: 11px;
    border-color: #eee;    
    background-color: rgba(224, 209, 209, 0.48) !important;
  }

  .headingtable3{
    text-align: center;
    font-size: 9px;
  }

  .jumlahtabel{
    text-align: center;
    font-size: 16px;
    font-style: bold;
  }

  .tabellaporan{
    overflow: auto;
    zoom:80%;
  }


  </style>

  

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
