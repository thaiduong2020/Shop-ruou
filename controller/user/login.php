<?php 
include('../db/config.php');

if(isset($_POST['login'])){
  if(empty($_POST['username']) or empty($_POST['password']) ){
    $error = "<div class='alert alert-danger' role='alert'>
    Bạn phải nhập Tài Khoản và Mật Khẩu</div>";   
  }
  else{
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $sql = $conn->prepare ("SELECT * FROM users where username = '$username' and password = '$password'");
      $sql->execute();
      $num = $sql->fetch(PDO::FETCH_ASSOC);
      if($num == 0){
         $error = "<div class='alert alert-danger' role='alert'>
         Tài Khoản hoặc mật khẩu không chính xác</div>";    

      }

      else{
          $_SESSION['dangnhap'] = $username;
          
          header('location: ../client/');
      }
  }
  
}
?>