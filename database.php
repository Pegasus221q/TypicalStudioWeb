<?php

$server = 'localhost';
$user = 'typicals';
$pass = 'SELECT*ts2020';
$db_name = 'typicals_typicalstudiov2';

$link = mysqli_connect($server, $user, $pass, $db_name);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($link, "SET NAMES 'utf8'");
$salt = 'dglkn349346$%dfh';
?>