<?php require_once('../../controller/type_products/type.php')?>
<!DOCTYPE html>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>

<?php

   
    
include('../../db/config.php');
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
    
      <div class="card-body">
   
      <form action="../../controller/products/update.php" method="post" enctype="multipart/form-data">
        <div class="row">
        <input type="hidden" class="form-control" name="id" value="<?php echo $result['id'];?>">

            <div class="col-md-4">
            
                <div class="form-group">
                    <label class="font-weight-bold">TÊN HÀNG HÓA</label>
                    <input class="form-control" value="<?php echo $result['name'];?>" name="name">
                   
             
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">HÌNH ẢNH</label>
                    <input class="form-control" name="image" type="file">
                   
                </div>
                
                
                
               
            </div>
            <div class="col-md-4">   
                <div class="form-group">
                    <label class="font-weight-bold">ĐƠN GIÁ</label>
                    <input class="form-control" value="<?php echo $result['price'];?>" name="price">
                   
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">LOẠI HÀNG</label>
                    <select class="form-control" name="type_name">
                        <?php foreach ($result as $row) {?>
                              '<option value="<?php echo $row['id'];?>"><?php echo $row['0']; ?></option>';
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
                    <input class="form-control" value="<?php echo $result['count'];?>" name="count">
                    
        
        </div></div>
        <div class="col-md-12">
                <div class="form-group">
                    <label class="font-weight-bold">MÔ TẢ</label>
                    <textarea class="form-control" value="<?php echo $result['thongtin'];?>" name="thongtin" rows="4"></textarea>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-outline-success font-weight-bold" name="btn_insert">Cập nhật</button>
                    <button class="btn btn-outline-secondary font-weight-bold" type="reset">Nhập lại</button>
                    <a class="btn btn-outline-secondary font-weight-bold" href="index.php">Danh sách</a>
                </div>
            </div>
        </form>

      </div>
    </div>
  </div></body>
</html>