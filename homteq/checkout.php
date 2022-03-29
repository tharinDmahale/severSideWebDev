<?php
session_start();
$pagename="Checkout";
include ("db.php");
mysqli_report(MYSQLI_REPORT_OFF);
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

echo "<title>".$pagename."</title>";

echo "<body>";

include ("headfile.html");
include ("detectlogin.php");

echo "<h4>".$pagename."</h4>";

$currentdatetime = date('Y-m-d H:i:s');
$sql = "insert into orders(userId, orderDateTime, orderStatus) values(".$_SESSION ['userid'].", '".$currentdatetime."', 'Placed')";

$query = mysqli_query($conn, $sql) or die ("Runtime terminated");

if ($query)
{
    echo "<p>Query success!</p>";
}
else
{
    echo "<p>Query failed!</p>";
}

include("footfile.html");

echo "</body>";
?>
