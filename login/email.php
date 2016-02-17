<?php
	include("PHPMailer/PHPMailerAutoload.php"); 

	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = '74.125.200.108'; 
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Timeout     = 60; // set the timeout (seconds)
	$mail->Username = "sis.blh.pinrang@gmail.com"; // username akun
	$mail->Password = "@MonginsidiPinrang1"; //password akun

	// syarat menggunakan smtp google:
	// 1. pastikan keamanan 2 langkah google telah mati(non aktif)
	// 2. pastikan konfigurasi 'akses untuk aplikasi tidak aman' diaktifkan
	$mail->SMTPKeepAlive = true; 
	$mail->setFrom('englibrarygowa@gmail.com', 'Akun Administrator Perpustakaan Gowa'); // oleh siapa
	$mail->addReplyTo('sis.blh.pinrang@gmail.com', ''); //altermatif alamat
	$mail->addAddress('sis.blh.pinrang@gmail.com', ''); // kesiapa mau dikirim

	$mail->Subject = "Jadwal Pengembalian buku"; // subyek ato judul
	$mail->Body = "tes"; //isi mail
	$mail->send();
?>