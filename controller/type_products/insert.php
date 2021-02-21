<?php
    include('../../db/config.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['type_name'];

        if(!empty($name)  )
        {

            $stmt = $conn->prepare('INSERT INTO type_products (type_name)
        VALUES(:type_name)
        ');
            $stmt -> bindParam(':type_name',$name);
            $stmt->execute();
            $thanhcong = "Thêm mới thành công!";

        }else {
            $error = "trường nay không được để trống";
            }
    }else {
        echo "error";
}

    
?>