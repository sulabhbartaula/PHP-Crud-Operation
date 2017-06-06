<?php
$pid = $_GET['pid'];

$con = mysqli_connect("localhost","root","","acme");

$query = "select pid,name,price,quantity from product where pid=$pid";

$query_result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($query_result)){
	$pid = $row['pid'];
	$name = $row['name'];
	$price = $row['price'];
	$qty = $row['quantity'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
</head>
<body>
<h2>Update Record</h2><hr>

<form method="post" action='updatepro.php'>
	
<table>

<tr>
	<td>Product ID :</td>
	<td><input type="text" name="pid" value="<?php echo $pid ?>"></td>
</tr>

<tr>
	<td>Product Name :</td>
	<td><input type="text" name="pname" value="<?php echo $name ?>"></td>
</tr>

<tr>
	<td>Unit Price :</td>
	<td><input type="text" name="price" value="<?php echo $price ?>"></td>
</tr>

<tr>
	<td>Quantity :</td>
	<td><input type="text" name="qty" value="<?php echo $qty ?>"></td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" value="Update"></td>
</tr>
	
</table>
</form>


</body>
</html>