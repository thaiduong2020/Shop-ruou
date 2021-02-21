<?php 
try{
    session_start();
    $total = 0;
    include('../../db/config.php');
    if(isset($_POST['thanhtoan']));
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $request = $_POST['request'];
    $status = $_POST['status'];
    $insOder = $conn->prepare("INSERT INTO orders (name,total,email,address,phone,request,status) VALUES(:name,:total,:email,:address,:phone,:request,:status)");
    $insOder -> bindParam(':name',$name);
     $insOder -> bindParam(':total',$total);
     $insOder -> bindParam(':email',$email);
     $insOder -> bindParam(':address',$address);
     $insOder -> bindParam(':phone',$phone);
     $insOder -> bindParam(':request',$request);
     $insOder -> bindParam(':status',$status);
     $insOder->execute();
     $id = $conn->lastInsertId();
     foreach($_SESSION['cart'] as $key => $row){
        $insDetail = $conn->prepare("INSERT INTO detail (order_id,products_id,price,count,total) VALUES(:order_id,:products_id,:price,:count,:total)");
        $insDetail->execute([
            'order_id' => $id,
            'products_id' =>$row['name'],
            'price' => $row['price'],
            'count' => $row['num'],
            'total' => $row['price']*$row['num'],

        ]);
     }
     header("location: ../../client/success.php");
}catch(PDOException  $e){

    echo "error".$e;
}
?>