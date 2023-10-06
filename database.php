
<?php 
	$db = mysqli_connect('localhost', 'root', '', 'miniproject');

	$username = "";
    $email = "";
    $address="";
    $phonenumber = "";
    $password = "";
    
    
	if (isset($_POST['submit'])) {
		$username = $_POST['name'];
        $email = $_POST['email'];
        $address= $_POST['address'];
        $phonenumber = $_POST['phonenumber'];
		$password = $_POST['password'];
		

	mysqli_query($db, "INSERT INTO student (name, email, address, phonenumber, password) VALUES 
		('$username', '$email','$address','$phonenumber','$password')"); 
	// 	$sqlcheck= "SELECT * from student where email='$email' OR phonenumber='$phonenumber'";
	// 	$checkresult= $db->query($sqlcheck);
	// if(!$checkresult->num_rows==0){
	// die("Email/number already exist.");
	// }
		echo " Data inserted successfully.";	
        header('location:home.php');
	}
 ?>