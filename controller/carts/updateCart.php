<?php  
session_start();
include("../db/config.php");
if(isset($_GET['id']) && isset($_GET['num'])){

	 $sql = $conn->prepare("SELECT  * FROM products where id=".$_GET['id']);
	 $sql->execute();
	 $result = $sql->fetch(PDO::FETCH_ASSOC);
	
	 if(isset($_GET['num']) > 0 ){
		 $_SESSION["cart"][$_GET["id"]] = array(
		'num' => $_GET['num'],
		'name' => $result['name'],
		'price' => $result['price'],
		'image' => $result['image']
	 );
	print_r( $_SESSION["cart"]);
	 return;
	
	}else{
		unset($_SESSION["cart"][$_GET['id']]);}

	
}
if(isset($_GET['id']) && isset($_GET['action'])){
	unset($_SESSION["cart"][$_GET['id']]);
}
?>