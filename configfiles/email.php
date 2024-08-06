<?php

    include dirname(__DIR__)."/config.php";
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';

    // if(isset($_GET['id'])){

        $id=$_GET['id'];
        $getemail=mysqli_query($con, "SELECT * FROM `alum-user` WHERE `id`='$id'");
        $fetemail=mysqli_fetch_assoc($getemail);
        $lname=$fetemail['lname'];
        $fname=$fetemail['fname'];
        $mname=$fetemail['mname'];
        $suffix=$fetemail['suffix'];
        $campus=$fetemail['branch'];
        $email=$fetemail['email'];
        // echo $email;

        if($suffix == "N/A"){                       
            $fullname = "$lname, $fname $mname";                                                
        }else{                        
            $fullname = "$lname, $fname $mname $suffix";                         
        }
        
        $message="
            Hello, $fullname:<br><br>
            Your Alumni Registration has been verified by the ACLC $campus Registrar.<br>
            Please click the link below to create your ACLC Alumni Account:<br>
            localhost/alumni/loginusnpwd.php?id=$id
        ";

        $mail = new PHPMailer(true);
        $mail ->isSMTP();
        $mail ->Host = 'smtp.gmail.com'; //API authentication from host to port
        $mail ->SMTPAuth = true;
        $mail ->Username = 'melumnisys@gmail.com'; //the email address that will send a message
        $mail ->Password = 'llpxslrfoxlxuwew'; //Application password
        $mail ->Port = 465;
        $mail ->SMTPSecure = 'ssl';
        $mail->setFrom('melumnisys@gmail.com');
        $mail ->isHTML(true);
        $mail ->addAddress($email); //eamil that will recieve a message
        $mail ->Subject = ("ACLC Alumni Registration Verified!");
        $mail ->Body =$message;
        $mail ->send();

        echo $message;

        // header("location:admin/admin.php");

    // }

?>