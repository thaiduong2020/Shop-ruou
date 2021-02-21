<?php require_once('../controller/products/select1.php');?>
<div style="margin: -15px 92px;
    width: 85.8%;">
  <h4> <span style="border-bottom: 1px solid #403ec5;
    padding-bottom: 6px;
    margin-bottom: -7px;
    font: 500 18px/20px 'UtmAvo', sans-serif;
}">SẢN PHẨM NỔI BẬT</span> </h4>
  <hr style="margin-top: -4px;">
</div>
<div style="flex-wrap: wrap; display: flex;     margin: 4px 70px;">
  <?php foreach($result as $row){?>
    
    <div class="card" style="height: 348px; background-color: #fff;: 1px solid #dee2e6;border-radius: .25rem; width: 275px;margin-top: 1rem!important; margin-left: 20px;" >
    <div>
      <button class="btn btn-danger" type="submit" style="margin: 0px 78.8%;
    border-radius: 0px 0px 0px 63px;"><?= $row->sale;?></button>
    </div>
    <input type="hidden" class="form-control" name="id" value="<?= $row->id;?>">
        <a href="#" style="width: 241px; height: 234px;">
        <img style="   width: 100%; height: 100%;  margin: 15px 17px; " src="../admin/public/img/<?= $row->image;?>" alt="">
        <b href="#" style="font: 400 15px/20px 'Roboto', sans-serif;
    color: #bd4c09;
    margin: 10px 10px;" ><?= $row->name;?></b><br>
        <b style="color: red; margin: 10px 10px;">Gía: <?= $row->price;?> đ</b>
        </a>
    </div>
  
  <?php
  }
  ?>
</div>
