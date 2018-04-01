<?php require("../includes/top_admin.php"); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h2>Đổi tên danh mục</h2>
          <?php
          // Kết nối CSDL
          require("../includes/config.php");
          $id = $_GET['id'];

          // Update dữ liệu mới
          if(isset($_POST['ok'])){
            $c = $_POST['inputCategory'];
            $sql = "update category set name='$c' where id='$id'";
            mysqli_query($conn, $sql);
            header("location:category.php");
            exit();
          }
          $sql = "select * from category where id='$id'";
          $query = mysqli_query($conn, $sql);
          $data = mysqli_fetch_assoc($query);
          ?>

          <!-- Form chỉnh sủa dữ liệu -->
          <form action="edit_category.php?id=<?php echo $id; ?>" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" name="inputCategory" placeholder="Tên mới danh mục" value="<?php echo $data[name]; ?>" required>
            </div>
            <button type="submit" name="ok" class="btn btn-primary">Sửa</button>
          </form>
        </main>

<?php require("../includes/bottom_admin.php"); ?>
