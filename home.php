<?php
session_start();
if($_SESSION["usn"]==""){
	header("location:login.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alumni Information Management System</title>
	<link rel="stylesheet" href="alum.css">
	
</head>
<body>
	<div class="std-contain">
		<div class="topbar">
			<div >
				TOPBAR
			</div>
		</div>
		<div class="masthd">MASTHEAD</div>
		<div class="banner">BANNER</div>
		<div class="auxmenu">AUXILIARY MENU</div>
		<div class="content">CONTENT AREA</div>
		<div class="agenft">AGENCY FOOTER</div>
		<div class="stdft">STANDARD FOOTER</div>

	</div>
	

</body>
</html>