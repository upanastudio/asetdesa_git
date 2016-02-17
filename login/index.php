<?php
	require "../models/class.php";
	include "../libs/path.php";
	// session_start();
	// session_unset();
	// session_destroy();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<title> Login - Aplikasi Manajemen Aset Desa</title>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
		<link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo ROOT; ?>assets/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
		<link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/bootstrap.min.css">

		<!-- App CSS -->
		<link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/target-admin.css">
		<link rel="stylesheet" href="<?php echo ROOT; ?>assets/css/custom.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="account-bg">
		<div class="navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<i class="fa fa-cogs"></i>
					</button>
					<a class="navbar-brand navbar-brand-image" href="<?php echo ROOT; ?>">
						<!-- <img src="<?php echo ROOT; ?>assets/img/logo-login.png" alt="Target Admin"> -->
					</a>
				</div> <!-- /.navbar-header -->
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- <li>
							<a href="javascript:;">
								<i class="fa fa-angle-double-left"></i>
								&nbsp;Back to Homepage
							</a>
						</li> -->
					</ul>
				</div> <!--/.navbar-collapse -->
			</div> <!-- /.container -->
		</div> <!-- /.navbar -->
		<hr class="account-header-divider">
		<div class="account-wrapper">
			<div class="account-logo">
				<img src="<?php echo ROOT; ?>assets/img/logo-login.png" alt="Target Admin">
			</div>
			<div class="account-body">
				<h3 class="account-body-title">Selamat Datang di Aplikasi Manajemen Aset Desa.</h3>
				<h5 class="account-body-subtitle">Silakan Login</h5>
				<form class="form account-form" method="POST" action="">
					<div class="form-group">
						<label for="login-username" class="placeholder-hidden">Username</label>
						<input type="text" class="form-control" id="login-username" name="username" placeholder="Username" tabindex="1">
					</div> <!-- /.form-group -->
					<div class="form-group">
						<label for="login-password" class="placeholder-hidden">Password</label>
						<input type="password" class="form-control" id="login-password" name="password" placeholder="Password" tabindex="2">
					</div> <!-- /.form-group -->
					<div class="form-group clearfix">
						<!-- <div class="pull-left">
							<label class="checkbox-inline">
								<input type="checkbox" class="" value="" tabindex="3"> Selalu Masuk
							</label>
						</div> -->
						<div class="pull-right">
							<a href="#">Lupa Password ?</a>
						</div>
					</div> <!-- /.form-group -->
					<div class="form-group">
						<button type="submit" name="login" class="btn btn-primary btn-block btn-lg" tabindex="4">
							Masuk / Login &nbsp; <i class="fa fa-play-circle"></i>
						</button>
					</div> <!-- /.form-group -->
					<i>
<?php 
	if(isset($_POST['login'])) {
		$uss		= empty($_POST['username'])?'':htmlentities($_POST['username'],ENT_QUOTES,'utf-8');
		$pas		= empty($_POST['password'])?'':filter_var($_POST['password'], FILTER_SANITIZE_STRING);
		$username	= filter_var($uss,FILTER_SANITIZE_STRING);
		$username	= filter_var($uss,FILTER_SANITIZE_MAGIC_QUOTES);
		$pass		= filter_var($pas,FILTER_SANITIZE_MAGIC_QUOTES);

		$data = $user->getUserByUsername($username);
		$pass = md5(md5($pass.md5($pass)));

		$count=0;
		if($pass==$data['password']) {
			$count = $user->authUser($username);
			// $count = 1;
		}

		// Apabila username dan password ditemukan
		if ($count > 0) {
			@session_start();
			$_SESSION['username']		= $data['username'];
			$_SESSION['fullname'] 		= $data['fullname'];
			$_SESSION['email']    		= $data['email'];

			$_SESSION['login'] = 1;
			$sid_lama = session_id();
			session_regenerate_id();
			$sid_baru = session_id();
			$user->setSession($username,$sid_baru);

			header("location:".ROOT);
		} else {
			echo "Username dan password tidak cocok!";
			// echo $count."-".$pass."-".$data['password'];
		}
	}
?>
					</i>
				</form>
			</div> <!-- /.account-body -->
		</div> <!-- /.account-wrapper -->

		<script src="<?php echo ROOT; ?>assets/js/libs/jquery-1.10.1.min.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
		<script src="<?php echo ROOT; ?>assets/js/libs/bootstrap.min.js"></script>

		<!--[if lt IE 9]>
			<script src="./js/libs/excanvas.compiled.js"></script>
		<![endif]-->

		<!-- App JS -->
		<script src="<?php echo ROOT; ?>assets/js/target-admin.js"></script>

		<!-- Plugin JS -->
		<script src="<?php echo ROOT; ?>assets/js/target-account.js"></script>
	</body>
</html>


