<?php
	require_once 'setting_server.php';
	$id_user = $_GET['id_user'];

	$query = "SELECT * FROM tb_daftar_service WHERE id_user='$id_user' AND status_service='1' ORDER BY tgl_service DESC";

	$sql = mysqli_query($con,$query);

	$ray = array();

	while ($row = mysqli_fetch_array($sql)){
		array_push($ray,array(
			"id_daftar_service" => $row['id_daftar_service'],
			"id_user" => $row['id_user'],
			"tgl_service" => $row['tgl_service'],
			"no_antri" => $row['no_antri'],
			"nohp" => $row['nohp'],
			"noplat" => $row['noplat'],
			"tipemobil" => $row['tipemobil'],
			"email" => $row['email'],
			"alamat" => $row['alamat'],
			"status_service" => $row['status_service'],
			"id_user_mekanik" => $row['id_user_mekanik'],
			"kerusakan_mobil" => $row['kerusakan_mobil'],
			"kerusakan" => $row['kerusakan'],
			"astimasi_kerusakan" => $row['astimasi_kerusakan'],
			"final_kerusakan" => $row['final_kerusakan'],
			"status_baca" => $row['status_baca']
			));
	}

	echo json_encode($ray);

	mysqli_close($con);

?>