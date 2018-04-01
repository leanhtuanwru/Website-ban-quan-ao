<!-- include Header -->
<?php include('includes/header.php') ?>

<!-- inlcude nav-bar -->
<?php include('includes/nav.php') ?>
<?php include('includes/config.php') ?>


<main role="main" class="container-fluid">
    <div class="logo-of-shop text-center">
        <img src="img/3t-shop-logo.jpg" alt="Logo of 3T Shop" title="3TShop" height="300px">
    </div>
    <!--        Logo-->
    <!--       promotion-->
    <hr>
    <div class="starter-template">
        <div class="policy-v1 ">
            <div class="container-fuild">
                <div class="row row-gutter-10">
                    <div class="col-sm-4 col-33">
                        <div class="policy-item promotion" id="focus-1">
                            <h3>Miễn phí vận chuyển</h3>
                            <span>Áp dụng cho đơn hàng từ  500K</span>
                        </div>
                    </div>
                    <div class="col-sm-4 col-33">
                        <div class="policy-item mid promotion" id="focus-2">
                            <h3>Xả hàng Đông</h3>
                            <span>Sale upto 50%</span>
                        </div>
                    </div>
                    <div class="col-sm-4 col-33">
                        <div class="policy-item promotion" id="focus-3">
                            <h3>
                                Sinh viên giảm giá 15%
                            </h3>
                            <span>Yêu cầu xuất trình thẻ sinh viên</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--               end promotion-->
        <!--       slider-->
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/sale-banner.jpg" alt="First slide" width="1180px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/banner_2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/banner_1.jpg" alt="Third slide" width="1180px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
    <!--        end slider-->

    <!--  New in today    -->

    <div class="container-new-in-today">
        <div>
            <div class="box-title text-center">
                <h3>
                    NEW IN TODAY
                </h3>
                <div>
                    <img src="img/title-icon.png" alt="">
                </div>
            </div>
        </div>


        
        <div class="owl-carousel owl-theme">
            <?php
                    $sql = "select * from newintoday";
                    $query = mysqli_query($conn, $sql);
                    $n=0;
                    while($data = mysqli_fetch_assoc($query)){
                    $n++;
                    echo "<div>";
                    echo "<img src='$data[img]' alt=\"\">";
                    echo "<div class='product-info'>";
                    echo "   <div class='product-name text-center'>";
                    echo "       <a href=\"http://localhost/Website-ban-quan-ao/detail.php/?id=$data[id]\">$data[name]</a>";
                    echo "    </div>";
                    echo "    <div class='product-price text-center'>$data[price]$</div> ";
                    echo "   <div class='price text-center'> ";
                    echo "       <button type='button' class='btn btn-success'>Add to cart</button>";
                    echo "    </div> ";
                    echo "</div>";
                        echo "</div>";
                    }
                    ?>
        </div>

        <!--        End New In Today-->

        <!--        sale-->
        <div class="sale-promotion">
            <div class="row">
                <div class="col-sm-4">
                    <div class="img-eff1">
                        <div class="ov1"></div>
                        <div class="ov2"></div>
                        <div class="ov3"></div>
                        <div class="ov4"></div>
                        <a href="#" style="height: 350px; background-image: url('img/sale-60.jpg'); background-size: cover; background-position: center; width: 100%;display: block;">
                  </a>
                    </div>
                </div>
                <div class="col-sm-4 img-eff1">
                    <div class="img-eff1">
                        <div class="ov1"></div>
                        <div class="ov2"></div>
                        <div class="ov3"></div>
                        <div class="ov4"></div>
                        <a href="#" style="height: 350px; background-image: url('img/sale-70.jpg'); background-size: cover; background-position: center; width: 100%;display: block;">
                  </a>
                    </div>
                </div>
                <div class="col-sm-4 img-eff1">
                    <div class="img-eff1">
                        <div class="ov1"></div>
                        <div class="ov2"></div>
                        <div class="ov3"></div>
                        <div class="ov4"></div>
                        <a href="#" style="height: 350px; background-image: url('img/free-19.jpg'); background-size: cover; background-position: center; width: 100%;display: block;">
                  </a>
                    </div>
                </div>
            </div>
        </div>

        <!--      end sale-->


        <!--     New Arrival-->
        <div class="container-new-arrival">
            <div>
                <div class="box-title text-center">
                    <h3>
<!--                        <a href="#" onclick="getdata(1)">BEST SELLER</a>-->
                       BEST SELLER
                    </h3>
                    <div>
                        <img src="img/title-icon.png" alt="">
                    </div>
                </div>
            </div>

            <div class="owl-carousel owl-theme">
                <?php
                    $sql = "select * from bestseller";
                    $query = mysqli_query($conn, $sql);
                    $n=0;
                    while($data = mysqli_fetch_assoc($query)){
                    $n++;
                    echo "<div>";
                    echo "<img src='$data[img]' alt=\"\">";
                    echo "<div class='product-info'>";
                    echo "   <div class='product-name text-center'>";
                    echo "       <a href=\"http://localhost/Website-ban-quan-ao/detail.php/?id=$data[id]\">$data[name]</a>";
                    echo "    </div>";
                    echo "    <div class='product-price text-center'>$data[price]$</div> ";
                    echo "   <div class='price text-center'> ";
                    echo "       <button type='button' class='btn btn-success'>Add to cart</button>";
                    echo "    </div> ";
                    echo "</div>";
                        echo "</div>";
                    }
                    ?>

            </div>
        </div>
        <!--    End New Arrival-->



        <!--  include footer-->

        <?php include('includes/footer.php')?>