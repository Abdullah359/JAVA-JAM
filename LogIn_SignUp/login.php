<?php

    include 'LogIn_SignUp/connect.php';

    if(isset($_POST['logEmail']) && isset($_POST['logPassword'])){
        
        session_start();

        $logEmail = $_POST['logEmail'];
        $logPassword = $_POST['logPassword'];

        $selectSQL = "SELECT * FROM signup where Email='$logEmail' AND Password='$logPassword'" ;

        $result = $con->query($selectSQL);

        if( $result->num_rows == 1 ){
            $_SESSION['email'] = $logEmail;
            header("location: home.php");
        }
        else{
            // header("location:index.php?login=Login_Failed!_Please_Try_Again.");
            echo "<div class='alert alert-danger' role='alert'>Try Again! Invalid login details.</div>";
        }
    }
?>