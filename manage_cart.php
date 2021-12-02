<?php
session_start();





$sql_connection = mysqli_connect('localhost', 'root', '', 'magiccake');



    if($sql_connection->connect_error){
        die('connection failed : '.$sql_connection->connect_error);
    }else {
        $stmt = $sql_connection->prepare("insert into items(Item_name, Item_price)
        values(?,?)");
        $stmt ->bind_param("ss",$_POST['Item_Name'],$_POST['Price']);
        $stmt ->execute();
       
       
    }
    if($sql_connection->connect_error){
        die('connection failed : '.$sql_connection->connect_error);
    }else {
        $stmt = $sql_connection->prepare("insert into cart(Item_name, Item_price, Qty)
        values(?,?,?)");
        $stmt ->bind_param("ssi",$_POST['Item_Name'],$_POST['Price'], $_POST['quantity']);
        $stmt ->execute();
       
       
    }
     



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
      $myitems=array_column($_SESSION['cart'], 'Item_Name');
      if (in_array($_POST['Item_Name'], $myitems))
      {
          echo "<script>
          alert('Item has already been added.');
          window.location.href='cake.php';
          </script>";
      }
      else{

      

      $count = count($_SESSION['cart']);
      $_SESSION['cart'][$count]=array('Item_Name'=> $_POST['Item_Name'], 'Price'=> $_POST['Price'], 'Quantity'=>1);
      echo "<script>
      alert('Item added.');
      window.location.href='cake.php';
      </script>";
      }
        }
        else{
            $_SESSION['cart'][0]= array('Item_Name'=> $_POST['Item_Name'], 'Price'=> $_POST['Price'], 'Quantity'=>1);
            echo "<script>
            alert('Item added.');
            window.location.href='cake.php';
            </script>";
        }
    }

    if(isset($_POST['Remove_Item']))
    {
        foreach ($_SESSION['cart'] as $key =>$value) 
        {
         if($value['Item_Name']== $_POST['Item_Name'])
         {
          unset($_SESSION['cart'][$key]); 
          $_SESSION['cart']=array_values($_SESSION['cart']);
          echo"<script>
          alert('Item removed');
          window.location.href='mycart.php';
          </script>";

         }
        }
    }
}


?>