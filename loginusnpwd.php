<?php

include "config.php";

if($_GET){

    $id=$_GET['id'];

    $usersql=mysqli_query($con, "SELECT * FROM `alum-user` WHERE `id`='$id'");
    if($userfet=mysqli_fetch_assoc($usersql)){
        $lname=$userfet['lname'];
        $fname=$userfet['fname'];
        $mname=$userfet['mname'];
        $mnamestr=substr($mname,0,1);
        if($mname!=""){
            $mnamestr=substr($mname,0,1).".";
        }
        // $mnameini=
        $suffix=$userfet['suffix'];

        if($suffix == "N/A"){
            $fullname="$fname $mnamestr $lname";
        }else{
            $fullname="$fname $mnamestr $lname $suffix";
        }

    }else{
        header("location:index.php?prompt=illegalaccess");
    }
    

    // $alumaccsql=mysqli_query($con, "SELECT * FROM `alumacc` WHERE `alum-user_id`='$id'");

    // mysqli_query($con, "UPDATE `alum-user` SET `verified` = '1' WHERE `id` = '$id'");
    // mysqli_query($con, "INSERT INTO `alumacc`(`alum-user_id`) VALUES ('$id')");
    // echo "EDIT SUCCESS (hopefully)";
    // header("location:/alumni/admin/admin.php");

}else{
    header("location:index.php?prompt=illegalaccess");
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACLC Alumni Registration</title>
    <link rel="stylesheet" href="index.css">
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
</head>
<body id="body" style="background-color: whitesmoke;">
    <div class="index-topbar">
		<div class="index-tb-logo"><img src="alum-images/aclclogo.png" alt="ACLC Logo"></div>
		<a class="tb-a" id="tb-a-bars" href="#" onclick="popmenu()" onmouseover="barshover()"><div class="tb-icon"><i class="fas fa-bars" id="bars"  style="font-size:50px;color:white"></i></div></a>
		<a class="tb-a" id="tb-a-x" href="#" onclick="popmenu()" onmouseover="barshover()"><div class="tb-icon"><i class="fas fa-xmark" id="x"  style="font-size:50px;color:white"></i></div></a>
		<!-- <div class="tb-title"></div> -->
		<div class="index-tb-menu">
			<a href="index.php" ><div class="tb-menu-opt">HOME</div></a>
			<a href="register.html"><div class="tb-menu-selectedopt">ALUMNI</div></a>
			<a href="#"><div class="tb-menu-opt">GALLERY</div></a>
			<a href="#"><div class="tb-menu-opt">ABOUT</div></a>
			<!-- <a href="login.html"><div class="tb-menu-opt">Log In</div></a> -->
		</div>
	</div>
	<!-- <div class="index-popup-selectedmenu" id="index-popup-selectedmenu">
		
	</div> -->
	<div class="index-popup-menu" id="index-popup-menu">
		<a href="index.php" onclick="cont_home()"><div class="index-popmenu-opt">HOME</div></a>
				
		<a href="register.html" ><div class="index-popmenu-selectedopt">ALUMNI</div></a>
			
		<a href="#" ><div class="index-popmenu-opt">GALLERY</div></a>
		<a href="#" ><div class="index-popmenu-opt">ABOUT</div></a>		
	</div>
    <div class="std-contain" style="background-color: whitesmoke;">
        <div class="reglogin-contain">
            <div class="regbox">
                <div class="reg-title">
                    <b>ACLC Alumni Account Configuration</b>
                    <!-- <div class="linklogin">Already registered? <a href="login.html">Log In</a></div> -->
                </div>
                
                <!-- <div class="regbox-txt-left"> -->
                    <form class="regform" action="config.php" method="POST">
                        <!--<div class="reg-form-title">
                            <b>Log In Information:</b>                                           
                        </div>
                        <div class="reglog-cin-form">
                            <label for="reg-usn">USN: </label>
                            <input type="text" name="reg-usn" required>
                        </div>
                        <!-- <br> 
                        <div class="reglog-cin-form">
                            <label for="reg-pwd">Password: </label>
                            <input type="password" name="reg-pwd" required>
                        </div>
                        <div class="reglog-cin-form">
                            <label for="reg-conpass">Confirm Password: </label>
                            <input type="password" name="reg-conpass" required>
                        </div>-->
                        
                        <!-- <hr width="50%"> -->
                        
                        <!-- <div class="reglog-cin-form">
                            <label for="reg-lname">Last Name, </label><label for="reg-fname">First Name, </label><label for="reg-mname">Middle Name, </label><label for="reg-suffix">Suffix:</label>
                        </div>
                        
                        <div class="reglog-cin-form">
                            <input type="text" name="reg-lname" placeholder="Last Name"><input type="text" name="reg-lname" placeholder="Last Name">
                        </div> -->
                        
                        <div class="reg-form-title">
                            <b>WELCOME, <?php echo $fullname; ?>!</b><br>
                            Create Your Username and Password For Logging In to Your ACLC Alumni Account.                                          
                        </div>
                        <div class="reglog-cin-form">
                            <!-- <label for="reg-lname">  </label>
                              -->
                            <!-- <div style="text-align:left">Enter Your Username and Password To Log In to Your Alumni Account.</div> -->
                            <!-- <input type="text" name="reg-lname" required> -->
                        </div>
                        
                        <!-- <div class="reglog-cin-form"> -->
                        <!-- <div class="reg-form-title">
                            <b>Name:</b>                                           
                        </div> -->
                        <!-- </div> -->
                        <div class="reglog-cin-form">
                            <input type="text" name="alumacc-id" value="<?php echo $id; ?>" style="display:none">
                            <label for="alumacc-usn">Username: </label>
                            <input type="text" name="alumacc-usn" required>
                        </div>
                        <div class="reglog-cin-form">
                            <label for="alumacc-pwd">Password: </label>
                            <input type="password" name="alumacc-pwd" required>
                        </div>
                        <div class="reglog-cin-form">
                            <label for="alumacc-confpwd">Confirm Password: </label>
                            <input type="password" name="alumacc-confpwd" required>
                        </div>
                        
                        <!-- <div class="reglog-cin-form">
                            <label for="reg-degree">Date (HIDDEN):</label>
                            <input type="datetime-local" name="reg-campus" value="" required>
                        </div> -->

                        <br>
                        <input type="submit" name="alumacc-submit" value="Save">
                    </form>
                <!-- </div> -->
                <br>
                <!-- <div class="linklogin">Already registered? <a href="login.html">Log In</a></div> -->
                <!-- <a href="index.php"><button>Back</button></a> -->
            </div>
        </div>
    </div>
    
    <?php
    
    include "alumfooter.php";
    
    ?>

</body>
</html>