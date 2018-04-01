<?php require("../includes/top_admin.php"); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h2>Danh mục</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên danh mục</th>
                  <th colspan="2" style="text-align:center"><a href='add_category.php'><button type='button' class='btn btn-outline-warning'>Thêm</button></a></th>
                </tr>
              </thead>
              <tbody>
              <?php
              // Kết nối CSDL
              require("../includes/config.php");
              $sql = "select * from category";
              $query = mysqli_query($conn, $sql);
              $n = 0;

              // Hiển thị các danh mục
              while($data = mysqli_fetch_assoc($query)){
                $n++;
                echo "<tr>";
                echo "<td>$n</td>";
                echo "<td>$data[name]</td>";
                echo "<td style='text-align:center'><a href='edit_category.php?id=$data[id]'><button type='button' class='btn btn-outline-success'>Sửa</button></a></td>";
                echo "<td style='text-align:center'><a href='delete_category.php?id=$data[id]' onclick='return xoa()'><button type='button' class='btn btn-outline-danger'>Xóa</button></a></td>";
                echo "</tr>";
              }
              ?>
              </tbody>
            </table>
          </div>
        </main>
        <script>
          function xoa(){
            if(!window.confirm('Bạn có chắc là muốn xóa danh mục này không?')){
              return false;
            }
          }
        </script>

<?php require("../includes/bottom_admin.php"); ?>
