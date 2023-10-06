<?php
include('connect.php');
if(isset($_POST['submit'])){
	$name=$_POST['fullname'];
	$number=$_POST['phone_no'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$total=$_POST['total'];
	$item=$_POST['item'];
	$quantity=$_POST['quantity'];

}
mysqli_query($conn,"INSERT into customer(Fullname,Email,Phone,address,delivery,Total,quantity,item_name) values('$name','$email','$number','$address','$cass','$total','$quantity','$item')");
 header("location:buy.php");

?>
