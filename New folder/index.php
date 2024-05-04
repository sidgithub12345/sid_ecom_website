
<?php include('layouts/header.php'); ?>

    <!-- home -->
    <section id="home">
        <div class="container">
            <h5>NEW ARRIVAL</h5>
            <h1><span>Best Prices </span> This Season</h1>
            <p>DIGI-SHOP offers the best products for the affordable prices</p>
            <a href="shop.php"><button>Shop Now</button></a>
        </div>
    </section>



    <!-- brand -->
    <section id="brand" class="container">
        <div class="row">
            <img id="brand1" class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand1.png" alt="">
            <img id="brand2" class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand2_3.png" alt="">
            <img id="brand3" class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand3.jpg" alt="">
            <img id="brand4" class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand4_1.jpeg" alt="">
        </div>
    </section>



    <!-- new -->
    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <!-- one -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assets/imgs/smartwatch_1.jpg" alt="">
                <div class="details">
                    <h2>Extreamely Awesome SmartWatch</h2>
                    <a href="shop.php"><button class="text-upercase">Shop Now</button></a>
                </div>
            </div>
            <!-- one -->

            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assets/imgs/samrtphone_1.avif" alt="">
                <div class="details">
                    <h2> Awesome Smart TV</h2>
                    <a href="shop.php"><button class="text-upercase">Shop Now</button></a>
                </div>
            </div>

            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assets/imgs/smartbuds_1.jpg" alt="">
                <div class="details">
                    <h2>smartphones</h2>
                    <a href="shop.php"><button class="text-upercase">Shop Now</button></a>
                </div>
            </div>
        </div>
    </section>





    <!-- feature -->
    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>our featured</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new featured products</p>
        </div>
        <div class="row mx-auto container-fluid">


        <?php include('server/get_featured_products.php'); ?>


        <?php while($row= $featured_products->fetch_assoc()){ ?>
            
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" alt="#">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                <h4 class="p-price">rs. <?php echo $row['product_price']; ?></h4>
                <button class="buy-btn">Buy Now</button>
            </div>

            <?php } ?>

        </div>
    </section>



    <!-- banner -->
    <section id="banner" class="my-5 pb-5">
        <div class="container">
            <h4>MID SESSION'S SALE</h4>
            <h1>special collection <br> up to 30% off</h1>
            <a href="shop.php"><button class="text-upercase"> Shop Now</button></a>
        </div>
    </section>



    <!-- smartwatches -->
    <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>Smartwatches</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new smartwatches</p>
        </div>
        <div class="row mx-auto container-fluid">

        <?php include('server/get_smartwatches.php'); ?>


        <?php while($row=$smartwatches->fetch_assoc()){ ?>
            
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                <h4 class="p-price">rs. <?php echo $row['product_price']; ?></h4>
                <a href=" <?php echo "single_product.php?product_id=". $row['product_id'];?>"> 
                <button class='buy-btn'>Buy Now</button> </a>
            </div>


            <?php } ?>
        </div>
    </section>


    <!-- smartearbuds -->
    <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>earbuds</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new amazing earbuds</p>
        </div>
        <div class="row mx-auto container-fluid">


        <?php include('server/get_earbuds.php'); ?>


        <?php while($row=$earbuds_products->fetch_assoc()){ ?>
            
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                <h4 class="p-price">rs. <?php echo $row['product_price']; ?></h4>
                <a href=" <?php echo "single_product.php?product_id=". $row['product_id'];?>"> 
                <button class='buy-btn'>Buy Now</button> </a>
            </div>


            <?php } ?>
        </div>
    </section>

    <!-- smarttv -->
    <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
            <h3>Smart TV </h3>
            <hr class="mx-auto">
            <p>Here you can check out our new smart TV's</p>
        </div>
        <div class="row mx-auto container-fluid">


        <?php include('server/get_smarttv.php'); ?>


        <?php while($row=$smarttv->fetch_assoc()){ ?>
            
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                <h4 class="p-price">rs. <?php echo $row['product_price']; ?></h4>
                <a href=" <?php echo "single_product.php?product_id=". $row['product_id'];?>"> 
                <button class='buy-btn'>Buy Now</button> </a>
            </div>


            <?php } ?>

        </div>
    </section>


    <?php include('layouts/footer.php'); ?>