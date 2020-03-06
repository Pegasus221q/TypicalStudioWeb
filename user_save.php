<?php
    include_once './session.php';
    include_once './database.php';

    $user_id = $_SESSION['user_id'];

    $first_name = mysqli_real_escape_string($link, $_POST['name']);
    $last_name = mysqli_real_escape_string($link, $_POST['lastname']);
    $username = mysqli_real_escape_string($link,$_POST['username']);
    $profilep = mysqli_real_escape_string($link, $_POST['pp']);
    $profileb = mysqli_real_escape_string($link,$_POST['pb']);

    if($first_name != $_SESSION['first_name'])
    {
        $query = "UPDATE users SET first_name = '$first_name' WHERE (id = '$user_id')";

        mysqli_query($link, $query);
    }

    if($last_name != $_SESSION['last_name'])
    {
        $query1 = "UPDATE users SET last_name = '$last_name' WHERE (id = '$user_id')";

        mysqli_query($link, $query1);
    }

    if($username != $_SESSION['username'])
    {
        $query2 = "UPDATE users SET username = '$username' WHERE (id = '$user_id')";

        mysqli_query($link, $query2);

    }

    header("location:session_update.php");

?>