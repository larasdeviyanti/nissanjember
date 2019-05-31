<?php
	require_once 'setting_server.php';
	class usr{}
	
	$id_daftar_service = $_POST["id_daftar_service"];
	
	$query = mysqli_query($con, "SELECT * FROM tb_daftar_service inner join tb_user_mekanik on (tb_daftar_service.id_user_mekanik=tb_user_mekanik.id_user_mekanik) WHERE tb_daftar_service.id_daftar_service='$id_daftar_service'");
	
	$row = mysqli_fetch_array($query);
	
	if (!empty($row)){
		$response = new usr();
		$response->success = 1;
		$response->id_daftar_service = $row['id_daftar_service'];
		$response->tgl_service = $row['tgl_service'];
		$response->no_antri = $row['no_antri'];
		$response->noplat = $row['noplat'];
		$response->tipemobil = $row['tipemobil'];
		$response->nama_mekanik = $row['nama_mekanik'];
		$response->status_service = $row['status_service'];
		$response->kerusakan_mobil = $row['kerusakan_mobil'];
		$response->kerusakan = $row['kerusakan'];
		$response->astimasi_kerusakan = $row['astimasi_kerusakan'];
		$response->final_kerusakan = $row['final_kerusakan'];
		die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "";
		die(json_encode($response));
	}
	
	mysqli_close($con);
?>