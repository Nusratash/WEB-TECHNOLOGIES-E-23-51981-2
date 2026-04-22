<?php
session_start();
$usernameError = $_SESSION["usernameErr"] ?? "";
$emailError = $_SESSION["emailErr"] ?? "";
$passwordError = $_SESSION["passwordErr"] ?? "";
$confirmpasswordError = $_SESSION["confirmpasswordErr"] ?? "";

$username = $_SESSION["username"] ??"";
$email = $_SESSION["email"] ??"";
$password = $_SESSION["password"] ??"";
$confirmpassword = $_SESSION["confirmpassword"] ??"";


$registrationErr = $_SESSION["registrationErr"] ??"";



unset($_SESSION["usernameErr"]);
unset($_SESSION["emailErr"]);
unset($_SESSION["passwordErr"]);
unset($_SESSION["confirmpasswordErr"]);
unset($_SESSION["registrationErr"]);


?>
<html>
    <form method="post" action="../Controller/RegistrationValidation.php">
        <table>
            <h1>
                Registration form
            </h1>
            <tr>
                <td>User Name:</td>
                <td>
                    <input type="name" name="username" placeholder="Enter name">
                     <td><?php echo "$usernameError";?></td>
                </td>
            </tr>

             <tr>
                <td>Email:</td>
                <td>
                    <input type="email" name="email" placeholder="Enter email" >
                     <td><?php echo "$emailError";?></td>
                </td>
            </tr>

             <tr>
                <td>password:</td>
                <td>
                    <input type="name" name="password" placeholder="Enter password">
                     <td><?php echo "$passwordError";?></td>
                </td>
            </tr>

             <tr>
                <td>Confirm password:</td>
                <td>
                    <input type="name" name="confirm" placeholder="Confirm password">
                     <td><?php echo "$confirmpasswordError";?></td>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <p style="color:red;">
                        <?php echo "$registrationErr";?>
                    </p>
                </td>
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
