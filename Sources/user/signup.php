<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Đăng ký</button> -->

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Thoát">&times;</span>
  <div class="modal-content animate">
    <div class="container">
      <h1>Đăng ký</h1>
      <hr>
      <label><b>Họ và tên</b></label>
      <input type="text" placeholder="Nhập tên" id="name" name="name">
      
      <label><b>Địa chỉ</b></label>
      <input type="text" placeholder="Nhập địa chỉ" id="addr" name="addr">
      
      <label><b>Số điện thoại</b></label>
      <input type="text" placeholder="Nhập số điện thoại" id="phone" name="phone">
      
      <label><b>Email</b></label>
      <input type="text" placeholder="Nhập email" id="email" name="email">

      <label><b>Mật khẩu</b></label>
      <input type="password" placeholder="Nhập mật khẩu" id="psw" name="psw">

      <label><b>Nhập lại mật khẩu</b></label>
      <input type="password" placeholder="Nhập lại mật khẩu" id="psw_repeat" name="psw_repeat">

      <p id="error" style='color: red'></p><p id="ok" style='color: green'></p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Thoát</button>
        <button type="button" class="signupbtn" id="submit" name="submit">Đăng ký</button>
      </div>
    </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script type="text/javascript">
  $("#submit").on("click", function(){
    var name = $("#name").val();
    var addr = $("#addr").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var psw = $("#psw").val();
    var psw_repeat = $("#psw_repeat").val();
    var error = $("#error");
    var ok = $("#ok");
 
    // resert 2 thẻ div thông báo trở về rỗng mỗi khi click nút đăng nhập
    error.html("");
    ok.html("");

    // Kiểm tra nếu các trường rỗng thì báo lỗi
    if (name == "" || addr == "" || phone == "" || email == "" || psw == "" || psw_repeat == "") {
      error.html("Vui lòng nhập đầy đủ thông tin.");
      return false;
    }

    // Kiểm tra nếu mật khẩu không trùng nhau thì báo lỗi
    if (psw != psw_repeat) {
      error.html("Mật khẩu không trùng nhau.");
      return false;
    }
    
    // Chạy ajax gửi thông tin về server check_signup.php
    // kiểm tra và xuất ra thông báo
    $.ajax({
      url: "/webshop/user/check_signup.php",
      method: "POST",
      data: { name : name, addr : addr, phone : phone, email : email, psw : psw },
      success : function(response){
        if (response == "ok") {
          ok.html("Đăng ký thành công.");
        }
      }
    });
 
  });
</script>

</body>
</html>
