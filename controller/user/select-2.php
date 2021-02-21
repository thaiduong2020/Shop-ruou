<?php

try {
  include ('../db/config.php');
    
    $stmt = $conn->prepare("SELECT * FROM users 
 ");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetch(PDO::FETCH_ASSOC);    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

?>