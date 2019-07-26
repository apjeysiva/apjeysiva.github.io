<?php
    $name=$_POST['name'];
    $mailto = $_POST['email'];
    $mailSub = "APPOINTMENT CONFIRMATION";
    //$spec=$_POST['spec'];
    //$doc=$_POST['doc'];
    $date=$_POST['date'];
    //$msg=$_POST['msg'];
    $mailMsg = "Hi ".$name." your appointment is confirmed"." at ".$date;
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587; //
   $mail ->IsHTML(true);
   $mail ->Username = "apj.jey@gmail.com";
   $mail ->Password = "qwertyGREEN1.";
   $mail ->SetFrom("apj.jey@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);//$mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }





   

