<!DOCTYPE html>
<html lang="en">
<?php include("../modules/head.php");?>
<body>
<?php include('../controller/carts/updateCart.php');?>
<?php require_once("../db/config.php");?>
<?php require_once("../modules/mn-fk.php");?>
<?php include('../controller/carts/select.php');?>
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
			<div style=" position: absolute;width: 33%;font-size: 25px;margin: 59px 50px;">
								<b style="margin-left: 26%;">Giỏ Hàng</b> (<span id="numCart" ><?php echo $numCart;?></span> sản phẩm)
			</div>


			<table class="table col-9" style="margin: 100px 168px;">
				<thead>
					<tr>
					<th style="border: 2px solid darkgrey; width: 9.5%;" scope="">Hình ảnh</th>
					<th style="border: 2px solid darkgrey;" scope="col-1">Tên sản phẩm</th>
					<th style="border: 2px solid darkgrey;" scope="col-1">Giá</th>
					<th style="border: 2px solid darkgrey;" scope="col-1">Số lượng</th>
					<th style="border: 2px solid darkgrey;" scope="col-1">thành tiền</th>
					<th style="border: 2px solid darkgrey;" scope="col-1"></th>
					</tr>                    
				</thead>
			<tbody>
					<?php 
						$atotal = 0;
						if(isset($_SESSION['cart'])){
						foreach($_SESSION['cart'] as $key => $row ){
					?>
					<tr>
						<td style="border: 1px solid darkgrey;box-shadow: 0px 1px 3px grey;"><img style="width: 100%;" src="/duan1/public/img/<?php echo $row['image']?>" alt=""></th>
						<td style="border: 1px solid darkgrey;padding-top: 4%;box-shadow: 0px 1px 3px grey;"><?php echo $row['name']?></td>
						<td style="border: 1px solid darkgrey;padding-top: 4%;box-shadow: 0px 1px 3px grey;color: indianred;"><?php echo $row['price']?><span style="margin: -3px 3px; position: absolute;" class="woocommerce-Price-currencySymbol">&#8363;</span></td>
						<td style="border: 1px solid darkgrey;padding-top: 4%;box-shadow: 0px 1px 3px grey;"><input style="border: 1px solid grey;box-shadow: 1px 1px 8px grey;padding: 0px 3px;" type="text"  id="num_<?php echo $key;?>" name="spinner" value="<?php echo $_SESSION['cart'][$key]['num'] ?>"></td>
						<td style="border: 1px solid darkgrey;padding-top: 4%;box-shadow: 0px 1px 3px grey;color: indianred;"><?php echo $total = $row['price'] * $row['num']; $atotal += $total; ?><span style="margin: -3px 3px; position: absolute;" class="woocommerce-Price-currencySymbol">&#8363;</span></td>
						<td style="border: 1px solid darkgrey;padding-top: 4%;box-shadow: 0px 1px 3px grey;">  
						<a class='btn btn-warning text-light' style="margin-top: -8%;" onclick="checkDelete(<?php echo $key;?>)" href="javascript:void(0)">Delete</a> 
						<a class='btn btn-warning text-light' style="margin-top: -8%;" onclick="updateCart(<?php echo $key;?>)" href="javascript:void(0)">update</a> </td></td>
					</tr>
					<?php 
							}
						}else{
							echo "<td>bạn chưa mua hàng</td>";
						}
					?>
					<tr>
							<td style="border: 1px solid darkgrey;box-shadow: 0px 1px 3px grey;" colspan="4">Tổng Tiền</td>
							<td style="border: 1px solid darkgrey;box-shadow: 0px 1px 3px grey; color: indianred;"><?php echo $atotal;?><span style="margin: -3px 3px; position: absolute;" class="woocommerce-Price-currencySymbol">&#8363;</span></td>
							<td style="border: 1px solid darkgrey;box-shadow: 0px 1px 3px grey;"><a href="/duan1/client/"><input type="submit" class="btn btn-warning text-light" value="Mua thêm"></a></td>
					</tr>
					<tr>
							<td  colspan="4"></td>
							<td ></td>
							<td style="border: 1px solid darkgrey;box-shadow: 0px 1px 3px grey;"><a href="#toiday"><input type="submit" class="btn btn-success text-light" value="Tiến hành đặt hàng"></a></td>
					</tr>
			</tbody>
			</table>

			<script src = "../js/all-2.js" > </script> 

		</div>
	</div>
<?php require_once('dat-hang.php');?>
<script src = "jquery-3.4.1.min.js" > </script>  
<script type="text/javascript" src="/duan1/js/all.js" ></script>
<?php require_once('../modules/tintuc.php')?>
<?php require_once('../modules/footer.php')?>
<script src = "jquery-3.4.1.min.js" > </script>  
<script type="text/javascript" src="/duan1/js/all.js" ></script>
</body>
</html>