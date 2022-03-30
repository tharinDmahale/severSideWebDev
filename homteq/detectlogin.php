<?php

if(isset($_SESSION['userid']))
{
    echo "<p> ".$_SESSION['fname']." ".$_SESSION['sname'].", user type : ".$_SESSION['user_type'].", user ID : ".$_SESSION['userid']."</p>";
}

?>