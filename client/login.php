<!DOCTYPE html>
<html lang="en">
<?php include("../modules/head.php");?>
<body>
<?php
session_start();
if(isset($_SESSION['dangnhap'])
){
    header("location: index.php");

}?>
<?php include("../controller/user/login.php");?>
<div class="limiter">

        <div class="container-login100">
        
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="">
                
                    <span class="login100-form-title p-b-32">
						Account Login
                        
					</span>
                    <span  class="login100-form "><?php 

                        if(isset($error)) {
                        echo $error;
                        }

                    ?></span>
                    <span class="txt1 p-b-11">
						Username
					</span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate="Username is required">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
						Password
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
                        <span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-48">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
                        </div>

                        <div>
                            <a href="#" class="txt4">
								Forgot Password?
							</a><br>
                            <a href="singin.php" class="txt4">
								creat accuont
							</a>
                        </div>
                    </div>
                    
                 

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login">
							Login
						</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>
</html>