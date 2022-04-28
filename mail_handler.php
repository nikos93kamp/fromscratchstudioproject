<?php
if(isset($_POST['submit'])){
    $to = "nkampouridis9@gmail.com"; // this is my Email address
    $from = $_POST['inputEmail']; // this is the sender's Email address
    $full_name = $_POST['inputName'];
    $city = $_POST['inputCity'];
    $postal_code = $_POST['inputPostalCode'];
    $address = $_POST['inputAddress'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $full_name . " wrote the following:" . "\n\n" . $_POST['inputMessage'];
    $message2 = "Here is a copy of your message " . $full_name . "\n\n" . $_POST['inputMessage'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";
    }
?>
