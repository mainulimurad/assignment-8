<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Validation checks
    if(empty($email) || empty($password)) {
        echo "";
        $_SESSION["allfild"] = "Please fill all the fields.";
        header("Location: loginform.php");
        exit();
    }
    else {
        if($_SESSION["email"] == $email && $_SESSION["password"] == $password){
            $_SESSION["success"] = $_SESSION["fname"];
            header("Location: welcome.php");
            exit();
        }else{
            $_SESSION["invalid"] = "Invalid login credentials";
            header("Location: loginform.php");
            exit(); 
        }
        
    };
}