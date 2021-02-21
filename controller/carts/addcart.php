<?php 
session_start();
include('../../db/config.php');
  if(isset($_POST['id']) && isset($_POST['num'])){
      $id = $_POST['id'];
      $num =  $_POST['num'];
      $sql = $conn->prepare("SELECT  * FROM products where id=$id");
      $sql->execute();
      $result = $sql->fetch(PDO::FETCH_ASSOC);
      if(!isset($_SESSION["cart"])){
          $cart = array();
          $cart[$id] = array(
            'name' => $result['name'],
            'num' => $num,
            'price' => $result['price'],
            'image' => $result['image']
          );
      }else{
        $cart = $_SESSION["cart"];
        if(array_key_exists($id, $cart)){
          $cart[$id] = array(
            'name' => $result['name'],
            'num' => (int)$cart[$id]['num'] + $num,
            'price' => $result['price'],
            'image' => $result['image']
          );
          }else{  
            $cart[$id] = array(
              'name' => $result['name'],
              'num' => $num,
              'price' => $result['price'],
              'image' => $result['image']
            );
          }
      }
      $_SESSION["cart"] = $cart;
     $numCart = 0;
     foreach($cart as $key => $row){
       $numCart ++;
     }
     $tongtien = 0;
     foreach($cart as $key => $row){
      $tongtien = $row['price'] * $row['num'];
    }
     echo $numCart;

  }else{
    echo "bạn chua mua hàng";
  }
 
?>
<!-- 
try {
        include('../../db/config.php');
        $product_id = $_POST['id'];
        $quantity = $_POST['num'];
        $query = $conn->prepare('INSERT INTO cart (product_id,quantity)
          VALUES(:product_id,:quantity)
          ');
      
        $query -> execute(array(':product_id'=> $product_id,':quantity'=>$quantity ));
        echo 'thanh cong';
      } catch (\Throwable $th) {
          echo 'that bai'. $th;
      } -->