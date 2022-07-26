<?php
if(isset($_POST['submit'])){
    $mailto = "sarl.albehja@gmail.com"; //my email adresse
    //getting customer data
    $name = $_POST['name'];
    $type = $_POST['type-user'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $message = $_POST['your-message'];
    $subject = "Confirmation: message est envoyer successfully";

    //email body
    $body = "Name: $name\nType User: $type\nEmail: $email\nPhone: $phone\Service: $service\nMessage: $message";

    //Message for client confiramtion
    $message_for_client = "Thank you for contacting us. We will get back to you as soon as possible. \n\n You Submitted the following: \n\n $body";

    //Email Header
    $headers = "From: $email\r\n";
    $headers2 = "Reply-To: $email\r\n";

    //PHP mail function to send email
    $result1 = mail($mailto, $subject, $message_for_client, $headers);
    $result2 = mail($email, $subject, $body, $headers2);

    //if message is sent successfully
    if ($result1 && $result2) {
        $success = "Your message has been sent successfully";
        # code...
    }else{
        $failed = "Your message has not been sent, Try again Later";
    }
}
