<?php

	$host = 'localhost';
	$host_user = 'root';
	$host_pass = '';
	$dbname = 'alumnidb';

	$con = mysqli_connect($host,$host_user,$host_pass,$dbname);

	if(!$conn){
		echo "Error\nCheck Database Connection";
	}

?>
