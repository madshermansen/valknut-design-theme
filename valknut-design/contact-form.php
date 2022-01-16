<?php
require_once('src/PHPMailer.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 
$project = $_POST['project']; 
echo "Hello world!" . $name;;
echo $name;
echo $email_address;
echo $message;
echo $project;

$email = new PHPMailer();
$email->SetFrom($email_address, $name); //Name is optional
$email->Subject   = "Valknut Design Submission";
$email->Body      = $project;
$email->AddAddress( 'mads.hermansen@valknut.design' );

$file_to_attach = $_POST['file']; ;

$email->AddAttachment( $file_to_attach , $file_to_attach );

return $email->Send();

?>