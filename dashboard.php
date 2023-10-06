<?php
session_start();
include('connect.php');
if(!isset($_SESSION['admin_username'])){
    header('location:admin.php?err=1');
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=<, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <a href="lo.php">Logout</a>
     
 </body>
 </html>