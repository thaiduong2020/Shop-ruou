
<?php include("../controller/user/select-2.php");?>

<div class="limiter" id="toiday">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="../controller/carts/insert_order.php">
                    <span class="login100-form-title p-b-32">
                    Thông tin đặt hàng  
					</span>
                    <span style="text-align: center;"  class="login100-form "></span>
                    <span style="color: black;" class="txt1 p-b-11">
						Fullname
					</span>  <div class="wrap-input100 validate-input m-b-36" data-validate="Fullname is required">
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;" name="name" value="<?php echo $result['name'] ?>" class="input100" type="text" >
                        <span class="focus-input100"></span>
                    </div>
                    <span style="color: black;" class="txt1 p-b-11">
						Number phone
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Number phone is required">
                        <span class="btn-show-pass">
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;" value="<?php echo $result['phone'] ?>" class="input100" type="number" name="phone">
                        <span class="focus-input100"></span>
                    </div>
                    <span style="color: black;" class="txt1 p-b-11">
						Email
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Email is required">
                        <span class="btn-show-pass">
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;"  class="input100" type="email" name="email">
                        <span class="focus-input100"></span>
                    </div>
                    <span style="color: black;" class="txt1 p-b-11">
						Address
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Address is required">
                        <span class="btn-show-pass">
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;" class="input100" type="text" name="address">
                        <span class="focus-input100"></span>
                    </div>    
                    <span style="color: black;" class="txt1 p-b-11">
						Address
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Address is required">
                        <span class="btn-show-pass">
						</span>
                        <textarea name="request" id="request" cols="20" rows="5"></textarea>
                        <span class="focus-input100"></span>
                    </div>   
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Address is required">
                        <span class="btn-show-pass">
						</span>
                        <input type="hidden" name="status" id="request" cols="20" rows="5" value="1">
                        <span class="focus-input100"></span>
                    </div>  
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="thanhtoan">
							Đặt hàng
						</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
    </div>



