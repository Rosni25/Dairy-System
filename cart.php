<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Cart</title>
  <script src="buyproduct.js"></script>
  <style>
    span {
      color: red;
      font-style: italic;
    }
  </style>
</head>

<body>
  <?php
  include('header.php')
  ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center border rounded bg-light my-5">
        <br>
        <h1>MY CART</h1>
      </div>

      <div class="col-lg-9">
        <table class="table">
          <thead class="text-center">
            <tr>
              <th scope="col">Serial No.</th>
              <th scope="col">Item Name</th>
              <th scope="col">Item Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php
            if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $key => $value) {
                $sr = $key + 1;
                echo "
                <tr>
                  <td>$sr</td>
                  <td>$value[Item_Name]</td>
                  <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                  <td>
                    <form action='manage_cart.php' method='POST'> 
                      <input class='text-center iquantity' name='Mod_Quantity' onchange='subTotal();' type='number' value='$value[Quantity]' min='1' max='10'
                      <input type='hidden' name ='Item_Name' value='$value[Item_Name]'>
                    </form>
                  </td>
                  <td class='itotal'></td>
                  <td>
                    <form action='manage_cart.php' method='POST'> 
                      <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                    </form>
                  </td>
                </tr>                                
                ";
              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="col-lg-3">
        <form method="post" action="customer.php" onsubmit="return BuyProductValidate()">
          <div class="border bg-light rounded p-4">
            <h4>Grand Total: </h4>
            <input type="text" name="total" id="gtotal">
            <h5 class="text-right"></h5>
            <br>
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="fullname" id="fname" class="form-control" onkeyup="return BuyProductValidate()"><span id="fspan"></span>
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="number" name="phone_no" id="pnumber" class="form-control" onkeyup="return BuyProductValidate()"><span id="pspan"></span>
            </div>
            <div class="form-group">
              <label>Shipping Address</label>
              <input type="text" name="address" id="addre" class="form-control" onkeyup="return BuyProductValidate()"><span id="aspan"></span>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" id="mail" class="form-control" onkeyup="return BuyProductValidate()"><span id="espan"></span>
            </div>
            <?php
            if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $key => $value) { ?>
                <table>

                  <tr>
                    <td> <input type="hidden" name="item" value=" <?php echo $value["Item_Name"] ?>"></td>
                  </tr>
                </table>
            <?php
              }
            }
             ?>
            <!-- <div class="form-group">
            <label>Quantity</label>
            <input type="text" name="quality">
             </div> -->
            <br>
            <input type="submit" name="submit" value="Make Purchase" style="background-color: pink" onsubmit="return BuyProductValidate()">
        </form>
      </div>
    </div>
  </div>
  </div>
  <br>


  <script>
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');

    function subTotal() {
      gt = 0;
      for (i = 0; i < iprice.length; i++) {
        Number(itotal[i].innerText = (iprice[i].value) * (iquantity[i].value));
        gt = gt + (iprice[i].value) * (iquantity[i].value);
      }
      document.getElementById('gtotal').value = gt
    }
    subTotal();
  </script>


</body>

</html>