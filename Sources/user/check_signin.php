<?php
	$email = $_POST['email'];
	$psw = $_POST['psw'];
	require("../includes/config.php");
	$sql = "select * from user where email='$email' and password='$psw'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) == 0) {
            echo 0;
            exit();
          } else {
            // Cấp cho người dùng một phiên làm việc
            session_start();
            $data = mysqli_fetch_assoc($query);
            $_SESSION['ses_name'] = $data['name'];
            $_SESSION['ses_id'] = $data['id'];
            $_SESSION['ses_address'] = $data['address'];
            $_SESSION['ses_phone'] = $data['phone'];
            $_SESSION['ses_email'] = $data['email'];
            echo 1;
          }
?>
