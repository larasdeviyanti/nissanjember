<?php
	require_once 'setting_server.php';
	$id_user=$_GET['id_user'];
	$query = "SELECT * FROM tb_mobil  where id_user='$id_user' ORDER BY id_mobil";

	$sql = mysqli_query($con,$query);

	$ray = array();

	while ($row = mysqli_fetch_array($sql)){
		array_push($ray,array(
			"no_plat" => $row['no_plat']
			));
	}

	echo json_encode($ray);

	mysqli_close($con);

?>