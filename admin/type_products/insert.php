

<!DOCTYPE html>
<html lang="en">
<?php require_once('../../controller/type_products/insert.php');?>
<?php require_once('../../modules/head-ad.php');?>
<body >
<?php require_once('../../modules/menu-ad.php');?>
<h1 style="    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;">Thêm mới Loại Hàng</h1>
<div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2>Điền Thông Tin Sản Phẩm</h2>
      </div>
      <?php
            if(isset($thanhcong)){
                echo "<h5 style='text-align: center;' class='text-success'>$thanhcong</h5>";
            }
        ?>
      <div class="card-body">
   
      <form action="" method="post">
       
      <div class="form-group">
                <label class="font-weight-bold">Mã loại</label>
                <input class="form-control" name="ma_loai" value="auto number" readonly disabled>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Tên loại</label>
                <input class="form-control" name="type_name">
                <?php
                        if(isset($error))
                        {
                    ?>
              <div class="alert alert-danger">
                <?php echo $error;?>
              </div>
                    <?php
                        }
                    ?>
            </div>
            <div>
                <button class="btn btn-outline-success font-weight-bold" name="btn_insert">Thêm mới</button>
                <button class="btn btn-outline-secondary font-weight-bold" type="reset">Nhập lại</button>
                <a class="btn btn-outline-secondary font-weight-bold" href="index.php?btn_list">Danh sách</a>
            </div>
        </form>

      </div>
    </div>
  </div>
</body>
</html>
        
   