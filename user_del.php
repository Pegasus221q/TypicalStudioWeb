<?php

    include_once './session.php';
    include_once './database.php';


    if ($_SESSION != NULL)
    {
        $id = $_SESSION['user_id'];
    }
    else
    {
        header("Location: index.php");
    }


    $query = "DELETE FROM users WHERE id = '$id'";
    mysqli_query($link, $query);

    header("location:index.php");

?>