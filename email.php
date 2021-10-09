<?php
$message_sent = false;
if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['message'])) {

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $phone = $_POST["phone"];
    $messageSubject = "Meddelande från prissankarna.se";
    $message = $_POST['message'];

    $to = "miran123125@gmail.com";
    $body = "";

    $body .= "From: " . $userName . "\r\n";
    $body .= "Email: " . $userEmail . "\r\n";
    $body .= "Message: " . $message . "\r\n";

    mail($to, $messageSubject, $body);

    $data = array(
        "body" => $body,
        "user_name" => $userName,
        "user_email" => $userEmail,
        "subject" => $messageSubject,
        "message" => $message
    );

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);

    $message_sent = true;
}
