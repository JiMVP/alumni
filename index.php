<?php

	include "config.php";
    header("location:testcopy.php");

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACLC Alumni</title>
    <link rel="stylesheet" href="index.css">
	<script src="https://kit.fontawesome.com/8a1d3beb0c.js" crossorigin="anonymous"></script>
</head>
<body id="body">
	<div class="index-topbar">
		<div class="index-tb-logo"><img class="menu-logo" src="alum-images/aclclogo.png" alt="ACLC Logo"></div>
		<a class="tb-a" id="tb-a-bars" href="#" onclick="popmenu()" onmouseover="barshover()"><div class="tb-icon"><i class="fas fa-bars" id="bars"  style="font-size:50px;color:white"></i></div></a>
		<a class="tb-a" id="tb-a-x" href="#" onclick="popmenu()" onmouseover="barshover()"><div class="tb-icon"><i class="fas fa-xmark" id="x"  style="font-size:50px;color:white"></i></div></a>
		<!-- <div class="tb-title"></div> -->
		<div class="index-tb-menu">
			<a href="" ><div class="tb-menu-selectedopt">HOME</div></a>
			<a href="register.html"><div class="tb-menu-opt">ALUMNI</div></a>
			<a href="#"><div class="tb-menu-opt">GALLERY</div></a>
			<a href="#"><div class="tb-menu-opt">ABOUT</div></a>
			<!-- <a href="login.html"><div class="tb-menu-opt">Log In</div></a> -->
		</div>
	</div>
	<!-- <div class="index-popup-selectedmenu" id="index-popup-selectedmenu">
		
	</div> -->
	<div class="index-popup-menu" id="index-popup-menu">
		<a href="#" onclick="cont_home()"><div class="index-popmenu-selectedopt">HOME</div></a>
				
		<a href="register.html" ><div class="index-popmenu-opt">ALUMNI</div></a>
			
		<a href="#" ><div class="index-popmenu-opt">GALLERY</div></a>
		<a href="#" ><div class="index-popmenu-opt">ABOUT</div></a>		
	</div>
	<div class="index-masthd">
		<div class="mast-aclc-img">
			<img src="alum-images/aclcimg-tr.png" alt="ACLC COLLEGE">
			<div><img src="alum-images/alumni.png" alt="ALUMNI"></div>
		</div>
		
	</div>
    <div class="std-contain">
		<!-- <form id="tb-menu-form" action="logout.php" method="post">
		</form> -->
        
		
		
		<!-- <div class="banner">BANNER</div> -->
		<div class="auxmenu">AUXILIARY MENU</div>
		<div class="index-content">
			<div class="index-cont-title"><b>EVENTS</b></div>
				<div class="index-cont-events">
				

					<?php
				
$eventssql = mysqli_query($con, "SELECT * FROM `event-test` WHERE 1");
// for($i=0; $i<3; $i=$i+1){
$i = 0;
while($eventfet=mysqli_fetch_assoc($eventssql)){

	$id=$eventfet['id'];
	$cover=$eventfet['cover'];
	$title=$eventfet['title'];
	$post=$eventfet['post'];

					?>

					<div class="index-ce-contain">
						<div class="index-cectn-post" onclick="window.location.href='login.html';">
							<div class="index-cectn-postcover">
								<!-- <img src="alum-images/aclclogo.png" alt="HIGHLIGHTS2"> -->
								<?php 
								
									echo '<img src="data:image/jpeg;base64,'.base64_encode($cover).'" alt="Post Cover Image"/>'; 
									// echo '<img src="image.php?id='.$id.'"/>';

								?>
							</div>
							<div class="index-cectn-posttitle">
								<?php echo $title; ?>
							</div>
							<div class="index-cectn-postcontent">
								<?php echo substr($post,0,120)."..."; ?>	
							</div>
						</div>										
					</div>

					<?php
	$i=$i+1;
	if(!($i<3)){
		break;
	}
}

					?>
				<!-- <div class="index-ce-contain">
					<div class="index-cectn-post">
						<div class="index-cectn-postcover">
							POST COVER
						</div>
						<div class="index-cectn-posttitle">
							POST TITLE
						</div>
						<div class="index-cectn-postcont">
							POST CONTENT
						</div>
					</div>										
				</div>
				<div class="index-ce-contain">
					<div class="index-cectn-post">
						<div class="index-cectn-postcover">
							POST COVER
						</div>
						<div class="index-cectn-posttitle">
							POST TITLE
						</div>
						<div class="index-cectn-postcont">
							POST CONTENT SD
						</div>
					</div>
				</div> -->
				
				</div>
				<div class="index-cont-title"><b>JOBS</b></div>
				<div class="index-cont-jobdesc">

					<?php
				
for($i=0; $i<3; $i=$i+1){

					?>

					<div class="index-cjd-contain">
						<div class="index-cjdctn-post" onclick="window.location.href='login.html';">
							<div class="index-cjdctn-postcover">
								<img src="alum-images/aclclogo.png" alt="HIGHLIGHTS2">
							</div>
							<div class="index-cjdctn-posttitle">
								POST TITLE
							</div>
							<div class="index-cjdctn-postcontent">
								Post Content						
							</div>
						</div>
					</div>

					<?php

}

					?>
				
				</div>
				<div class="index-cont-title"><b>FEATURED ALUMNI</b></div>
				<div class="index-cont-featalum">

					<?php

// $content = [
// 	"them mfkin roxxo got bitchslapped by azul the entire damn series",
// 	"azul sweeps roxxo 2-0 in dominance",
// 	"roxxo allegedly having connection issues despite biased commentary from the casters",
// ];
$featalumsql = mysqli_query($con, "SELECT * FROM `alum-user` WHERE `verified`=1");
// for($i=0; $i<3; $i=$i+1){
$i=0;
while($featalumfet=mysqli_fetch_assoc($featalumsql)){

	$lname = $featalumfet['lname'];
	$fname = $featalumfet['fname'];

					?>

					<div class="index-cfa-contain">
						<div class="index-cfactn-post" onclick="window.location.href='login.html';">
							<div class="index-cfactn-postcover">
								<img src="alum-images/aclclogo.png" alt="Post Cover Image">
							</div>
							<div class="index-cfactn-posttitle">
								<?php echo $lname; ?>
							</div>
							<div class="index-cfactn-postcontent">
								<?php echo $fname; ?>						
							</div>
						</div>
					</div>

					<?php

	$i++;
	if(!($i<3)){
		break;
	}

}

					?>

				</div>
			</div>
		</div>
		
		<!-- <div class="stdft">STANDARD FOOTER</div> -->

	</div>
	<div class="index-agenft">
		<div class="index-af-left-blk">
			<div class="index-af-lb-img">
				<img src="alum-images/aclcimg-tr.png" alt="ACLC COLLEGE">
			</div>
			<!-- <img src="alum-images/aclclogo.png" alt="ACLC Logo"> -->
		</div>
		<div class="index-af-mid-blk">
			<div>Footer</div>
			<!-- <div>Mel is the only one makin the damned system</div> -->
			<!-- <div>For the sake of experience</div> -->
		</div>
		<div class="index-af-right-blk">
			<div>ACLC Footer</div>
			<!-- alr they on block -->
			<!-- but not aligned on the left -->
			<!-- <br> -->
			<!-- (they are now) -->
		</div>
	</div>
</body>
</html>
<script>

	function popmenu(){
		var catstat = document.getElementById("index-popup-menu").style.display;
		// var catstat2 = document.getElementById("index-popup-selectedmenu").style.display;
		var xlogo = document.getElementById("x").style.display;
		var barlogo = document.getElementById("bars").style.display;
		if(catstat == "none"){
			// document.getElementById("index-popup-selectedmenu").style.display="block";
			document.getElementById("index-popup-menu").style.display="block";
			document.getElementById("x").style.display="block";
			document.getElementById("bars").style.display="none";
			document.getElementById("tb-a-x").style.display="block";
			document.getElementById("tb-a-bars").style.display="none";
			document.getElementById("body").style.overflow="hidden";
		}else if(catstat == "block"){
			// document.getElementById("index-popup-selectedmenu").style.display="none";
			document.getElementById("index-popup-menu").style.display="none";
			document.getElementById("x").style.display="none";
			document.getElementById("bars").style.display="block";
			document.getElementById("tb-a-x").style.display="none";
			document.getElementById("tb-a-bars").style.display="block";
			document.getElementById("body").style.overflow="scroll";
		}else{
			// document.getElementById("index-popup-selectedmenu").style.display="block";
			document.getElementById("index-popup-menu").style.display="block";
			document.getElementById("x").style.display="block";
			document.getElementById("bars").style.display="none";
			document.getElementById("tb-a-x").style.display="block";
			document.getElementById("tb-a-bars").style.display="none";
			document.getElementById("body").style.overflow="hidden";
		}
		
	}
	function cont_home(){
		// if(document.getElementById("cont-home").style.display == "none"){
		// document.getElementById("cont-home").style.display="block";
		// document.getElementById("cont-dir").style.display="none";
		// document.getElementById("cont-prof").style.display="none";

		if(document.getElementById("index-popup-menu").style.display=="block"){
			document.getElementById("index-popup-menu").style.display="none";
			// document.getElementById("index-popup-selectedmenu").style.display="none";
			document.getElementById("x").style.display="none";
			document.getElementById("bars").style.display="block";
			document.getElementById("tb-a-x").style.display="none";
			document.getElementById("tb-a-bars").style.display="block";
			document.getElementById("body").style.overflow="scroll";
		}
		// }	
		// document.getElementById("context").style.display="none";
	}

</script>