
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../admin/public/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php 
	session_start();
		if(!isset($_SESSION['dangnhap'])){
		header('location: ../client/login.php');
	}
	?>
	<?php
		if(isset($_GET['ac']) && $_GET['ac'] == 'logout'){
			unset($_SESSION['dangnhap']);
			header('location: login.php');
		}
	?>
	<nav style="height: 31px;" class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="col-md-1"></div>
	<h5 style="background: #f8f9fa;">

  <small class="text-muted">Chào mừng bạn đến với DVS SHOP - Hotline: 022 323 3232</small>
</h5>
<div class="col-md-2"></div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
  <ul style="background: #f8f9fa; height: 31px;" class="navbar-nav mr-auto">
	<li style="padding: 0;" class="nav-item active">
        <a class="nav-link" href="#">Tài khoản <span class="sr-only">(current)</span></a>
      </li>
	  <li style="padding: 0;" class="nav-item active">
        <a class="nav-link" href="#">Giỏ hàng <span class="sr-only">(current)</span></a>
      </li>
	  <li style="padding: 0;" class="nav-item active">
        <a class="nav-link" href="../client/index.php?ac=logout">Logout <span class="sr-only">(current)</span></a>
      </li>
	  <?php
                    			if($_SESSION['dangnhap'] == 'admin'){
                        			echo "<li style='padding: 0;' class='nav-item active'  ><a class='nav-link'  href='/duan1/admin/index.php'> <i class='fa fa-cogs'></i> Quản trị website</a></li>";
                    }else{

					}
                ?>
    </ul>
  </div>
</nav>
		
      <div class="header-content" style="margin: 30px;">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12 col-xs-12 logo">
<a href=""><!--img src="http://tongkhoruou.vn/wp-content/themes/thientrieu/images/lgr.jpg" title="liên hệ quảng cáo" alt="lên hệ quảng cáo"--></a>						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 giohang text-right">
							<div class="search-box">
								<form action="../client/search.php" method="POST" role="form">

									<div class="row">
										<div class="col-xs-12 col-sm-3 col-md-3 no-padding">
											<select name="product_cat" class="form-control" style="background: #bd4c09; color: white;border-radius: 0;border: 1px solid #cc0000">
												<option class="boldoption" value="">Lựa chọn</option>
												
										
													
													<option value="whisky">Whisky</option>	
													<option value="chivas">Chivas</option>	
													<option value="hennessy">Hennessy</option>	
													
																							</select>
										</div>
										<div class="col-xs-12 col-sm-9 col-md-9 no-padding" style="display: flex;     margin-left: -30px; ">
											<input style=" border: 1px solid #bd4c09;  border-radius: 0px;" type="text" name="products" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
											<input style="background-color:#bd4c09" type="submit" name="submit" value="tìm" class="btn btn-info">
										</div>
									</div>
								</form>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12 giohang text-right">
					<?php 
					$numCart = 0;
					$stongtien = 0;
					if(isset($_SESSION['cart'])){
						foreach($_SESSION['cart'] as $key => $row){
							$numCart ++;
							$tongtien = $row['price'] * $row['num'];
							$stongtien += $tongtien;

						  }
					}
						?>

							<a href="/duan1/client/cart.php"><p style="text-align: left; margin-left: 84px;}"><i class="fa fa-shopping-cart " style="font-size:48px; color:#f38516"></i><span id="numCart" 
							style="     border: 2px solid white;border-radius: 18px; position: absolute; background: white; height: 21px;left: 134px;"><?php echo $numCart;?></span>  <br>
							Tổng tiền - <span class="woocommerce-Price-amount amount"><span id="tongtien"><?php echo $stongtien;?></span>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></p></a>
						</div>	
					</div>
				</div>
			</div> <!-- end header-content -->

<nav class="navbar navbar-expand-md sticky-top   " style="backgruond-color:#bd4c09;">
		<div class="container-fluid ">
				<button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarResponsive">
						<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse " id="navbarResponsive">
						<ul class="navbar-nav  justify-content-center">
								<li class="nav-item">
										<a href="/duan1/client/index.php" class="nav-link text-light">TRANG CHỦ</a>
								</li>
								<li class="nav-item">
										<a href="../modules/ruou-vang.php" class="nav-link text-light">RƯỢU VANG</a>
								</li>
								<li class="nav-item">
										<a href="../modules/ruou-manh.php" class="nav-link text-light">RƯỢU MẠNH</a>
								</li>
								<li class="nav-item">
										<a href="../modules/Qua-tang.php" class="nav-link text-light">QUÀ TẶNG</a>
								</li>
								<li class="nav-item">
										<a href="../modules/gioi-thieu.php" class="nav-link text-light">GIỚI THIỆU</a>
								</li>
								<li class="nav-item">
										<a href="../modules/lien-he.php" class="nav-link text-light">LIÊN HỆ</a>
								</li>
						</ul>
				</div>
		</div>
</nav>
<!-- <script>
  function getCart(){
      $.ajax({
        url: '../controller/carts/getcart.php',
        type: 'GET',
        success: function(listCarts){
					const parseArray = JSON.parse(listCarts);
					const count = parseArray.length;
					let totalPrice = 0;
					parseArray.forEach(x => {
						const price = +x.price.replace(/\./g,'');
						const quantity = +x.quantity;
						totalPrice+= price*quantity;
					})
					$('#soluongsanpham').text(count);
					$('#tongsotien').text(totalPrice);
        }
    });
  }
	getCart();
</script> -->

</body>
</html>
