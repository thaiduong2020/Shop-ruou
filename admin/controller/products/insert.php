<?php
require_once('../../db/config.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
 $name = $_POST['name'];
 $type_id = $_POST['type_id'];
 $price =  $_POST['price'];
 $count = $_POST['count'];
 $image_name = $_FILES['image']['name'];



 if(!empty($image_name) && !empty($name) && !empty($price) && !empty($count) )
 {
   $tmp = $_FILES['image']['tmp_name'];
   $image_name = time().$image_name;
   $new_path = '../../public/img/'.$image_name;
   
   if(!move_uploaded_file($tmp,$new_path))
   {
     $error = "upload thất bại";
   }else {
     (move_uploaded_file($tmp,$new_path));
     
     $query = $conn->prepare('INSERT INTO products (name,price,count,type_id,image)
     VALUES(:name,:price,:count,:type_id,:image)
     ');
     $query -> bindParam(':name',$name);
     $query -> bindParam(':price',$price);
     $query -> bindParam(':count',$count);
     $query -> bindParam(':type_id',$type_id);

     $query -> bindParam(':image',$image_name);
     $query -> execute();
header('location: ../../products/');
     
   }
 
}else{
  if(empty($name)){
    $message = "bạn chưa nhập tên sản phẩm";
  }else if(empty($price)){
    $message = "bạn chưa nhập giá sản phẩm";
  }
  else if(empty($count)){
    $message = "bạn chưa nhập số lượng sản phẩm";
  }
}
}
?>