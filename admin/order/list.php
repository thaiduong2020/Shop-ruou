

<h1 style="    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;">Quản Lý Sản Phẩm</h1>
 
  <table class="table">
  <thead>
    <tr>

      <th scope="col">NAME</th>
      <th scope="col">TYPE_PRODUCTS</th>
      <th scope="col">PRICE</th>
      <th scope="col">COUNT</th>
      <th scope="col">CREATED_AT</th>
      
                   
                
    </tr>
  </thead>
  <tbody>
                  <?php

                  foreach($result as $row){
                  $result = "string";
                      
                      ?>
                  
                  <tr>
                          <th ><?php echo $row[1]?></th>
                          <th ><?php echo $row[2]?></th>
                          <td ><?php echo $row[3]?></td>
                          <td  ><?php echo $row['count'];?></td>
                          <td ><?= $row->date_created;?></td>
                          <td >  
                    <a class='btn btn-primary' href='update.php?id=<?= $row->id;?>'>Edit</a> 
                    <a class='btn btn-primary' onclick='return checkDelete()' href="delete.php?id=<?= $row->id;?>">Delete</a> </td>
                        </tr>
<?php }?>

                </tbody>
                  
</table>
<div class="pagination" style="    margin: 10px 34%;">

</div>