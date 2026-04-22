<?php
session_start();
$usernameError = $_SESSION["usernameErr"] ?? "";
$passwordError = $_SESSION["passwordErr"] ?? "";

$username = $_SESSION["username"] ??"";
$password = $_SESSION["password"] ?? "";

$loginErr = $_SESSION["loginErr"] ??"";

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if($isLoggedIn){
    Header("Location: dashboard.php");
    exit();
}

unset($_SESSION["usernameErr"]);
unset($_SESSION["passwordErr"]);
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION["loginErr"]);
?>
<html>
    <form method="post" action="../Controller/LoginValidation.php">
        <table>
            <h1>Login</h1>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="name" name="name" placeholder="Enter the name ">
                   <td><?php echo "$usernameError";?></td>
                </td>
            </tr>
             <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="name" name="password" placeholder="Enter your password ">
                    <td><?php echo "$passwordError";?></td>
                </td>
            </tr>
            <tr>
                <td></td>
               <td><p style='color:red;'><?php echo "$loginErr";?></p></td>
            </tr>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>
        </table>
    </form>
</html>