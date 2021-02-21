<?php require_once('../../db/config.php');

if(isset($_POST['submit'])){
    
    $str = $_POST['products'];
    $sth = $conn->prepare("SELECT * FROM products WHERE name = '$str' ");
    $sth = setFetchMode(PDO:: FETCH_OBJ);
    $sth->excute();

   

  
}

?>
<?php
foreach($sth as $row){?>
    <div style="flex-wrap: wrap; display: flex;     margin: 4px 70px;">
    <div class="card" style=" background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    width: 275px;
    margin-top: 1rem!important;
    margin-left: 20px;" >
    <input type="hidden" class="form-control" name="id" value="<?= $row->id;?>">
        <a href="#">
        <img style="    width: 241px; height: 264px; margin: 15px 17px; " src="../admin/public/img/<?= $row->image;?>" alt="">
        <b href="#" style="font: 400 15px/20px 'Roboto', sans-serif;
    color: #bd4c09;
    margin: 10px 10px;" ><?= $row->name;?></b><br>
        <b style="color: red; margin: 10px 10px;">Gía: <?= $row->count;?></b>
        </a>
    </div>
  



</div>
<?php }