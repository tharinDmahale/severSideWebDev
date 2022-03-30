<?php

session_start();
include ("db.php");

// This will deactivate the automatic error messaging that has been introduced since PHP 8.1 so that to allow for manual error handling.
mysqli_report(MYSQLI_REPORT_OFF);

$pagename="Add Product Results";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

echo "<title>".$pagename."</title>";

echo "<body>";

include ("headfile.html");

echo "<h4>".$pagename."</h4>";

// storing posted user signup data in variables
$productname = $_POST["p_productname"];
$smallpicturename = $_POST["p_smallpicturename"];
$largepicturename = $_POST["p_largepicturename"];
$smalldescription = $_POST["p_smalldescription"];
$longdescription = $_POST["p_longdescription"];
$price = $_POST["p_price"];
$stockquantity = $_POST["p_stockquantity"];

if (!empty($productname) && !empty($smallpicturename) && !empty($largepicturename) && !empty($smalldescription) && !empty($longdescription) && !empty($price) && !empty($stockquantity))
{
    $sql= "insert into product(prodName, prodPicNameSmall, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity) values('$productname', '$smallpicturename', '$largepicturename', '$smalldescription', '$longdescription', '$price', '$stockquantity')";
    mysqli_query($conn, $sql);

    if (mysqli_errno($conn) == 1062)
    {
        echo "<p>The name $productname already exists</p>";
        echo "<p></p>";
        echo "<p>Please go back to <a href='addproduct.php'>back</a></p>";
    }
    else if (mysqli_errno($conn) == 1064)
    {
        echo "<p>Invalid characters detected</p>";
        echo "<p></p>";
        echo "<p>Please go back to <a href='addproduct.php'>back</a></p>";
    }
    else if (mysqli_errno($conn) == 1054)
    {
        echo "<p>Invalid characters detected in number fields</p>";
        echo "<p></p>";
        echo "<p>Please go back to <a href='addproduct.php'>back</a></p>";
    }
    else
    {
        echo "<p>Product has been registered...</p>";
        echo "<p></p>";
        echo "<h4>Summary</h4>";
        echo "<ul>";
            echo "<li>Name: $productname</li>";
            echo "<li>Small Picture Name: $smallpicturename</li>";
            echo "<li>Large Picture Name: $largepicturename</li>";
            echo "<li>Small Desc: $smalldescription</li>";
            echo "<li>Large Desc: $longdescription</li>";
        echo "</ul>";
    }
}
else
{
    echo "<p>Some input fields are empty</p>";
    echo "<p></p>";
    echo "<p>Please go back to <a href='addproduct.php'>back</a></p>";
}

include("footfile.html");

echo "</body>";

?>
