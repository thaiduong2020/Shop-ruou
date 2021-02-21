<?php
include('../../db/config.php');
 try {
  $id = $_GET['id'];

  $sql = "DELETE FROM products WHERE id='$id'";

  $conn->exec($sql);
  echo "Record deleted successfully";
  header('location: ../../products/');
  }
catch(PDOException $e)
  {
  echo $sql . "<br>" . $e->getMessage();
  }

?>