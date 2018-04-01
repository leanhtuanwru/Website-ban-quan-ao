<?php require("../includes/top_admin.php"); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h2>Sửa thông tin sản phẩm</h2>
          <?php
          // Kết nối CSDL
          require("../includes/config.php");
          $id = $_GET['id'];

          // Update dữ liệu mới được nhập vào
          if(isset($_POST['ok'])){
            $name = $_POST['name'];
            $cate = $_POST['category'];
            $price = $_POST['price'];
            $des = $_POST['description'];
            if ($_FILES['img']['name'] != NULL) {
              move_uploaded_file($_FILES['img']['tmp_name'], "../img/" . $_FILES['img']['name']);
              $img = $_FILES['img']['name'];
              $sql = "UPDATE `product` SET `name` = '$name', `description` = '$des', `price` = '$price', `img` = '$img', `category_id` = '$cate' WHERE `product`.`id` = $id";
            } else {
              $sql = "UPDATE `product` SET `name` = '$name', `description` = '$des', `price` = '$price', `category_id` = '$cate' WHERE `product`.`id` = $id";
            }
            mysqli_query($conn, $sql);
            header("location:product.php");
            exit();
          }
          $sql = "select * from product where id='$id'";
          $query = mysqli_query($conn, $sql);
          $data = mysqli_fetch_assoc($query);
          ?>

          <!-- Form chỉnh sửa dữ liệu cũ -->
          <form action="edit_product.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tên</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Tên mới của sản phẩm" value="<?php echo $data[name]; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Danh mục</label>
              <div class="col-sm-10">
                <select class="form-control" name="category">
                  <?php
                  // Đổ ra danh sách các danh mục
                  $sql = "select * from category";
                  $query = mysqli_query($conn, $sql);
                  while ($data2=mysqli_fetch_assoc($query)) {
                    if ($data[category_id] == $data2[id]){
                      echo "<option value='$data2[id]' selected>$data2[name]</option>";
                    } else {
                      echo "<option value='$data2[id]'>$data2[name]</option>";
                    }
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Giá</label>
              <div class="col-sm-10">
                <input type="number" min="0" step="1000" class="form-control" name="price" placeholder="Giá mới của sản phẩm" value="<?php echo $data[price]; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Mô tả</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="5" name="description" placeholder="Mô tả mới của sản phẩm" required><?php echo $data[description]; ?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Hình ảnh</label>
              <div class="col-sm-10">
                <img src="../img/<?php echo $data[img]; ?>" width="200" style="margin-bottom:5px">
                <input type="file" class="form-control-file" name="img">
                * Chọn hình mới nếu bạn muốn thay đổi hình ảnh. Nếu không muốn thay đổi hình ảnh vui lòng giữ nguyên trường này.
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" name="ok" class="btn btn-primary">Sửa</button>
              </div>
            </div>
          </form>
        </main>

<?php require("../includes/bottom_admin.php"); ?>
