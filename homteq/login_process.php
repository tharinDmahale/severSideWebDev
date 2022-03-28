<?php
session_start();
include("db.php");
$pagename="Your Login Results";

function authenticate($valueA, $valueB)
{
    if ($valueA == $valueB)
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

$query = "select * from users where userEmail='".$email."'";
$result = mysqli_query($conn, $query);
$rows = mysqli_num_rows($result);
$arrayp = mysqli_fetch_array($result);

if ($rows == 0)
{
    echo "<p>Email not recognized, please try again</p>";
}
else
{
    if (!authenticate($password, $arrayp['userPassword']))
    {
        echo "<p>Invalid password!</p>";
    }
    else
    {
        echo "<p>Logged in!</p>";

        $_SESSION['userid'] = $arrayp['userId'];
        $_SESSION['fname'] = $arrayp['userFName'];
        $_SESSION['sname'] = $arrayp['userSName'];
        $_SESSION['usertype'] = "customer";

        echo "<p>Welcome ".$_SESSION['usertype']." ".$_SESSION['usertype']." ".$_SESSION['fname']." ".$_SESSION['sname']."</p>";
    }
}

include("footfile.html");

echo "</body>";
?>