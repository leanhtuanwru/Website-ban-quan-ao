<?php require("../includes/top_admin.php"); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h2>Sản phẩm</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tên</th>
                  <th>Hình ảnh</th>
                  <th>Giá</th>
                  <th>Mô tả</th>
                  <th>Danh mục</th>
                  <th>Ngày tạo</th>
                  <th>Ngày sửa</th>
                  <th style="text-align:center"><a href='add_product.php'><button type='button' class='btn btn-outline-warning'>Thêm</button></a></th>
                </tr>
              </thead>
              <tbody>
              <?php
              // Kết nối CSDL
              require("../includes/config.php"); 
              $sql = "select product.*, category.name as category_name from product, category where product.category_id = category.id";
              $query = mysqli_query($conn, $sql);
              $n = 0;
              
              // Đổ dữ liệu ra từ cơ sở dữ liệu
              while($data = mysqli_fetch_assoc($query)){
                $n++;
                echo "<tr>";
                echo "<td>$n</td>";
                echo "<td>$data[name]</td>";
                echo "<td><img src='../img/$data[img]' width='200'></td>";
                echo "<td>$data[price]</td>";
                echo "<td>$data[description]</td>";
                echo "<td>$data[category_name]</td>";
                echo "<td>$data[date]</td>";
                echo "<td>$data[edit_time]</td>";
                echo "<td style='text-align:center'><a href='edit_product.php?id=$data[id]'><button style='margin-bottom:5px' type='button' class='btn btn-outline-success'>Sửa</button></a><a href='delete_product.php?id=$data[id]' onclick='return xoa()'><button type='button' class='btn btn-outline-danger'>Xóa</button></a></td>";
                echo "</tr>";
              }
              ?>
              </tbody>
            </table>
          </div>
        </main>
        <script>
          function xoa(){
            if(!window.confirm('Bạn có chắc là muốn xóa sản phẩm này không?')){
              return false;
            }
          }
        </script>

<?php require("../includes/bottom_admin.php"); ?>
