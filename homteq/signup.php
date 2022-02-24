<?php
$pagename="Sign Up";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

echo "<title>".$pagename."</title>";

echo "<body>";

include ("headfile.html");

echo "<h4>".$pagename."</h4>";

echo "<form action=signup_process.php method=post id='signupform'>";
    echo "<table>";
    
        echo "<tr>";
            echo "<td>";
                echo "<p>Firstname: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_firstname size=5 maxlength=100>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Surname: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_surname size=5 maxlength=100>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Address: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_address size=5 maxlength=200>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Postcode: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_postcode size=5 maxlength=20>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Telnumber: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_telnumber size=5 maxlength=20>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Email: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_email size=5 maxlength=100>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Password: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_password size=5 maxlength=100>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Confirm Password: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_confirm_password size=5 maxlength=100>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<input type=submit name='submitbtn' value='SIGN UP' id='submitbtn'>";
            echo "</td>";
            echo "<td>";
                echo "<input type=reset name='resetbtn' value='RESET' id='resetbtn'>";
            echo "</td>";
        echo "</tr>";

    echo "</table>";
echo "</form>";

include("footfile.html");

echo "</body>";
?>