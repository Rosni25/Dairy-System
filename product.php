<?php
include('connect.php');
$searchneeded=1;
                if(isset($_POST['search'])&& $_POST['product']!=""){
                    $product=$_POST["product"];
                  }

                    else{
                        $product="";
                    }
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>

   <title>Product</title>
   <?php
include 'header.php';
?>
 </head>
 <body>
 

    <div class="featured-product" id="pricing">
        <h1 style="color: red;">Available Product </h1>
    </div>
    <div>
        <h2 style="color: rgb(143, 171, 212);">Category </h2>
    </div>
    <div>
        <?php
                if($product!=""){
                    $data=mysqli_query($conn,"SELECT * from category where categoryname like '%$product%'");

                }else{
                    $data=mysqli_query($conn,"SELECT * from category");
                }

foreach($data as $value){?>
<div style="float: left; ">
<tr><img src="<?php echo $value["photo"]  ?> " style="width:2in; height:2in; margin-right:1in; display:flex;"></tr>
<tr><h3 style="" ><?php echo $value["categoryname"]  ?> </h3>
    <form method="post" action="productdetail.php"> <input type="hidden" name="id" value="<?php echo  $value["categoryname"] ?>"><input type="submit" name="submit" value="See more" style="background-color:pink;"></form></tr>
</div>
<?php
}
?>
  </div>
 </body>
 </html>