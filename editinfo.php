<?php
session_start();
include('connect.php');
$id=$_SESSION['user_id'];
$sql=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from student where id ='$id'"));
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset style="width: 400px;transform: translateX(400px);">
<form method="POST">
	Name:<input type="text" name="name" value="<?php echo $sql["name"] ;?>"><br><br>
	Email:<input type="email" name="email" value="<?php echo $sql["email"] ;?>"><br><br>
	Address:<input type="text" name="address" value="<?php echo $sql["address"] ;?>"><br><br>
	Phonenumber:<input type="number" name="number" value="<?php echo $sql["phonenumber"] ;?>"><br><br>
	<input type="submit" name="ok" value="Enter">
</form>
</fieldset>
</body>
</html>
<?php
if(isset($_POST['ok'])){
	$name=$_POST["name"];
	$email=$_POST["email"];
	$address=$_POST["address"];
	$number=$_POST["number"];
	$data="UPDATE student set name='$name',email='$email',address='$address',phonenumber='$number' where id='$id'";
$resultUpdate=mysqli_query($conn,$data);
if(!$resultUpdate){
die(mysqli_error($con));
}
header("location:home.php");
}
?>
