<?php

if(isset($_SESSION['userid']))
{
    echo "<p>Welome ".$_SESSION['userid']."</p>";
}

?>