<?php require("../includes/top_user.php"); ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <h2>Thông tin</h2>
  <?php
  // Kết nối CSDL
  require("../includes/config.php");
  $id = $_SESSION['ses_id'];

  // Update dữ liệu mới
  if(isset($_POST['ok'])){
    $n = $_POST['name'];
    $a = $_POST['address'];
    $p = $_POST['phone'];
    $sql = "update user set name='$n', address='$a', phone='$p' where id='$id'";
    mysqli_query($conn, $sql);
    header("location:index.php");
    exit();
  }
  $sql = "select * from user where id='$id'";
  $query = mysqli_query($conn, $sql);
  $data = mysqli_fetch_assoc($query);
  ?>

  <!-- Form chỉnh sủa dữ liệu -->
  <form action="index.php" method="POST">
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Tên</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" placeholder="Tên" value="<?php echo $data[name]; ?>" required>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Địa chỉ</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="address" placeholder="Địa chỉ" value="<?php echo $data[address]; ?>" required>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Số điện thoại</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" value="<?php echo $data[phone]; ?>" required>
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

<?php require("../includes/bottom_user.php"); ?>