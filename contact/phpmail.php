<?php 
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit'])){
    $to = "aminda.w@techcarrot.ae"; // this is your Email address 'mc@et.ae'
    $cc = "manaf.techcarrot@gmail.com, glady.cherish@techcarrot.ae";
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "ET Contact form - ".$_POST['subject'];
    $message = "First Name: ".$first_name."<br> Last Name: ".$last_name."<br> Email: ".$from."<br> Subject: ".$_POST['subject']."<br> Message: ".$_POST['message'];
    $headers = ['From' => $from, 'cc' =>  $cc, 'Reply-To' => $from, 'Content-type' => 'text/html; charset=iso-8859-1'];

    if($lang == "ar"){
        if($first_name && $from){
            if(mail($to, $subject, $message, $headers)){
                echo "<center>شكرا لك، سوف نتصل بك قريبا.</center>";
            }else{
                echo "<center>يرجى المحاولة مرة أخرى</center>";
            }
        }else{
            echo "<center>يرجى التحقق من الحقول</center>";
        }
    }else{
        if($first_name && $from){
            if(mail($to, $subject, $message, $headers)){
                echo "<center>Thank you " . $first_name . ", we will contact you shortly.</center>";
            }else{
                echo "<center>Please try again</center>";
            }
        }else{
            echo "<center>Please verify the fields</center>";
        }
    }
    



    
    /*
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    $mail = new PHPMailer(true);
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->SMTPDebug = 0;
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->SMTPSecure = 'ssl';
        $mail->Username   = 'manaf.techcarrot@gmail.com';           //SMTP username
        $mail->Password   = 'oodv hxpx fadt qjxz';                  //SMTP password
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->IsHTML(true);

        
    
        //Recipients
        $mail->setFrom($from);
        $mail->addAddress($to);
        $mail->addReplyTo($from);
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = strip_tags($message);
    
        $mail->send();
        echo 'Thank you, we will contact you shortly.';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    */


}
?>