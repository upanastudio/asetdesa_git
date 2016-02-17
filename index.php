<?php
	session_start();
	require "models/class.php";
	include "libs/path.php";

	$url = isset($_GET['p']) ? $_GET['p'] : null;
	$url = rtrim($url, '/');
	$url = filter_var($url, FILTER_SANITIZE_URL);
	$url = explode('/', $url);

	#config dasar
	$model    = $url[0];
	$method   = !empty($url[1])?$url[1]:'';
	$parameter  = !empty($url[2])?$url[2]:null;

	if (!isset($_SESSION['login'])) {
		header("location:".ROOT."login");
	}
?>

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
		<link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/plugins/icheck/skins/minimal/blue.css">
		<link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/plugins/select2/select2.css">
		<link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/plugins/datepicker/datepicker.css">
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
					<a class="navbar-brand navbar-brand-image" href="<?php echo ROOT; ?>">
						<br/>
						<p>Aset Desa Terpadu</p>
						<!--<img src="./img/logo.png" alt="Site Logo">-->
					</a>
				</div> <!-- /.navbar-header -->
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav noticebar navbar-left">
						<li class="dropdown">
							<a href="./page-notifications.html" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="navbar-visible-collapsed">&nbsp;Notifications&nbsp;</span>
								<span class="badge">3</span>
							</a>
							<ul class="dropdown-menu noticebar-menu" role="menu">
								<li class="nav-header">
									<div class="pull-left">Pemberitahuan</div>
								</li>
								<li>
									<a href="./page-notifications.html" class="noticebar-item">
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
									<a href="./page-notifications.html">Lihat seluruh pemberitahuan</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="./page-notifications.html" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="navbar-visible-collapsed">&nbsp;Messages&nbsp;</span>
							</a>
							<ul class="dropdown-menu noticebar-menu" role="menu">
								<li class="nav-header">
									<div class="pull-left">Messages</div>
									<div class="pull-right">
										<a href="javascript:;">New Message</a>
									</div>
								</li>
								<li>
									<a href="./page-notifications.html" class="noticebar-item">
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
									<a href="./page-notifications.html" class="noticebar-item">
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
									<a href="./page-notifications.html">View All Messages</a>
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
									<div class="pull-left">Alerts</div>
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
							<a href="#">Buku Panduan</a>
						</li>
						<li class="dropdown navbar-profile">
							<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
								<img src="<?php echo ROOT; ?>assets/img/avatars/avatar-1-xs.jpg" class="navbar-profile-avatar" alt="">
								<span class="navbar-profile-label">sid@mydesa.co.id &nbsp;</span>
								<i class="fa fa-caret-down"></i>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="./page-profile.html">
										<i class="fa fa-user"></i>
										&nbsp;&nbsp;<?php echo $_SESSION['fullname']; ?>
									</a>
								</li>
								<li>
									<a href="./page-settings.html">
										<i class="fa fa-cogs"></i> 
										&nbsp;&nbsp;Settings
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="<?php echo ROOT; ?>logout">
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
						<li class="<?php echo $model==''? 'active':''; ?>">
							<a href="<?php echo ROOT; ?>">
								<i class="fa fa-dashboard"></i>
								Rekap
							</a>
						</li>
						<li class="dropdown <?php echo $model=='input'? 'active':''; ?>">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<i class="fa fa-desktop"></i>
								Pengadaan dan Pendataan
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">   
								<li><a href="<?php echo ROOT; ?>input?tab=tanah"><i class="fa fa-user nav-icon"></i> Tanah</a></li>
								<li><a href="<?php echo ROOT; ?>input?tab=peralatan"><i class="fa fa-bars nav-icon"></i> Peralatan dan Mesin</a></li>
								<li><a href="<?php echo ROOT; ?>input?tab=gedung"><i class="fa fa-asterisk nav-icon"></i> Gedung dan Bangunan</a></li>
								<li><a href="<?php echo ROOT; ?>input?tab=jalan"><i class="fa fa-tasks nav-icon"></i> Jalan, Irigasi Dan Jaringan</a></li>
								<li><a href="<?php echo ROOT; ?>input?tab=asetlain"><i class="fa fa-font nav-icon"></i> Aset Tetap Lainnya</a></li>
								<li><a href="<?php echo ROOT; ?>input?tab=konstruksi"><i class="fa fa-list-alt nav-icon"></i> Konstruksi dalam Pengerjaan</a></li>
							</ul>
						</li>
						<li class="dropdown <?php echo $model=='laporan'? 'active':''; ?>">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<i class="fa fa-align-left"></i> 
								Laporan
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-header">Laporan</li>
								<li>
									<a href="<?php echo ROOT; ?>laporan">
										<i class="fa fa-location-arrow nav-icon"></i> 
										Laporan Penyusutan Nilai
									</a>
								</li>
								<li>
									<a href="./laporan.html">
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
									<a href="./neraca.html">
										<i class="fa fa-table"></i>
										&nbsp;&nbsp;Pertanggung Jawaban
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown <?php echo $model=='kirim'? 'active':''; ?>">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<i class="fa fa-files-o"></i>
								Kirim Data
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo ROOT; ?>kirim"><i class="fa fa-user nav-icon"></i> Pengiriman Laporan</a></li>
							</ul>
						</li>
					</ul>
				</div> <!-- /.navbar-collapse -->
			</div> <!-- /.container -->
		</div> <!-- /.mainbar -->
		<div class="container">
			<div class="content">
				<div class="content-container">

<?php
	switch ($model) {
		default:
			include "views/404.php";
			break;

		case '':
			include "views/home_view.php";
			break;

		case 'input':
			include "views/input_view.php";
			break;

		case 'laporan':
			include "views/laporan_view.php";
			break;

		case 'kirim':
			include "views/kirim_view.php";
			break;

		case 'logout':
			include "login/logout.php";
			break;
	}
?>

				</div> <!-- /.content-container -->
			</div> <!-- /.content -->
		</div> <!-- /.container -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<h4>Tentang Aset Desa Terpadu </h4>
						<br/>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<hr/>
						<p>&copy; <?php echo date("Y"); ?> Upana Studio</p>
					</div> <!-- /.col -->
					<div class="col-sm-3">
						<h4>Bantuan</h4>
						<br/>
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
							</li>
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
			<script src="./js/libs/excanvas.compiled.js"></script>
		<![endif]-->

		<!-- Plugin JS -->
		<script src="<?php echo ROOT; ?>assets/js/plugins/icheck/jquery.icheck.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/plugins/select2/select2.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/libs/raphael-2.1.2.min.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/plugins/select2/select2.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/plugins/timepicker/bootstrap-timepicker.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/plugins/simplecolorpicker/jquery.simplecolorpicker.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/plugins/textarea-counter/jquery.textarea-counter.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/plugins/fileupload/bootstrap-fileupload.js"></script>

		<!-- App JS -->
		<script src="<?php echo ROOT; ?>assets/js/target-admin.js"></script>

		<!-- Plugin JS -->
		<script src="<?php echo ROOT; ?>assets/js/demos/dashboard.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/demos/form-extended.js"></script>

		<script type='text/javascript'> 
			function hapusData(id) {
				var conBox = confirm("Anda yakin ingin menghapus data ini?");
				if(conBox){
					document.getElementById("hapus_id").value = id;
					document.getElementById("hapusSubmit").submit();
				}else{
					return false;
				}
			};
		</script>

		<!-- Page Laporan JS -->
		<script src="<?php echo ROOT; ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			jQuery(function ($) {
				$(".panel-heading span.clickable").on("click", function (e) {
					if ($(this).hasClass("panel-collapsed")) {
						// expand the panel
						$(this).parents(".panel").find(".panel-body").slideDown();
						$(this).removeClass("panel-collapsed");
						$(this).find("i").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
					} else {
						// collapse the panel
						$(this).parents(".panel").find(".panel-body").slideUp();
						$(this).addClass("panel-collapsed");
						$(this).find("i").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
					}
				});
			});
		</script>

	</body>
</html>
