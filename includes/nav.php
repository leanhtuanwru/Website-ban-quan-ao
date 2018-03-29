    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="navbar">
        <a class="navbar-brand" href="index.php">3T Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                
                <?php 
                    require_once('config.php');
                    $sql = "select * from category";
                    $query = mysqli_query($conn, $sql);
                    
                    while($data = mysqli_fetch_assoc($query)){
                    echo '<li class="nav-item">';
                    echo "<a class='nav-link' href='#'>$data[name]</a></li>";                        
                    }

                ?>
                <li>
                    <a class="nav-link disabled" href="http://localhost/Website-ban-quan-ao//contact_us.php">Liên hệ</a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </nav>