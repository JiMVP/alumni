<?php

	require_once('conn.php');
	



	if(isset($_POST['login-submit'])){

		$usn=$_POST['login-usn'];
		$pwd=$_POST['login-pwd'];

		$sql=mysqli_query($con, "SELECT * FROM `alum-user` WHERE `usn` = '$usn'");
		$sqlfet=mysqli_fetch_assoc($sql);
		$fusn=$sqlfet['usn'];
		$fpwd=$sqlfet['pwd'];
		
		if($usn==$fusn && $pwd==$fpwd){
			header("location:home.php");
		}else{
			header("location:login.html");
		}

	}

?>
