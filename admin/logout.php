<?php

    session_start();

    if(isset($_SESSION["admin-branch"])){

        session_start();
		session_unset();
		session_destroy();
		header("location:/alumni");

    }


?>