<?php
include('connect.php');
$data=mysqli_query($conn,"SELECT * FROM customer ORDER BY id DESC LIMIT 1");?>
<h1 style="text-align: center; ">!THANK YOU!</h1>
<div class="container text-center mt-5 py-5">
            <h3 style="color:blue;text-align: center;">YOUR ORDER HAS BEEN PLACED SUCCESFULLY</h3>
            <hr>
             
        </div>
		<style>
	table,
	th,
	td,
	tr {
		border: 1px solid;
		border-collapse: collapse;
		width: 60%;
		font-size: 20px;
		text-align: center;
		padding: 10px;
		padding-left: 15px;
		padding-right: 15px;
		border-color: pink;

	}
</style>
<table style="transform: translateX(300px);">
<thead>
	<tr>
		<td>Name:</td>
		<td>Phone:</td>
		<td>Email:</td>
		<td>Address:</td>
		<td>Total:</td>
		<td>Item_name</td>
	</tr>

</thead>
<tbody>
	<?php
foreach ($data as  $value) {?>
 
	<tr>
		<td><?php echo $value["Fullname"];?></td>
		<td><?php echo $value["Phone"];?></td>
		<td><?php echo $value["Email"];?></td>
		<td><?php echo $value["address"];?></td>
		<td><?php echo $value["Total"];?></td>
		<td><?php echo $value["item_name"]; ?></td>
	</tr>
	<?php	
}
?>
	</tbody>
</table>

<form action="home.php" method="post">
	
	<?php 
	session_start();
	if(isset($_SESSION['user_username'])){
	$data=mysqli_query($conn,"UPDATE customer SET status=1 WHERE id = (SELECT MAX(ID) FROM customer)"); }
	?>
	<input type="submit" name="ok" value="Ok" style="background-color:pink;">
</form>