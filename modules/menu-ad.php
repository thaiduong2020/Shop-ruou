<?php 
	session_start();
		if(!isset($_SESSION['dangnhap'])){
		header('location: ../client/login.php');
	}
	?>
  <?php 
		if($_SESSION['dangnhap'] !== 'admin'){
		header('location: ../client/login.php');
	}
	?>
<h1 >Quản Trị Website</h1>
  
  <div class="menu">
    <ul style="">
    <li ><a href="/duan1/admin/index.php">Trang chủ</a></li>
    <li ><a href="/duan1/admin/products/index.php">Sản Phẩm</a></li>
    <li ><a href="/duan1/admin/type_products/index.php">Loại Hàng</a></li>
    <li ><a href="/duan1/admin/user/index.php">Khách Hàng</a></li>
  </ul>
  </div>