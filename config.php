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

	if(isset($_POST['reg-submit'])){

		$regpwd=$_POST['reg-pwd'];
		$conpass=$_POST['reg-conpass'];

		if($conpass != $regpwd){
			header("location:register.html?notif=conpasserror");
		}

		$regusn=$_POST['reg-usn'];
		$reglname=$_POST['reg-lname'];
		$regfname=$_POST['reg-fname'];
		$regmname=$_POST['reg-mname'];
		$regsuffix=$_POST['reg-suffix'];

		mysqli_query($con, "INSERT INTO `alum-user` (`lname`, `fname`, `mname`, `suffix`, `usn`, `pwd`) VALUES('$reglname', '$regfname', '$regmname', '$regsuffix', '$regusn', '$regpwd')");

		header("location:login.html");
		
	}

?>
