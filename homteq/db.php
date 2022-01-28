<?php
$dbhost = "phpmyadmin.ecs.westminster.ac.uk";
$dbuser = "w1833548";
$dbpass = "g3wVxIH7Ix9D";
$dbname = "w1833548_0";

// create a DB connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//if the DB connection fails, display an error message and exit
if (!$conn)
{
	die('Could not connect: ' . mysqli_error($conn));
}
//select the database
mysqli_select_db($conn, $dbname);
?>