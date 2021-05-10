<?php
    session_start();
    include_once './database.php';


    $name = $_SESSION['value1'];
    $visitor_email = $_SESSION['value2'];
    $subject = $_SESSION['value3'];
    $message = $_SESSION['value4'];
    $date =  date("l jS \of F Y");

        if (!filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";

            header("Location: contact.php");
}

    $query = "INSERT INTO support (email, username, subject, message, date, IsChecked) VALUES ('$visitor_email','$name','$subject','$message', '$date', '0')";

    mysqli_query($link, $query);



    $email_from = 'support@typicalstudio.com';
    $email_body = "User name: $name\n".
                    "User Email: $visitor_email\n".
                        "User Message: $message\n";
                    

    $email_body2 = ./postcard.php;

    $to = "support@typicalstudio.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to, $subject, $email_body, $headers);



    mail($visitor_email, $subject, $email_body2, $headers);






    header("Location: postcard.php");


    
?>