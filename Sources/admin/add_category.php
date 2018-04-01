<?php require("../includes/top_admin.php"); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h2>Thêm danh mục</h2>
          <?php
          // Thực hiện thêm danh mục
          if(isset($_POST['ok'])){
            $c = $_POST['inputCategory'];
            // Kết nối CSDL
            require("../includes/config.php");
            $sql = "insert into category(name) values('$c')";
            mysqli_query($conn, $sql);
            header("location:category.php");
            exit();
          }
          ?>

          <!-- Form nhập tên danh mục -->
          <form action="add_category.php" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" name="inputCategory" placeholder="Tên danh mục" required autofocus>
            </div>
            <button type="submit" name="ok" class="btn btn-primary">Thêm</button>
          </form>
        </main>
      
<?php require("../includes/bottom_admin.php"); ?>
