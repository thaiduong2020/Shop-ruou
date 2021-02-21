<?php

try {
  require_once('../../db/config.php');
    $item_page = !empty($_GET['item_page'] ) ?$_GET['item_page']:6;
    $current_page = !empty($_GET['page'] ) ?$_GET['page']:1;
    $offset = ($current_page - 1) * $item_page;
    $stmt = $conn->prepare("SELECT * FROM users ORDER BY id ASC LIMIT ".$item_page." OFFSET ".$current_page);
    $tongsp = $conn->prepare("SELECT * FROM users ");
    $tongsp->execute();
    $stmt->execute();
    $tongsp = $tongsp->fetchColumn();
    // set the resulting array to associative
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);

    $tongpage = ceil($tongsp / $item_page);
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>