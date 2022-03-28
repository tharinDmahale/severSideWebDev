<?php
session_start();
$pagename="Sign Up";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

echo "<title>".$pagename."</title>";

echo "<body>";

include ("headfile.html");

echo "<h4>".$pagename."</h4>";

// login form
echo "<table>";
    echo "<form action='login_process.php' method='post'>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Email: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type='text' name='userEmailField' required/>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Password: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type='text' name='userPasswordField' required/>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<input type='reset' value='clear'/>";
            echo "</td>";
            echo "<td>";
                echo "<input type='submit' value='submit'/>";
            echo "</td>";
        echo "</tr>";

    echo "</form>";
echo "</table>";

include("footfile.html");

echo "</body>";
?>
