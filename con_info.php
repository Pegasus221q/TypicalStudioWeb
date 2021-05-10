<?php
session_start();

$_SESSION["value1"] = $_POST["name"];
$_SESSION["value2"] = $_POST["email"];
$_SESSION["value3"] = $_POST["subject"];
$_SESSION["value4"] = $_POST["message"];

header("Location: contact-form-handler.php");

?>
