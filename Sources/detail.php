<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Product Page</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Website-ban-quan-ao/Sources/css/detail.css">
      

  
</head>

<body>
  <?php include('includes/config.php') ?>
  <?php include('includes/nav.php') ?>
  
  
  <div class="product">
    <div class="product-photo">

      <?php 
        $id = $_GET['id'];  
        $sql = "select name,price,description,img from newintoday where id='$id'";
        $query = mysqli_query($conn, $sql);
        $data=mysqli_fetch_array($query);
    
        echo "<img src='$data[img]'>";
        echo "<img src='$data[img]'>";
        echo "</div>";
        echo "<div class='product-detail'>";
        
        
        
    
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


    <script  src="http://localhost/Website-ban-quan-ao/Sources/js/detail.js"></script>

</body>

</html>
