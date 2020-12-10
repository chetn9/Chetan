<!-- <?php
    // require 'phpmailer/phpmailer';

    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;
    // require 'PHPMailer-master/src/Exception.php';
    // require 'PHPMailer-master/src/PHPMailer.php';
    // require 'PHPMailer-master/src/SMTP.php';

    // $mail = new PHPMailer();
    // $mail->IsSMTP();
    // $mail->Mailer = "smtp";

    // $mail->SMTPDebug  = 1;  
    // $mail->SMTPAuth   = TRUE;
    // $mail->SMTPSecure = "tls";
    // $mail->Port       = 587;
    // $mail->Host       = "smtp.gmail.com";
    // $mail->Username   = "somaiyachetan15@gmail.com";
    // $mail->Password   = "smcgaacaphwzirun";

    // $mail->IsHTML(true);
    // $mail->SetFrom("somaiyachetan15@gmail.com", "Chetan Somaiya");
    // // $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
    // // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
    // $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
    // $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

    //     $mail->MsgHTML($content); 
    // if(!$mail->Send()) {
    // echo "Error while sending Email.";
    // var_dump($mail);
    // } else {
    // echo "Email sent successfully";

?> -->

<?php

/*ALTER TABLE suppliers AUTO_INCREMENT = 1;*/ //reset DB

if($_POST)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = 'personal_website';

    $con = mysqli_connect($servername, $username, $password, $dbname);

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $em= $_POST['em'];
    $msg = $_POST['msg'];

    $date = (new \DateTime("Asia/Kolkata"))->format('Y-m-d H:i:s');

    if(!empty ($fn && $ln && $em && $msg))
    {
        $q = "Insert into contact_data(First_Name,Last_Name,Email,Message,Date_Time) Values ('$fn','$ln','$em','$msg','$date')";
        $data = mysqli_query($con,$q);
    
        if($data)
        {
            echo "<script>alert('Thank You!');</script>";
            $to_mail = $em;
            $subject = "Thank You for Contact";
            $body = "Your Message Successfully Sent Chetan Somaiya..";
            $headers = "Hello $fn, ";
        
            if(mail($to_mail, $subject, $body, $headers))
            {
                echo "Email Send Successfully to $to_mail";
            }
            // header("Location: index.html");
        }
    }
}
else
{
    echo "<script>alert('Try Again!');</script>";
    header("Location: index.html");
}