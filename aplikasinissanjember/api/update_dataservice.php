<?php
	require_once 'setting_server.php';
	class usr{}
	
	$id_daftar_service = $_POST["id_daftar_service"];
	$astimasi_kerusakan = $_POST['astimasi_kerusakan'];

	$query1 = "UPDATE tb_daftar_service SET astimasi_kerusakan='$astimasi_kerusakan' WHERE id_daftar_service='$id_daftar_service'";
	
	
	if (mysqli_query($con, $query1)){
		$response = new usr();
		$response->success = 1;
		$response->message = "Berhasil Simpan";
				die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Gagal Simpan";
		die(json_encode($response));
	}
	
	mysqli_close($con);
?>