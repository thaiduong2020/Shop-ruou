<?php

try {
  require_once('../db/config.php');
    
    $stmt = $conn->prepare("SELECT id,name,price,count,type_id,image,created_at,updated_at FROM products");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>