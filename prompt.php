<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body style="background-color:whitesmoke">
    <div class="std-contain">
        <div class="reglogin-contain">
            <?php

if($_GET){

    $prompt=$_GET['prompt'];

    if($prompt=="regsuccess"){
            
            ?>
            <div class="loginbox">
                REGISTRATION SUCCESSFUL!
                <br>
                <br>
                Your information will be verified by the registrar of your branch.
                <br>
                Verification status will be sent to your email.
                <br>
                <br>
                Return to <a href="index.php">Home.</a>
            </div>

            <?php
     
    }
}else{
    header("location:index.php");
}            
            
            ?>

        </div>
    </div>
</body>
</html>