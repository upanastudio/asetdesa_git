<?php
	class input_jij_model {
		private $db;

		public function __construct($database) {
			$this->db = $database;
		}

		public function countData() {
			$query = $this->db->prepare("SELECT * FROM `db_tablename`");

			try {
				$query->execute();
				return $query->rowCount();
			} catch(PDOException $e){
				$e->getMessage();
			}
		}

		public function getDataLengkap() {
			$query = $this->db->prepare("SELECT * FROM `db_tablename`");

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}

			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getDataById($id) {
			$query = $this->db->prepare("SELECT * FROM `db_tablename` WHERE `id` = :id");
			$query->bindParam(':id', $id, PDO::PARAM_INT);

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}

			return $query->fetch(PDO::FETCH_ASSOC);
		}

		public function getKodeBarangByKB($kb) {
			$query = $this->db->prepare("SELECT * FROM `tb_kode_barang` WHERE `kb_1` = :kb");
			$query->bindParam(':kb', $kb, PDO::PARAM_STR);

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}

			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function insertData($apa, $file_upload) {
			$query = $this->db->prepare("INSERT INTO `db_tablename` 	SET 	`apa` 			= :apa,
																				`file_upload` 	= :file_upload
			");

			$query->bindParam(':apa', $apa, PDO::PARAM_STR);
			$query->bindParam(':file_upload', $file_upload, PDO::PARAM_STR);
			
			try {
				$query->execute();
				return true;
			} catch(PDOException $e) {
				return	die($e->getMessage());
			}
		}

		public function updateData($apa, $file_upload, $id) {
			$query = $this->db->prepare("UPDATE `db_tablename` 	SET 		`apa` 			= :apa,
																			`file_upload` 	= :file_upload
																WHERE 		`id` = :id
			");

			$query->bindParam(':id', $id, PDO::PARAM_INT);
			$query->bindParam(':apa', $apa, PDO::PARAM_STR);
			$query->bindParam(':file_upload', $file_upload, PDO::PARAM_STR);

			try {
				$query->execute();
				return true;
			} catch(PDOException $e) {
				return	die($e->getMessage());
			}
		}

		public function deleteData($id) {
			$sql = "DELETE FROM `db_tablename` WHERE `id` = ?";
			$query = $this->db->prepare($sql);
			$query->bindValue(1, $id);

			try {
				$query->execute();
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}
	}
?>
