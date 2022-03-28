<?php
session_start();
include("db.php");
$pagename="Your Login Results";

function authenticate($enteredPassword, $dbPassword)
{
    if ($enteredPassword == $dbPassword)
    {
        return true;
    }
    else
    {
        return false;
    }
}

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

echo "<title>".$pagename."</title>";

echo "<body>";

include ("headfile.html");

echo "<h4>".$pagename."</h4>";

$email = $_POST['userEmailField'];
$password = $_POST['userPasswordField'];

// test post
echo "<p>email: ".$email."</p>";
echo "<p>password: ".$password."</p>";

include("footfile.html");

echo "</body>";
?>