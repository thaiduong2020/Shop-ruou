<h1 style="    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;">Quản Lý Sản Phẩm</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">HỌ VÀ TÊN</th>
      <th scope="col">TÊN TÀI KHOẢN</th>
      <th scope="col">SỐ ĐIỆN THOẠI</th>
      <th scope="col">ĐỊA CHỈ KHÁCH HÀNG</th>
      <th scope="col">EMAIL</th>
      <th scope="col">GIỚI TÍNH</th>
      <th scope="col">VAI TRÒ</th>
      <th scope="col">CREATED_AT</th>
      <th scope="col"></th>

      
                
                
    </tr>
  </thead>
  <tbody>
                  <?php foreach($result as $row){?>
                  
                  <tr>
                          <th ><?= $row->name;?></th>
                          <td ><?= $row->username;?></td>
                          <td ><?= $row->phone;?></td>
                          <td ><?= $row->address;?></td>
                          <td ><?= $row->email;?></td>
                          <td ><?= $row->gender;?></td>
                          <td ><?= $row->vaitro;?></td>
                          <td ><?= $row->created_at;?></td>
                          <td >  
                    <a class='btn btn-primary' onclick='return checkDelete()' href="delete.php?id=<?= $row->id;?>">Delete</a> </td>
                        </tr>
<?php }?>
                </tbody>
                  
</table>
<div class="pagination" style="    margin: 10px 34%;">
<?php include("page.php");?><br>

</div>