<?php
	if(isset($method)):
		date_default_timezone_set('Asia/Makassar');
		$aksi_tanah = ROOT."controllers/input_tanah_control.php?model=tanah&method=";
		$aksi_peralatan = ROOT."controllers/input_peralatan_control.php?model=peralatan&method=";
		$aksi_gedung = ROOT."controllers/input_gedung_control.php?model=gedung&method=";
		$aksi_jalan = ROOT."controllers/input_jalan_control.php?model=jalan&method=";
		$aksi_asetlain = ROOT."controllers/input_asetlain_control.php?model=asetlain&method=";
		$aksi_konstruksi = ROOT."controllers/input_konstruksi_control.php?model=konstruksi&method=";

		$tanah_tab = (isset($_GET['tab']) AND $_GET['tab'] == "tanah")? 'active':'';
		$peralatan_tab = (isset($_GET['tab']) AND $_GET['tab'] == "peralatan")? 'active':'';
		$gedung_tab = (isset($_GET['tab']) AND $_GET['tab'] == "gedung")? 'active':'';
		$jalan_tab = (isset($_GET['tab']) AND $_GET['tab'] == "jalan")? 'active':'';
		$asetlain_tab = (isset($_GET['tab']) AND $_GET['tab'] == "asetlain")? 'active':'';
		$konstruksi_tab = (isset($_GET['tab']) AND $_GET['tab'] == "konstruksi")? 'active':'';

		switch ($method) {
			default:
				include "404.php";
				break;

			case '':
				echo '

					<div class="content-header">
						<h2 class="content-header-title">Pemasukan Data Aset Desa</h2>
						<ol class="breadcrumb">
							<li><a href="'.ROOT.'">Home</a></li>
							<li class="active">Pengadaan dan Pendataan</li>
							<!-- <li class="active">Tanah</li> -->
						</ol>
					</div> <!-- /.content-header -->
					<div class="row">
						<div class="col-md-3 col-sm-4">
							<ul id="myTab" class="nav nav-pills nav-stacked">
								<li class="'.$tanah_tab.'">
									<a href="#tanah-tab" data-toggle="tab">
										<i class="fa fa-map-marker"></i> &nbsp;&nbsp;Tanah
									</a>
								</li>
								<li class="'.$peralatan_tab.'">
									<a href="#peralatan-tab" data-toggle="tab">
										<i class="fa fa-gears"></i> &nbsp;&nbsp;Peralatan dan Mesin
									</a>
								</li>
								<li class="'.$gedung_tab.'">
									<a href="#gedung-tab" data-toggle="tab">
										<i class="fa fa-hospital-o"></i> &nbsp;&nbsp;Gedung dan Bangunan
									</a>
								</li>
								<li class="'.$jalan_tab.'">
									<a href="#jalan-tab" data-toggle="tab">
										<i class="fa fa-exchange"></i> &nbsp;&nbsp;Jalan, Irigasi, dan Jaringan
									</a>
								</li>
								<li class="'.$asetlain_tab.'">
									<a href="#asetlain-tab" data-toggle="tab">
										<i class="fa fa-picture-o"></i> &nbsp;&nbsp;Aset Tetap Lainnya
									</a>
								</li>
								<li class="'.$konstruksi_tab.'">
									<a href="#konstruksi-tab" data-toggle="tab">
										<i class="fa fa-wrench"></i> &nbsp;&nbsp;Konstruksi dalam Pengerjaan
									</a>
								</li>
							</ul>
							<br/>
						</div> <!-- /.col -->

						<!-- ................................Form Input............................... -->

						<div class="col-md-9 col-sm-8">
							<div class="tab-content stacked-content">
								<!-- /.tab-tanah --> 
								<div class="tab-pane fade in '.$tanah_tab.'" id="tanah-tab">
									<h3 class="">Pendataan Aset Tanah Desa</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
									<hr/><br/>

									<form enctype="multipart/form-data" action="'.$aksi_tanah.'tambah" method="POST" class="form-horizontal">
										<div class="form-group">
											<label class="col-md-3">Jenis/Nama Barang</label>
											<div class="col-sm-7">
												<select id="s2_basic" class="form-control" name="jenis_barang" onclick="getKodeBarang(\'tanah\', this.value)">
													<option>Pilih Jenis Barang:</option>
				';

				$first1 = true;
				$data_tanah = $input->getKodeBarangByKB("01");
				foreach ($data_tanah as $data_tanah) {
					if ($data_tanah['kb_2'] != '00' AND $data_tanah['kb_3'] != '00' AND $data_tanah['kb_4'] != '00') {
						if ($data_tanah['kb_5'] == '000') {
							if ($first1) {
								echo '
													<optgroup label="'.$data_tanah['nama_barang'].'">
								';
								$first1 = false;
							} else {
								echo '
													</optgroup>
													<optgroup label="'.$data_tanah['nama_barang'].'">
								';
							}
						} else {
							echo '
														<option value="'.$data_tanah['kode_barang'].'">'.$data_tanah['nama_barang'].'</option>
							';
						}
					}
				}

				echo '
													</optgroup>
												</select>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Kode Barang</label>
											<div class="col-md-7">
												<input type="number" id="kodetanah" name="kode_barang" placeholder="-" class="form-control" readonly/>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Register</label>
											<div class="col-md-7">
												<input type="number" name="register" placeholder="0001" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Luas</label>
											<div class="col-md-7">
												<div class="input-group">
													<input type="text" name="luas_tanah" placeholder="Luas Tanah" class="form-control" />
													<span class="input-group-addon">m<sup>2</sup></span>
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Tanggal Beli </label>
											<div class="col-md-7">
												<div id="dp-ex-1" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
													<input class="form-control" type="text" name="tanggal_beli" value="'.date('d-m-Y').'" >
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												</div>
												<span class="help-block">dd-mm-yyyy</span>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Letak/Alamat</label>
											<div class="col-md-7">
												<input type="text" name="alamat" placeholder="Nama Jalan atau Alamat" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Hak</label>
											<div class="col-md-7">
												<input type="text" name="hak" placeholder="Hak Milik Tanah" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">No. Sertifikat </label>
											<div class="col-md-7">
												<input type="text" name="no_sertifikat" placeholder="No. Sertifikat Tanah" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Tanggal Sertifikat </label>
											<div class="col-md-7">
												<div id="dp-ex-2" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
													<input class="form-control" type="text" name="tanggal_sertifikat" />
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												</div> <!--dp-->
											</div><!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Penggunaan</label>
											<div class="col-md-7">
												<input type="text" name="penggunaan" placeholder="Penggunaan Aset Tanah" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Asal Usul </label>
											<div class="col-md-7">
												<input type="text" name="asal_usul" placeholder="Asal Usul" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Harga </label>
											<div class="col-md-7">
												<div class="input-group">
													<span class="input-group-addon">Rp</span>
													<input class="form-control" id="harga" name="harga" type="number" placeholder="Harga Aset Tanah">
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Keterangan </label>
											<div class="col-md-7">
												<input type="text" name="keterangan" placeholder="Keterangan Tambahan" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<br/>
										<div class="form-group">
											<div class="col-md-7 col-md-push-3">
												<button type="submit" name="tambah" class="btn btn-primary">Masukkan Data</button>&nbsp;
												<button type="reset" class="btn btn-default">Batalkan</button>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
									</form>
								</div> <!-- /.tab-tanah --> 

								<!-- /.tab-peralatan -->
								<div class="tab-pane fade in '.$peralatan_tab.'" id="peralatan-tab">
									<h3 class="">Pendataan Aset Peralatan dan Mesin </h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
									<hr/><br/>

									<form enctype="multipart/form-data" action="'.$aksi_peralatan.'tambah" method="POST" class="form-horizontal">
										<div class="form-group">
											<label class="col-md-3">Jenis/Nama Barang</label>
											<div class="col-sm-7">
												<select id="s3_basic" class="form-control" name="jenis_barang" onclick="getKodeBarang(\'peralatan\', this.value)">
													<option>Pilih Jenis Barang:</option>
				';

				$first2 = true;
				$data_peralatan = $input->getKodeBarangByKB("02");
				foreach ($data_peralatan as $data_peralatan) {
					if ($data_peralatan['kb_2'] != '00' AND $data_peralatan['kb_3'] != '00' AND $data_peralatan['kb_4'] != '00') {
						if ($data_peralatan['kb_5'] == '000') {
							if ($first2) {
								echo '
													<optgroup label="'.$data_peralatan['nama_barang'].'">
								';
								$first2 = false;
							} else {
								echo '
													</optgroup>
													<optgroup label="'.$data_peralatan['nama_barang'].'">
								';
							}
						} else {
							echo '
														<option value="'.$data_peralatan['kode_barang'].'">'.$data_peralatan['nama_barang'].'</option>
							';
						}
					}
				}

				echo '
													</optgroup>
												</select>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Kode Barang</label>
											<div class="col-md-7">
												<input type="number" id="kodeperalatan" name="kode_barang" placeholder="-" class="form-control" readonly/>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Register</label>
											<div class="col-md-7">
												<input type="number" name="register" placeholder="Nomor Register" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Merek / Tipe</label>
											<div class="col-md-7">
												<input type="text" name="merek" placeholder="Merek atau Tipe Peralatan" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Ukuran / CC</label>
											<div class="col-md-7">
												<input type="text" name="ukuran" placeholder="Ukuran Aset" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Bahan</label>
											<div class="col-md-7">
												<input type="text" name="bahan" placeholder="Bahan" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Tanggal Beli </label>
											<div class="col-md-7">
												<div id="dp-ex-3" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
													<input class="form-control" type="text" name="tanggal_beli"  />
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												</div>
												<span class="help-block">dd-mm-yyyy</span>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Nomor </label>
											<div style="col-md-7 col-sm-11">
												<div style="width:14.45%; float:left; padding-left:15px; padding-right:10px;">
													<input type="text" name="no_pabrik" placeholder="Pabrik" class="form-control" />
												</div> <!-- /.col -->
												<div style="width:14.45%; float:left; padding-right:10px;">
													<input type="text" name="no_rangka" placeholder="Rangka" class="form-control" />
												</div> <!-- /.col -->
												<div style="width:14.45%; float:left; padding-right:10px;">
													<input type="text" name="no_mesin" placeholder="Mesin" class="form-control" />
												</div> <!-- /.col -->
												<div style="width:14.45%; float:left; padding-right:10px;">
													<input type="text" name="no_polisi" placeholder="Polisi" class="form-control" />
												</div> <!-- /.col -->
											</div>
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Asal Usul </label>
											<div class="col-md-7">
												<input type="text" name="asal_usul" placeholder="Asal Usul Pengadaan" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Harga </label>
											<div class="col-md-7">
												<div class="input-group">
													<span class="input-group-addon">Rp</span>
													<input class="form-control" id="harga" name="harga" type="number">
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Keterangan </label>
											<div class="col-md-7">
												<input type="text" name="keterangan" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->

										<div class="row">
											<label class="col-md-3">Gambar</label>
											<div class="col-sm-4">
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
														<img src="'.ROOT.'assets/img/noimage.jpg" alt="Placeholder" />
													</div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													<div>
														<span class="btn btn-default btn-file">
														<span class="fileupload-new">Select image</span>
														<span class="fileupload-exists">Change</span><input type="file" name="foto" /></span>
														<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
													</div>
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.row -->  
										<br/><br/>
										<div class="form-group">
											<div class="col-md-7 col-md-push-3">
												<button type="submit" name="tambah" class="btn btn-primary">Masukkan Data</button>&nbsp;
												<button type="reset" class="btn btn-default">Batalkan</button>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
									</form>
								</div> <!-- /.tab-peralatan --> 

								<!-- /.tab-gedung -->
								<div class="tab-pane fade in '.$gedung_tab.'" id="gedung-tab">
									<h3 class="">Pendataan Aset Gedung dan Bangunan Desa</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
									<hr/><br/>

									<form enctype="multipart/form-data" action="'.$aksi_gedung.'tambah" method="POST" class="form-horizontal">
										<div class="form-group">
											<label class="col-md-3">Jenis/Nama Barang</label>
											<div class="col-sm-7">
												<select id="s4_basic" class="form-control" name="jenis_barang" onclick="getKodeBarang(\'gedung\', this.value)">
													<option>Pilih Jenis Barang:</option>
				';

				$first3 = true;
				$data_gedung = $input->getKodeBarangByKB("03");
				foreach ($data_gedung as $data_gedung) {
					if ($data_gedung['kb_2'] != '00' AND $data_gedung['kb_3'] != '00' AND $data_gedung['kb_4'] != '00') {
						if ($data_gedung['kb_5'] == '000') {
							if ($first3) {
								echo '
													<optgroup label="'.$data_gedung['nama_barang'].'">
								';
								$first3 = false;
							} else {
								echo '
													</optgroup>
													<optgroup label="'.$data_gedung['nama_barang'].'">
								';
							}
						} else {
							echo '
														<option value="'.$data_gedung['kode_barang'].'">'.$data_gedung['nama_barang'].'</option>
							';
						}
					}
				}

				echo '
													</optgroup>
												</select>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Kode Barang</label>
											<div class="col-md-7">
												<input type="number" id="kodegedung" name="kode_barang" placeholder="-" class="form-control" readonly/>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Register</label>
											<div class="col-md-7">
												<input type="number" name="register" placeholder="Nomor Register" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Kondisi Bangunan</label>
											<div class="col-md-7">
												<label class="radio-inline">
													<input type="radio" name="kondisi" class="" value="Baru" checked> Baru
												</label>
												<label class="radio-inline">
													<input type="radio" name="kondisi" class="" value="KB"> KB
												</label>
												<label class="radio-inline">
													<input type="radio" name="kondisi" class="" value="Renovasi Baru"> Renovasi Baru
												</label>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Konstruksi Bangunan</label>
											<div class="col-md-7">
												<label class="checkbox-inline">
													<input type="checkbox" id="inlineCheckbox1" class="" name="konstruksi[]" value="Bertingkat"> Bertingkat
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="inlineCheckbox1" class="" name="konstruksi[]" value="Beton"> Beton
												</label>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Luas Lantai</label>
											<div class="col-md-7">
												<div class="input-group">
													<input type="text" name="luas_lantai" placeholder="Luas Lantai" class="form-control" />
													<span class="input-group-addon">m<sup>2</sup></span>
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Letak/Alamat</label>
											<div class="col-md-7">
												<input type="text" name="alamat" placeholder="Jalan/Alamat Lokasi Gedung" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<br/>
										<div class="form-group">
											<label class="col-md-12">Dokumen Gedung</label>
											<label class="col-md-3"> &nbsp;&nbsp;1. Tanggal</label>
											<div class="col-md-7">
												<div id="dp-ex-4" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
													<input class="form-control" type="text" name="tanggal_beli" value="'.date('d-m-Y').'">
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												</div>
												<span class="help-block">dd-mm-yyyy</span>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">&nbsp;&nbsp;2. Nomor</label>
											<div class="col-md-7">
												<input type="number" name="no_dokumen" value="0001" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<br/>
										<div class="form-group">
											<label class="col-md-3">Luas Lahan</label>
											<div class="col-md-7">
												<div class="input-group">
													<input type="number" placeholder="Luas Lahan" name="luas_lahan" class="form-control" />
													<span class="input-group-addon">m<sup>2</sup></span>
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Status Tanah </label>
											<div class="col-md-7">
												<input type="text" name="status_tanah" placeholder="Status Kepemilikan Tanah Gedung" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Nomor Kode Tanah </label>
											<div class="col-md-7">
												<input type="text" name="no_sertifikat" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Asal Usul </label>
											<div class="col-md-7">
												<input type="text" name="asal_usul" placeholder="Asal Usul Dana Gedung" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Harga</label>
											<div class="col-md-7">
												<div class="input-group">
													<span class="input-group-addon">Rp</span>
													<input class="form-control" id="harga" name="harga" type="number">
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Keterangan </label>
											<div class="col-md-7">
												<input type="text" name="keterangan" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<br/>
										<div class="form-group">
											<div class="col-md-7 col-md-push-3">
												<button type="submit" name="tambah" class="btn btn-primary">Masukkan Data</button>&nbsp;
												<button type="reset" class="btn btn-default">Batalkan</button>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
									</form>
								</div> <!-- /.tab-gedung --> 

								<!-- /.tab-jalan -->
								<div class="tab-pane fade in '.$jalan_tab.'" id="jalan-tab">
									<h3 class="">Pendataan Aset Jalan, Irigasi dan Jaringan Desa</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
									<hr/><br/>

									<form enctype="multipart/form-data" action="'.$aksi_jalan.'tambah" method="POST" class="form-horizontal">
										<div class="form-group">
											<label class="col-md-3">Jenis/Nama Barang</label>
											<div class="col-sm-7">
												<select id="s5_basic" class="form-control" name="jenis_barang" onclick="getKodeBarang(\'jalan\', this.value)">
													<option>Pilih Jenis Barang:</option>
				';

				$first4 = true;
				$data_jalan = $input->getKodeBarangByKB("04");
				foreach ($data_jalan as $data_jalan) {
					if ($data_jalan['kb_2'] != '00' AND $data_jalan['kb_3'] != '00' AND $data_jalan['kb_4'] != '00') {
						if ($data_jalan['kb_5'] == '000') {
							if ($first4) {
								echo '
													<optgroup label="'.$data_jalan['nama_barang'].'">
								';
								$first4 = false;
							} else {
								echo '
													</optgroup>
													<optgroup label="'.$data_jalan['nama_barang'].'">
								';
							}
						} else {
							echo '
														<option value="'.$data_jalan['kode_barang'].'">'.$data_jalan['nama_barang'].'</option>
							';
						}
					}
				}

				echo '
													</optgroup>
												</select>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Kode Barang</label>
											<div class="col-md-7">
												<input type="number" id="kodejalan" name="kode_barang" placeholder="-" class="form-control" readonly/>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Register</label>
											<div class="col-md-7">
												<input type="number" name="register" placeholder="Nomor Register" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Konstruksi</label>
											<div class="col-md-7">
												<input type="text" name="konstruksi" placeholder="Jenis Konstruksi" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Panjang</label>
											<div class="col-md-7">
												<div class="input-group">
													<input type="text" name="panjang" placeholder="Panjang Konstruksi (km)" class="form-control" />
													<span class="input-group-addon">km</span>
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Lebar</label>
											<div class="col-md-7">
												<div class="input-group">
													<input type="text" name="lebar" placeholder="Lebar (m)" class="form-control" />
													<span class="input-group-addon">m</span>
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Luas</label>
											<div class="col-md-7">
												<div class="input-group">
													<input type="text" name="luas_tanah" placeholder="Luas Konstruksi (m2)"class="form-control" />
													<span class="input-group-addon">m<sup>2</sup></span>
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-12">Dokumen </label>
											<label class="col-md-3"> &nbsp;Tanggal </label>
											<div class="col-md-7">
												<div id="dp-ex-5" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
													<input class="form-control" type="text" name="tanggal_dokumen" placeholder="Tanggal Pada Dokumen" >
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												</div>
												<span class="help-block">dd-mm-yyyy</span>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">&nbsp;Nomor </label>
											<div class="col-md-7">
												<input type="text" name="no_dokumen" placeholder="Nomor Pada Dokumen" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<br/>
										<div class="form-group">
											<label class="col-md-3">Status Tanah</label>
											<div class="col-md-7">
												<input type="text" name="status_tanah" placeholder="Status Tanah" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Nomor Kode Tanah  </label>
											<div class="col-md-7">
												<input type="text" name="no_tanah" placeholder="Nomor Kode Tanah" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Asal Usul </label>
											<div class="col-md-7">
												<input type="text" name="asal_usul" value="" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Kondisi Bangunan</label>
											<div class="col-md-7">
												<label class="radio-inline">
													<input type="radio" name="kondisi" class="" value="Baru" checked> Baru
												</label>
												<label class="radio-inline">
													<input type="radio" name="kondisi" class="" value="KB"> KB
												</label>
												<label class="radio-inline">
													<input type="radio" name="kondisi" class="" value="Renovasi Baru"> Renovasi Baru
												</label>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Harga </label>
											<div class="col-md-7">
												<div class="input-group">
													<span class="input-group-addon">Rp</span>
													<input class="form-control" id="harga" name="harga" type="number">
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Keterangan </label>
											<div class="col-md-7">
												<input type="text" name="keterangan" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<br/>
										<div class="form-group">
											<div class="col-md-7 col-md-push-3">
												<button type="submit" name="tambah" class="btn btn-primary">Masukkan Data</button>&nbsp;
												<button type="reset" class="btn btn-default">Batalkan</button>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
									</form>
								</div> <!-- /.tab-jalan --> 

								<div class="tab-pane fade in '.$asetlain_tab.'" id="asetlain-tab">
									<h3 class="">Pendataan Aset Lain Desa</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
									<hr/><br/>

									<form enctype="multipart/form-data" action="'.$aksi_asetlain.'tambah" method="POST" class="form-horizontal">
										<div class="form-group">
											<label class="col-md-3">Jenis/Nama Barang</label>
											<div class="col-sm-7">
												<select id="s6_basic" class="form-control" name="jenis_barang" onclick="getKodeBarang(\'asetlain\', this.value)">
													<option>Pilih Jenis Barang:</option>
				';

				$first5 = true;
				$data_asetlain = $input->getKodeBarangByKB("05");
				foreach ($data_asetlain as $data_asetlain) {
					if ($data_asetlain['kb_2'] != '00' AND $data_asetlain['kb_3'] != '00' AND $data_asetlain['kb_4'] != '00') {
						if ($data_asetlain['kb_5'] == '000') {
							if ($first5) {
								echo '
													<optgroup label="'.$data_asetlain['nama_barang'].'">
								';
								$first5 = false;
							} else {
								echo '
													</optgroup>
													<optgroup label="'.$data_asetlain['nama_barang'].'">
								';
							}
						} else {
							echo '
														<option value="'.$data_asetlain['kode_barang'].'">'.$data_asetlain['nama_barang'].'</option>
							';
						}
					}
				}

				echo '
													</optgroup>
												</select>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Kode Barang</label>
											<div class="col-md-7">
												<input type="number" id="kodeasetlain" name="kode_barang" placeholder="-" class="form-control" readonly/>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Register</label>
											<div class="col-md-7">
												<input type="number" name="register" value="0001" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<ul id="myTab2" class="nav nav-pills">
											<li><a href="#Perpustakaan" data-toggle="tab" onclick="setJalur(\'1\')">Buku Perpustakaan</a></li>
											<li><a href="#kesenian" data-toggle="tab" onclick="setJalur(\'2\')">Barang Bercorak Kesenian/Kebudayaan</a></li>
											<li><a href="#ternak" data-toggle="tab" onclick="setJalur(\'3\')">Hewan/Ternak dan Tumbuhan</a></li>
										</ul>
										<input type="hidden" id="jalur" name="jalur" value="">
										<div id="myTab2Content" class="tab-content">
											<div class="tab-pane fade" id="Perpustakaan">
												<div class="form-group">
													<label class="col-md-12">Buku Perpustakaan</label>
													<label class="col-md-3"> &nbsp;1. Judul/Pencipta</label>
													<div class="col-md-7">
														<input type="text" name="judul_buku" placeholder="Judul Atau Pencipta" class="form-control" />
													</div> <!-- /.col -->
												</div> <!-- /.form-group -->
												<div class="form-group">
													<label class="col-md-3">&nbsp;2. Spesifikasi </label>
													<div class="col-md-7">
														<input type="text" name="spesifikasi_buku" placeholder="Spesifikasi Buku" class="form-control" />
													</div> <!-- /.col -->
												</div> <!-- /.form-group -->
											</div>
											<div class="tab-pane fade" id="kesenian">
												<div class="form-group">
													<label class="col-md-12">Barang Bercorak Kesenian/Kebudayaan</label>
													<label class="col-md-3"> &nbsp;1. Asal Daerah</label>
													<div class="col-md-7">
														<input type="text" name="asal_daerah" placeholder="Asal Daerah Kesenian/Kebudayaan" class="form-control" />
													</div> <!-- /.col -->
												</div> <!-- /.form-group -->
												<div class="form-group">
													<label class="col-md-3">&nbsp;2. Pencipta </label>
													<div class="col-md-7">
														<input type="text" name="pencipta_kesenian" placeholder="Pencipta" class="form-control" />
													</div> <!-- /.col -->
												</div> <!-- /.form-group -->
												<div class="form-group">
													<label class="col-md-3">&nbsp;3. Bahan </label>
													<div class="col-md-7">
														<input type="text" name="bahan_kesenian" placeholder="Bahan Kesenian" class="form-control" />
													</div> <!-- /.col -->
												</div> <!-- /.form-group -->
											</div>
											<div class="tab-pane fade" id="ternak">
												<div class="form-group">
													<label class="col-md-12">Hewan/Ternak dan Tumbuhan</label>
													<label class="col-md-3"> &nbsp;1. Jenis</label>
													<div class="col-md-7">
														<input type="text" name="jenis" placeholder="Jenis" class="form-control" />
													</div> <!-- /.col -->
												</div> <!-- /.form-group -->
												<div class="form-group">
													<label class="col-md-3">&nbsp;2. Ukuran </label>
													<div class="col-md-7">
														<input type="text" name="ukuran" placeholder="Ukuran" class="form-control" />
													</div> <!-- /.col -->
												</div> <!-- /.form-group -->
											</div>
										</div>
										<br/>
										<div class="form-group">
											<label class="col-md-3">Jumlah</label>
											<div class="col-md-7">
												<input type="number" name="jumlah" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Tahun Cetak/Pembelian </label>
											<div class="col-md-7">
												<div id="dp-ex-6" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
													<input class="form-control" type="text" name="tanggal_cetak" />
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												</div>
												<span class="help-block">dd-mm-yyyy</span>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Asal Usul Cara Perolehan</label>
											<div class="col-md-7">
												<input type="text" name="asal_usul" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Harga</label>
											<div class="col-md-7">
												<div class="input-group">
													<span class="input-group-addon">Rp</span>
													<input class="form-control" id="harga" name="harga" type="number">
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Keterangan </label>
											<div class="col-md-7">
												<input type="text" name="keterangan" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="row">
											<label class="col-md-3">Gambar</label>
											<div class="col-sm-4">
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
														<img src="'.ROOT.'assets/img/noimage.jpg" alt="Placeholder" />
													</div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													<div>
														<span class="btn btn-default btn-file">
														<span class="fileupload-new">Select image</span>
														<span class="fileupload-exists">Change</span>
														<input type="file" name="foto" /></span>
														<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
													</div>
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.row -->
										<br/>
										<div class="form-group">
											<div class="col-md-7 col-md-push-3">
												<button type="submit" name="tambah" class="btn btn-primary">Masukkan Data</button>&nbsp;
												<button type="reset" class="btn btn-default">Batalkan</button>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
									</form>
								</div> <!-- /.tab-asetlain --> 

								<div class="tab-pane fade in '.$konstruksi_tab.'" id="konstruksi-tab">
									<h3 class="">Pendataan Aset yang Masih dalam Konstruksi dalam Pengerjaan</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
									<hr/><br/>

									<form enctype="multipart/form-data" action="'.$aksi_konstruksi.'tambah" method="POST" class="form-horizontal">
										<div class="form-group">
											<label class="col-md-3">Jenis/Nama Barang</label>
											<div class="col-sm-7">
												<select id="s7_basic" class="form-control" name="jenis_barang" onclick="getKodeBarang(\'konstruksi\', this.value)">
													<option value="06000000000" selected>Konstruksi dalam Pengerjaan</option>
				';

				$first6 = true;
				$data_konstruksi = $input->getKodeBarangByKB("06");
				foreach ($data_konstruksi as $data_konstruksi) {
					if ($data_konstruksi['kb_2'] != '00' AND $data_konstruksi['kb_3'] != '00' AND $data_konstruksi['kb_4'] != '00') {
						if ($data_konstruksi['kb_5'] == '000') {
							if ($first6) {
								echo '
													<optgroup label="'.$data_konstruksi['nama_barang'].'">
								';
								$first6 = false;
							} else {
								echo '
													</optgroup>
													<optgroup label="'.$data_konstruksi['nama_barang'].'">
								';
							}
						} else {
							echo '
														<option value="'.$data_konstruksi['kode_barang'].'">'.$data_konstruksi['nama_barang'].'</option>
							';
						}
					}
				}

				echo '
													</optgroup>
												</select>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Bangunan </label>
											<div class="col-md-7">
												<label class="radio-inline">
													<input type="radio" name="bangunan" class="" value="P" checked> P
												</label>
												<label class="radio-inline">
													<input type="radio" name="bangunan" class="" value="SP"> SP
												</label>
												<label class="radio-inline">
													<input type="radio" name="bangunan" class="" value="D"> D
												</label>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Konstruksi Bangunan</label>
											<div class="col-md-7">
												<label class="checkbox-inline">
													<input type="checkbox" id="inlineCheckbox1" class="" name="konstruksi[]" value="Bertingkat"> Bertingkat
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="inlineCheckbox1" class="" name="konstruksi[]" value="Beton"> Beton
												</label>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Luas</label>
											<div class="col-md-7">
												<div class="input-group">
													<input type="text" name="luas_konstruksi" placeholder="Luas Daerah Konstruksi" class="form-control" />
													<span class="input-group-addon">m<sup>2</sup></span>
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Letak/Alamat</label>
											<div class="col-md-7">
												<input type="text" name="alamat" placeholder="Letak Lokasi/Alamat" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-12">Dokumen Gedung</label>
											<label class="col-md-3"> &nbsp;&nbsp;1. Tanggal</label>
											<div class="col-md-7">
												<div id="dp-ex-7" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
													<input class="form-control" type="text" name="tanggal_dokumen" placeholder="00-00-0000">
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												</div>
												<span class="help-block">dd-mm-yyyy</span>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">&nbsp;&nbsp;2. Nomor</label>
											<div class="col-md-7">
												<input type="number" name="no_dokumen" value="0001" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<br/>
										<div class="form-group">
											<label class="col-md-3">Status Tanah </label>
											<div class="col-md-7">
												<input type="text" name="status_tanah" placeholder="Status Tanah" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Asal Usul Pembiayaan</label>
											<div class="col-md-7">
												<input type="text" name="asal_usul" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Nilai Kontrak </label>
											<div class="col-md-7">
												<div class="input-group">
													<span class="input-group-addon">Rp</span>
													<input class="form-control" id="harga" name="harga" type="number">
												</div>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<div class="form-group">
											<label class="col-md-3">Keterangan</label>
											<div class="col-md-7">
												<input type="text" name="keterangan" class="form-control" />
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
										<br/><br/>
										<div class="form-group">
											<div class="col-md-7 col-md-push-3">
												<button type="submit" name="tambah" class="btn btn-primary">Masukkan Data</button>&nbsp;
												<button type="reset" class="btn btn-default">Batalkan</button>
											</div> <!-- /.col -->
										</div> <!-- /.form-group -->
									</form>
								</div> <!-- /.tab-konstruksi --> 

							</div> <!-- /.tab-content -->
						</div> <!-- /.col -->
					</div> <!-- /.row -->

				';
				break;
		}
?>

<script type="text/javascript">
	function getKodeBarang(jenis, kode_barang) {
		switch (jenis) {
			case "tanah":
				document.getElementById("kodetanah").value = kode_barang;
				break;
			case "peralatan":
				document.getElementById("kodeperalatan").value = kode_barang;
				break;
			case "gedung":
				document.getElementById("kodegedung").value = kode_barang;
				break;
			case "jalan":
				document.getElementById("kodejalan").value = kode_barang;
				break;
			case "asetlain":
				document.getElementById("kodeasetlain").value = kode_barang;
				break;
			case "konstruksi":
				document.getElementById("kodekonstruksi").value = kode_barang;
				break;
		}
	}
</script>

<script type="text/javascript">
	function setJalur(nomor) {
		document.getElementById("jalur").value = nomor;
	}
</script>

<?php endif; ?>
