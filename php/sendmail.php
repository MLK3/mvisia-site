<?php
require("sendgrid-php/sendgrid-php.php");

$sendgrid = new SendGrid('azure_3309756fed60dd9d45f388fe25b04cca@azure.com', 'TkL7au157K4oJzK', array("turn_off_ssl_verification" => true));

echo $sendgrid;
$name=$_POST['name'];
echo $name;
$from=$_POST['email'];
echo from;
$message=$_POST['message'];
echo message;
if (($name!="")&&($email!="")&&($message!="")) {
    $email = new SendGrid\Email();
    $email
        ->addTo('contato@mvisia.com.br')
        ->setFrom($from)
        ->setSubject('Subject goes here')
        ->setText($message)
;
    $sendgrid->send($email);
}
?>