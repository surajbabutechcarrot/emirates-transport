<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/var/www/html/latinem/vendor/autoload.php'; // adjust path

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $secondname = $_POST["secondname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Check if reCAPTCHA response is empty
    if (empty($recaptchaResponse)) {
        echo "Please complete the reCAPTCHA.";
        exit();
    }

    // Verify reCAPTCHA
    $recaptchaSecret = '6Lfh7CQqAAAAAM04hg014oTgdnblekmjfyeT914x'; // Replace with your reCAPTCHA secret key
    $recaptchaVerifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptchaResponseKeys = json_decode(file_get_contents($recaptchaVerifyUrl . "?secret=$recaptchaSecret&response=$recaptchaResponse"), true);

    if ($recaptchaResponseKeys['success']) {
        // Send email using PHPMailer
        $mail = new PHPMailer(true);

        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp-mail.outlook.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'No-reply@latinem.in';
        $mail->Password = 'S0bh@@443!';
        $mail->SMTPSecure = 'tls'; // 'tls' or 'ssl' based on mail server
        $mail->Port = 587;

        // Sender and recipient settings
        $mail->setFrom('No-reply@latinem.in');
        $mail->addAddress("contactus@latinem.in");
        // $mail->addAddress("vishweshwer.perka@latinem.in");
        // $mail->addAddress("akash.lall@sobharealty.com");

        // Email content
        $mail->isHTML(false);
        $mail->Subject = "New Enquiry";
        $mail->Body = "Name: $name $secondname\n" .
                      "Email: $email\n" .
                      "Phone: $phone\n" .
                      "Message:\n$message";

                      try {
                        $mail->send();
                        header("Location: thank-you.php"); // Redirect to thank-you page
                        exit();
                    } catch (Exception $e) {
                        header("Location: error.php"); // Redirect to error page
                        exit();
                    }
    } else {
        echo "reCAPTCHA verification failed. Please try again.";
    }
}
?>