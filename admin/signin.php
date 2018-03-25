<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Đăng nhập trang quản trị</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="signin.php" method="POST">
      <img class="mb-4" src="../img/logo.gif" alt="" width="" height="">
      <h1 class="h3 mb-3 font-weight-normal">Quản trị viên</h1>
      <?php
        session_start();
        if(isset($_POST['btnSubmit'])){
          $u = $_POST['inputText'];
          $p = $_POST['inputPassword'];
          require("../includes/config.php");
          $sql = "select * from admin where username='$u' and password='$p'";
          $query = mysqli_query($conn, $sql);
          if (mysqli_num_rows($query) == 0) {
            echo "Tên đăng nhập và mật khẩu không chính xác. Vui lòng nhập lại.";
          } else {
            $data = mysqli_fetch_assoc($query);
            $_SESSION['ses_username'] = $data['username'];
            header("location:index.php");
            exit();
          }
        }
      ?>
      <label for="inputEmail" class="sr-only">Tên đăng nhập</label>
      <input type="text" name="inputText" class="form-control" placeholder="Tên đăng nhập" required autofocus>
      <label for="inputPassword" class="sr-only">Mật khẩu</label>
      <input type="password" name="inputPassword" class="form-control" placeholder="Mật khẩu" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Em à. Nhớ anh không?
        </label>
      </div>
      <button class="btn btn-lg btn-success btn-block" type="submit" name="btnSubmit">Đăng nhập</button>
      <p class="mt-5 mb-3 text-muted">&copy; <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('Y'); ?></p>
    </form>
  </body>
</html>
