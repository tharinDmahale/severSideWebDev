<?php

session_start();
include ("db.php");

// This will deactivate the automatic error messaging that has been introduced since PHP 8.1 so that to allow for manual error handling.
mysqli_report(MYSQLI_REPORT_OFF);

$pagename="Sign Up Results";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

echo "<title>".$pagename."</title>";

echo "<body>";

include ("headfile.html");

echo "<h4>".$pagename."</h4>";

// storing posted user signup data in variables
$firstname = $_POST["p_firstname"];
$surname = $_POST["p_surname"];
$address = $_POST["p_address"];
$postcode = $_POST["p_postcode"];
$telnumber = $_POST["p_telnumber"];
$email = $_POST["p_email"];
$password = $_POST["p_password"];
$password_confirmation = $_POST["p_confirm_password"];

if ($password == $password_confirmation)
{
    if (!empty($firstname) && !empty($surname) && !empty($address) && !empty($postcode) && !empty($firstname) && !empty($telnumber) && !empty($email) && !empty($password))
    {
        $sql= "insert into users(userFName, userSName, userAddress, userPostCode, userTelNo, userEmail, userPassword) values('$firstname', '$surname', '$address', '$postcode', '$telnumber', '$email', '$password')";

        if (mysqli_query($conn, $sql))
        {
            echo "<p>You have been registered...</p>";
        }
        else
        {
            echo "<p>But something went wrong...</p>";
        }
    }
    else
    {
        echo "<p>Some input fields are empty</p>";
        echo "<p></p>";
        echo "<p>Please go back to <a href='signup.php'>sign up</a></p>";
    }
    
}
else
{
    echo "<p>The password and password confirmation does not match</p>";
    echo "<p></p>";
    echo "<p>Please go back to <a href='signup.php'>sign up</a></p>";
}

include("footfile.html");

echo "</body>";

?>
