<?php

	require_once('conn.php');
	



	if(isset($_POST['login-submit'])){

		$usn=$_POST['login-usn'];
		$pwd=$_POST['login-pwd'];

		$sql=mysqli_query($con, "SELECT * FROM `alumacc` WHERE `usn` = '$usn' AND `pwd`='$pwd'");
		$sqlfet=mysqli_fetch_assoc($sql);
		$fid=$sqlfet['id'];
		$falumid=$sqlfet['alum-user_id'];
		// echo $falumid;
		$fusn=$sqlfet['usn'];
		$fpwd=$sqlfet['pwd'];

		$getuser=mysqli_query($con, "SELECT `verified` FROM `alum-user` WHERE `id` = '$falumid'");
		$fetuser=mysqli_fetch_assoc($getuser);
		$verified=$fetuser['verified'];

		echo $fid;
		echo $falumid;
		// echo $fusn;
		// echo $fpwd;
		echo $verified;

		if($verified=='1'){
			if($usn==$fusn && $pwd==$fpwd){
				session_start();
				$_SESSION["usn"] = $usn;
				$_SESSION["id"] = $fid;
				header("location:test.php");
			}else{
				header("location:login.html?notif='Login Error'");
			}
			
		}else{
			header("location:login.html?notif='Account Unverified'");
		}
		
		

	}

	// if(isset($_POST['logout'])){
	// 	session_start();
	// 	session_unset();
	// 	session_destroy();
	// 	header("location:login.html");
	// }

	if(isset($_POST['reg-submit'])){

		// $regpwd=$_POST['reg-pwd'];
		// $conpass=$_POST['reg-conpass'];

		// if($conpass != $regpwd){
		// 	header("location:register.html?notif=conpasserror");
		// }

		$regusn=$_POST['reg-usn'];
		$reglname=$_POST['reg-lname'];
		$regfname=$_POST['reg-fname'];
		$regmname=$_POST['reg-mname'];
		$regsuffix=$_POST['reg-suffix'];
		// $reggend=$_POST['reg-gender'];
		// if($reggend=="Others"){
		// 	$reggend=$_POST['reg-gender-txt'];
		// }
		$regbday=$_POST['reg-bday'];
		$regbplace=$_POST['reg-bplace'];

		$regconno=$_POST['reg-conno'];
		$regemail=$_POST['reg-email'];
		$regadd=$_POST['reg-address'];

		$regcampus=$_POST['reg-campus'];
		// $regcampus=$_POST['reg-campus'];
		$regdegree=$_POST['reg-degree'];
		$regsygrad=$_POST['reg-sysgrad'];
		$reghonor=$_POST['reg-honor'];
		$regdatetime=date("Y-m-d H:i:s");

		mysqli_query($con, "INSERT INTO `alum-user` (
			`lname`, 
			`fname`, 
			`mname`, 
			`suffix`, 
			`usn`, 
			
			`bday`, 
			`bplace`, 
			`conno`, 
			`email`, 
			`address`, 
			`branch`, 
			`degree`,
			`SY`,
			`honors`, 
			`regdatetime`
		) 
		VALUES(
			'$reglname', 
			'$regfname', 
			'$regmname', 
			'$regsuffix', 
			'$regusn', 
			 
			'$regbday', 
			'$regbplace', 
			'$regconno',
			'$regemail', 
			'$regadd', 
			'$regcampus', 
			'$regdegree',
			'$regsysgrad',
			'$reghonor', 
			'$regdatetime'
		)");

		header("location:prompt.php?prompt=regsuccess");
		
	}

	if(isset($_POST['alumacc-submit'])){

		$alumaccid=$_POST['alumacc-id'];
		$alumaccusn=$_POST['alumacc-usn'];
		$alumaccpwd=$_POST['alumacc-pwd'];
		$alumaccconfpwd=$_POST['alumacc-confpwd'];
		if($alumaccpwd != $alumaccconfpwd){
			header("location:loginusnpwd.php?id=$alumaccid&prompt=confpwderror");
		}

		mysqli_query($con, "UPDATE `alumacc` SET `usn`='$alumaccusn', `pwd`='$alumaccpwd' WHERE `alum-user_id`='$alumaccid'");
		mysqli_query($con, "UPDATE `alum-user` SET `verified`=1, `never_verified`=0 WHERE `id`='$alumaccid'");
		header("location:login.html"); 



	}

	if(isset($_POST['admin-login-submit'])){
		// echo "config";
		$adminusn = array(
			
			"aclctac",
			"aclcormoc",
			"aclccebu",
		);
		$adminpwd = array(
			
			"admintac",
			"adminormoc",
			"admincebu",
		);

		// if($_POST['admin-login-usn'] == "admin" && $_POST['admin-login-pwd'] == "admin"){
		// 	header("location:admin.php?notif=failed");
		// 		}
		// for($i = 0; $i<3; $i++){
		// 	if($_POST['admin-login-usn'] == $adminusn[$i] && $_POST['admin-login-pwd'] == $adminpwd[$i]){
				
		if($_POST['admin-login-usn'] == $adminusn[0] && $_POST['admin-login-pwd'] == $adminpwd[0]){
			session_start();
			$_SESSION['admin-branch'] = "Tacloban";
			header("location:admin/admin.php");
		}elseif($_POST['admin-login-usn'] == $adminusn[1] && $_POST['admin-login-pwd'] == $adminpwd[1]){
			session_start();
			$_SESSION['admin-branch'] = "Ormoc";
			header("location:admin/admin.php");
		}elseif($_POST['admin-login-usn'] == $adminusn[2] && $_POST['admin-login-pwd'] == $adminpwd[2]){
			session_start();
			$_SESSION['admin-branch'] = "Mandaue";
			header("location:admin/admin.php");
		}else{
			header("location:admin/login.html?notif=loginfailed");
		}
			// } 
			// else if($_POST['admin-login-usn'] == "admin" && $_POST['admin-login-pwd'] == "admin"){
			// 	header("location:admin-login.html?notif=loginsuccess");
			// }
		// }
		
		

	}

	if(isset($_POST['admin-logout'])){
		session_start();
		session_unset();
		session_destroy();
		header("location:admin/login.html");
	}

?>
