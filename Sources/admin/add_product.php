<?php require("../includes/top_admin.php"); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h2>Thêm sản phẩm</h2>
          <?php
          // Kết nối CSDL
          require("../includes/config.php");

          // Thực hiện thêm sản phẩm
          if(isset($_POST['ok'])){
            $name = $_POST['name'];
            $cate = $_POST['category'];
            $price = $_POST['price'];
            $des = $_POST['description'];
            move_uploaded_file($_FILES['img']['tmp_name'], "../img/" . $_FILES['img']['name']);
            $img = $_FILES['img']['name'];
            $sql = "insert into product(name, category_id, price, description, img) values('$name', '$cate', '$price', '$des', '$img')";
            mysqli_query($conn, $sql);
            header("location:product.php");
            exit();
          }
          ?>
          <!-- Form nhập thông tin sản phẩm -->
          <form action="add_product.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tên</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Danh mục</label>
              <div class="col-sm-10">
                <select class="form-control" name="category">
                  <?php
                  // Hiển thị các danh mục
                  $sql = "select * from category";
                  $query = mysqli_query($conn, $sql);
                  while ($data=mysqli_fetch_assoc($query)) {
                    echo "<option value='$data[id]'>$data[name]</option>";
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Giá</label>
              <div class="col-sm-10">
                <input type="number" min="0" step="1000" class="form-control" name="price" placeholder="Giá sản phẩm" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Mô tả</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="5" name="description" placeholder="Mô tả sản phẩm" required></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Hình ảnh</label>
              <div class="col-sm-10">
                <input type="file" class="form-control-file" name="img" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" name="ok" class="btn btn-primary">Thêm</button>
              </div>
            </div>
          </form>
        </main>

<?php require("../includes/bottom_admin.php"); ?>
