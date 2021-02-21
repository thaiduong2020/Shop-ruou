


<div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2>Thêm mới sản phẩm</h2>
      </div>
      <div class="card-body">
      <form method="POST" action="" enctype="multipart/form-data">
  
  <div class="form-group">
    
    <label for="exampleInputPassword1">Tên sản phẩm</label>
    <input type="text" class="form-control" value="<?= $row->name;?>" name="name" placeholder="tên sản phẩm mới">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Thêm ảnh sản phẩm</label>
    <input type="file" class="form-control" name="image" placeholder="hình ảnh sản phẩm">
    
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="type_name"> 
    <?php foreach($result as $row):?>
    <option value="<?= $row->id;?>"><?= $row->type_name;?></option>
    <?php endforeach?>
</select>
  <div class="form-group">
    <label for="exampleInputPassword1">Gía sản phẩm</label>
    <input type="text" class="form-control" name="price" placeholder="Gía sản phẩm">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Số lượng sản phẩm</label>
    <input type="number" class="form-control" name="count" placeholder="Số lượng sản phẩm">
    
  </div>
  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>
  </div>