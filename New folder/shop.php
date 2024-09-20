
<?php 


include('server/connection.php');

$stmt = $conn->prepare("SELECT * FROM products");

$stmt->execute();

$products = $stmt->get_result();




?>





















<?php include('layouts/header.php'); ?>







    <!-- <section id="featured" class="my-5 py-5 ms-2">
        <div class="container mt-5 py-5">
            <p>Search Products</p>
            <hr>
        </div>

        <form>
            <div class="row mx-auto container">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>Category</p>
                    <div class="form-check">
                        <input type="radio" class="form-cehck-input" name="category" id="category_one">
                        <label for="flexRadioDefault1" class="form-check-label">
                            smartphone
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-cehck-input" name="category" id="category_two" checked>
                        <label for="flexRadioDefault1" class="form-check-label">
                            eabuds
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-cehck-input" name="category" id="category_three">
                        <label for="flexRadioDefault1" class="form-check-label">
                            smart-watch
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-cehck-input" name="category" id="category_four">
                        <label for="flexRadioDefault1" class="form-check-label">
                            smart-tv
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mx-auto container mt-5">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>Price</p>
                    <input type="range" class="form-check w-50" min="1" max="1000" id="customRange2">
                    <div class="w-50">
                        <span style="float: left;">1</span>
                        <span style="float: right;">1000</span>
                    </div>
                </div>
            </div>

            <div class="form-group my-3 mx-3">
                <input type="submit" name="search" value="Search" class="btn btn-primary">
            </div>
        </form>
    </section> -->




    <section id="featured" class="my-5 py-5">
        <div class="container mt-5 py-5">
            <h3>our products</h3>
            <hr>
            <p>Here you can check out our products</p>
        </div>
        <div class="row mx-auto container">


        <?php while($row = $products->fetch_assoc()) { ?>
            
            <div onclick="window.location.href='single_product.php'" class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                <h4 class="p-price">rs. <?php echo $row['product_price']; ?></h4>
                <a class="btn shop-buy-btn" href="<?php echo "single_product.php?product_id=".$row['product_id'];?>">Buy Now</a>
            </div>

            <?php } ?>




            <nav aria-label="Page navigation example">
                <ul class="pagination mt-5">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">next</a></li>
                </ul>
            </nav>
        </div>
    </section>


















    <?php include('layouts/footer.php'); ?>