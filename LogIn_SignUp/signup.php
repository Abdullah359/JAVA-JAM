<?php

include 'LogIn_SignUp/connect.php';

if(isset($_POST['signEmail'])){

    $fname=$_POST['firstName'];
    $lname=$_POST['lastName'];
    $signEmail=$_POST['signEmail'];
    $signPassword=$_POST['signPassword'];

    $insertSQL = "INSERT INTO `signup`(`id`, `First Name`, `Last Name`, `Email`, `Password`) 
    VALUES (Null,'$fname','$lname','$signEmail','$signPassword')";
    if($con->query($insertSQL)==TRUE)
    {
        header("location: loginSignup.php");
        // echo "mr ja tuz";
    }
    else{
        echo "mr ja tu ijaz";
    }

}
?>