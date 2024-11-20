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
    $name="$lname, $fname, $mname";
    $branch=$fetchname['branch'];
    // echo $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="index.css" rel="stylesheet">
    <link rel="stylesheet" href="alumfincss.css">
    <style>
        .red{
            color: red;
        }
        .bgblue{
            background-color: darkblue;
        }
        .fontsize{
            font-size: 250px;
        }
    </style>
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
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="">EVENTS</a>
        <a class="menu-btn-txtcolor user-selbtn-colors menu-padding main-menu-dis menu-notxtdecor" href="alumni.php">ALUMNI</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="">GALLERY</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor pos-rel" href="">ABOUT</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding menu-block menu-notxtdecor pos-ab pos-right" onclick="profpopup()">PROFILE</a>
        <!-- <div class="menu-width-200px pos-ab pos-right"><img class="menu-logo" src="alum-images/aclclogo.png" alt="ACLC Logo"></div>   -->
    
    </div>
    
    <!-- <div><a href="">MENU BUTTON</a></div> -->
    
    <div name="popup-menu" id="popup-menu" class="popup-menu-fixed popup-menu-height popup-menu-opac menu-txtcolor user-colors menu-none popup-menu-width pos-sticky">

        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="test.php">HOME</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">EVENTS</a>
        <a class="menu-btn-txtcolor user-selbtn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="alumni.php">ALUMNI</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">GALLERY</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">ABOUT</a>

    </div>
    <form id="tb-menu-form" action="logout.php" method="post">
    <div name="popup-profmenu" id="popup-profmenu" class="popup-menu-fixed popup-menu-height popup-menu-opac menu-txtcolor user-colors menu-none popup-menu-width pos-sticky">

        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="profile.php"><?php echo $name; ?></a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" onclick="logout()">LOG OUT</a>

    </div>
    </form>

    <div class="std-contain">
        

        <?php

// $content = [
// 	"them mfkin roxxo got bitchslapped by azul the entire damn series",
// 	"azul sweeps roxxo 2-0 in dominance",
// 	"roxxo allegedly having connection issues despite biased commentary from the casters",
// ];
// $featalumsql = mysqli_query($con, "SELECT * FROM `alum-user` WHERE `verified`=1 AND `branch`='$branch' AND NOT `id`='$alumuserid'");
$featalumsql = mysqli_query($con, "SELECT * FROM `alum-user` WHERE `verified`=1 AND `branch`='$branch'");
// for($i=0; $i<3; $i=$i+1){

$i=0;

while($featalumfet=mysqli_fetch_assoc($featalumsql)){

    
    $alumid = $featalumfet['id'];
	$alumlname = $featalumfet['lname'];
	$alumfname = $featalumfet['fname'];

    if($i<6){

        if($i==0){

            ?>
    
        <div class="foot-flex">
            <div class="disflex">
    
            <?php
    
        }elseif($i==3){
            ?>
            <div class="disflex">
            <?php
        }

        ?>
        
            

            <a class="alum-padding alum-cont-width cont-padding" href="alumniprof.php?id=<?php echo $alumid; ?>">
                <div class="cont-bgcolor">
                    <div >
                        <?php 
                                
                        // echo '<img class="cont-img-width cont-img-maxwidth cont-img-maxheight" src="data:image/jpeg;base64,'.base64_encode($cover).'" alt="Post Cover Image"/>'; 
                                // echo '<img src="image.php?id='.$id.'"/>';

                        ?>
                        <img class="cont-img-width cont-img-maxheight" src="alum-images/aclclogo.png" alt="HIGHLIGHTS2">
                    </div>          
                    <div class="padding-10px">
                        <div class="padding-10px user-txtcolor alum-txtfontsize"><?php echo "$alumlname, $alumfname"; ?></div>
                        <div class="padding-10px"><?php //echo substr($post,0,120)."..."; ?>	</div>
                    </div>
                </div>
            </a>
            
            
        <?php

        

    }
    
    $i++;
    
    if($i==3){
        ?>
            </div>
        <?php
    }
    if($i==6){

        ?>

            </div>
        </div>
        
        <?php

        $i=0;

    }
	    
	// if(!($i<6)){
	// 	break;
}

if($i!=6){
    ?>
            </div>
        </div>

    <?php
}



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