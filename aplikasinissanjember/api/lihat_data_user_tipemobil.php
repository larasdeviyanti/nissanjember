<?php
	require_once 'setting_server.php';
	$id_user=$_GET['id_user'];
	$no_plat=$_GET['no_plat'];
	
	$query = "SELECT * FROM tb_mobil  where id_user='$id_user' AND no_plat='$no_plat' ORDER BY id_mobil";

	$sql = mysqli_query($con,$query);

	$ray = array();

	while ($row = mysqli_fetch_array($sql)){
		array_push($ray,array(
			"tipe_mobil" => $row['tipe_mobil']
			));
	}

	echo json_encode($ray);

	mysqli_close($con);

?>