<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checking Out</title>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/product.css" />
    <link rel="stylesheet" href="css/style-2.css" />
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic&subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
    <link href="font/css/font-awesome.min.css" media="all" type="text/css" rel="stylesheet" />
    <link href="font/css/pe-icon-7-stroke.css" media="all" type="text/css" rel="stylesheet" />
    <!--    font-awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

</head>
<body>
  
   <?php include_once('includes/nav.php') ?>
   
   <div class="container">
   
<!--   Form nhập thông tin giao hàng-->
  <?php require_once('includes/config.php') ?>
   
    <h2>Shipment Details</h2>
      
    
       <form action="" name="Shipment_Details" method="post">
        <div class="form-group">
          <label for="usr">Name:</label>
          <input type="text" class="form-control" id="name" name="full_name">
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
          <label for="addr">Address:</label>
          <input type="text" class="form-control" id="address" name="address">
        </div>
        
        <input type="submit" value="Create Oder" class="btn btn-primary" name="create_oder">
    </form>
    
    
<!--    Chi tiết sản phẩm Oder-->
     
      <div style="clear:both"></div>  
        <br />  
        <div class="table-responsive">  
        <table class="table">  
            <tr><th colspan="5"><h3>Order Details</h3></th></tr>   
        <tr>  
             <th width="40%">Product Name</th>  
             <th width="10%">Quantity</th>  
             <th width="20%">Price</th>  
             <th width="15%">Total</th>  
             <th width="5%">Action</th> 
        </tr> 
         
        <?php   
        if(!empty($_SESSION['shopping_cart'])):  
            
             $total = 0;  
        
             foreach($_SESSION['shopping_cart'] as $key => $product): 
        ?>  

        
        <tr>  
           <td><?php echo $product['name']; ?></td>  
           <td><?php echo $product['quantity']; ?></td>  
           <td>$ <?php echo $product['price']; ?></td>  
           <td>$ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>  
           <td>
               <a href="product.php?action=delete&id=<?php echo $product['id']; ?>">
                    <div class="btn-danger">Remove</div>
               </a>
           </td>  
        </tr>  
        <?php  
                  $total = $total + ($product['quantity'] * $product['price']);  
             endforeach;  
        ?>  
        <tr>  
             <td colspan="3" align="right">Total</td>  
             <td align="right">$ <?php echo number_format($total, 2); ?></td>  
             <td></td>  
        </tr>  

        <?php  
        endif;
        ?>  
        </table>  
         </div>
       
       <?php 
            if(isset($_POST["create_oder"])) {
                $id_p = $product['id'];
                $name_p = $product['name'];
                $quantity_p = $product['id'];
                $price_p = $product['price'];
                
                $total_p = number_format($product['quantity'] * $product['price'], 2);
                $sql = "insert into oder values('','$_POST[full_name]','$_POST[phone]','$_POST[address]','$id_p','$name_p','$quantity_p','$price_p')";
                mysqli_query($conn, $sql);
                session_destroy();
                echo "Oder Complete. Thank for Shopping ^^";
                echo "Go to <a href='index.php'>HomePage</a>";
            }
       
       ?>

       
       
        
   </div>

   <?php include_once('includes/footer_only.php') ?>

</body>
</html>