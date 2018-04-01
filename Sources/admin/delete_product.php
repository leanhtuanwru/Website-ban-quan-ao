<?php
// Kiểm tra phiên làm việc
	session_start();
	if (!isset($_SESSION['ses_username'])) {
		header("location:signin.php");
		exit();
	}

	// Thực hiện xóa sản phẩm
	$id = $_GET['id'];
	require("../includes/config.php");
	$sql = "delete from product where id='$id'";
	mysqli_query($conn, $sql);
	header("location:product.php");
	exit();
?>
