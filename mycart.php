<?php

include("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<style>
  .container{
    background:#F8E2CB;
   width:55%;
   border-radius:20px;
  }
  .purchase-btn{
    background:#3E293D;
    color:#fff;
    font-size: 10px;
  }
  .purchase-btn:hover{
    border: 2px solid #3E293D;
  background-color: white;
  }

</style>
<body>
    <div class="container">


    <div class="row">
        <div class="col-lg-12 border rounded my-5">

        <h1>Order Summary</h1>
        </div>

        <div class="col-lg-9">

        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

      <?php
      $total=0;
      if(isset($_SESSION['cart']))
      {
       foreach($_SESSION['cart']as $key => $value)
       {
        $sr=$key+1;
        $total=$total + $value['Price'];
          echo"
          <tr>
          <td>$sr</td>
          <td>$value[Item_Name]</td>
          <td>$value[Price]</td>
          <td><input type ='number' name='quantity' value='$value[Quantity]' min='1' max='10'></td>
          <td>
          <form action='manage_cart.php' method='POST'>
            <button  name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
            <input type='hidden' name='Item_Name' value='$value[Item_Name]' >
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
            <div class="border rounded p-4">
            <h4>Total:</h4> 
          <h5 class="text-right"><?php echo $total ?></h5> 
          <br>
          <form action="">
              <button class="btn purchase-btn">Make Purchase</button>
          </form>
            </div>
          

        </div>
    </div>
    </div>
    
</body>
</html>