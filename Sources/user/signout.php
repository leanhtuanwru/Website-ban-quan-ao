<?php
// Hủy phiên làm việc của người dùng
session_start();
session_destroy();
header("location:..");
exit();
?>