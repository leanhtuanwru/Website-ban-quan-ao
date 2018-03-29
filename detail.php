<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Product Page</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>

      <link rel="stylesheet" href="css/detail.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  
</head>

<body>

  <div class="container">
  <div class="header">
<!-- inlcude nav-bar -->
<?php include('includes/nav.php') ?>
  </div>
  <div class="product">
    <div class="product-photo">
      <img src="https://raw.githubusercontent.com/leanhtuanwru/Website-ban-quan-ao/master/img/Product/Newtoday/dress-1.jpg">
      <img src="https://raw.githubusercontent.com/leanhtuanwru/Website-ban-quan-ao/master/img/Product/Newtoday/dress-1.jpg">
    </div>
    <div class="product-detail">
      <h1 class="product__title">Dress Black</h1>
      <div class="product__price">$35</div>
      <div class="product__subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>

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
