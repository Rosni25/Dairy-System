<?php
include('index.php');
include('../connect.php');
$data = mysqli_query($conn, "select * from customer"); ?>
<h1 style="text-align: center;">Confirm Order:</h1>
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
			<th>Name:</th>
			<th>Phone:</th>
			<th>Email:</th>
			<th>Address:</th>
			<th>Total:</th>
			<th>Item_name</th>
			<th>Quantity</th>
		</tr>
	</thead>

	<tbody>
		<?php
		foreach ($data as  $value) { ?>
			<tr>
				<td> <?php echo $value["Fullname"]; ?></td>
				<td><?php echo $value["Phone"]; ?></td>
				<td><?php echo $value["Email"]; ?></td>
				<td><?php echo $value["address"]; ?></td>
				<td><?php echo $value["Total"]; ?></td>
				<td><?php echo $value["item_name"] ?></td>
				<td><?php echo $value["quantity"] ?></td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>