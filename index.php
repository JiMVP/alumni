<?php

	include "config.php";
    // header("location:login.html");

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACLC Alumni</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
	<div class="index-topbar">
		<div class="index-tb-logo"><img src="alum-images/aclclogo.png" alt="ACLC Logo"></div>
		<!-- <div class="tb-title"></div> -->
		<div class="tb-menu">
			<a href="#"><div class="tb-menu-opt">HOME</div></a>
			<a href="register.html"><div class="tb-menu-opt">ALUMNI</div></a>
			<a href="#"><div class="tb-menu-opt">GALLERY</div></a>
			<a href="#"><div class="tb-menu-opt">ABOUT</div></a>
			<!-- <a href="login.html"><div class="tb-menu-opt">Log In</div></a> -->
		</div>
	</div>
	<div class="index-masthd">
		<div class="mast-aclc-img">
			<img src="alum-images/aclcimg-tr.png" alt="ACLC COLLEGE">
			<div class="mast-title" style=""><B>ALUMNI</B></div>
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
while($eventfet=mysqli_fetch_assoc($eventssql)){

	$cover=$eventfet['cover'];
	$title=$eventfet['title'];
	$post=$eventfet['post'];

					?>

					<div class="index-ce-contain">
						<div class="index-cectn-post" onclick="window.location.href='login.html';">
							<div class="index-cectn-postcover">
								<img src="alum-images/HIGHLIGHTS2.png" alt="HIGHLIGHTS2">
							</div>
							<div class="index-cectn-posttitle">
								POST TITLE
							</div>
							<div class="index-cectn-postcontent">
								POST CONTENT SD
							</div>
						</div>										
					</div>

					<?php

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
								<img src="alum-images/HIGHLIGHTS2.png" alt="HIGHLIGHTS2">
							</div>
							<div class="index-cjdctn-posttitle">
								POST TITLE
							</div>
							<div class="index-cjdctn-postcontent">
								Fadfasdfasdfaf adaf afsdfa fdafasd asdfaef asdfad sf adf asfadfadsf adfga sdf adfasf aeaafsd34es fa ee4f adfa sdfa dfae4fasdf aef afdasfd asfa sdfas dfasf dfdfdfdfd sfdfassaasasa fasdfsfasdfsafda asdf dfddasfadfasfadfadfs adsasdsaasasfdsfsdfadfasda sdasdf						
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
$featalumsql = mysqli_query($con, "SELECT * FROM `alum-user` WHERE 1");
// for($i=0; $i<3; $i=$i+1){
while($featalumfet=mysqli_fetch_assoc($featalumsql)){

	$lname = $featalumfet['lname'];
	$fname = $featalumfet['fname'];

					?>

					<div class="index-cfa-contain">
						<div class="index-cfactn-post" onclick="window.location.href='login.html';">
							<div class="index-cfactn-postcover">
								<img src="alum-images/HIGHLIGHTS2.png" alt="HIGHLIGHTS2">
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
			<div>Footer of the dying mel</div>
			<div>Mel is the only one makin the damned system</div>
			<div>For the sake of experience</div>
		</div>
		<div class="index-af-right-blk">
			alr they on block
			but not aligned on the left
			<br>
			(they are now)
		</div>
	</div>
</body>
</html>