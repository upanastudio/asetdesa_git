<?php
	class user_model {
		private $db;

		public function __construct($database) {
			$this->db = $database;
		}

		public function getUserByUsername($username) {
			$query = $this->db->prepare("SELECT * FROM `user` WHERE `username` = ?");
			$query->bindValue(1, $username);

			try {
				$query->execute();
				return $query->fetch();
			} catch(PDOException $e){
				$e->getMessage();
			}
		}

		public function authUser($username) {
			$query = $this->db->prepare("SELECT * FROM `user` WHERE `username` = ?");
			$query->bindValue(1, $username);

			try {
				$query->execute();
				return $query->rowCount();
			} catch(PDOException $e) {
				$e->getMessage();
			}
		}

		public function setSession($username, $session) {
			$query = $this->db->prepare("UPDATE `user` SET `id_session` = ? WHERE `username` = ?");

			$query->bindValue(1, $session);
		 	$query->bindValue(2, $username);

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function getSession($username) {
			$query = $this->db->prepare("SELECT `id_session` FROM `user` WHERE `username` = ?");

			$query->bindValue(1, $username);

			try {
				$query->execute();
				return $query->fetch();
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

		public function insertUser($username, $password, $level, $fullname, $foto, $email) {
			$query = $this->db->prepare("INSERT INTO `user`(`username`, `password`, `level`, `fullname`, `foto`, `email`) VALUES (?,?,?,?,?,?)");

			$query->bindValue(1, $username);
			$query->bindValue(2, $password);
			$query->bindValue(3, $level);
			$query->bindValue(4, $fullname);
			$query->bindValue(5, $foto);
			$query->bindValue(6, $email);

			try {
				$query->execute();
			} catch(PDOException $e){
				die($e->getMessage());
			}
		}

		public function getUsers() {
			$query = $this->db->prepare("SELECT * FROM `user`");

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}

			return $query->fetchAll();
		}

		public function deleteUser($id) {
			$sql = "DELETE FROM `user` WHERE `id` = ?";
			$query = $this->db->prepare($sql);
			$query->bindValue(1, $id);

			try {
				$query->execute();
			} catch(PDOException $e){
				die($e->getMessage());
			}
		}

		public function kirimEmailAdmin($isi) {
			$email1 = $this->getUsers();
			require '../PHPMailer/PHPMailerAutoload.php';

			foreach($email1 as $emailnya) {
				$email = $emailnya['email'];
				if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
					//kirim email
					$mail = new PHPMailer;
					$mail->isSMTP();
					$mail->SMTPDebug = 0;
					$mail->Debugoutput = 'html';
					$mail->Host = 'smtp.gmail.com';
					$mail->Port = 587;
					$mail->SMTPSecure = 'tls';
					$mail->SMTPAuth = true;
					$mail->Timeout     =   60; // set the timeout (seconds)
					$mail->Username = "bsmlregional4@gmail.com"; // username akun
					$mail->Password = "bsml4#123"; //password akun

					// syarat menggunakan smtp google:
					// 1. pastikan keamanan 2 langkah google telah mati(non aktif)
					// 2. pastikan konfigurasi 'akses untuk aplikasi tidak aman' diaktifkan
					$mail->SMTPKeepAlive = true; 
					$mail->setFrom('bsmlregional4@gmail.com', 'Notifikasi Website'); // oleh siapa
					$mail->addReplyTo($email, ''); //altermatif alamat
					$mail->addAddress($email, ''); // kesiapa mau dikirim

					$mail->Subject = "Disposisi"; // subyek ato judul
					$mail->Body = "anda mendapatkan 1 aspirasi baru: <br/>
								".$isi.". <br/>Silahkan buka halaman admin untuk memberi tanggapan 
								'"; //isi mail
					$mail->send(); 
				}
			}
		}
	}
?>
