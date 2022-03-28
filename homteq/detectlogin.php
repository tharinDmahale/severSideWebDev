<?php

if(isset($_SESSION['userid']))
{
    echo "<p> ".$_SESSION['fname']." ".$_SESSION['sname']." Type:".$_SESSION['usertype']."</p>";
}

?>