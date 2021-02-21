
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
<?php require_once('../../controller/type_products/type.php')?>

<div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2>Điền Thông Tin Sản Phẩm</h2>
      </div>
    
      <div class="card-body">
   
      <form action="../../controller/type_products/update.php" method="post">
      <input type="hidden" class="form-control" name="id" value="<?php echo $result['id'];?>">
      <div class="form-group">
                <label class="font-weight-bold">Mã loại</label>
                <input class="form-control" name="ma_loai" value="auto number" readonly disabled>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Tên loại</label>
                <input class="form-control" value="<?php echo $result['type_name']?>" name="type_name">
             
              
                   
            </div>
            <div>
                <button class="btn btn-outline-success font-weight-bold" name="btn_insert">Cập nhật</button>
                <button class="btn btn-outline-secondary font-weight-bold" type="reset">Nhập lại</button>
                <a class="btn btn-outline-secondary font-weight-bold" href="index.php?btn_list">Danh sách</a>
            </div>
        </form>

      </div>
    </div>
  </div>

</body>
</html>

