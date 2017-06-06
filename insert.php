<!DOCTYPE html>
<html>
<head>
	<title>Insert Module</title>
</head>
<body>

<?php
$pname = $_POST['pname'];
$price = $_POST['price'];
$qty = $_POST['qty'];

$con = mysqli_connect("localhost","root","","acme");

$query ="insert into product(name,price,quantity) values ('$pname','$price','$qty')";

$query_result = mysqli_query($con,$query);

if($query_result){
	echo "<script>alert('Insert Sucessful')</script>";
	include('display.php');
}else{
	echo "Try again . Transsaction not sucessful";
	include('index.php');
}





?>

</body>
</html>