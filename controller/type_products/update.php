<?php
  try{
    include('../../db/config.php');
    $id = $_POST['id'];
    $type_name = $_POST['type_name'];

    $sql = $conn->prepare("UPDATE type_products SET type_name=:type_name WHERE id=$id ");
    $sql->execute(array(':type_name' => $type_name));
    if($sql){
        header('location: ../../admin/type_products/');
    }
  }catch(PDOexception $e){
    echo $e;
  }
   
?>