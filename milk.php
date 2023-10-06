<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk</title>
</head>
<body>
<!-- header -->
<?php
include 'header.php'
?>

<section class="product">
    <div class="row py-3">
        <div class="col-lg-3  py-3 text-center">
            <form action="manage_cart.php" method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="Newimage/milk.jpg" class="" height="220px"alt="" srcset="">
                    </div>
                </div>
                <h6>Milk</h6>
                <p>Rs. 120 per lit</p>
                <button type="submit" name="Add_To_Cart" class="btn4">ADD TO CART</button>
                <input type="hidden" name="Item_Name" value="Milk">
                <input type="hidden" name="Price" value="120">
            </form>
        </div>

        <div class="col-lg-3 py-3 text-center">
            <form action="manage_cart.php" method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="Newimage/packet milk.jpg" class="" height="220px" alt="" srcset="">
                    </div>
                </div>
                <h6>Packetmilk</h6>
                <p>Rs. 100per lit</p>
                <button type="submit" name="Add_To_Cart" class="btn4">ADD TO CART</button>
                <input type="hidden" name="Item_Name" value="Packetmilk">
                <input type="hidden" name="Price" value="100">
            </form>
        </div>

        <div class="col-lg-3 py-3  text-center">
            <form action="manage_cart.php" method="POST">
                <div class="card border-2 bg-light mb-2">
                    <div class="card-body">
                        <img src="Newimage/cowmilk.png" class="" height="220px" alt="" srcset="">
                    </div>
                </div>
                <h6>Cowmilk</h6>
                <p>Rs. 140per lit</p>
                <button type="submit" name="Add_To_Cart" class="btn4">ADD TO CART</button>
                <input type="hidden" name="Item_Name" value="Cowmilk">
                <input type="hidden" name="Price" value="140">
            </form>
</div>
            
    </div>
        
</section>

<!-- footer -->
<?php
include 'footer.php'
?>    

</body>
</html>

