<?php 
    session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: /Project-IT1-J-Resit-Y1/Login/protection.php");
        exit();
    }   
?>