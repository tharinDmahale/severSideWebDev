<?php

session_start();
include ("db.php");

$pagename="Sign Up Results";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

echo "<title>".$pagename."</title>";

echo "<body>";

include ("headfile.html");

echo "<h4>".$pagename."</h4>";

// make

include("footfile.html");

echo "</body>";

?>
