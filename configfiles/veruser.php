<?php

    include dirname(__DIR__)."/config.php";

    // use PHPMailer\PHPMailer\PHPMailer;
	// use PHPMailer\PHPMailer\Exception;

	// require './PHPMailer/src/Exception.php';
	// require './PHPMailer/src/PHPMailer.php';
	// require './PHPMailer/src/SMTP.php';

    if($_GET){

        $id=$_GET['id'];
        $sql=mysqli_query($con, "SELECT * FROM `alumacc` WHERE `alum-user_id` = '$id'");
        $fetsql=mysqli_fetch_assoc($sql);
        $alumaccid=$fetsql['alum-user_id'];

        mysqli_query($con, "UPDATE `alum-user` SET `verified` = '1' WHERE `id` = '$id'");

        if($id!=$alumaccid){
            
            mysqli_query($con, "INSERT INTO `alumacc`(`alum-user_id`) VALUES ('$id')");
            header("location:/alumni/email.php?id=$id");
            // echo "localhost/alumni/loginusnpwd.php?id=$id";
            
        }
        // echo "localhost/alumni/email.php?id=$id";
        header("location:/alumni/admin/admin.php");

    }else{
        header("location:/alumni/admin/admin.php?prompt=illegalaccess");
    }

?>