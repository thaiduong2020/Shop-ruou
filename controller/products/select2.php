<?php

try {
  include('../db/config.php');
    
    $stmt = $conn->prepare("SELECT * FROM products 
    ");
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