<?php
session_start();
$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

if(!$username){
    $_SESSION["usernameErr"] = "Username is required";
    $hasUsernameError = true;
}
else{
    unset($_SESSION["usernameErr"]);
    $hasUsernameError = false;
}


if (!$password) {
    $_SESSION["passwordErr"] = "Password is required";
    $hasPasswordError = true;
}
else {
    unset($_SESSION["passwordErr"]);
    $hasPasswordError = false;
}


if($hasUsernameError || $hasPasswordError){
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;

    Header("Location: ../view/login.php");
}else{
   
            Header("Location: ../View/dashboard.php");
            exit();
        }
?>
?>
