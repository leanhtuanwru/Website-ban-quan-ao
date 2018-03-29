<?php
	session_start();
	if (!isset($_SESSION['ses_username'])) {
		header("location:signin.php");
		exit();
	}
	$id = $_GET['id'];
	require("../includes/config.php");
	$sql = "delete from category where id='$id'";
	mysqli_query($conn, $sql);
	header("location:category.php");
	exit();
?>
