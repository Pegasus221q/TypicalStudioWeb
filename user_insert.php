<?php
include_once './session.php';
include_once './database.php';

$first_name = mysqli_real_escape_string($link, $_POST['first_name']);
$last_name = mysqli_real_escape_string($link, $_POST['last_name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$pass1 = mysqli_real_escape_string($link, $_POST['pass1']);
$pass2 = mysqli_real_escape_string($link, $_POST['pass2']);



        
        
        
        if (!empty($first_name) && !empty($last_name) && !empty($email)
        && !empty($pass1) && ($pass1==$pass2))
        {

            $sql = "SELECT * FROM users where email='$email'";
        $resul=mysqli_query($link,$sql);
        $num = mysqli_num_rows($resul);
        
        if ($num !=0){ //If there is already such username...

            die("There is user with that email.");  // ...kill the script!
        } else {
                //vse ok
    $pass = $salt.$pass1;
    $pass = sha1($pass);
                $query = "INSERT INTO users(first_name,last_name,email,pass) "
            . "VALUES ('$first_name','$last_name','$email','$pass')";
    mysqli_query($link, $query);

    
    header('Location:  index.php');
    
}
        }
else {
    //preusmeritev nazaj
    header("Location: registration.php");
}
        
    

?>