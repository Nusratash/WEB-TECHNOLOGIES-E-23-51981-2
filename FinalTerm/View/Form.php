<?php
session_start();
$nameError=$_SESSION["nameErr"] ??"";
$emailError=$_SESSION["emailErr"] ??"";
$cgpaError=$_SESSION["cgpaError"] ??"";

$name=$_SESSION["name"] ??"";
$email=$_SESSION["email"] ??"";
$cgpa=$_SESSION["cgpa"] ??"";


unset($_SESSION["nameErr"]);
unset($_SESSION["emailErr"]);
unset($_SESSION["cgpaErr"]);

?>
<html>
    <head>

    </head>
    <body>
        <h2>Form</h2>
        <form method="post" action= "../Controller/FormValidation.php">
            <table>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" placeholder="Enter Your name " value="<?php echo $name; ?>"/>
                    </td>
                    <td><p style='color:red;'><?php echo "$nameError";?></p></td>
                </tr>
                  <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email" placeholder="Enter Your Email " value="<?php echo $email; ?>"/>
                    </td>
                    <td><p style='color:red;'><?php echo "$emailError";?></p></td>
                </tr>
                <tr>
                    <td>CGPA</td>
                    <td>
                        <input type="number" name="cgpa" placeholder="Enter Your CGPA " value="<?php echo $cgpa; ?>"/>
                    </td>
                    <td><p style='color:red;'><?php echo "$cgpaError";?></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>