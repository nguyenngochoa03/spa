<?php
namespace App\Models;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//require 'vendor/autoload.php';
require 'vendor/autoload.php';
//Create an instance; passing `true` enables exceptions

class Auth extends BaseModel{
    protected $table = 'accounts';
    public function authLogin($email, $password){
        $sql = "SELECT * FROM $this->table WHERE email = '$email' AND password = '$password'";
        $this->setQuery($sql);
        return $this->loadRow();
//        return $sql ;
    }
    public function register($id, $fullname, $email, $password, $address, $phone, $role){
        $sql = "INSERT INTO $this->table VALUES (?, ?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $fullname, $email, $password, $address, $phone, $role]);
    }
    public function forgotPassword($email){
        $sql = "SELECT * FROM $this->table WHERE email = ?";
        $this->setQuery($sql);
        return $this->loadRow([$email]);
    }
    public function sendEmail($title,$content,$email){
        $mail = new PHPMailer(true);
        try {
            //Server settings
            //    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'vanthanhbg7x.2003@gmail.com';                     //SMTP username
            $mail->Password   = 'jewfrwaylighaaip';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('no-reply@mono.com', 'MONO COMPANY');
            $mail->addAddress($email);     //Add a recipient


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $title ;
            $mail->Body    = $content;

            $mail->send();
            //    echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
}
?>
