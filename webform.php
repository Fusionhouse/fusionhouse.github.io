<?php
$message_sent = false;
if(isset($_POST['name'], FILTER_VALIDATE_EMAIL) ){

    // submit the form
    $userName = $_POST('name');
    $userEmail = $_POST('email');
    $messageSubject = $_POST('subject');
    $message = $_POST('message');

    $to = "info@fusionhouse.co.za";
    $body = "";

    $body .= "From: ".$userName. "\r\n";
    $body .= "Email: ".$userEmail. "\r\n";
    $body .= "Message: ".$message. "\r\n";

    //mail($to. $messageSobject.$body);

    $message_sent = True;

    else(
        $invalid_class_name = "form-invalid";
    )
}