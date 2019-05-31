<?php
	require_once 'setting_server.php';

	$query = "SELECT * FROM tb_kuis order by rand() limit 10";

	$sql = mysqli_query($con,$query);

	$ray = array();

	while ($row = mysqli_fetch_array($sql)){
		array_push($ray,array(
			"id_kuis" => $row['id_kuis'],
			"soal_kuis" => $row['soal_kuis'],
			"pertanyaan_a" => $row['pertanyaan_a'],
			"pertanyaan_b" => $row['pertanyaan_b'],
			"pertanyaan_c" => $row['pertanyaan_c'],
			"pertanyaan_d" => $row['pertanyaan_d'],
			"jawaban_benar" => $row['jawaban_benar']
			));
	}

	echo json_encode($ray);

	mysqli_close($con);

?>