<?php

	require_once('conn.php');
	



	if(isset($_POST['login-submit'])){

		$usn=$_POST['login-usn'];
		$pwd=$_POST['login-pwd'];

		$sql=mysqli_query($con, "SELECT * FROM `alum-user` WHERE `usn` = '$usn'");
		$sqlfet=mysqli_fetch_assoc($sql);
		$fid=$sqlfet['id'];
		$fusn=$sqlfet['usn'];
		$fpwd=$sqlfet['pwd'];
		
		if($usn==$fusn && $pwd==$fpwd){
			session_start();
			$_SESSION["usn"] = $usn;
			$_SESSION["id"] = $fid;
			header("location:home.php");
		}else{
			header("location:login.html?notif='Login Error'");
		}

	}

	// if(isset($_POST['logout'])){
	// 	session_start();
	// 	session_unset();
	// 	session_destroy();
	// 	header("location:login.html");
	// }

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
		$reggend=$_POST['reg-gender'];
		if($reggend=="Others"){
			$reggend=$_POST['reg-gender-txt'];
		}
		$regbday=$_POST['reg-bday'];
		$regbplace=$_POST['reg-bplace'];

		$regconno=$_POST['reg-conno'];
		$regemail=$_POST['reg-email'];
		$regadd=$_POST['reg-address'];

		mysqli_query($con, "INSERT INTO `alum-user` (`lname`, `fname`, `mname`, `suffix`, `usn`, `pwd`, `gender`, `bday`, `bplace`, `conno`, `email`, `address`) VALUES('$reglname', '$regfname', '$regmname', '$regsuffix', '$regusn', '$regpwd', '$reggend', '$regbday', '$regbplace', '$regconno', '$regemail', '$regadd')");

		header("location:login.html");
		
	}

?>
