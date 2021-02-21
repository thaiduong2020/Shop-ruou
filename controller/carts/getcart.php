<?php
session_start();
      include('../../db/config.php');
      try{
        $stmt = $conn->prepare("SELECT cart.*,p.price,image FROM cart AS cart  INNER JOIN products AS p ON cart.product_id=p.id ");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        echo json_encode($result);
      }catch (\Throwable $th) {
        echo 'that bai'. $th;
     
    }
    ?>
    
