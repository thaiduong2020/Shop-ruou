
<?php require_once('../controller/products/select2.php');?>
<div style="margin: -15px 92px;margin-top: 39px;
    width: 85.8%;">
  <h4> <span style="border-bottom: 1px solid #403ec5;
    padding-bottom: 6px;
    margin-bottom: -7px;
    font: 500 18px/20px 'UtmAvo', sans-serif;
}">SẢN PHẨM </span> </h4>
  <hr style="margin-top: -4px;">
</div>
<div style="flex-wrap: wrap; display: flex;     margin: 4px 70px;">
  <?php foreach($result as $row){?>
    
    <div class="card" style=" background-color: #fff;
    
    width: 374px;
    height: 177px;
    margin-top: 1rem!important;
    margin-left: 20px;  " >
    <input type="hidden" class="form-control" name="id" value="<?= $row->id;?>">
        <a href="#" style="display:flex;">
        <img style="    width: 162px;
    height: 150px;
    margin: 12px 8px;     border: 1px solid #dee2e6;
    border-radius: .25rem;" src="../admin/public/img/<?= $row->image;?>" alt="">
    <div style="margin: 55px 11px;">
        <b href="#" style="font: 400 15px/20px 'Roboto', sans-serif;
    color: #bd4c09;
    margin: 10px 10px;" ><?= $row->name;?></b><br>
        <b style="color: red; margin: 10px 10px;">Gía: <?= $row->price;?> đ</b>
  </div >
        </a>
    </div>
  
  <?php
  }
  ?>
</div>