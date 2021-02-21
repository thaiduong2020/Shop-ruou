<?php require_once('../../controller/type_products/select-type.php')?>
<?php require_once('../../controller/products/insert.php');?>
<?php require_once('../../controller/products/all.php');?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('../../modules/head-ad.php');?>
<body>
  <?php require_once('../../modules/menu-ad.php');?>
  <?php require_once('list.php');?>

 
<script>
    function checkDelete() {
        return confirm('Bạn có chắc muốn xóa sản phẩm này không ???');
    }</script>


</body>
</html>