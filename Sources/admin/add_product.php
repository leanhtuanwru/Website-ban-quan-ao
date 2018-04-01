<?php
	session_start();
	if (!isset($_SESSION['ses_username'])) {
		header("location:signin.php");
		exit();
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Thêm sản phẩm</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">3T Shop</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Tìm kiếm	" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="signout.php">Đăng xuất</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Thêm sản phẩm
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Quản lý sản phẩm
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Thêm chuyên mục
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Quản lý chuyên mục
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h2>Thêm sản phẩm</h2>
          <?php
          require("../includes/config.php");
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
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>
</html>
