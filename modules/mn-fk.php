<div class="header-top" style="height:31px">
				<div class="container" style="display: flex;">
					<p class="pull-left" style="width: 65%;">Chào mừng bạn đến với DVS SHOP - Hotline: 023 323 3232</p>
					<div class="pull-right">
						<ul style="    list-style-type: none;">
			
							<li ><a href="">Tài khoản</a></li>
							<li><a href="/duan1/client/cart.php">Giỏ hàng</a></li>
							<li><a href="../client/index.php?ac=logout">Logout</a></li>
							<?php
                    			if($_SESSION['dangnhap'] == 'admin'){
                        			echo "<li><a  href='/duan1/admin/index.php'> <i class='fa fa-cogs'></i> Quản trị website</a></li>";
                    }else{

					}
                ?>
						</ul>	
					</div>
				</div>
      </div> <!-- end header-top -->
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
											<input style="background-color:#bd4c09" type="submit" name="submit" value="Tìm" class="btn btn-info">
										</div>
									</div>
								</form>
							</div>
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
