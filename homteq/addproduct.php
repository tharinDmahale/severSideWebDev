<?php
$pagename="Add Product";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

echo "<title>".$pagename."</title>";

echo "<body>";

include ("headfile.html");

echo "<h4>".$pagename."</h4>";

echo "<form action=addproduct_process.php method=post id='addproductform'>";
    echo "<table>";
    
        echo "<tr>";
            echo "<td>";
                echo "<p>Product name: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_productname size=5 maxlength=100 required>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Small picture name: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_smallpicturename size=5 maxlength=100 required>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Large picture name: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_largepicturename size=5 maxlength=100 required>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Small description: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_smalldescription size=5 maxlength=100 required>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Long description: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=text name=p_longdescription size=5 maxlength=100 required>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Price: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=number name=p_price min=1 size=5 required>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<p>Stock quantity: </p>";
            echo "</td>";
            echo "<td>";
                echo "<input type=number name=p_stockquantity min=1 size=5 required>";
            echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
                echo "<input type=submit name='submitbtn' value='ADD' id='submitbtn'>";
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
