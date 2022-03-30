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

$query = mysqli_query($conn, $sql) or die ("Runtime terminated code:1");

if ($query && isset($_SESSION['basket']) && (count($_SESSION['basket']) > 0))
{
    echo "<p>Order success!</p>";
    $sql2 = "select max(orderNo) as maxOrderNo, userId from orders where userId=".$_SESSION ['userid'];

    $query2 = mysqli_query($conn, $sql2) or die ("Runtime terminated code:2");
    $arrayo = mysqli_fetch_array($query2);

    $orderNo = $arrayo['maxOrderNo'];
    echo "<p>Order number : $orderNo</p>";

    $total = 0;

    echo "<table>";
        echo "<tr>";
            echo "<th>Product name</th>";
            echo "<th>Price</th>";
            echo "<th>Quantity</th>";
            echo "<th>Subtotal</th>";
        echo "</tr>";

        foreach ($_SESSION['basket'] as $index => $value)
        {
            $sql3 = "select prodId, prodName, prodPrice from product where prodId=$index";

            $query3 = mysqli_query($conn, $sql3) or die ("Runtime terminated code:3");
            $arrayb = mysqli_fetch_array($query3);

            $subtotal = ($arrayb['prodPrice'] * $value);

            $sql4 = "insert into order_line(orderNo, prodId, quantityOrdered, subTotal) values('".$orderNo."', '".$index."', '".$value."', '".$subtotal."')";
            mysqli_query($conn, $sql4) or die ("Runtime terminated code:4");

            echo "<tr>";
                echo "<td>".$arrayb['prodName']."</td>";
                echo "<td>".$arrayb['prodPrice']."</td>";
                echo "<td>".$value."</td>";
                echo "<td>".$subtotal."</td>";
            echo "</tr>";

            $total = ($total + $subtotal);
        }

        echo "<tr>";
            echo "<td colspan='3'>Total</td>";
            echo "<td>".$total."</td>";
        echo "</tr>";

        $sql5 = "update orders set orderTotal=$total where orderNo=$orderNo";
        mysqli_query($conn, $sql5) or die ("Runtime terminated code:5");
    echo "</table>";
}
else
{
    echo "<p>Order failed!</p>";
}

unset($_SESSION['basket']);

include("footfile.html");

echo "</body>";
?>
