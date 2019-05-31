<?php
	require_once 'setting_server.php';
	class usr{}

	$nama_pengguna = $_POST['nama_pengguna'];
	$username = $_POST['username'];
	$password = $_POST['password'];


	$query = "INSERT INTO tb_user VALUES (' ', '$nama_pengguna', '$username' , '$password')";
	
	
	if (mysqli_query($con, $query)){
		$response = new usr();
		$response->success = 1;
		$response->message = "Berhasil Daftar";
				die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Gagal Daftar";
		die(json_encode($response));
	}
	
	mysqli_close($con);
?>