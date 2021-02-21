<?php

   
    
include('../../../db/config.php');
try{
$id = $_GET['id']; 
$sql = $conn->prepare("SELECT l.*,t.lap_name FROM products AS l INNER JOIN type_products AS t ON l.type_id=t.id");
$sql->execute();
$result = $sql->fetch(PDO::FETCH_ASSOC);

}catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}
?>