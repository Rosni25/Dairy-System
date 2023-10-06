
<?php
session_start();
include('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from admin where username= '$username' and password='$password'";
$result=$conn->query($sql);

$row=$result->fetch_assoc();
if($result->num_rows==1){

    $_SESSION['admin_id']=$row['id'];
    $_SESSION['admin_username']=$row['username'];
    $_SESSION['admin_password']=$row['password'];

    header('location:admin/admindashboard.php');

}else{
    header('location:adminlogin.php?err=2');
}


// $operation=executeQuery(selectQuery("register",["username"=>$username,"userpassword"=>$password]));
// $result=mysqli_fetch_assoc($operation);
// if($operation->num_rows==1){

//     $_SESSION['user_id']=$result['id'];
//     $_SESSION['user_username']=$result['username'];
//     $_SESSION['admin_password']=$result['password'];
//     $_SESSION['hospital_name']=$result['hospital'];
//     header('location:dashboard_files/dashboard.php');

// }else{
// header('location:formvalidation.php?err=2');
// }
 ?>