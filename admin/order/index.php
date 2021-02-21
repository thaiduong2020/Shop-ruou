<!DOCTYPE html>
<html lang="en">
<?php require_once('../../modules/head-ad.php');?>

<body>
  <?php require_once('../../controller/order/select.php')?>

 <?php require_once('../../modules/menu-ad.php');?>
 <?php require_once('list.php');?>

<th colspan="7">
                            <button class="btn btn-outline-light bg-success font-weight-bold" id="check-all" type="button"><a href="insert.php" style="color:white"> Thêm mới</a></button>
                        </th>
<script>
    function checkDelete() {
        return confirm('Bạn có chắc muốn xóa sản phẩm này không ???');
    }</script>


</body>
</html>