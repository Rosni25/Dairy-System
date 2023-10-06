        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="icon.css"> 
     <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <style type="text/css">
        #searchbtn{

    width: 40px;
    background:  rgb(226, 80, 153);
    height: 35px;
    border-radius: 20px;
    font-family: 'Roboto Slab', serif;
   color:white;


}
    </style>
</head>

<body>

    <header id="header"> 
    <nav>
        <div class="logo">
            <a href="home.php">Hamro Dairy</a>
        </div>

        <ul class="navbar">
            <li><a href="home.php" data-navitem="Home">Home</a></li>
            <li><a href="contact.php" data-navitem="contact">Contact</a></li>
            <li><a href="product.php" data-navitem="Product">Product</a></li>
            <li><a href="about.php" data-navitem="about">About</a></li>
            <li><a href="adminlogin.php" data-navitem="adminlodin">Adminlogin</a></li>
            <li>
             <?php
                            session_start();
                            if(isset($_SESSION['uname'])){
                                ?>
                            <a class="nav-item dropdown">
                            <?php
                            echo $_SESSION['uname'];
                          ?>
                            </a>
                            <!-- <ul> -->
                                <li><a href="history.php">History</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            <!-- </ul> -->
                            <?php
                            }else{
                            ?>
                            <a href="login.php">Login</a>
                            <?php
                            }
                             ?>
        </li>
        <li><div>
             <?php
            $count=0;
            if(isset($_SESSION['cart']))
            {
                $count=count($_SESSION['cart']);
            }
            ?> 
    <a href="cart.php" class="btn btn-outline-sucess">My Cart(<?php echo $count; ?>) </a>
</div></li>
</div>
<form class="d-flex" method="POST">
      <div class="search" style= "display:<?php if(isset($searchneeded)&&$searchneeded=1){echo "block";}else{echo "none";}?>;"> 
            <input class="px-2 search" type="search" name="product" placeholder="Search" aria-label="Search" >
            <input type="submit" name="search" value="Go" id="searchbtn">   
        </form>
    </div>
    <!-- <li><a href="editinfo.php" class="fa fa-user-circle" aria-hidden="true" ></a><li> -->
        
        </ul>
         </nav> 
    </header>
        </body>
        </html>