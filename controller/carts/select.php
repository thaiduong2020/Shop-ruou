<?php

try {
  require_once('../db/config.php');
    
    $stmt = $conn->prepare("SELECT cart.*,p.price,name,image FROM cart AS cart  INNER JOIN products AS p ON cart.product_id=p.id ");
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