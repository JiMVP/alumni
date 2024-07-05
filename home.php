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
	<script src="https://kit.fontawesome.com/8a1d3beb0c.js" crossorigin="anonymous"></script>
	 <!-- <style>
		.logoutbtn input[type=submit]{
			height: 50px;
			font-size: 20px;
			border-radius: 10px;
		}
	 </style> -->
	
</head>
<body id="body">
	<form id="tb-menu-form" action="logout.php" method="post">
		<div class="topbar">
			<a class="tb-a" id="tb-a-bars" href="#" onclick="popmenu()" onmouseover="barshover()"><div class="tb-icon"><i class="fas fa-bars" id="bars"  style="font-size:34px;color:black"></i></div></a>
			<a class="tb-a" id="tb-a-x" href="#" onclick="popmenu()" onmouseover="barshover()"><div class="tb-icon"><i class="fas fa-xmark" id="x"  style="font-size:34px;color:black"></i></div></a>
			<div class="tb-title" id="tb-title"><b>ACLC ALUMNI</b></div>
			
			<div class="tb-menu">
				<a href="#" onclick="cont_home()"><div class="tb-menu-opt">Home</div></a>
				
				<a href="#" onclick="cont_dir()"><div class="tb-menu-opt">Directory</div></a>
			
				<a href="#" onclick="logout()"><div class="tb-menu-opt">Log Out</div></a>				
			</div>
			<div class="tb-profile">
				<a href="#" onclick="cont_prof()"><div class="tb-pf-opt">Profile</div></a>
			</div>
			
		
		
			
			<!-- <input type="submit" name="logout" id="logout" value="Log Out"> -->
		
		
		</div>
	</form>
	<div class="popup-tb-menu" id="popup-tb-menu">
		<a href="#" onclick="cont_home()"><div class="popup-tb-menu-opt">Home</div></a>
				
		<a href="#" onclick="cont_dir()"><div class="popup-tb-menu-opt">Directory</div></a>
			
		<a href="#" onclick="logout()"><div class="popup-tb-menu-opt">Log Out</div></a>		
	</div>
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
	function popmenu(){
		var catstat = document.getElementById("popup-tb-menu").style.display;
		var xlogo = document.getElementById("x").style.display;
		var barlogo = document.getElementById("bars").style.display;
		if(catstat == "none"){
			document.getElementById("popup-tb-menu").style.display="block";
			document.getElementById("x").style.display="block";
			document.getElementById("bars").style.display="none";
			document.getElementById("tb-a-x").style.display="block";
			document.getElementById("tb-a-bars").style.display="none";
			document.getElementById("body").style.overflow="hidden";
		}else if(catstat == "block"){
			document.getElementById("popup-tb-menu").style.display="none";
			document.getElementById("x").style.display="none";
			document.getElementById("bars").style.display="block";
			document.getElementById("tb-a-x").style.display="none";
			document.getElementById("tb-a-bars").style.display="block";
			document.getElementById("body").style.overflow="scroll";
		}else{
			document.getElementById("popup-tb-menu").style.display="block";
			document.getElementById("x").style.display="block";
			document.getElementById("bars").style.display="none";
			document.getElementById("tb-a-x").style.display="block";
			document.getElementById("tb-a-bars").style.display="none";
			document.getElementById("body").style.overflow="hidden";
		}
		
	}
	// function closepopmenu(){
	// 	document.getElementById("popup-tb-menu").style.display="none";
	// }
	function barshover(){
		document.getElementByClassName("fas fa-bars").style.color="grey";
	}
	function logout(){
		document.getElementById("tb-menu-form").submit();
	}
	function cont_home(){
		// if(document.getElementById("cont-home").style.display == "none"){
		document.getElementById("cont-home").style.display="block";
		document.getElementById("cont-dir").style.display="none";
		document.getElementById("cont-prof").style.display="none";

		if(document.getElementById("popup-tb-menu").style.display=="block"){
			document.getElementById("popup-tb-menu").style.display="none";
			document.getElementById("x").style.display="none";
			document.getElementById("bars").style.display="block";
			document.getElementById("tb-a-x").style.display="none";
			document.getElementById("tb-a-bars").style.display="block";
			document.getElementById("body").style.overflow="scroll";
		}
		// }	
		// document.getElementById("context").style.display="none";
	}
	function cont_dir(){
		// var getdir = document.getElementById("cont-dir").style.display;
		// if(getdir == "none"){
		document.getElementById("cont-dir").style.display="block";
		document.getElementById("cont-home").style.display="none";
		document.getElementById("cont-prof").style.display="none";
		if(document.getElementById("popup-tb-menu").style.display=="block"){
			document.getElementById("popup-tb-menu").style.display="none";
			document.getElementById("x").style.display="none";
			document.getElementById("bars").style.display="block";
			document.getElementById("tb-a-x").style.display="none";
			document.getElementById("tb-a-bars").style.display="block";
			document.getElementById("body").style.overflow="scroll";
		}
		// }	
		
	}
	function cont_prof(){
		document.getElementById("cont-prof").style.display="block";
		document.getElementById("cont-dir").style.display="none";
		document.getElementById("cont-home").style.display="none";
		if(document.getElementById("popup-tb-menu").style.display=="block"){
			document.getElementById("popup-tb-menu").style.display="none";
			document.getElementById("x").style.display="none";
			document.getElementById("bars").style.display="block";
			document.getElementById("tb-a-x").style.display="none";
			document.getElementById("tb-a-bars").style.display="block";
			document.getElementById("body").style.overflow="scroll";
		}
	}
</script>