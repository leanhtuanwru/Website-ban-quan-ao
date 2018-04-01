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

    <title>3T Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="..">3T Shop</a>
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
                <a class="nav-link" href="category.php">
                  <span data-feather="layers"></span>
                  Danh mục
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php">
                  <span data-feather="shopping-cart"></span>
                  Sản phẩm
                </a>
              </li>
              
            </ul>

          </div>
        </nav>
        