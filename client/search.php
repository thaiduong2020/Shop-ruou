<!DOCTYPE html>
<html lang="en">
<?php include("../modules/head.php");?>
<body>
<?php require_once('../modules/menu-header.php')?>

<div style="flex-wrap: wrap; display: flex;     margin: 4px 70px;">

<?php require_once('../db/config.php');

if(isset($_POST['submit'])){
    
    $str = $_POST['products'];
    $sth = $conn->prepare("SELECT * FROM products WHERE name LIKE  :str ");
    $sth->bindValue(':str','%'.$str.'%');

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth->execute();

    foreach($sth as $row){
      ?>
    <div class="card" style=" background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    width: 18%;
    margin-top: 1rem!important;
    margin-left: 20px;" >
    <input type="hidden" class="form-control" name="id" value="<?= $row->id;?>">
    <div >
    <div class="hovereffect" style="height: 258px;">
        <img class="img-responsive" src="../public/img/<?= $row->image?>" alt="" style="    width: 100%;
    height: 100%;">
        <div class="overlay">
           <h2><?= $row->name?></h2>
           <a class="info" href="../modules/chi-tiet.php?id=<?= $row->id;?>">Chi tiết </a>
           <a  href="#"><button type="button" onclick="addCart( <?= $row->id;?>)"   style="width:50%" class="btn btn-danger">MUA NGAY</button>
</a>

        </div>
    </div>
</div>
        <a href="#">
        <b href="#" style="font: 400 15px/20px 'Roboto', sans-serif;
    color: #bd4c09;
    margin: 10px 10px;" ><?= $row->name;?></b><br>
        <b style="color: red; margin: 10px 10px;">Gía: <?= $row->price;?></b>
        <b style=" margin: 10px 10px;"><label for="">Số lượng: <input type="number" id="num" style="width: 20%;" value="<?= $row->count?>"></label> </b> 

        </a>
    </div>
 
<?php

    }

    
}

?>
 </div>
<?php require_once('../modules/footer.php')?>
<script src = "jquery-3.4.1.min.js" > </script>  
<script type="text/javascript" src="/duan1/js/all.js" ></script>
</body>
</html>