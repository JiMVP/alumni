<?php

    session_start();

    if(isset($_SESSION["id"]) && isset($_SESSION["usn"])){

        session_start();
		session_unset();
		session_destroy();
		header("location:login.html");

    }


?>