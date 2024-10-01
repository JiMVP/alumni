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
        
        <div class="menu-width-200px"><img class="menu-logo" src="alum-images/aclclogo.png" alt="ACLC Logo"></div>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding popup-menu-dis menu-notxtdecor" onclick="popup()" href="#">MENU</a>
        <a class="menu-btn-txtcolor user-selbtn-colors menu-padding main-menu-dis menu-notxtdecor" href="">HOME</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="">ALUMNI</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="">GALLERY</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-padding main-menu-dis menu-notxtdecor" href="">ABOUT</a>
        
    </div>
    <!-- <div><a href="">MENU BUTTON</a></div> -->
    
    <div name="popup-menu" id="popup-menu" class="popup-menu-defaults menu-txtcolor user-colors menu-none popup-menu-width">

        <a class="menu-btn-txtcolor user-selbtn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">HOME</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">ALUMNI</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">GALLERY</a>
        <a class="menu-btn-txtcolor user-btn-colors menu-block menu-txtalign-left menu-padding menu-notxtdecor" href="">ABOUT</a>

    </div>
    <div class="std-contain">
        
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