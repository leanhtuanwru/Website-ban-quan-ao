<?php
// Kiểm tra phiên làm việc
	session_start();
	if (!isset($_SESSION['ses_username'])) {
		header("location:signin.php");
		exit();
	}

	// Thực hiện xóa danh mục
	$id = $_GET['id'];
	require("../includes/config.php");
	$sql = "delete from category where id='$id'";
	mysqli_query($conn, $sql);
	header("location:category.php");
	exit();
?>
