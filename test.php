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
    // $alumlogincnt=$fetchalumuser['logincount'];
    $namequery=mysqli_query($con, "SELECT * FROM `alum-user` WHERE `id`='$alumuserid'");
    $fetchname=mysqli_fetch_assoc($namequery);
    $lname=$fetchname['lname'];
    $fname=$fetchname['fname'];
    $mname=$fetchname['mname'];
    $name="$lname, $fname, $mname";
    $branch=$fetchname['branch'];
    // $getocc=mysqli_query($con, "SELECT * FROM `alumocc` WHERE `id`='$id' AND `alum-user_id`='$alumuserid'");
    // $fetocc=mysqli_fetch_assoc($getocc);
    // $occ=$fetocc['occupation'];
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
        <a class="menu-btn-txtcolor user-selbtn-colors menu-padding main-menu-dis menu-notxtdecor" href="">HOME</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="">EVENTS</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="alumni.php">ALUMNI</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="">GALLERY</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor pos-rel" href="">ABOUT</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding menu-block menu-notxtdecor pos-ab pos-right" onclick="profpopup()">PROFILE</a>
        <!-- <div class="menu-width-200px pos-ab pos-right"><img class="menu-logo" src="alum-images/aclclogo.png" alt="ACLC Logo"></div>   -->
    
    </div>
    
    <!-- <div><a href="">MENU BUTTON</a></div> -->
    
    <div name="popup-menu" id="popup-menu" class="popup-menu-fixed popup-menu-height popup-menu-opac menu-txtcolor user-colors menu-none popup-menu-width pos-sticky">

        <a class="menu-btn-txtcolor user-selbtn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">HOME</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">EVENTS</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="alumni.php">ALUMNI</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">GALLERY</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">ABOUT</a>

    </div>
    <form id="tb-menu-form" action="logout.php" method="post">
    <div name="popup-profmenu" id="popup-profmenu" class="popup-menu-fixed popup-menu-height popup-menu-opac menu-txtcolor user-colors menu-none popup-menu-width pos-sticky">

        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="profile.php"><?php echo $name; ?></a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" onclick="logout()">LOG OUT</a>

    </div>
    </form>
    <!-- <div name="masthead" class="mast-bgimg mast-height-auto mast-bgnorep mast-bgsize">
        <div class="mast-imgcon-padding mast-imgcon-width mast-opacity-1">
            <img class="mast-img-width" src="alum-images/aclcimg-tr.png" alt="ACLC COLLEGE">
            <div><img class="mast-img-width" src="alum-images/alumni.png" alt="ALUMNI"></div>
        </div>
    </div> -->

    

    <div class="std-contain">

        <!-- <?php
        
// if($occ==NULL){

//     ?>

//         <div name="occprompt" class="popup-menu-fixed user-colors">
//             OCC PROMPT
//         </div>

//     <?php

// }
        
        ?> -->

        <div class="user-txtcolor title-fontsize title-padding"><b>EVENTS</b></div>
        <div name="index-events-container" class="foot-flex">

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

        
            <div class="title-padding cont-width cont-padding">
                <div class="cont-bgcolor">         
                    <div >
                        <?php 
								
                        echo '<img class="cont-img-width cont-img-maxheight" src="data:image/jpeg;base64,'.base64_encode($cover).'" alt="Post Cover Image"/>'; 
                                // echo '<img src="image.php?id='.$id.'"/>';

                        ?>
                        <!-- <img class="cont-img-width cont-img-maxwidth cont-img-maxheight" src="alum-images/aclclogo.png" alt="HIGHLIGHTS2"> -->
                    </div>          
                    <div class="padding-10px">
                        <div class="padding-10px user-txtcolor title-fontsize"><?php echo "$title"; ?></div>
                        <div class="padding-10px"><?php echo substr($post,0,120)."..."; ?>	</div>
                    </div>
                </div>
            </div>
            <!-- <div class="title-padding cont-width cont-padding">
                <div class="cont-bgcolor">         
                    <div >
                        <img class="cont-img-width cont-img-maxwidth cont-img-maxheight" src="alum-images/aclclogo.png" alt="HIGHLIGHTS2">
                    </div>          
                    <div class="padding-10px">
                        <div class="padding-10px user-txtcolor title-fontsize">TITLE</div>
                        <div class="padding-10px">Contents</div>
                    </div>
                </div>
            </div>
            <div class="title-padding cont-width cont-padding">
                <div class="cont-bgcolor">         
                    <div >
                        <img class="cont-img-width cont-img-maxwidth cont-img-maxheight" src="alum-images/aclclogo.png" alt="HIGHLIGHTS2">
                    </div>          
                    <div class="padding-10px">
                        <div class="padding-10px user-txtcolor title-fontsize">TITLE</div>
                        <div class="padding-10px">Contents</div>
                    </div>
                </div>
            </div> -->
        

            <?php
	$i=$i+1;
	if(!($i<3)){
		break;
	}
}

		    ?>

        </div>
        <div class="user-txtcolor title-fontsize title-padding"><b>ALUMNI</b></div>
        <div class="foot-flex">

            <?php

// $content = [
// 	"them mfkin roxxo got bitchslapped by azul the entire damn series",
// 	"azul sweeps roxxo 2-0 in dominance",
// 	"roxxo allegedly having connection issues despite biased commentary from the casters",
// ];
$featalumsql = mysqli_query($con, "SELECT * FROM `alum-user` WHERE `verified`=1 AND `branch`='$branch' AND NOT `id`='$alumuserid'");
// for($i=0; $i<3; $i=$i+1){
$i=0;
while($featalumfet=mysqli_fetch_assoc($featalumsql)){

    $alumid = $featalumfet['id'];
	$alumlname = $featalumfet['lname'];
	$alumfname = $featalumfet['fname'];

			?>

            <a class="title-padding cont-width cont-padding" href="alumniprof.php?id=<?php echo $alumid; ?>">
                <div class="cont-bgcolor">         
                    <div >
                        <?php 
								
                        // echo '<img class="cont-img-width cont-img-maxwidth cont-img-maxheight" src="data:image/jpeg;base64,'.base64_encode($cover).'" alt="Post Cover Image"/>'; 
                                // echo '<img src="image.php?id='.$id.'"/>';

                        ?>
                        <img class="cont-img-width cont-img-maxheight" src="alum-images/aclclogo.png" alt="HIGHLIGHTS2">
                    </div>          
                    <div class="padding-10px">
                        <div class="padding-10px user-txtcolor title-fontsize"><?php echo "$alumlname, $alumfname"; ?></div>
                        <div class="padding-10px"><?php //echo substr($post,0,120)."..."; ?>	</div>
                    </div>
                </div>
            </a>

            <?php

	$i++;
	if(!($i<3)){
		break;
	}

}

			?>

        </div>
        
        <!-- <br>
        <div class="cont-bgcolor title-padding">         
            <div >
                <img class="cont-img-width cont-img-maxwidth cont-img-maxheight" src="alum-images/aclclogo.png" alt="HIGHLIGHTS2">
            </div>          
            <div class="padding-10px">
                <div class="padding-10px user-txtcolor title-fontsize">TITLE</div>
                <div class="padding-10px">Contents</div>
            </div>
        </div> -->

    </div>
    <?php
    
    include "alumfooter.php";
    
    ?>
    
    <!-- HELLO

    <div class="red">HELLO</div>
    <div class="bgblue">HELLO</div>
    <div class="fontsize">HELLO</div>
    <div class="red bgblue fontsize">HELLO</div>
    <br>
    <br> -->
    

</body>
</html>