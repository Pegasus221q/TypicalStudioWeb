<?php
    include_once './session.php';
    include_once './database.php';

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    if (!empty($email) && !empty($pass)) {
        //pripravimo geslo
        $pass = sha1($salt.$pass);
        $query = "SELECT * FROM users WHERE email='$email' AND pass='$pass'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) != 1) {
            //preusmeritev na login
            header("Location: login.php");
        }
        else {
            //vse je ok - naredi prijavo
            //rezultat select stavka - shrani v array
            $user = mysqli_fetch_array($result);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            
            //preusmeritev na login
            header("Location: index.php");
        }
    }
    else {
        //preusmeritev na login
        header("Location: login.php");
    }
?>