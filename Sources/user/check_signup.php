<?php
	$name = $_POST["name"];
	$addr = $_POST["addr"];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$psw = $_POST['psw'];
	require("../includes/config.php");
	$sql = "INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `address`, `date`) VALUES (NULL, '$name', '$email', '$psw', '$phone', '$addr', CURRENT_TIMESTAMP)";
    mysqli_query($conn, $sql);
	echo 'ok';
	exit();
?>
