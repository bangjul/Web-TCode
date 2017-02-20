<?php

	class DB_Functions{
		public function getUser_email_password($email, $input_password){
			require_once 'DB_Connect.php';
			$db = new DB_Connect();
			$stmt = $db->connect()->prepare("SELECT * FROM users WHERE email = ?");
			$stmt->bind_param("s",$email);

			if($stmt->execute()){
				$user = $stmt->get_result()->fetch_assoc();
				$stmt->close();
				$password = $user['password'];
				if($input_password == $password){
					return $user;
				}
			}else{
				return NULL;
			}
		}

		public function check_user_existency($email){
			$stmt = $this->conn->prepare("SELECT email FROM users WHERE email = ?");
			$stmt->bind_param("s",$email);
			$stmt->execute();
			$stmt->store_result();
			if($stmt->num_rows > 0){
				$stmt->close();
				return true;
			}else{
				$stmt->close();
				return false;
			}
		}

	}

?>