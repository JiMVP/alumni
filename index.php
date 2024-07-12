<?php

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
    <div class="std-contain">
		<!-- <form id="tb-menu-form" action="logout.php" method="post">
		</form> -->
        
		
		<div class="index-masthd">
			<div class="mast-aclc-img"><img src="alum-images/namedaclclogo.jpg" alt="ACLC COLLEGE"></div>
			<div style="font-size: 40px;"><B>ALUMNI</B></div>
		</div>
		<!-- <div class="banner">BANNER</div> -->
		<div class="auxmenu">AUXILIARY MENU</div>
		<div class="index-content">
		<div class="index-cont-title">EVENTS</div>
			<div class="index-cont-events">
				

				<?php
				
for($i=0; $i<3; $i=$i+1){

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
			<div class="index-cont-title">JOBS</div>
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
							POST CONTENT SD						
						</div>
					</div>
				</div>

				<?php

}

				?>
				
			</div>
			<div class="index-cont-title">FEATURED ALUMNI</div>
			<div class="index-cont-featalum">

				<?php

$content = [
	"them mfkin roxxo got bitchslapped by azul the entire damn series",
	"azul sweeps roxxo 2-0 in dominance",
	"roxxo allegedly having connection issues despite biased commentary from the casters",
];
for($i=0; $i<3; $i=$i+1){

				?>

				<div class="index-cfa-contain">
					<div class="index-cfactn-post" onclick="window.location.href='login.html';">
						<div class="index-cfactn-postcover">
							<img src="alum-images/HIGHLIGHTS2.png" alt="HIGHLIGHTS2">
						</div>
						<div class="index-cfactn-posttitle">
							GAME 1 HIGHLIGHTS
						</div>
						<div class="index-cfactn-postcontent">
							<?php echo $content[$i]; ?>						
						</div>
					</div>
				</div>

				<?php

}

				?>

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
		</div>
	</div>
</body>
</html>