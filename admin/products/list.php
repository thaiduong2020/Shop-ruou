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
      <th scope="col">UPDATED_AT</th>
      
                   
                
    </tr>
  </thead>
  <tbody>
                  <?php foreach($result as $row){?>
                  
                  <tr>
                          <th ><?= $row->name;?></th>
                          <th ><?= $row->type_id;?></th>
                          <td ><?= $row->price;?></td>
                          <td  ><?= $row->count;?></td>
                          <td ><?= $row->created_at;?></td>
                          <td ><?= $row->updated_at;?></td>
                          <td >  
                    <a class='btn btn-primary' href='update.php?id=<?= $row->id;?>'>Edit</a> 
                    <a class='btn btn-primary' onclick='return checkDelete()' href="delete.php?id=<?= $row->id;?>">Delete</a> </td>
                        </tr>
<?php }?>

                </tbody>
                  
</table>
<div class="pagination" style="    margin: 10px 34%;">
<?php include("page.php");?><br>

</div>