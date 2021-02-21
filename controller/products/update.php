<?php
    try {
        include('../../db/config.php');
        $id       = $_POST['id'];
        $name       = $_POST['name'];
        $price      =  $_POST['price'];
        $count      = $_POST['count'];
        
        $sql = "UPDATE products SET name=:name,price=:price,count=:count WHERE id=$id";
    
        $stmt = $conn->prepare($sql);
    
        // execute the query
        $stmt -> bindParam(':name',$name);
        $stmt -> bindParam(':price',$price);
        $stmt -> bindParam(':count',$count);
        $stmt->execute();
        if($stmt){
            header("location: ../../admin/products/index.php");
        }
        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
     
    
    $conn = null;
    ?>