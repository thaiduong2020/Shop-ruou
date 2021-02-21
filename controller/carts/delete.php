<?php
include('../../db/config.php');
try {
    $id= $_GET['id'];
    $sql = "DELETE FROM cart WHERE id=$id";
    $conn->exec($sql);
    header('location: ../../client/cart.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>