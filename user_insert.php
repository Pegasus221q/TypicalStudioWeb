<?php
include_once './session.php';
include_once './database.php';

$first_name = mysqli_real_escape_string($link, $_POST['first_name']);
$last_name = mysqli_real_escape_string($link, $_POST['last_name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$pass1 = mysqli_real_escape_string($link, $_POST['pass1']);
$pass2 = mysqli_real_escape_string($link, $_POST['pass2']);
     
$pass = $salt.$pass1;
$pass = sha1($pass);
        
        if (!empty($first_name) && !empty($last_name) && !empty($email)
        && !empty($pass1) && ($pass1==$pass2))
        {

            $sql = "SELECT * FROM users where email='$email'";
            $result = mysqli_query($link, $sql);
            // if($result == NULL)
            if(mysqli_num_rows($result) == 1)
            {
                //echo "User with this email exits!";
                header("Location: registration1.php");
            }else
            {


    $query = "INSERT INTO users (first_name, last_name, email, pass) VALUES ('$first_name','$last_name','$email','$pass')";

            mysqli_query($link, $query);
    header('Location:  login.php');
                
            }
            
}
        
else {
    //preusmeritev nazaj
    header("Location: registration.php");
}
        
    

?>