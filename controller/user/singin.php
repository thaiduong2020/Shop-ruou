<?php
include("../db/config.php");
$abc = '';
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    session_start();
    if(isset($_POST["singin"]) && $_POST['name'] != '' && $_POST['username'] != '' && $_POST['password'] != '' 
                               && $_POST['phone'] != '' && $_POST['email'] != '' )
    {
        $name	    = $_POST['name'];
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        $repassword = $_POST['repassword'];
        $phone	    = $_POST['phone'];
        $email	    = $_POST['email'];
        $gender	    = $_POST['gender'];
        $address	= $_POST['address'];
        $vaitro	    = $_POST['vaitro'];


        if( $password != $repassword)
        {
            $abc = "<div class='alert alert-danger' role='alert'>
            Mật khẩu nhập lại không chính xác</div>"; 
        }
        $query = $conn->prepare("SELECT * FROM users WHERE username = '$username'");
        $query->execute();
        $password = md5($password);
        $repassword = md5($repassword);

        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($result > 0)
        {
            $abc = "<div class='alert alert-danger' role='alert'>
            Tên tài khoản tồn tại</div>"; 

            return;
        }

        $query = $conn->prepare("INSERT INTO users (name,username,password,repassword,phone,email,gender,address,vaitro) 
        VALUES(:name,:username,:password,:repassword,:phone,:email,:gender,:address,:vaitro)");
        try{  
        $query -> bindParam(':name',$name);
        $query -> bindParam(':username',$username);
        $query -> bindParam(':password',$password);
        $query -> bindParam(':repassword',$repassword);
        $query -> bindParam(':phone',$phone);
        $query -> bindParam(':email',$email);
        $query -> bindParam(':gender',$gender);
        $query -> bindParam(':address',$address);
        $query -> bindParam(':vaitro',$vaitro);
        $query->execute();
        $abc = "<div class='alert alert-success ' role='alert'>
        Đăng ký thành viên thành công</div>"; 
        return;
        }catch (PDOexception $e) 
        {
            $error_message = $e->getMessage();
            echo "<p>Database Error: $error_message </p>";
            exit();
        }
       
    }else{
        $abc = "<div class='alert alert-danger' role='alert'>
        Vui lòng điền đầy đủ thông tin</div>"; 
    }
}
?> 