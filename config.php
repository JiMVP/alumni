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
			session_start();
			$_SESSION["usn"] = $usn;
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
		$reggend=$_POST['reg-gender'];
		if($reggend=="Others"){
			$reggend=$_POST['reg-gender-txt'];
		}
		$regbday=$_POST['reg-bday'];
		$regbmuncit=$_POST['reg-birth-muncit'];
		$regbprov=$_POST['reg-birth-prov'];
		$regconno=$_POST['reg-conno'];
		$regemail=$_POST['reg-email'];
		$regsubd=$_POST['reg-subd'];
		$regbrgy=$_POST['reg-brgy'];
		$regmuncit=$_POST['reg-muncit'];
		$regprov=$_POST['reg-prov'];

		mysqli_query($con, "INSERT INTO `alum-user` (`lname`, `fname`, `mname`, `suffix`, `usn`, `pwd`, `gender`, `bday`, `bmuncit`, `bprov`, `conno`, `email`, `subd`, `brgy`, `muncit`, `prov`) VALUES('$reglname', '$regfname', '$regmname', '$regsuffix', '$regusn', '$regpwd', '$reggend', '$regbday', '$regbmuncit', '$regbprov', '$regconno', '$regemail', '$regsubd', '$regbrgy', '$regmuncit', '$regprov')");

		header("location:login.html");
		
	}

?>
