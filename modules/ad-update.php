<?php

   
    
  include('../db/config.php');
  try{
    $sql = $conn->prepare("SELECT  * FROM type_products");
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    // echo"<pre>";
    // print_r($result);
    
    }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

 
?><?php

   
    
include('../db/config.php');
try{
  $id = $_GET['id']; 
  $sql = $conn->prepare("SELECT  * FROM products where id=$id");
  $sql->execute();
  $result = $sql->fetch(PDO::FETCH_ASSOC);
  // echo"<pre>"; 
  // print_r($result);
  
  }catch(PDOException $e)
  {
  echo $sql . "<br>" . $e->getMessage();
  }


?>

<div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2>Điền Thông Tin Sản Phẩm</h2>
      </div>
      <?php
            if(isset($success)){
                echo "<h5 style='text-align: center;' class='text-success'>$success</h5>";
            }
        ?>
      <div class="card-body">
   
      <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
       
            <div class="col-md-4">
            
                <div class="form-group">
                    <label class="font-weight-bold">TÊN HÀNG HÓA</label>
                    <input class="form-control" name="name">
                   
             
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">HÌNH ẢNH</label>
                    <input class="form-control" name="image" type="file">
                   
                </div>
                
                
                
               
            </div>
            <div class="col-md-4">   
                <div class="form-group">
                    <label class="font-weight-bold">ĐƠN GIÁ</label>
                    <input class="form-control" name="price">
                   
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">LOẠI HÀNG</label>
                    <select class="form-control" name="type_name">
                        <?php foreach ($result as $row) {?>
                              '<option value="<?= $row->id;?>"><?= $row->type_name; ?></option>';
        <?php } ?>
                    </select>
                </div>
          
                
       
            
        </div>
        <div class="col-md-4">   
        <div class="form-group">
                    <label class="font-weight-bold">NGÀY NHẬP</label>
                    <input type="date" class="form-control" name="created_at">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">SỐ LUỌNG</label>
                    <input class="form-control" name="count">
                    
        
        </div></div>
        <div class="col-md-12">
                <div class="form-group">
                    <label class="font-weight-bold">MÔ TẢ</label>
                    <textarea class="form-control" name="thongtin" rows="4"></textarea>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-outline-success font-weight-bold" name="btn_insert">Thêm mới</button>
                    <button class="btn btn-outline-secondary font-weight-bold" type="reset">Nhập lại</button>
                    <a class="btn btn-outline-secondary font-weight-bold" href="index.php">Danh sách</a>
                </div>
            </div>
        </form>

      </div>
    </div>
  </div>