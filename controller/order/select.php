<?php

   
    
  include('../../db/config.php');
  try{
    $sql = $conn->prepare("SELECT  * FROM detail ");
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_BOTH);
    echo"<pre>";
    print_r($result);
    
    }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

 
?>