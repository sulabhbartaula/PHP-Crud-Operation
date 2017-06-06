<!DOCTYPE html>
<html>
<head>
	<title>Backend of Update File</title>
</head>
<body>

<?php
$pid = $_POST['pid'];
$pname = $_POST['pname'];
$price = $_POST['price'];
$qty = $_POST['qty'];

$con = mysqli_connect("localhost","root","","acme");

$update_query = "UPDATE product SET name='$pname', quantity='$qty', price='$price' WHERE pid='$pid'";

$query_result = mysqli_query($con,$update_query);

if($query_result){
	echo "<script>alert('Update Sucessful')</script>";
	include('display.php');
}else{
	echo "Sorry, Update not Sucessful";
	include('display.php');
}


?>

</body>
</html>