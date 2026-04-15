<?php
session_start();
$name=$_POST["name"] ?? "";
$email=$_POST["email"] ?? "";
$cgpa=$_POST["cgpa"] ?? "";
$hasnameError=true;
$hasemailError=true;
$hascgpaError=true;

if(empty($name))
{
    $_SESSION["nameErr"]="Please fill name field";
}
else{
    $hasnameError=false;
}

if(empty($email))
{
    $_SESSION["emailErr"]="Please fill the email field";
}
else if(!str_contains($email,"@"))
{
    $_SESSION["emailErr"]="Please enter a valid email";
}
else{
    $hasemailError=false;
}

if(empty($cgpa)) 
{
    $_SESSION["cgpaErr"]="Please enter  cgpa";
}
else if($cgpa>4 || $cgpa<0)
{
    $_SESSION["cgpaErr"]="Please enter a valid cgpa";
}
else{
    $hascgpaError=false;
}

if($hasnameError||$hasemailError||$hascgpaError)
{
    $_SESSION["name"]=$name;
    $_SESSION["email"]=$email;
    $_SESSION["cgpa"]=$cgpa;

    header("Location: ../View/Form.php");
    exit();
}
    else{
        echo("Form Submitted successsfully");
    }

?>