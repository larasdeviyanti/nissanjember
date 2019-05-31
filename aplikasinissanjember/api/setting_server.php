<?php
	define('server','localhost');
	define('user','root');
	define('pass','');
	define('db','db_aplikasinissanjember');

	$con=mysqli_connect(server,user,pass,db);
	
	date_default_timezone_set('Asia/Jakarta');

?>