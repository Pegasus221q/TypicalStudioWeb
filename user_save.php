<?php
    include_once './session.php';
    include_once './database.php';

    $first_name = mysqli_real_escape_string($link, $_POST['name']);
    $last_name = mysqli_real_escape_string($link, $_POST['lastname']);
    $username = mysqli_real_escape_string($link,$_POST['username']);
    $profilep = mysqli_real_escape_string($link, $_POST['pp']);
    $profileb = mysqli_real_escape_string($link,$_POST['pb']);

    




?>