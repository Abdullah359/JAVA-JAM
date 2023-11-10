<?php
    include 'LogIn_SignUp/connect.php';

    session_start();
    
    session_unset();

    header("location:../loginSignup.php");
?>