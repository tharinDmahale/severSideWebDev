<?php

if(isset($_SESSION['userid']))
{
    echo "<p>Welome ".$_SESSION['fname']." ".$_SESSION['sname']."</p>";
}

?>