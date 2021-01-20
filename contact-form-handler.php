<?php
    include_once './database.php';


    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $date =  date("l jS \of F Y");



    $query = "INSERT INTO support (email, username, subject, message, date, IsChecked) VALUES ('$visitor_email','$name','$subject','$message', '$date', '0')";

    mysqli_query($link, $query);



    $email_from = 'support@typicalstudio.com';
    $email_body = "User name: $name\n".
                    "User Email: $visitor_email\n".
                        "User Message: $message\n";
                    

    $email_body2 = "We have reacived your message.\n".
                    "So please wait patiently for an awnser from one of our supports.\n".
                    "\n".
                    "Please confirm that this is your message: \n".
                    "$message";

    $to = "support@typicalstudio.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to, $subject, $email_body, $headers);



    mail($visitor_email, $subject, $email_body2, $headers);






    header("Location: contact.php");


    
?>