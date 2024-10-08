<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top py-2">
        <div class="container">
            <img class="logo" src="assets/imgs/logo.jpg" alt="#">
            <h2 class="brand">Digishop</h2>
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.html">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact us</a>
                </li>
                <li class="nav-item">
                    <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
                    <a href="account.html"><i class="fa-solid fa-user-tie"></i></a>
                </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- home -->
    <section id="home">
        <div class="container">
            <h5>NEW ARRIVAL</h5>
            <h1><span>Best Prices </span> This Season</h1>
            <p>DIGI-SHOP offers the best products for the affordable prices</p>
            <button>Shop Now</button>
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
                    <button class="text-upercase">Shop Now</button>
                </div>
            </div>
            <!-- one -->

            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assets/imgs/samrtphone_1.avif" alt="">
                <div class="details">
                    <h2> Awesome Smart TV</h2>
                    <button class="text-upercase">Shop Now</button>
                </div>
            </div>

            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assets/imgs/smartbuds_1.jpg" alt="">
                <div class="details">
                    <h2>smartphones</h2>
                    <button class="text-upercase">Shop Now</button>
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
            <button class="text-upercase"> Shop Now</button>
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
            
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/smartwatch(1).webp" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smartphone</h5>
                <h4 class="p-price">rs.1,38,999</h4>
                <button class="buy-btn">Buy Now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/smartwatch(1).webp" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart laptops</h5>
                <h4 class="p-price">rs.58,999</h4>
                <button class="buy-btn">Buy Now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/smartwatch(1).webp" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart Watch</h5>
                <h4 class="p-price">rs.2,499</h4>
                <button class="buy-btn">Buy Now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/smartwatch(1).webp" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart earbuds</h5>
                <h4 class="p-price">rs.2,999</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
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
            
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/smarttv_1.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smartphone</h5>
                <h4 class="p-price">rs.1,38,999</h4>
                <button class="buy-btn">Buy Now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/smarttv_1.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smartphone</h5>
                <h4 class="p-price">rs.1,38,999</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/smarttv_1.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smartphone</h5>
                <h4 class="p-price">rs.1,38,999</h4>
                <button class="buy-btn">Buy Now</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/smarttv_1.jpg" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smartphone</h5>
                <h4 class="p-price">rs.1,38,999</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
        </div>
    </section>



    <!-- footer -->
    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <img class="logo" src="assets/imgs/logo.jpg" alt="#">
                <p class="pt-3">we provide the best products for the most affordable prices</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Featured</h5>
                <ul class="text-upercase">
                    <li><a href="#">smart phone</a></li>
                    <li><a href="#">smart watch</a></li>
                    <li><a href="#">smart earbuds</a></li>
                    <li><a href="#">smart tv</a></li>
                    <li><a href="#">smart laptops</a></li>
                </ul>
            </div>

            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">contact us</h5>
                <div>
                    <h6 class="text-upercase">address</h6>
                    <p>1234 street name, city</p>
                </div>
                <div>
                    <h6 class="text-upercase">phoner</h6>
                    <p>1234567890</p>
                </div>
                <div>
                    <h6 class="text-upercase">email</h6>
                    <p>sid@gmail.com</p>
                </div>
            </div>

            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">instagram</h5>
                <div class="row">
                    <img src="assets/imgs/featured(smartbuds).webp" alt="#" class="img-fluid w-25 h-25 m-2">
                    <img src="assets/imgs/featured(smartlaptops).jpg" alt="#" class="img-fluid w-25 h-25 m-2">
                    <img src="assets/imgs/featured(smartphone).jpg" alt="#" class="img-fluid w-25 h-25 m-2">
                    <img src="assets/imgs/featured(smartwatch).jpg" alt="#" class="img-fluid w-25 h-25 m-2">
                    <img src="assets/imgs/samrtphone_1.avif" alt="#" class="img-fluid w-25 h-25 m-2">
                </div>
            </div>
        </div>


        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <img src="assets/imgs/payment.jpg" alt="#">
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2 ">
                    <p>ecommerce @ 2024 all right reserved</p>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>