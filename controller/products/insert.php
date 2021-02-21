<?php
include ('../../db/config.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
 $name = $_POST['name'];
 $type_id = $_POST['type_name'];
 $thongtin = $_POST['thongtin'];

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
     $success = "upload thất bại";
   }else {
     (move_uploaded_file($tmp,$new_path));
     
     $query = $conn->prepare('INSERT INTO products (name,price,count,type_id,image,thongtin)
        VALUES(:name,:price,:count,:type_id,:image,:thongtin)
        ');
     $query -> bindParam(':name',$name);
     $query -> bindParam(':price',$price);
     $query -> bindParam(':count',$count);
     $query -> bindParam(':type_id',$type_id);
     $query -> bindParam(':thongtin',$thongtin);
     $query -> bindParam(':image',$image_name);
     $query -> execute();
    
     $success = "thêm mới thành công";

   }
 
}elseif(empty($name)){
  $message = "bạn chưa nhập tên sản phâm";
  if(empty($price)){
    $messprice = "bạn chưa nhập giá sản phẩm";
    if(empty($count)){
      $messcount = "bạn chưa nhập số lượng sản phẩm";
    }
  
    
}
}
else{
  
}
  



}
?>