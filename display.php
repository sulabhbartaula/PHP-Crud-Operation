<!DOCTYPE html>
<html>
<head>
	<title>Display Page</title>
	
</head>
<body>
<h1>Display Products</h1><hr>
<?php

$con = mysqli_connect("localhost","root","","acme");

$query = "select pid,name,price,quantity from product";

$query_result = mysqli_query($con,$query);

echo "<table border='2'";
echo "<tr>";
echo "<th>";
echo "ID";
echo "</th>";
echo "<th>";
echo "Product Name";
echo "</th>";
echo "<th>";
echo "Product Price";
echo "</th>";
echo "<th>";
echo "Quantity";
echo "</th>";

echo "<th>";
echo "Action";
echo "</th>";

echo "</tr>";

while($row = mysqli_fetch_array($query_result)){
	$pid = $row['pid'];
	$name = $row['name'];
	$price = $row['price'];
	$qty = $row['quantity'];

	echo "<tr>";

	echo "<td>";
	echo $pid;
	echo "</td>";

	echo "<td>";
	echo $name;
	echo "</td>";

	echo "<td>";
	echo $price;
	echo "</td>";

	echo "<td>";
	echo $qty;
	echo "</td>";

	echo "<td>";
	echo "<a href='update.php?pid=$pid'>Update</a>";
	echo "  |  ";
	echo "<a href='delete.php?pid=$pid'>Delete</a>";
	echo "</td>";

	echo "</tr>";

}
echo "</table>";

?>
<hr>
<a href="index.php"><h1>Insert More Product</h1></a>

</body>
</html>