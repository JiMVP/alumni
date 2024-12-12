<?php
    include dirname(__DIR__)."/config.php";
    session_start();

    if(!(isset($_SESSION['admin-branch']))){
        header("location:login.html");
    }
    
    $adminbr = $_SESSION['admin-branch'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        ACLC 
        
        <?php 
    
    // if($adminbr == "Cebu")
    //     echo "Mandaue";
    // else
        echo $adminbr; 
    
    ?> 

        Admin 
    </title>
    <link rel="stylesheet" href="/alumni/index.css">
    <script src="https://kit.fontawesome.com/8a1d3beb0c.js" crossorigin="anonymous"></script>
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
                document.getElementById("admin-tb-a-x").style.display="block";
                document.getElementById("admin-tb-a-bars").style.display="none";
                document.getElementById("body").style.overflow="hidden";
            }else if(catstat == "block"){
                // document.getElementById("index-popup-selectedmenu").style.display="none";
                document.getElementById("index-popup-menu").style.display="none";
                document.getElementById("x").style.display="none";
                document.getElementById("bars").style.display="block";
                document.getElementById("admin-tb-a-x").style.display="none";
                document.getElementById("admin-tb-a-bars").style.display="block";
                document.getElementById("body").style.overflow="scroll";
            }else{
                // document.getElementById("index-popup-selectedmenu").style.display="block";
                document.getElementById("index-popup-menu").style.display="block";
                document.getElementById("x").style.display="block";
                document.getElementById("bars").style.display="none";
                document.getElementById("admin-tb-a-x").style.display="block";
                document.getElementById("admin-tb-a-bars").style.display="none";
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
                document.getElementById("admin-tb-a-x").style.display="none";
                document.getElementById("admin-tb-a-bars").style.display="block";
                document.getElementById("body").style.overflow="scroll";
            }
            // }	
            // document.getElementById("context").style.display="none";
        }
        function logout(){
            document.getElementById("admin-tb-menu-form").submit();
        }

        function rmuser(){
            document.getElementById("admin-cycpb-rm-form").submit();
        }
        
    
    </script>
</head>
<body id="body">
    <form id ="admin-tb-menu-form" action="logout.php" method="post" style="display:none"></form>
    <div class="admin-topbar">
		<div class="admin-tb-logo">
            <img src="/alumni/alum-images/aclclogo.png" alt="ACLC Logo">
            <a class="admin-tb-a" id="admin-tb-a-bars" href="#" onclick="popmenu()" onmouseover="barshover()"><div class="admin-tb-icon"><i class="fas fa-bars" id="bars"  style="font-size:50px;color:white"></i></div></a>
		    <a class="admin-tb-a" id="admin-tb-a-x" href="#" onclick="popmenu()" onmouseover="barshover()"><div class="admin-tb-icon"><i class="fas fa-xmark" id="x"  style="font-size:50px;color:white"></i></div></a>

            <div class="admin-tb-title">
                <B>
                    <?php
            
    

    if($adminbr == "Tacloban"){
        echo "ACLC TACLOBAN ADMIN";
    }else if($adminbr == "Ormoc"){
        echo "ACLC ORMOC ADMIN";
    }else if($adminbr == "Mandaue"){
        echo "ACLC MANDAUE ADMIN";
    }
            
                    ?>

                </B>

            </div>
        
        </div>
		
		<!-- <div class="tb-title"></div> -->
		<div class="admin-tb-menu">
			<a href="admin.php" ><div class="admin-tb-menu-opt">HOME</div></a>
			<a href="alumlist.php"><div class="admin-tb-menu-opt">ALUMNI LIST</div></a>
			<a href="#"><div class="admin-tb-menu-selectedopt">EVENTS & JOBS</div></a>
            <a href="#"><div class="admin-tb-menu-opt">GALLERY</div></a>
            <a href="#" onclick="logout()"><div class="admin-tb-menu-opt">LOG OUT</div></a>
			<!-- <a href="#"><div class="admin-tb-menu-opt">ABOUT</div></a> -->
			<!-- <a href="login.html"><div class="tb-menu-opt">Log In</div></a> -->
		</div>
	</div>
	<!-- <div class="index-popup-selectedmenu" id="index-popup-selectedmenu">
		
	</div> -->
	<div class="admin-popup-menu" id="index-popup-menu">
		<a href="#" onclick="cont_home()"><div class="admin-popmenu-selectedopt">HOME</div></a>		
		<a href="alumlist.php" ><div class="admin-popmenu-opt">ALUMNI LIST</div></a>		
		<a href="#" ><div class="admin-popmenu-opt">EVENTS & JOBS</div></a>	
        <a href="#" ><div class="admin-popmenu-opt">GALLERY</div></a>
        <a href="#" onclick="logout()"><div class="admin-popmenu-opt">LOG OUT</div></a>	
	</div>
    

        <?php
    
    

    // if($adminbr == "Tacloban"){

        ?>
<!--     
    <div class="tacadmin-masthd">

        <div class="tacadmin-mast-aclc-img">
			<img src="/alumni/alum-images/aclctaclogo2-tp.png" alt="ACLC COLLEGE">
			<div class="mast-title" style=""><img src="/alumni/alum-images/admin.png" alt="ADMIN"></div>
		</div>	

    </div> -->
        <?php

    // }else if($adminbr == "Ormoc"){

        ?>
<!-- 
    <div class="mocadmin-masthd">
        <div class="mocadmin-mast-aclc-img">
			<img src="/alumni/alum-images/aclcormoclogo-tp.png" alt="ACLC COLLEGE OF ORMOC">
			<div class="mast-title" style=""><img src="/alumni/alum-images/admin.png" alt="ADMIN"></div>
		</div>	
    </div> -->

        <?php

    // }else if($adminbr == "Mandaue"){

        ?>
<!-- 
    <div class="cebadmin-masthd">
        <div class="cebadmin-mast-aclc-img">
			<img src="/alumni/alum-images/aclccebulogo-tp2.png" alt="ACLC COLLEGE">
			<div class="mast-title" style=""><img src="/alumni/alum-images/admin.png" alt="ADMIN"></div>

		</div>	
    </div> -->

        <?php

    // }
        
        ?>

    <div class="std-contain">
        EVENTS
    </div>

</body>
</html>