<h1 style="    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;">Quản Lý Loại Hàng</h1>
  <table class="table">
  <thead>
    <tr>

      <th scope="col">MÃ LOẠI</th>
      <th scope="col">TÊN LOẠI</th>
     
      
                        <th colspan="7">
                            <button class="btn btn-outline-light bg-success font-weight-bold" id="check-all" type="button"><a href="insert.php" style="color:white"> Thêm mới</a></button>
                        </th>
                
    </tr>
  </thead>
  <tbody>
                  <?php foreach($result as $row){?>
                  
                  <tr>
                  <th ><?= $row->id;?></th>

                          <th ><?= $row->type_name;?></th>
                          
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