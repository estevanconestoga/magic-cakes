<?php
include("header.php");


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cakes</title>
        <link rel="stylesheet" href="style.css">
        
    </head>

    <style>
.cookie-container{
    background:#F8E2CB;
    width:45%;
    padding-top:25px;
    padding-left:25px;
    padding-bottom:25px;
    border-radius:20px;
    margin:auto;
    
    
}

.cake-flavor{
  color: #3E293D;
  text-align:center;
}

.card{
    width:230px;
    height: 250px;
    margin: 2px;
}
.add-to-cart{
background:#3E293D;
color:#fff;
font-size: 10px;
margin-top:-30px;
}
.card-text{
    font-size:10px;
}

    </style>

    <body>
        
        <div class="cookie-container">
        <h1 class="cake-flavor"></h1>
            <div class="row row-cols-2">
             
                <div class="col">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="assets/1000_F_194434516_aG8lw9ZyHjtSRCArFd8wyFTMc2U8aSN0.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h6 class="card-title">Chocolate Chip </h6>
                            <p class="card-text">Price:$6.80</p>
                            <button type="submit" name="Add_To_Cart"class=" add-to-cart btn btn-sm">ADD TO CARD</button>
                            <input type="hidden" name="Item_Name" value="Chocolate Chip">
                            <input type="hidden" name="Price" value="6.80">
                        </div>
                    </div>
                 </form>
                </div>

                <div class="col">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="assets/top-view-different-cookies-dark-surface.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Double Chocolate</h6>
                            <p class="card-text">Price:$8.20</p>
                            <button type="submit" name="Add_To_Cart"class="add-to-cart btn ">ADD TO CARD</button>
                            <input type="hidden" name="Item_Name" value="Double Chocolate">
                            <input type="hidden" name="Price" value="8.20">
                        </div>
                    </div>
                 </form>
                </div>

                <div class="col">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="assets/delicious-cookies-flat-lay_23-2148837092.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Peanut Butter </h6>
                            <p class="card-text">Price:$10.50</p>
                            <button type="submit" name="Add_To_Cart"class="add-to-cart btn ">ADD TO CARD</button>
                            <input type="hidden" name="Item_Name" value="Peanut Butter">
                            <input type="hidden" name="Price" value="10.50">
                            <input type ='hidden' name='quantity' value='$value[Quantity]' min='1' max='10'>
                        </div>
                    </div>
                 </form>
                </div>


                <div class="col">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="assets/1000_F_96254713_5tNAaUXMLKRUwk5XpYzYKWSqWUFXUcfP.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Mix and Match </h6>
                            <p class="card-text">Price:$9.67</p>
                            <button type="submit" name="Add_To_Cart"class="add-to-cart btn">ADD TO CARD</button>
                            <input type="hidden" name="Item_Name" value="Mix and Match">
                            <input type="hidden" name="Price" value="9.67">
                        </div>
                    </div>
                 </form>
                </div>
            </div>

        </div>


        <!-- footer -->
        
      <?php
        require "footer.php";
      ?>
        
    </body>

</html>
