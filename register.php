<?php
session_unset();
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    //Validation checks
    if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION["error"] = "Please fill all the fields.";
        header("Location: index.php");
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["emailerror"] = "Please enter a valid email address.";
        header("Location: index.php");
        exit();
    }
    else if($password != $confirm_password) {
        $_SESSION["passerror"] = "Passwords do not match.";
        header("Location: index.php");
        exit();
    }
    else {
        $_SESSION["email"] = "$email";
        $_SESSION["password"] = "$password";
        
        //All validation checks passed
        //Process the registration data and redirect to welcome page
        //Code to insert data into database or any other action as required
        $_SESSION["fname"] = "$fname";
        header("Location: loginform.php");
        exit();
    }
}
?>
