<?php
session_start();
if(!(isset($_SESSION["usn"]) && isset($_SESSION["id"]))){
	header("location:login.html");
}
// echo $_SESSION["usn"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alumni Information Management System</title>
	<link rel="stylesheet" href="home.css">
	 <!-- <style>
		.logoutbtn input[type=submit]{
			height: 50px;
			font-size: 20px;
			border-radius: 10px;
		}
	 </style> -->
	
</head>
<body>
	<form id="tb-menu-form" action="logout.php" method="post">
		<div class="topbar">
			<div class="tb-menu">
				<a href="#" onclick="cont_home()"><div class="tb-menu-opt">Home</div></a>
				
				<a href="#" onclick="cont_dir()"><div class="tb-menu-opt">Directory</div></a>
			
				<a href="#" onclick="logout()"><div class="tb-menu-opt">Log Out</div></a>				
			</div>
			<div class="tb-profile">
				<a href="#" onclick="cont_prof()"><div class="tb-menu-opt">Profile</div></a>
			</div>
			
		
		
			
			<!-- <input type="submit" name="logout" id="logout" value="Log Out"> -->
		
		
		</div>
	</form>
	<div class="std-contain">
		<!-- <form id="tb-menu-form" action="logout.php" method="post">
			<div class="topbar">
				<div class="tb-menu">
					<div class="tb-menu-opt"><a href="#" onclick="cont_home()">Home</a></div>
					
					<div class="tb-menu-opt"><a href="#" onclick="cont_dir()">Directory</a></div>
				
					<div class="tb-menu-opt"><a href="#" onclick="logout()">Log Out</a></div>				
				</div>
				<div class="tb-profile">
					<div class="tb-menu-opt"><a href="#" onclick="cont_prof()">Profile</a></div>
				</div>
				
			
			
				
				
			
			
			</div>
		</form> -->
		<div class="masthd">MASTHEAD</div>
		<div class="banner">BANNER</div>
		<div class="auxmenu">AUXILIARY MENU</div>
		<div class="content">
			<div class="cont-home" id="cont-home">HOME</div>
			<div class="cont-dir" id="cont-dir">DIRECTORY</div>
			<div class="cont-prof" id="cont-prof">PROFILE</div>
		</div>
		<div class="agenft">AGENCY FOOTER</div>
		<div class="stdft">STANDARD FOOTER</div>

	</div>
	

</body>
</html>
<script>
	function logout(){
		document.getElementById("tb-menu-form").submit();
	}
	function cont_home(){
		// if(document.getElementById("cont-home").style.display == "none"){
			document.getElementById("cont-home").style.display="block";
			document.getElementById("cont-dir").style.display="none";
			document.getElementById("cont-prof").style.display="none";
		// }	
		// document.getElementById("context").style.display="none";
	}
	function cont_dir(){
		// var getdir = document.getElementById("cont-dir").style.display;
		// if(getdir == "none"){
			document.getElementById("cont-dir").style.display="block";
			document.getElementById("cont-home").style.display="none";
			document.getElementById("cont-prof").style.display="none";
		// }	
		
	}
	function cont_prof(){
		document.getElementById("cont-prof").style.display="block";
		document.getElementById("cont-dir").style.display="none";
		document.getElementById("cont-home").style.display="none";
	}
</script>