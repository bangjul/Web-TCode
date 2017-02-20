<?php
	
	require_once 'DB_Functions.php';
	$db = new Db_Functions();

	$response = array("error" => FALSE);

	if(isset($_POST['email']) && isset($_POST['password'])){
	//if(isset($_GET['email']) && isset($_GET['password'])){

		$email = $_POST['email'];
		$input_password = $_POST['password'];
		//$email = $_GET['email'];
		//$input_password = $_GET['password'];

	
		$user = $db->getUser_email_password($email, $input_password);

		if($user != false){
			$response["error"] = FALSE;
			$response["user"]["id_pegawai"] = $user["id_pegawai"];
			$response["user"]["username"] = $user["username"];
			$response["user"]["name"] = $user["name"];
			$response["user"]["email"] = $user["email"];
			echo json_encode($response);
		}else{
			$response["error"] = TRUE;
			$response["error_msg"] = "Email atau passwod yang anda masukan salah. Silahkan coba Lagi!";
			echo json_encode($response);
		}
	}else{
		$response["error"] = TRUE;
		$response["error_msg"] = "Email atau passwod tidak boleh kosong";
		echo json_encode($response);
	}

?>