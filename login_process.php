<?php
session_start();
include("db.php");
$pagename="Your Login Results";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

echo "<title>".$pagename."</title>";

echo "<body>";

include ("headfile.html");

echo "<h4>".$pagename."</h4>";

//n

include("footfile.html");

echo "</body>";
?>