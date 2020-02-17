<?php
    session_start();
    
    $allowed = [''];
    
    
    if (!isset($_SESSION['user_id']) && 
            !in_array($_SERVER['REQUEST_URI'], $allowed)) {

    }


?>