<!DOCTYPE html>
<html lang="en">
<?php include("../modules/head.php");?>
<body>
<?php include("../controller/user/singin.php");?>
<div class="limiter" style="    height: 1158px;
    background-color: #ebebeb;">

        <div class="container-login100">
        
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
            
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="">
              
               
                    <span class="login100-form-title p-b-32">
                    CREAT ACCOUNT
                        
					</span>
     
                    <span style="text-align: center;"  class="login100-form "><?php 

                        if(isset($abc)) {
                        echo $abc;
                        if(isset($query)){
                          echo "<span class='login100-form p-b-32'>
                            <a href='login.php'><h5>Đến trang đăng nhập</h5></a>
                                
                  </span>";
       }
                        }

                    ?></span>
                    <span style="color: black;" class="txt1 p-b-11">
						Fullname
					</span>  <div class="wrap-input100 validate-input m-b-36" data-validate="Fullname is required">
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;" class="input100" type="text" name="name">
                        <span class="focus-input100"></span>
                    </div>

                    <span style="color: black;" class="txt1 p-b-11">
						Username
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Username is required">
                        <span class="btn-show-pass">
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;" class="input100" type="text" name="username">
                        <span class="focus-input100"></span>
                    </div>
                   
                    <span style="color: black;" class="txt1 p-b-11">
						Password
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
                        <span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;" class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                    </div>
                    <span style="color: black;" class="txt1 p-b-11">
						Re-Password
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="	Re-Password is required">
                        <span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;" class="input100" type="password" name="repassword">
                        <span class="focus-input100"></span>
                    </div>
                   
                   
                    <span style="color: black;" class="txt1 p-b-11">
						Number phone
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Number phone is required">
                        <span class="btn-show-pass">
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;" class="input100" type="number" name="phone">
                        <span class="focus-input100"></span>
                    </div>
                    

                    <span style="color: black;" class="txt1 p-b-11">
						Email
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Email is required">
                        <span class="btn-show-pass">
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;" class="input100" type="email" name="email">
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
               

                    <div class="" data-validate="Address is required">
                      
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;" class="input100" type="hidden" value="Khách hàng" name="vaitro">
                        <span class="focus-input100"></span>
                    </div>    
                    <div class=" w-full p-b-48">
                        <div class="contact100-form-checkbox">
                            <input style="height: 41px;border: 1px solid grey;" class="input-checkbox100" value="Nam" id="ckb1" type="checkbox" name="gender">
                            <label style="color: black;" class="label-checkbox100" for="ckb1">
								Nam
							</label>
                        </div>
                        <div class=" w-full p-b-48">
                        <div class="contact100-form-checkbox">
                            <input style="height: 41px;border: 1px solid grey;" class="input-checkbox100" value="Nữ"  id="ckb2" type="checkbox" name="gender">
                            <label style="color: black;" class="label-checkbox100" for="ckb2">
							  Nữ
						
							</label>
                        </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="singin">
							Singin
						</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    
</div>
</div>
    </div>
</body>
</html>



