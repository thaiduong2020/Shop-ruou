


<!DOCTYPE html>
<html lang="en">
<?php include('head.php');?>
<body>
<?php require_once('../modules/menu-header.php')?>

   
<?php include('../db/config.php')?>

  <?php 
    if(isset($_GET["id"])){
        $id = $_GET['id'];
        $detail = $conn->prepare("SELECT * FROM products WHERE id = $id");
        $detail->execute();
        $row = $detail->fetch(PDO::FETCH_BOTH);
        // echo "<pre>";
        // print_r($row);
    }
  ?>
    <body>
        <div class="thumbnail   mt-3" style="border: 1px solid grey;box-shadow: 0 0 3px black; height: auto;width: 70%;margin: auto;">
    <div style="display: flex;">
        <div style="border: 1px solid #dee2e6;border-radius: .25rem;width: 37%;margin: 20px 23px;height: 513px;">
            <img src='../public/img/<?php echo $row[2]?>' style="    width: 100%;height: 100%;">
    </div> 
            <div class="caption" style="width: 57%;">
                <p>
                    <ul class="list-group list-group-flush text-left" style="    width: 400px;">
                        <li class="list-group-item"><b style="color:royalblue"><h4>&nbsp;&nbsp; <?php echo $row[1]?></h4></b></li>
                        <li class="list-group-item"><b class=" text-center"  >Giá:&nbsp;&nbsp;<span style="color:red;"> <?php  echo $row[4] . " VNĐ"?></span></b></li>
                        <li class="list-group-item"><b>MÃ HH:</b> <?=$id?></li>
                        <li class="list-group-item"><b><label for="">Số lượng: <input type="number" id="num" value="<?php echo $row[5]?>"></label> </b> </li>
                       
                    </ul>
                    <div style="margin-left: 238px;
    margin-top: 10px;">
                    <button type="button" class="btn btn-danger" onclick="addCart( <?php echo $row['id']?>)">Thêm vào giỏ hàng</button>
                    
</div>
<h4 style="    margin-top: 40px;">Thông Tin Sản Phẩm</h4>
<div style="width:100%; text-align:justify"><?php echo $row[7]?></div>

                </p>

            </div>
            
        </div>
        
        <form action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-11" style="margin: 10px 25px">
                                <input name="noi_dung" style="    height: 101px;" placeholder="Nhập bình luận" class="form-control"/>
                            </div>
                            <div class="col-sm-2" style="    margin: 10px 1px;
">
                                <button class="btn btn-default bg-primary" style="width: 100%">Gửi </button>
                            </div>
                        </div>
                    </div>
                </form>        
</div>



<?php include('hang-cung-loai.php');?>
 
<?php require_once('../modules/tintuc.php')?>
<?php require_once('../modules/footer.php')?>
<script src = "jquery-3.4.1.min.js" > </script>  
<script src = "../js/all.js" > </script> 
</body>
</html>