<?php

    include dirname(__DIR__)."/config.php";

    if($_GET){

        $id=$_GET['id'];

        mysqli_query($con, "DELETE FROM `alum-user` WHERE `id`='$id';");
        echo "DROP SUCCESS (hopefully)";
        header("location:/alumni/admin/admin.php");

    }else{
        header("location:/alumni/admin/admin.php?prompt=illegalaccess");
    }

?>