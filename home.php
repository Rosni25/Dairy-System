<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<link rel="stylesheet" href="style.css">
<body>
    <?php
    include('header.php');
    ?>
    <section class="main">
        <div class="container py-4">
            <div class="row py-4">
                <div class="col-lg-7 text-center">
                    <h1 class="pt-5" style="color: rgb(31, 151, 141);">Dairy Product Full of Yum!</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="about ">
        <div class="container py-5 " >
            <div class="row py-5 ">
                <div class="col-lg-8 m-auto text-center ">
                    <h1>Welcome to our organic Dairy Shop</h1>
                    <h6 style="color: red; ">Be Healthy with Organic product</h6><br>
                </div>
                <div class="row ">
                    <div class="col-lg-4 ">
                        <img class="img-fluid mb-3" src="Newimage/milk.jpg" alt="">
                        <h5>Best Quality Product</h5>
                        <p>Milk is essentially an emulsion of fat and protein in water, along with dissolved sugar (carbohydrate), minerals, and vitamins.
                        </p>
                    </div>

                    <div class="col-lg-4 ">
                        <img class="img-fluid mb-3" src="Newimage/butter.jpg" alt="">
                        <h5>Best Quality Product</h5>
                        <p> Ghee is made by melting regular butter. The butter separates into liquid fats and milk solids. Once separated, the milk solids are removed, which means that ghee has less lactose than butter. Traditionally, ghee has been used as
                            cooking oil, an ingredient in dishes, and in Ayurveda therapies.</p>
                    </div>
                </div>
                <div class="row pt-3 ">
                    <div class="col-lg-6 text-center m-auto ">
                        <button class="btn1 "> <a href="product.php">See More</a></button>
                    </div>
                </div>
            </div>
    </section>
  
    <section class="Yogurt py-5 ">
        <div class="container text -white py-5 ">
            <div class="row py-5 ">
                <div class="col-lg-8 m-auto text-center ">
                    <h1 class="fornt-weight-bold py-3 "> Unlock Your Potential With Good Nutrion </h1>
                    <h6 style="color: rgb(36, 23, 70); "> Pick Your Poduct From Our Store</h6>
                    <button class="btn1 mt-3 "> <a href="product.php" >More From Us</a> </button>
                </div>
            </div>
        </div>
    </section>
    <br>
    <?php
    include('footer.php')
    ?>
</body>
</html>