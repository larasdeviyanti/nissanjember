<?php
	require_once 'setting_server.php';
	class usr{}

	$id_user = $_POST['id_user'];
	$tgl_service = $_POST['tgl_servis'];
	$tanggal=date('Y-m-d', strtotime($tgl_service));
	$tanggaljam=$tanggal." ".date("h:i:s");
	$nohp = $_POST['nohp'];
	$noplat = $_POST['noplat'];
	$tipemobil = $_POST['tipemobil'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$kerusakan_mobil = $_POST['kerusakan_mobil'];
	


		$query = "select MAX(no_antri)+1 as no_antri from tb_daftar_service where tgl_service LIKE '%$tanggal%'";

		$sql = mysqli_query($con,$query);

		while ($row = mysqli_fetch_array($sql)){
			$noantri=$row['no_antri'];
		}

		if($noantri==""){
			$noantri=1;
		}






$cekmobil="";
		$querycek = "select * from tb_daftar_service where tgl_service LIKE '%$tanggal%' AND noplat='$noplat'";

		$sqlcek = mysqli_query($con,$querycek);

		while ($rowcek = mysqli_fetch_array($sqlcek)){
			$cekmobil=$rowcek['noplat'];
		}

		if($cekmobil!=""){
		$response = new usr();
		$response->success = 0;
		$response->message = "Mobil sudah terdaftar";
		die(json_encode($response));
		}

	$query = "INSERT INTO tb_daftar_service VALUES (' ', '$id_user', '$tanggaljam', '$noantri', '$nohp' , '$noplat' , '$tipemobil' , '$email' , '$alamat', '0', '0', '$kerusakan_mobil','-', '','', '0')";
	
	
	if (mysqli_query($con, $query)){

		$response = new usr();
		$response->success = 1;
		$response->message = "Berhasil Daftar";
		$response->noantri = $noantri;
		die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Gagal Daftar";
		die(json_encode($response));
	}
	
	mysqli_close($con);
?>