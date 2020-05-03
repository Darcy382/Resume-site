<?php
if (isset($_POST['submit'])) {
    $name = $_POST['first']." ".$_POST['last'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "New Mail!";
    $mailTo = "kyledarcy24@icloud.com";
    $headers = "From: kyle@darcykyle.com";
    $txt = "You have received an e-mail from ".$name.".\n\n".$message."\n\nContact Information:\nPhone #: ".$phone."\nEmail: ".$email;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: mailsend.html");
}


