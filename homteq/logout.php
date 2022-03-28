<?php
session_start();

$pagename="You are loggin out...";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

echo "<title>".$pagename."</title>";

echo "<body>";

include ("headfile.html");
include ("detectlogin.php");

echo "<h4>".$pagename."</h4>";

echo "<p>Thank You!</p>";
session_unset();
session_destroy();
echo "<p>Logged Out</p>";

include("footfile.html");

echo "</body>";

?>