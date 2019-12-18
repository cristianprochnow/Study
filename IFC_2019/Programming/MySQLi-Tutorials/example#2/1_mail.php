<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $call = $_POST['call'];
    $website = $_POST['website'];
    $priority = $_POST['priority'];
    $type = $_POST['type'];
    $message = $_POST['message'];
    $formcontent=" 
        From: $name 
        \n Phone: $phone 
        \n Website: $website
        \n Priority: $priority 
        \n Type: $type 
        \n Message: $message";
    $recipient = "YOUREMAIL@HERE.COM";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    // mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

    //Call Back: $call \n (line 10)

        echo "Obrigado!" . " - " . "<a href='1_blue_form.php' style='textdecoration: none; color: #ff0099;'>Voltar</a>";
?>