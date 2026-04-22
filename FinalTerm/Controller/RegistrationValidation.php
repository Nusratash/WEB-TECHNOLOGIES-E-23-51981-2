<?php
session_start();
$username = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$confirmpassword = $_POST["confirm"] ?? "";


if(!$username){
    $_SESSION["usernameErr"] = "Username is required";
    $hasUsernameError = true;
}
else if(strlen($username)<3){
    $_SESSION["usernameErr"]="username must have 3 character";
    $hasUsernameError = true;
}
else{
    unset($_SESSION["usernameErr"]);
    $hasUsernameError = false;
}


if(!$email){
    $_SESSION["emailErr"] = "Email is required";
    $hasEmailError = true;
}
else if(!str_contains($email,"@")){
    $_SESSION["emailErr"]="enter a valid email";
    $hasEmailError = true;
}
else{
    unset($_SESSION["emailErr"]);
    $hasEmailError = false;
}


if (!$password) {
    $_SESSION["passwordErr"] = "Password is required";
    $hasPasswordError = true;
}
elseif (strlen($password) < 6) {
    $_SESSION["passwordErr"] = "Password must be at least 6 characters";
    $hasPasswordError = true;
} else {
    unset($_SESSION["passwordErr"]);
    $hasPasswordError = false;
}


if (!$confirmpassword) {
    $_SESSION["confirmpasswordErr"] = "Enter confirm password";
    $hasPasswordError = true;
} 
else if ($password !== $confirmpassword) {
    $_SESSION["confirmpasswordErr"] = "The confirm password does not match the password";
    $hasPasswordError = true;
} 
else {
    unset($_SESSION["confirmpasswordErr"]); 
    if (!$hasPasswordError) {
        $hasPasswordError = false;
    }
}


if($hasUsernameError || $hasEmailError || $hasPasswordError){
    $_SESSION["username"] = $username;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;

    Header("Location: ../view/registration.php");
}else{
   
            Header("Location: ../View/login.php");
            exit();
        }
?>
