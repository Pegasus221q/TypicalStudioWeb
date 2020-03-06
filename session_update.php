<?php

include_once './session.php';
include_once './database.php';

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM users WHERE (id = '$user_id')";
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
            $_SESSION['email']= $user['email'];
            $_SESSION['admin']=$user['admin'];
            $_SESSION['avatar']=$user['avatar'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['banner'] = $user['banner'];
            $_SESSION['pass'] = $user['pass'];

            header("location:user.php");
            
        }

?>