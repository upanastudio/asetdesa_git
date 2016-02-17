<?php include "../libs/path.php"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Beranda - Aset Desa </title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/bootstrap.min.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/plugins/select2/select2.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/plugins/datepicker/datepicker.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/plugins/icheck/skins/minimal/blue.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/plugins/fileupload/bootstrap-fileupload.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/target-admin.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/custom.css">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <div class="navbar">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-cogs"></i>
      </button>

      <a class="navbar-brand navbar-brand-image" href="<?php echo ROOT; ?>assets/index.html">
      <br>
        <p >Aset Desa Terpadu</p>
        
        <!--<img src="<?php echo ROOT; ?>assets/img/logo.png" alt="Site Logo">-->
      </a>

    </div> <!-- /.navbar-header -->

    <div class="navbar-collapse collapse">

      

      <ul class="nav navbar-nav noticebar navbar-left">

        <li class="dropdown">
          <a href="<?php echo ROOT; ?>assets/page-notifications.html" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell"></i>
            <span class="navbar-visible-collapsed">&nbsp;Notifications&nbsp;</span>
            <span class="badge">3</span>
          </a>

          <ul class="dropdown-menu noticebar-menu" role="menu">
            <li class="nav-header">
              <div class="pull-left">
                Pemberitahuan
              </div>

              
            </li>

            <li>
              <a href="<?php echo ROOT; ?>assets/page-notifications.html" class="noticebar-item">
                <span class="noticebar-item-image">
                  <i class="fa fa-cloud-upload text-success"></i>
                </span>
                <span class="noticebar-item-body">
                  <strong class="noticebar-item-title">Data Telah Terkirim</strong>
                  <span class="noticebar-item-text">20 Templates have been synced to the Mashon Demo instance.</span>
                  <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 12 minutes ago</span>
                </span>
              </a>
            </li>


            <li class="noticebar-menu-view-all">
              <a href="<?php echo ROOT; ?>assets/page-notifications.html">Lihat seluruh pemberitahuan</a>
            </li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="<?php echo ROOT; ?>assets/page-notifications.html" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope"></i>
            <span class="navbar-visible-collapsed">&nbsp;Messages&nbsp;</span>
          </a>

          <ul class="dropdown-menu noticebar-menu" role="menu">                
            <li class="nav-header">
              <div class="pull-left">
                Messages
              </div>

              <div class="pull-right">
                <a href="javascript:;">New Message</a>
              </div>
            </li>

            <li>
              <a href="<?php echo ROOT; ?>assets/page-notifications.html" class="noticebar-item">
                <span class="noticebar-item-image">
                  <img src="<?php echo ROOT; ?>assets/img/avatars/avatar-1-md.jpg" style="width: 50px" alt="">
                </span>

                <span class="noticebar-item-body">
                  <strong class="noticebar-item-title">New Message</strong>
                  <span class="noticebar-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>
                  <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 minutes ago</span>
                </span>
              </a>
            </li>

            <li>
              <a href="<?php echo ROOT; ?>assets/page-notifications.html" class="noticebar-item">
                <span class="noticebar-item-image">
                  <img src="<?php echo ROOT; ?>assets/img/avatars/avatar-2-md.jpg" style="width: 50px" alt="">
                </span>

                <span class="noticebar-item-body">
                  <strong class="noticebar-item-title">New Message</strong>
                  <span class="noticebar-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>
                  <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 5 hours ago</span>
                </span>
              </a>
            </li>

            <li class="noticebar-menu-view-all">
              <a href="<?php echo ROOT; ?>assets/page-notifications.html">View All Messages</a>
            </li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-exclamation-triangle"></i>
            <span class="navbar-visible-collapsed">&nbsp;Alerts&nbsp;</span>
          </a>

          <ul class="dropdown-menu noticebar-menu noticebar-hoverable" role="menu">                
            <li class="nav-header">
              <div class="pull-left">
                Alerts
              </div>
            </li>

            <li class="noticebar-empty">                  
              <h4 class="noticebar-empty-title">No alerts here.</h4>
              <p class="noticebar-empty-text">Check out what other makers are doing on Explore!</p>                
            </li>
          </ul>
        </li>

      </ul>

      <ul class="nav navbar-nav navbar-right">   

        <li>
          <a href="javascript:;">Panduan Aplikasi</a>
        </li>    
          
  

        <li class="dropdown navbar-profile">
          <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
            <img src="<?php echo ROOT; ?>assets/img/avatars/avatar-1-xs.jpg" class="navbar-profile-avatar" alt="">
            <span class="navbar-profile-label">sid@mydesa.co.id &nbsp;</span>
            <i class="fa fa-caret-down"></i>
          </a>

          <ul class="dropdown-menu" role="menu">

            <li>
              <a href="<?php echo ROOT; ?>assets/page-profile.html">
                <i class="fa fa-user"></i> 
                &nbsp;&nbsp;Profil Admin
              </a>
            </li>

            <li>
              <a href="<?php echo ROOT; ?>assets/page-settings.html">
                <i class="fa fa-cogs"></i> 
                &nbsp;&nbsp;Settings
              </a>
            </li>

            <li class="divider"></li>

            <li>
              <a href="<?php echo ROOT; ?>assets/account-login.html">
                <i class="fa fa-sign-out"></i> 
                &nbsp;&nbsp;Logout
              </a>
            </li>

          </ul>

        </li>

      </ul>

       



       

    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->

  <div class="mainbar">

  <div class="container">

    <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
      <i class="fa fa-bars"></i>
    </button>

    <div class="mainbar-collapse collapse">

      <ul class="nav navbar-nav mainbar-nav">

        <li class="active">
          <a href="<?php echo ROOT; ?>assets/index.html">
            <i class="fa fa-dashboard"></i>
            Rekap
          </a>
        </li>

        <li class="dropdown ">
          <a href="#about" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            <i class="fa fa-desktop"></i>
            Pengadaan dan  Pendataan
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">   
            <li><a href="<?php echo ROOT; ?>views/inputdatatotable.php#tanah-tab"><i class="fa fa-user nav-icon"></i> Tanah</a></li>
            <li><a href="<?php echo ROOT; ?>views/inputdatatotable.php#peralatan-tab"><i class="fa fa-bars nav-icon"></i> Peralatan dan Mesin</a></li>
            <li><a href="<?php echo ROOT; ?>views/inputdatatotable.php#gedung-tab"><i class="fa fa-asterisk nav-icon"></i> Gedung dan Bangunan</a></li>
            <li><a href="<?php echo ROOT; ?>views/inputdatatotable.php#jalan-tab"><i class="fa fa-tasks nav-icon"></i> Jalan, Irigasi Dan Jaringan</a></li>
            <li><a href="<?php echo ROOT; ?>views/inputdatatotable.php#asetlain-tab"><i class="fa fa-font nav-icon"></i> Aset Tetap Lainnya</a></li>
            <li><a href="<?php echo ROOT; ?>views/inputdatatotable.php#konstruksi-tab"><i class="fa fa-list-alt nav-icon"></i> Konstruksi dalam Pengerjaan</a></li>
            
            
          </ul>
        </li>

        <li class="dropdown ">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
          <i class="fa fa-align-left"></i> 
          Laporan 
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li class="dropdown-header">Laporan </li>

            <li>
              <a href="<?php echo ROOT; ?>assets/laporan.html">
              <i class="fa fa-location-arrow nav-icon"></i> 
              Laporan Penyusutan Nilai
              </a>
            </li>

            <li>
              <a href="<?php echo ROOT; ?>assets/laporan.html">
              <i class="fa fa-location-arrow nav-icon"></i> 
              Laporan Inventaris Barang
              </a>
            </li>
            <li>
              <a href="laporan.html">
              <i class="fa fa-location-arrow nav-icon"></i> 
              Mutasi Aset Desa
              </a>
            </li>

            <li class="divider"></li>

            <li class="dropdown-header">Neraca </li>

            <li>
              <a href="<?php echo ROOT; ?>assets/neraca.html">
              <i class="fa fa-table"></i> 
              &nbsp;&nbsp;Pertanggung Jawaban
              </a>
            </li>

            
          </ul>
        </li>

        <li class="dropdown ">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            <i class="fa fa-files-o"></i>
            Kirim Data
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li><a href="<?php echo ROOT; ?>assets/kirim.html"><i class="fa fa-user nav-icon"></i> Pengiriman Laporan</a></li>
            
          </ul>
        </li>  

      

      </ul>

    </div> <!-- /.navbar-collapse -->   

  </div> <!-- /.container --> 

</div> <!-- /.mainbar -->



<!--ISI -->

<div class="container">

  <div class="content">

      <div class="content-container">

      

      <div class="content-header">
        <h2 class="content-header-title">Pemasukan Data Aset Desa</h2>
        <ol class="breadcrumb">
          <li><a href="<?php echo ROOT; ?>assets/index.html">Home</a></li>
          <li><a href="javascript:;">Pengadaan dan Pendataan</a></li>
          <li class="active">Tanah</li>
        </ol>
      </div> <!-- /.content-header -->

      <?php if (isset($_GET['jalan'])) {
      	echo '<script>window.location.href="'.ROOT.'views/inputdatatotable.php#jalan-tab";</script>';
      } ?>

      <div class="row">

        <div class="col-md-3 col-sm-4">
      
          <ul id="myTab" class="nav nav-pills nav-stacked">
            <li class="active">
              <a href="#tanah-tab" data-toggle="tab">
                <i class="fa fa-map-marker"></i> 
                &nbsp;&nbsp;Tanah
              </a>
            </li>
            <li>
              <a href="#peralatan-tab" data-toggle="tab">
                <i class="fa fa-gears "></i> 
                &nbsp;&nbsp;Peralatan dan Mesin
              </a>
            </li>
            <li>
              <a href="#gedung-tab" data-toggle="tab">
                <i class="fa fa-hospital-o"></i> 
                &nbsp;&nbsp;Gedung dan Bangunan
              </a>
            </li>
            <li>
              <a href="#jalan-tab" data-toggle="tab">
                <i class="fa fa-exchange"></i> 
                &nbsp;&nbsp;Jalan, Irigasi dan Jaringan
              </a>
            </li>
            <li>
              <a href="#asetlain-tab" data-toggle="tab">
                <i class="fa fa-picture-o"></i> 
                &nbsp;&nbsp;Aset Tetap Lainnya
              </a>
            </li>
            <li>
              <a href="#konstruksi-tab" data-toggle="tab">
                <i class="fa fa-wrench"></i> 
                &nbsp;&nbsp;Konstruksi dalam Pengerjaan
              </a>
            </li>
          </ul>

          <br>

        </div> <!-- /.col -->
 
        <!--            ................................Form Input...............................  -->

        <div class="col-md-9 col-sm-8">

          <div class="tab-content stacked-content">

            <!-- /.tab-tanah --> 

            <div class="tab-pane fade in" id="tanah-tab">
              
              <h3 class="">Pendataan Aset Tanah Desa</h3>

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

              <hr />

              <br />

              <form action="<?php echo ROOT; ?>assets/page-settings.html" class="form-horizontal">

                <div class="form-group">

             

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Jenis/Nama Barang</label>


                  <div class="col-sm-7">

                
                    <select id="s2_basic" class="form-control">                    
                      <optgroup label="Tanah">
                        <option value="01010000000" selected>Tanah</option>
                      </optgroup>
                      <optgroup label="Perkampungan">
                        <option value="01010100000">Perkampungan</option>
                      </optgroup>
                      <optgroup label="Kampung">
                        <option value="01010100000">Kampung</option>
                        <option value="01010100000">Lain-lain</option>
                      </optgroup>
                      <optgroup label="Emplasmen">
                        <option value="01010100000">Kampung</option>
                        <option value="01010100000">Lain-lain</option>
                      </optgroup>
                      <optgroup label="Tanah Pertanian">
                        <option value="01010100000">Sawah Satu Tahun Ditanami</option>
                        <option value="01010100000">Padi</option>
                        <option value="01010100000">Palawija</option>
                        <option value="01010100000">Sawah Ditanami Tebu</option>
                        <option value="01010100000">Sawah Ditanami Sayuran</option>
                        <option value="01010100000">Sawah Ditanami Tembakau</option>
                        <option value="01010100000">Sawah Ditanami Rosella</option>
                        <option value="01010100000">Lain-lain</option>
                        

                      </optgroup>
                     
                    </select>

                  </div> <!-- /.col -->


                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Kode Barang</label>

                  <div class="col-md-7">
                    <input type="number" name="kode-barang" placeholder="01010000000" class="form-control" disabled/>
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
                    <input type="text" name="luastanah" placeholder="Luas Tanah" class="form-control" />
                    <span class="input-group-addon">m<sup>2</sup></span>
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Tanggal Beli </label>


                  <div class="col-md-7">
                    <div id="dp-ex-1" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                    <input class="form-control" type="text" name="tanggalbeli" placeholder="<?php echo date('d-m-Y'); ?>" >
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
                    <input type="text" name="nosertifikat" placeholder="No Sertifikat Tanah" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Tanggal Sertifikat </label>

                  <div class="col-md-7">
                     <div id="dp-ex-2" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                     <input class="form-control" type="text" name="tggsertifikat" >
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
                    <input type="text" name="asal" placeholder="Asal Usul " class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Harga </label>

                  <div class="col-md-7">
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input class="form-control" id="harga" type="number" placeholder=" Harga Aset Tanah">
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Keterangan </label>

                  <div class="col-md-7">
                    <input type="text" name="keterangan" placeholder="Keterangan Tambahan" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <br />

                <div class="form-group">

                  <div class="col-md-7 col-md-push-3">
                    <button type="submit" class="btn btn-primary">Masukkan Data</button>
                    &nbsp;
                    <button type="reset" class="btn btn-default">Batalkan</button>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

              </form>
            </div> <!-- /.tab-tanah --> 


            <!-- /.tab-peralatan -->
            <div class="tab-pane fade in active" id="peralatan-tab">
              
              <h3 class="">Pendataan Aset Peralatan dan Mesin </h3>

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

              <hr />

              <br />

              <form action="<?php echo ROOT; ?>assets/page-settings.html" class="form-horizontal">

                <div class="form-group">

             

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Jenis/Nama Barang</label>


                  <div class="col-sm-7">

                
                    <select id="s3_basic" class="form-control">                    
                      <optgroup label="Alat - Alat Besar ">
                        <option value="01010000000" selected>Alat - Alat Besar</option>
                      </optgroup>
                      <optgroup label="Alat - Alat Besar Darat">
                      </optgroup>
                      <optgroup label="Tractor">
                        <option value="01010100000">Crawler Tractor</option>
                        <option value="01010100000">Wheel Tractor</option>
                      </optgroup>
                      <optgroup label="Grader">
                        <option value="01010100000">Buldozer</option>
                        <option value="01010100000">Draiglines</option>
                      </optgroup>
                      <optgroup label="Kendaraan Bermotor Penumpang">
                        <option value="01010100000">Bus (Penumpang 30 Orang keatas)</option>
                        <option value="01010100000">Micro Bus (Penumpang 15 - 30 orang)</option>
                        <option value="01010100000">Mini Bus (Penumpang 14 Orang kebawah)</option>
                        <option value="01010100000">Sawah Ditanami Tebu</option>
                        <option value="01010100000">Sawah Ditanami Sayuran</option>
                        <option value="01010100000">Sawah Ditanami Tembakau</option>
                        <option value="01010100000">Sawah Ditanami Rosella</option>
                        <option value="01010100000">Lain-lain</option>
                        

                      </optgroup>
                     
                    </select>

                  </div> <!-- /.col -->


                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Kode Barang</label>

                  <div class="col-md-7">
                    <input type="number" name="kode-barang" placeholder="01010000000" class="form-control" disabled/>
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
                    <input type="text" name="merek" placeholder="merek atau tipe peralatan" class="form-control" />
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
                    <input type="text" name="alamat" placeholder="Bahan " class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->




                <div class="form-group">

                  <label class="col-md-3">Tanggal Beli </label>


                  <div class="col-md-7">
                    <div id="dp-ex-3" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                    <input class="form-control" type="text" name="tanggalbeliperalatan" >
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  <span class="help-block">dd-mm-yyyy</span>

                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Nomor </label>

                  <div class="col-md-2">
                    <input type="text" name="nopabrik" placeholder="pabrik" class="form-control" />
                  </div> <!-- /.col -->

                  <div class="col-md-2">
                    <input type="text" name="norangka" placeholder="Rangka" class="form-control" />
                  </div> <!-- /.col -->
                  <div class="col-md-2">
                    <input type="text" name="nomesin" placeholder="Mesin" class="form-control" />
                  </div> <!-- /.col -->
                  <div class="col-md-2">
                    <input type="text" name="nopolisi" placeholder="Polisi" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Asal Usul </label>

                  <div class="col-md-7">
                    <input type="text" name="asal" placeholder="Asal Usul Pengadaan " class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Harga </label>

                  <div class="col-md-7">
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input class="form-control" id="harga" type="number">
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Keterangan </label>

                  <div class="col-md-7">
                    <input type="text" name="keterangan" value="" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="row">

                        <label class="col-md-3">Gambar</label>

                          <div class="col-sm-4">
                              
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                              <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="Placeholder" /></div>
                              <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                              <div>
                                <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span>
                                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                              </div>
                            </div>

                          </div> <!-- /.col -->


                </div> <!-- /.row -->  


                <br />

                <br />

                <div class="form-group">

                  <div class="col-md-7 col-md-push-3">
                    <button type="submit" class="btn btn-primary">Masukkan Data</button>
                    &nbsp;
                    <button type="reset" class="btn btn-default">Batalkan</button>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

              </form>
            </div> <!-- /.tab-peralatan --> 


            <!-- /.tab-gedung --> 
            <div class="tab-pane fade  " id="gedung-tab">
              
              <h3 class="">Pendataan Aset Gedung dan Bangunan Desa</h3>

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

              <hr />

              <br />

              <form action="<?php echo ROOT; ?>assets/page-settings.html" class="form-horizontal">

                <div class="form-group">

             

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Jenis/Nama Barang</label>


                  <div class="col-sm-7">

                
                    <select id="s4_basic" class="form-control" >                    
                      <optgroup label=" Bangunan Gedung">
                        <option value="01010000000" >BANGUNAN GEDUNG TEMPAT KERJA</option>
                      </optgroup>

                      <optgroup label=" Bangunan Gedung Kantor">
                        <option value="01010000000">Bangunan Gedung Kantor Permanen</option>
                        <option value="01010000000">Bangunan Gedung Kantor Semi Permanen</option>
                        <option value="01010000000">Bangunan Gedung Kantor Darurat</option>
                        <option value="01010000000">Lain-lain</option>
                      </optgroup>

                      <optgroup label="Bangunan Monumen">
                        <option value="01010100000">Istana Peninggalan</option>
                        <option value="01010000000">Rumah Adat n</option>
                        <option value="01010000000">Rumah Peninggalan Sejarah</option>
                        <option value="01010000000">Makam Bersejarah</option>
                        <option value="01010000000">Mesjid Bersejarah</option>
                        <option value="01010000000">Lain-lain</option>
                      </optgroup>
                     

                      </optgroup>
                     
                    </select>

                  </div> <!-- /.col -->


                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Kode Barang</label>

                  <div class="col-md-7">
                    <input type="number" name="kode-barang" value="01010000000" class="form-control" disabled/>
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
                      <input type="radio" name="kondisiG1" class="" value="Baru" checked> Baru
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="kondisiG1" class="" value="KB"> KB
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="kondisiG1" class="" value="Renovasi Baru"> Renovasi Baru
                    </label>

                  </div> <!-- /.col -->
                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3">Konstruksi Bangunan</label>

                  <div class="col-md-7">

                    <label class="checkbox-inline">
                       <input type="checkbox" id="inlineCheckbox1" class="" value="Bertingkat"> Bertingkat
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="" value="Beton"> Beton
                    </label>
               

                  </div> <!-- /.col -->
                </div> <!-- /.form-group -->




                <div class="form-group">

                  <label class="col-md-3">Luas Lantai</label>

                  <div class="col-md-7">
                    <div class="input-group">
                  <input type="text" name="luaslantai" placeholder="Luas Lantai" class="form-control" />
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


                <br>
                <div class="form-group">

                  <label class="col-md-12">Dokumen Gedung</label>

                  <label class="col-md-3"> &nbsp;&nbsp;1. Tanggal</label>


                  <div class="col-md-7">
                    <div id="dp-ex-4" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                    <input class="form-control" type="text" name="tanggalbeli" placeholder="00-00-0000">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  <span class="help-block">dd-mm-yyyy</span>

                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">&nbsp;&nbsp;2. Nomor</label>
                  <div class="col-md-7">
                    <input type="number" name="register" value="0001" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <br>


                

                <div class="form-group">

                  <label class="col-md-3">Luas Lahan</label>

                  <div class="col-md-7">
                    <div class="input-group">
                    <input type="number" placeholder="Luas Lahan" name="luaslahan"  class="form-control" />
                    <span class="input-group-addon">m<sup>2</sup></span>
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                     <div class="form-group">

                  <label class="col-md-3">Status Tanah </label>

                  <div class="col-md-7">
                    <input type="text" name="hak" placeholder="Status Kepemilikan Tanah Gedung" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Nomor Kode Tanah </label>

                  <div class="col-md-7">
                    <input type="text" name="nosertifikat" value="" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3">Asal Usul </label>

                  <div class="col-md-7">
                    <input type="text" name="asal" placeholder="Asal Usul Dana Gedung"class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Harga </label>

                  <div class="col-md-7">
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input class="form-control" id="harga" type="number">
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Keterangan </label>

                  <div class="col-md-7">
                    <input type="text" name="keterangan" value="" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <br />

                <div class="form-group">

                  <div class="col-md-7 col-md-push-3">
                    <button type="submit" class="btn btn-primary">Masukkan Data</button>
                    &nbsp;
                    <button type="reset" class="btn btn-default">Batalkan</button>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

              </form>
            </div> <!-- /.tab-gedung --> 

             <!-- /.tab-jalan --> 
            <div class="tab-pane fade " id="jalan-tab">
              
              <h3 class="">Pendataan Aset Jalan, Irigasi dan Jaringan Desa</h3>

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

              <hr />

              <br />

              <form action="<?php echo ROOT; ?>assets/page-settings.html" class="form-horizontal">

                <div class="form-group">

             

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Jenis/Nama Barang</label>


                  <div class="col-sm-7">

                
                    <select id="s5_basic" class="form-control">                    
                      <optgroup label="Jalan dan Jembatan">
                        <option value="01010000000" selected>Tanah</option>
                      </optgroup>
                      <optgroup label="Bangunan Air/Irigasi">
                        <option value="01010100000">Perkampungan</option>
                      </optgroup>
                      <optgroup label="Instalasi">
                        <option value="01010100000">Kampung</option>
                        <option value="01010100000">Lain-lain</option>
                      </optgroup>
                      <optgroup label="Jaringan">
                        <option value="01010100000">Kampung</option>
                        <option value="01010100000">Lain-lain</option>
                      </optgroup>
                     
                    </select>

                  </div> <!-- /.col -->


                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Kode Barang</label>

                  <div class="col-md-7">
                    <input type="number" name="kode-barang" value="01010000000" class="form-control" disabled/>
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
                    <span class="input-group-addon">Km</span>
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
                    <input type="text" name="luastanah" placeholder="Luas Konstruksi (m2)"class="form-control" />
                    <span class="input-group-addon">m<sup>2</sup></span>
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-12">Dokumen </label>
                  <label class="col-md-3"> &nbsp;Tanggal </label>


                  <div class="col-md-7">
                    <div id="dp-ex-5" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                    <input class="form-control" type="text" name="tanggaldokumen" placeholder="Tanggal Pada Dokumen" >
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  <span class="help-block">dd-mm-yyyy</span>

                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3">&nbsp;Nomor </label>

                  <div class="col-md-7">
                    <input type="text" name="nodokumen" placeholder="Nomor Pada Dokumen" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <br>


                <div class="form-group">

                  <label class="col-md-3">Status Tanah</label>

                  <div class="col-md-7">
                    <input type="text" name="statustanah" placeholder="Status Tanah " class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Nomor Kode Tanah  </label>

                  <div class="col-md-7">
                    <input type="text" name="notanah" placeholder="Nomor Kode Tanah" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                

                <div class="form-group">

                  <label class="col-md-3">Asal Usul </label>

                  <div class="col-md-7">
                    <input type="text" name="asal" value="" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Kondisi Bangunan</label>

                  <div class="col-md-7">

                    <label class="radio-inline">
                      <input type="radio" name="kondisiG1" class="" value="Baru" checked> Baru
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="kondisiG1" class="" value="KB"> KB
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="kondisiG1" class="" value="Renovasi Baru"> Renovasi Baru
                    </label>

                  </div> <!-- /.col -->
              </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3">Harga </label>

                  <div class="col-md-7">
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input class="form-control" id="harga" type="number">
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Keterangan </label>

                  <div class="col-md-7">
                    <input type="text" name="keterangan" value="" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <br />

                <div class="form-group">

                  <div class="col-md-7 col-md-push-3">
                    <button type="submit" class="btn btn-primary">Masukkan Data</button>
                    &nbsp;
                    <button type="reset" class="btn btn-default">Batalkan</button>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

              </form>
            </div> <!-- /.tab-jalan --> 

            <div class="tab-pane fade" id="asetlain-tab">
              
              <h3 class="">Pendataan Aset Lain Desa</h3>

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

              <hr />

              <br />

              <form action="<?php echo ROOT; ?>assets/page-settings.html" class="form-horizontal">

                <div class="form-group">

             

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Jenis/Nama Barang</label>


                  <div class="col-sm-7">

                
                    <select id="s6_basic" class="form-control">                    
                      <optgroup label="BUKU DAN PERPUSTAKAAN">
                        <option value="01010000000" selected>BUKU DAN PERPUSTAKAAN</option>
                        <option value="01010000000">BUKU</option>
                        <option value="01010000000">Umum</option>
                      </optgroup>
                      <optgroup label="Umum">
                        <option value="01010100000">Ilmu Pengetahuan Umum</option>
                        <option value="01010100000">Bibliografi, Katalog</option>
                        <option value="01010100000">Ilmu Pengetahuan Umum</option>
                        <option value="01010100000">Lain-lain</option>
                      </optgroup>
                      <optgroup label="BARANG BERCORAK KEBUDAYAAN">
                        <option value="01010100000">Pahatan</option>
                        <option value="01010100000">Pahatan batu-batuan</option>
                        <option value="01010100000">Lain-lain</option>
                      </optgroup>
                      <optgroup label="ALAT OLAH RAGA LAINNYA">
                        <option value="01010100000">Keramik (Guci, Piring)</option>
                        <option value="01010100000">Logam (Gong, Mandau)</option>
                        <option value="01010100000">Lain-lain</option>
                      </optgroup>
                      <optgroup label="HEWAN DAN TERNAK SERTA TANAMAN">
                        <option value="01010100000">Binatang Ternak</option>
                        <option value="01010100000">Sapi</option>
                        <option value="01010100000">Kerbau</option>
                        <option value="01010100000">Kuda</option>
                        <option value="01010100000">Babi</option>
                        <option value="01010100000">Biri-biri</option>
                        <option value="01010100000">Kelinci</option>
                        <option value="01010100000">Lain-lain</option>
                      </optgroup>
                     
                    </select>

                  </div> <!-- /.col -->


                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Kode Barang</label>

                  <div class="col-md-7">
                    <input type="number" name="kode-barang" value="01010000000" class="form-control" disabled/>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Register</label>
                  <div class="col-md-7">
                    <input type="number" name="register" value="0001" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->



                <ul id="myTab2" class="nav nav-pills">
                  <li >
                    <a href="#Perpustakaan" data-toggle="tab">Buku Perpustakaan</a>
                  </li>
                  <li>
                    <a href="#kesenian" data-toggle="tab">Barang Bercorak Kesenian/ Kebudayaan</a>
                  </li>
                  <li>
                    <a href="#ternak" data-toggle="tab">Hewan/Ternak dan Tumbuhan</a>
                  </li>
                  
                </ul>

                <div id="myTab2Content" class="tab-content">
                  <div class="tab-pane fade " id="Perpustakaan">

                    <div class="form-group">

                        <label class="col-md-12">Buku Perpustakaan </label>
                        <label class="col-md-3"> &nbsp;1. Judul/Pencipta</label>


                        <div class="col-md-7">
                          <input type="text" name="judul" placeholder="Judul Atau Pencipta" class="form-control" />
                        </div> <!-- /.col -->

                      </div> <!-- /.form-group -->



                      <div class="form-group">

                        <label class="col-md-3">&nbsp;2. Spesifikasi </label>

                        <div class="col-md-7">
                          <input type="text" name="spesifikasi" placeholder="Spesifikasi Buku" class="form-control" />
                        </div> <!-- /.col -->

                      </div> <!-- /.form-group -->



                 
                  </div>

                  <div class="tab-pane fade" id="kesenian">

                     <div class="form-group">

                        <label class="col-md-12">Barang Bercorak Kesenian/ Kebudayaan</label>
                        <label class="col-md-3"> &nbsp;1. Asal Daerah</label>


                        <div class="col-md-7">
                          <input type="text" name="judul" placeholder="Judul Atau Pencipta" class="form-control" />
                        </div> <!-- /.col -->

                      </div> <!-- /.form-group -->



                      <div class="form-group">

                        <label class="col-md-3">&nbsp;2. Pencipta </label>

                        <div class="col-md-7">
                          <input type="text" name="spesifikasi" placeholder="Spesifikasi Buku" class="form-control" />
                        </div> <!-- /.col -->

                      </div> <!-- /.form-group -->

                      <div class="form-group">

                        <label class="col-md-3">&nbsp;3. Bahan </label>

                        <div class="col-md-7">
                          <input type="text" name="Bahan" placeholder="Bahan Buku" class="form-control" />
                        </div> <!-- /.col -->

                      </div> <!-- /.form-group -->
                    



                  </div>

                  <div class="tab-pane fade" id="ternak">

                     <div class="form-group">

                        <label class="col-md-12">Hewan/Ternak dan Tumbuhan </label>
                        <label class="col-md-3"> &nbsp;1. Jenis</label>


                        <div class="col-md-7">
                          <input type="text" name="judul" placeholder="Judul Atau Pencipta" class="form-control" />
                        </div> <!-- /.col -->

                      </div> <!-- /.form-group -->



                      <div class="form-group">

                        <label class="col-md-3">&nbsp;2. Ukuran </label>

                        <div class="col-md-7">
                          <input type="text" name="spesifikasi" placeholder="Spesifikasi Buku" class="form-control" />
                        </div> <!-- /.col -->

                      </div> <!-- /.form-group -->
                    



                  </div>

                  
                </div>

                <br>

                <div class="form-group">

                  <label class="col-md-3">Jumlah </label>

                  <div class="col-md-7">
                    <input type="number" name="nosertifikat" value="" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Tahun Cetak/  Pembelian </label>


                  <div class="col-md-7">
                    <div id="dp-ex-6" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                    <input class="form-control" type="text" name="tanggalbeli" >
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  <span class="help-block">dd-mm-yyyy</span>

                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Asal Usul Cara Perolehan</label>

                  <div class="col-md-7">
                    <input type="text" name="asal" value="" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Harga </label>

                  <div class="col-md-7">
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input class="form-control" id="harga" type="number">
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Keterangan </label>

                  <div class="col-md-7">
                    <input type="text" name="keterangan" value="" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="row">

                        <label class="col-md-3">Gambar</label>

                          <div class="col-sm-4">
                              
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                              <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="Placeholder" /></div>
                              <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                              <div>
                                <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span>
                                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                              </div>
                            </div>

                          </div> <!-- /.col -->


                </div> <!-- /.row -->  


            

                <br />

                <div class="form-group">

                  <div class="col-md-7 col-md-push-3">
                    <button type="submit" class="btn btn-primary">Masukkan Data</button>
                    &nbsp;
                    <button type="reset" class="btn btn-default">Batalkan</button>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

              </form>
            </div> <!-- /.tab-asetlain --> 

            <div class="tab-pane fade " id="konstruksi-tab">
              
              <h3 class="">Pendataan Aset yang Masih dalam Konstruksi dalam Pengerjaan</h3>

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

              <hr />

              <br />

              <form action="<?php echo ROOT; ?>assets/page-settings.html" class="form-horizontal">

                <div class="form-group">

             

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Jenis/Nama Barang</label>


                  <div class="col-sm-7">

                
                    <select id="s7_basic" class="form-control">                    
                      <optgroup label="Tanah">
                        <option value="01010000000" selected>Tanah</option>
                      </optgroup>
                      <optgroup label="Perkampungan">
                        <option value="01010100000">Perkampungan</option>
                      </optgroup>
                      <optgroup label="Kampung">
                        <option value="01010100000">Kampung</option>
                        <option value="01010100000">Lain-lain</option>
                      </optgroup>
                      <optgroup label="Emplasmen">
                        <option value="01010100000">Kampung</option>
                        <option value="01010100000">Lain-lain</option>
                      </optgroup>
                      <optgroup label="Tanah Pertanian">
                        <option value="01010100000">Sawah Satu Tahun Ditanami</option>
                        <option value="01010100000">Padi</option>
                        <option value="01010100000">Palawija</option>
                        <option value="01010100000">Sawah Ditanami Tebu</option>
                        <option value="01010100000">Sawah Ditanami Sayuran</option>
                        <option value="01010100000">Sawah Ditanami Tembakau</option>
                        <option value="01010100000">Sawah Ditanami Rosella</option>
                        <option value="01010100000">Lain-lain</option>
                        

                      </optgroup>
                     
                    </select>

                  </div> <!-- /.col -->


                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Bangunan </label>

                  <div class="col-md-7">

                    <label class="radio-inline">
                      <input type="radio" name="Bangunan " class="" value="P" checked> P
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="Bangunan " class="" value="SP"> SP
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="Bangunan " class="" value="D"> D
                    </label>

                  </div> <!-- /.col -->
                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Konstruksi Bangunan</label>

                  <div class="col-md-7">

                    <label class="checkbox-inline">
                       <input type="checkbox" id="inlineCheckbox1" class="" value="Bertingkat"> Bertingkat
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" class="" value="Beton"> Beton
                    </label>
               

                  </div> <!-- /.col -->
                </div> <!-- /.form-group -->



                <div class="form-group">

                  <label class="col-md-3">Luas</label>

                  <div class="col-md-7">
                    <div class="input-group">
                    <input type="text" name="luaskonstruksi" placeholder="Luas Daerah Konstruksi" class="form-control" />
                    <span class="input-group-addon">m<sup>2</sup></span>
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                  <div class="form-group">

                    <label class="col-md-3">Letak/Alamat</label>

                    <div class="col-md-7">
                      <input type="text" name="alamat" placeholder="Letak Lokasi / Alamat" class="form-control" />
                    </div> <!-- /.col -->

                  </div> <!-- /.form-group -->


                  <div class="form-group">

                    <label class="col-md-12">Dokumen Gedung</label>

                    <label class="col-md-3"> &nbsp;&nbsp;1. Tanggal</label>


                    <div class="col-md-7">
                      <div id="dp-ex-7" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
                      <input class="form-control" type="text" name="tanggaldok" placeholder="00-00-0000">
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      </div>
                    <span class="help-block">dd-mm-yyyy</span>

                    </div> <!-- /.col -->

                  </div> <!-- /.form-group -->

                  <div class="form-group">

                    <label class="col-md-3">&nbsp;&nbsp;2. Nomor</label>
                    <div class="col-md-7">
                      <input type="number" name="nodok" value="0001" class="form-control" />
                    </div> <!-- /.col -->

                  </div> <!-- /.form-group -->

                  <br>

                  <div class="form-group">

                  <label class="col-md-3">Status Tanah </label>

                  <div class="col-md-7">
                    <input type="text" name="statustanah" placeholder="Status Tanah " class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Asal Usul Pembiayaan</label>

                  <div class="col-md-7">
                    <input type="text" name="asal" value="" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Nilai Kontrak </label>

                  <div class="col-md-7">
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input class="form-control" id="harga" type="number">
                    </div>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->


                <div class="form-group">

                  <label class="col-md-3">Keterangan </label>

                  <div class="col-md-7">
                    <input type="text" name="keterangan" value="" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->
                <br />

                 


                <br />

                <div class="form-group">

                  <div class="col-md-7 col-md-push-3">
                    <button type="submit" class="btn btn-primary">Masukkan Data</button>
                    &nbsp;
                    <button type="reset" class="btn btn-default">Batalkan</button>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

              </form>
            </div> <!-- /.tab-konstruksi --> 

            




            <div class="tab-pane fade" id="password-tab">

              <h3 class="">Change Your Password</h3>

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>

              <br />

              <form action="<?php echo ROOT; ?>assets/page-settings.html" class="form-horizontal">

                <div class="form-group">

                  <label class="col-md-3">Old Password</label>

                  <div class="col-md-7">
                    <input type="password" name="old-password" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <hr />

                <div class="form-group">

                  <label class="col-md-3">New Password</label>

                  <div class="col-md-7">
                    <input type="password" name="new-password-1" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">New Password Confirm</label>

                  <div class="col-md-7">
                    <input type="password" name="new-password-2" class="form-control" />
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <br />

                <div class="form-group">

                  <div class="col-md-7 col-md-push-3">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    &nbsp;
                    <button type="reset" class="btn btn-default">Cancel</button>
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

              </form>
            </div> <!-- /.tab-pane -->


              <div class="tab-pane fade" id="messaging">
                <h3>Message Settings</h3>
                  <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>

                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
              </div> <!-- /.tab-pane -->

              <div class="tab-pane fade" id="payments">
                <h3>Payments Settings</h3>
                  <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>

                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
              </div> <!-- /.tab-pane -->

              <div class="tab-pane fade" id="reports">
                <h3>Reports Settings</h3>
                  <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>

                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
              </div> <!-- /.tab-pane -->

          </div> <!-- /.tab-content -->

        </div> <!-- /.col -->

      </div> <!-- /.row -->


      

    </div> <!-- /.content-container -->
      
  </div> <!-- /.content -->

</div> <!-- /.container -->

<!--ISI-->


<footer class="footer">

  <div class="container">

    <div class="row">

      <div class="col-sm-3">

        <h4>Tentang Aset Desa Terpadu </h4>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>  

        <hr>    

        <p>&copy; 2014 Jumpstart Themes.</p>

      </div> <!-- /.col -->

      <div class="col-sm-3"> 

        <h4>Bantuan</h4>

        <br>

        <ul class="icons-list">
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Panduan</a>
          </li>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Ajukan Pertanyaan</a>
          </li>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Video Pelatihan</a>
          <li>
            <i class="fa fa-angle-double-right icon-li"></i>
            <a href="javascript:;">Saran dan kritik</a>
          </li>
        </ul>          

      </div> <!-- /.col -->

  

    </div> <!-- /.row -->

  </div> <!-- /.container -->
  
</footer>

  <script src="<?php echo ROOT; ?>assets/js/libs/jquery-1.10.1.min.js"></script>
  <script src="<?php echo ROOT; ?>assets/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="<?php echo ROOT; ?>assets/js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="<?php echo ROOT; ?>assets/js/libs/excanvas.compiled.js"></script>
  <![endif]-->

  
  <!-- Plugin JS -->
    <script src="<?php echo ROOT; ?>assets/js/plugins/icheck/jquery.icheck.js"></script>
  <script src="<?php echo ROOT; ?>assets/js/plugins/select2/select2.js"></script>
  <script src="<?php echo ROOT; ?>assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="<?php echo ROOT; ?>assets/js/plugins/timepicker/bootstrap-timepicker.js"></script>
  <script src="<?php echo ROOT; ?>assets/js/plugins/simplecolorpicker/jquery.simplecolorpicker.js"></script>
  <script src="<?php echo ROOT; ?>assets/js/plugins/autosize/jquery.autosize.min.js"></script>
  <script src="<?php echo ROOT; ?>assets/js/plugins/textarea-counter/jquery.textarea-counter.js"></script>
  <script src="<?php echo ROOT; ?>assets/js/plugins/fileupload/bootstrap-fileupload.js"></script>

  <!-- App JS -->

  
  <!-- Plugin JS -->
  <script src="<?php echo ROOT; ?>assets/js/demos/form-extended.js"></script>
 

  


  
</body>
</html>
