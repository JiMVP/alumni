<?php

    include dirname(__DIR__)."/config.php";

    use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';

    if($_GET){

        $id=$_GET['id'];
        $sql=mysqli_query($con, "SELECT * FROM `alum-user` WHERE `id` = '$id'");
        $fetsql=mysqli_fetch_assoc($sql);
        $neverver=$fetsql['never_verified'];
        

        mysqli_query($con, "UPDATE `alum-user` SET `verified` = '1' WHERE `id` = '$id'");
        

        if($neverver!=0){

            mysqli_query($con, "UPDATE `alum-user` SET `never_verified` = '0' WHERE `id` = '$id'");
            mysqli_query($con, "INSERT INTO `alumacc`(`alum-user_id`) VALUES ('$id')");

            $lname=$fetsql['lname'];
            $fname=$fetsql['fname'];
            $mname=$fetsql['mname'];
            $suffix=$fetsql['suffix'];
            $campus=$fetsql['branch'];
            $email=$fetsql['email'];
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

            // header("location:/alumni/email.php?id=$id");
            // echo "localhost/alumni/loginusnpwd.php?id=$id";
            
        }       
        // echo "localhost/alumni/email.php?id=$id";
        
        header("location:/alumni/admin/admin.php");

    }else{
        header("location:/alumni/admin/admin.php?prompt=illegalaccess");
    }

?>