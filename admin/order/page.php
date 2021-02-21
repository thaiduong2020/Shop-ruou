
<?php if($current_page > 3){
    $trang_dau =1;
    ?>

        <a style="border: 1px solid grey;padding: 0px 10px;font-size: 21px;    text-decoration: none;color: black;
" class="page-item" href="?item_page=<?=$item_page?>&page=<?=$trang_dau?>">Firt</a>
<?php }?>
<?php if($current_page > 1){
    $prev = $current_page - 1;
    ?>

        <a style="border: 1px solid grey;padding: 0px 10px;font-size: 21px;    text-decoration: none;color: black;
" class="page-item" href="?item_page=<?=$item_page?>&page=<?=$prev?>">Prev</a>
<?php }?>

<?php
for ($i=1; $i <= $tongpage ; $i++) {?>

    <?php if($i != $current_page){?>
       <?php if($i > $current_page - 3 && $i < $current_page + 3){?> 
        <a style="border: 1px solid grey;padding: 0px 10px;font-size: 21px;    text-decoration: none;color: black;
" class="page-item" href="?item_page=<?=$item_page?>&page=<?=$i?>"><?=$i?></a>
       <?php }?>
    <?php }else{?>
        <strong style="border: 1px solid grey;padding: 0px 10px;font-size: 21px;background-color: black;cursor:pointer" class="text-light"><?=$i?></strong>
    <?php }?>
<?php
}
?>
<?php if($current_page < $tongpage ){
    $next = $current_page + 1;
    ?>

        <a style="border: 1px solid grey;padding: 0px 10px;font-size: 21px;    text-decoration: none;color: black;
" class="page-item" href="?item_page=<?=$item_page?>&page=<?=$next?>">Next</a>
<?php }?>
<?php if($current_page < $tongpage - 3){

    ?>

        <a style="border: 1px solid grey;padding: 0px 10px;font-size: 21px;    text-decoration: none;color: black;
" class="page-item" href="?item_page=<?=$item_page?>&page=<?=$tongpage?>">Last</a>
<?php }?>