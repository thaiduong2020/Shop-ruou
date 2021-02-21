<?php

   
    
include('../../db/config.php');
try{
$stmt = $conn->prepare("SELECT l.*,t.type_name FROM products AS l INNER JOIN type_products AS t ON l.type_id=t.id");
 $stmt->execute();
$stmt->fetch(PDO::FETCH_ASSOC);

}catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}
?>
