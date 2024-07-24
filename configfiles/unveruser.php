<?php

    include dirname(__DIR__)."/config.php";

    if($_GET){

        $id=$_GET['id'];

        mysqli_query($con, "UPDATE `alum-user` SET `verified` = '0' WHERE `id` = '$id'");
        mysqli_query($con, "INSERT INTO `alumacc`(`alum-user_id`) VALUES ('$id')");
        echo "localhost/alumni/loginusnpwd.php?id=$id";
        header("location:/alumni/admin/admin.php");

    }else{
        header("location:/alumni/admin/admin.php?prompt=illegalaccess");
    }

?>