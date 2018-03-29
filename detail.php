<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Product Page</title>
  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

      <link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>

      <link rel="stylesheet" href="css/detail.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
      <?php require('includes/config.php') ?>

  
</head>

<body>


  
  <div class="container">
  
  <div class="">
    <!-- inlcude nav-bar -->
<?php include('includes/nav.php') ?>
  </div>
  
  <div class="product">
    <div class="product-photo">
      <img src="https://raw.githubusercontent.com/leanhtuanwru/Website-ban-quan-ao/master/img/Product/Newtoday/dress-1.jpg">
      <img src="https://raw.githubusercontent.com/leanhtuanwru/Website-ban-quan-ao/master/img/Product/Newtoday/dress-1.jpg">
    </div>
    <div class="product-detail">
      <?php 
        $id = $_GET['id'];  
        $sql = "select * from product where id=$id";
        $query = mysqli_query($conn, $sql);
        echo "<h1 class='product__title'>$data[name]</h1>";
        echo "<div class='product__price'>$data[price]</div>";
        echo "<div class='product__subtitle'>$data[description]</div>";
        ?>

      <a class="product__button" href="#" onClick="buttonAnimate()">
        <span>Add to cart</span>
        <span>Success</span>
      </a>
    </div>
  </div>
</div>
  

    <script  src="js/detail.js"></script>

</body>

</html>
