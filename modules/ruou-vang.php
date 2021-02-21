

<!DOCTYPE html>
<html lang="en">
<?php include("../modules/head.php");?>
<body>
<?php require_once('../modules/menu-header.php')?>



<?php include("../db/config.php");?>
<div style="margin: 33px 92px;
    width: 85.8%;">
  <h4> <span style="border-bottom: 1px solid #403ec5;
    padding-bottom: 6px;
    margin-bottom: -7px;
    font: 500 18px/20px 'UtmAvo', sans-serif;
">Rượu Vang</span> </h4>
  <hr style="margin-top: -4px;">
</div>
<div style="flex-wrap: wrap; display: flex;     margin: 4px 70px;">
<?php 
  $hang_cung_loai = $conn-> prepare("SELECT * FROM products WHERE type_id = 11 ORDER BY RAND()");
  $hang_cung_loai->execute();
 foreach($hang_cung_loai as $row){?>
    
    <div class="card" style="height: 352px; background-color: #fff;: 1px solid #dee2e6;border-radius: .25rem; width: 18.2%;margin-top: 1rem!important; margin-left: 20px;" >
   
    <input type="hidden" class="form-control" name="id" value="<?= $row->id;?>">
    <div >
    <div class="hovereffect" style="height: 258px;">
        <img class="img-responsive" src="../public/img/<?php echo $row[2]?>" alt="" style="    width: 100%;
    height: 100%;">
        <div class="overlay">
           <h2><?php echo $row[1]?></h2>
           <a class="info" href="../modules/chi-tiet.php?id=<?php echo $row[0]?>">Chi tiết </a>
           <a  href="#"><button type="button" onclick="addCart( <?php echo $row[0]?>)"   style="width:49%" class="btn btn-danger">MUA NGAY</button>
</a>

        </div>
    </div>
</div>
        <a  style="width: 100%;
    height: 75%;">
        <b href="#" style="font: 400 15px/20px 'Roboto', sans-serif;
    color: #bd4c09;
    margin: 10px 10px;" ><?php echo $row[1]?></b><br>
        <b style="color: red; margin: 10px 10px;">Gía: <?php echo $row[4]?> đ</b>
        </a>
    </div>
  
  <?php
  }
  
  ?>
</div>




<?php require_once('../modules/tintuc.php')?>
<?php require_once('../modules/footer.php')?>

<script src = "jquery-3.4.1.min.js" > </script>  
<script type="text/javascript" src="/duan1/js/all.js" ></script>
</body>
</html>