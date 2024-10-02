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
    </script>
</head>
<body id="body">
    
    
    <div name="topbar-menu" class="menu-txtcolor user-colors menu-flex">

        <div class="menu-width-200px pos-abstat pos-left"><img class="menu-logo" src="alum-images/aclclogo.png" alt="ACLC Logo"></div>        
        <a class="menu-btn-txtcolor user-btn-colors menu-padding popup-menu-dis menu-notxtdecor" onclick="popup()">MENU</a>
        <a class="menu-btn-txtcolor user-selbtn-colors menu-padding main-menu-dis menu-notxtdecor" href="">HOME</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="">ALUMNI</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="">GALLERY</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="">ABOUT</a>
    
    </div>
    
    <!-- <div><a href="">MENU BUTTON</a></div> -->
    
    <div name="popup-menu" id="popup-menu" class="popup-menu-fixed popup-menu-height popup-menu-opac menu-txtcolor user-colors menu-none popup-menu-width pos-sticky">

        <a class="menu-btn-txtcolor user-selbtn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">HOME</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">ALUMNI</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">GALLERY</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">ABOUT</a>

    </div>
    <div name="masthead" class="mast-bgimg mast-height-auto mast-bgnorep mast-bgsize">
        <div class="mast-imgcon-padding mast-imgcon-width mast-opacity-1">
            <img class="mast-img-width" src="alum-images/aclcimg-tr.png" alt="ACLC COLLEGE">
            <div><img class="mast-img-width" src="alum-images/alumni.png" alt="ALUMNI"></div>
        </div>
    </div>

    

    <div class="std-contain">

        <div class="user-lightcolors title-padding">
        
            <div class="user-txtcolor title-fontsize title-padding"><b>FELLOW ACLC ALUMNI, DON'T MISS OUT ON OUR ALUMNI EVENTS</b></div>
            <div class="user-txtcolor padding-10px">REGISTER AND GET VERIFIED NOW!</div>
            <a class="menu-notxtdecor" href=""><div class="user-btn-colors  menu-btn-txtcolor  margin-sides-30% padding-10px">REGISTER</div></a>
            <div class="user-txtcolor padding-10px">ALREADY VERIFIED WITH AN ACLC ALUMNI ACCOUNT?</div>

            <!--TO PREVENT PADDINGS OVERLAPPING OTHER ELEMENTS, USE THEM FOR A TAG WITHIN A DIV. IF CANNOT, USE THE NEXT LINE AS AN EXAMPLE:-->
            <a class="menu-notxtdecor" href=""><div class="user-btn-colors menu-btn-txtcolor  margin-sides-30% padding-10px">LOG IN</div></a>
            <br>
        </div>
        
        <div class="user-txtcolor title-fontsize title-padding"><b>HIGHLIGHTS</b></div>

        <div class="cont-bgcolor title-padding">         
            <div >
                <img class="cont-img-width cont-img-maxwidth cont-img-maxheight" src="alum-images/aclclogo.png" alt="HIGHLIGHTS2">
            </div>          
            <div class="padding-10px">
                <div class="padding-10px user-txtcolor title-fontsize">TITLE</div>
                <div class="padding-10px">Contents</div>
            </div>
        </div>
        <br>
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
    <div name="footer" class="cont-bgcolor foot-flex foot-padding-top foot-padding-bot">
        <div class="foot-width">
            <img class="foot-img" src="alum-images/aclcimg-tr.png" alt="ACLC COLLEGE">
        </div>
        <div class="foot-width menu-txtalign-left user-txtcolor">Footer</div>
        <div class="foot-width menu-txtalign-left user-txtcolor">Footer</div>
    </div>
    
    <!-- HELLO

    <div class="red">HELLO</div>
    <div class="bgblue">HELLO</div>
    <div class="fontsize">HELLO</div>
    <div class="red bgblue fontsize">HELLO</div>
    <br>
    <br> -->
    

</body>
</html>