<?php

   
    
  include('../../db/config.php');
  try{
    $id = $_GET['id']; 
    $sql = $conn->prepare("SELECT  * FROM type_products where id=$id");
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    // echo"<pre>";
    // print_r($result);
    
    }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

 
?>