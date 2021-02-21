<?php
include('../../db/config.php');
try {
    $id= $_GET['id'];
    $sql = "DELETE FROM products WHERE id=$id";
    $conn->exec($sql);
    header('location: index.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>