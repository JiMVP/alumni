<?php

    include "config.php";
    session_start();
    if(!(isset($_SESSION["usn"]) && isset($_SESSION["id"]))){
        header("location:index.php");
    }
    $id=$_SESSION["id"];
    $usn=$_SESSION["usn"];
    $alumuserquery=mysqli_query($con, "SELECT * FROM `alumacc` WHERE `id`='$id' AND `usn`='$usn'");
    $fetchalumuser=mysqli_fetch_assoc($alumuserquery);
    $alumuserid=$fetchalumuser['alum-user_id'];
    $namequery=mysqli_query($con, "SELECT * FROM `alum-user` WHERE `id`='$alumuserid'");
    $fetchname=mysqli_fetch_assoc($namequery);
    $lname=$fetchname['lname'];
    $fname=$fetchname['fname'];
    $mname=$fetchname['mname'];
    $suffix=$fetchname['suffix'];
    $name="$lname, $fname, $mname";
    $bday=$fetchname['bday'];
    $bplace=$fetchname['bplace'];
    $conno=$fetchname['conno'];
    $email=$fetchname['email'];
    $address=$fetchname['address'];
    $branch=$fetchname['branch'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="alumfincss.css">
    <script>
        function popup(){
            var display = document.getElementById("popup-menu").style.display;
            var profdisplay = document.getElementById("popup-profmenu").style.display;
            if(profdisplay == "block"){
                document.getElementById("popup-profmenu").style.display="none";
            }
            if(display == "none"){
                document.getElementById("popup-menu").style.display="block";
                document.getElementById("body").style.overflow="hidden";
            }else if(display == "block"){
                document.getElementById("popup-menu").style.display="none";
                document.getElementById("body").style.overflow="scroll";
            }else{
                document.getElementById("popup-menu").style.display="block";
                document.getElementById("body").style.overflow="hidden";
            }
        }
        function profpopup(){
            var profdisplay = document.getElementById("popup-profmenu").style.display;
            var display = document.getElementById("popup-menu").style.display;
            if(display == "block"){
                document.getElementById("popup-menu").style.display="none";
            }else if(profdisplay == "none"){
                document.getElementById("popup-profmenu").style.display="block";
                document.getElementById("body").style.overflow="hidden";
            }else if(profdisplay == "block"){
                document.getElementById("popup-profmenu").style.display="none";
                document.getElementById("body").style.overflow="scroll";
            }else{
                document.getElementById("popup-profmenu").style.display="block";
                document.getElementById("body").style.overflow="hidden";
            }           
        }
        function logout(){
		    document.getElementById("tb-menu-form").submit();
	    }
    </script>
</head>

<body id="body">
    
    <div name="topbar-menu" class="menu-txtcolor user-colors menu-flex">

        <div class="menu-width-200px pos-abstat pos-left"><img class="menu-logo" src="alum-images/aclclogo.png" alt="ACLC Logo"></div>
                
        <a class="menu-btn-txtcolor user-btn-colors menu-padding popup-menu-dis menu-notxtdecor" onclick="popup()">MENU</a>
        <!-- <a class="menu-btn-txtcolor user-btn-colors menu-padding popup-menu-dis menu-notxtdecor" >PROFILE</a> -->
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="test.php">HOME</a>
        <!-- <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="">EVENTS</a> -->
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="alumni.php">ALUMNI</a>
        <!-- <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="">GALLERY</a> -->
        <!-- <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor pos-rel" href="">ABOUT</a> -->
        <form id="tb-menu-form" action="logout.php" method="post">
            <a class="menu-btn-txtcolor user-btn-colors menu-padding menu-block menu-notxtdecor pos-ab pos-right" onclick="logout()">LOG OUT</a>
        </form>
        <!-- <div class="menu-width-200px pos-ab pos-right"><img class="menu-logo" src="alum-images/aclclogo.png" alt="ACLC Logo"></div>   -->
    
    </div>
    
    <!-- <div><a href="">MENU BUTTON</a></div> -->
    
    <div name="popup-menu" id="popup-menu" class="popup-menu-fixed popup-menu-height popup-menu-opac menu-txtcolor user-colors menu-none popup-menu-width pos-sticky">

        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">HOME</a>
        <!-- <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">EVENTS</a> -->
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">ALUMNI</a>
        <!-- <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">GALLERY</a> -->
        <!-- <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">ABOUT</a> -->

    </div>
    <!-- <form id="tb-menu-form" action="logout.php" method="post">
    <div name="popup-profmenu" id="popup-profmenu" class="popup-menu-fixed popup-menu-height popup-menu-opac menu-txtcolor user-colors menu-none popup-menu-width pos-sticky">

        <a class="menu-btn-txtcolor user-selbtn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href=""><?php //echo $name; ?></a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" onclick="logout()">LOG OUT</a>

    </div>
    </form> -->

    <div class="std-contain">
        <!-- The profile outputs -->
        <?php 

echo "$alumuserid <br>";
echo "$name <br>";
echo "$bday <br>";
echo "$bplace <br>";
echo "$conno <br>";
echo "$email <br>";
echo "$address <br>";
echo "$branch <br>";

        ?>
        
    </div>

    <div name="footer" class="cont-bgcolor foot-flex foot-padding-top foot-padding-bot">
        <div class="foot-width">
            <img class="foot-img" src="alum-images/aclcimg-tr.png" alt="ACLC COLLEGE">
        </div>
        <div class="foot-width menu-txtalign-left user-txtcolor">Footer</div>
        <div class="foot-width menu-txtalign-left user-txtcolor">Footer</div>
    </div>

</body>
</html>