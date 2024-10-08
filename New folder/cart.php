<?php 

session_start();

if(isset($_POST['add_to_cart'])){

    if(isset($_SESSION['cart'])){

        $product_array_ids = array_column($_SESSION['cart'], "product_id");

        if( !in_array($_POST['product_id'], $product_array_ids)){


            $product_id = $_POST['product_id'];

            $product_array = array(
                'product_id' => $_POST['product_id'],
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_image' => $_POST['product_image'],
                'product_quantity' => $_POST['product_quantity']
            );


        $_SESSION['cart'][$product_id] = $product_array;

        }else{

            echo "<script>alert('Product was already to cart')</script>";
            // echo "<script>window.location='index.php';</script>";
        }

    }else{
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['product_quantity'];

        $product_array = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_image' => $product_image,
            'product_quantity' => $product_quantity
        );


        $_SESSION['cart'][$product_id] = $product_array;
    }



    calculateTotalCart();







}elseif(isset($_POST['remove_product'])){

    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);


    calculateTotalCart();




}elseif(isset($_POST['edit_quantity'])){
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];

    $product_array = $_SESSION['cart'][$product_id];

    $product_array['product_quantity'] = $product_quantity;

    $_SESSION['cart'][$product_id] = $product_array;



    calculateTotalCart();

}else{
    header('location: index.php');
}




function calculateTotalCart{

    $total = 0;

    foreach($_SESSION['cart'] as $key => $value){

        $product = $_session['cart'][$key];

        $price = $product['product_price'];
        $quantity = $product['product_quantity'];

        $total = $total + ($price * $quantity);
    }

    $_SESSION['total'] = $total;
}






?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

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
                    <a class="nav-link" href="#">Contact us</a>
                </li>
                <li class="nav-item">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <i class="fa-solid fa-user-tie"></i>
                </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- cart -->
    <section class="cart container my-5 py-5">
        <div class="container mt-5">
            <h2 class="font-weight-bold">Your cart</h2>
            <hr>
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>



            <?php foreach($_SESSION['cart'] as $key => $value){ ?>




            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/imgs/<?php echo $value['product_image']; ?>">
                        <div>
                            <p><?php echo $value['product_name']; ?></p>
                            <small><span>rs.</span><?php echo $value['product_price']; ?></small>
                            <br>
                            <form action="cart.php" method="POST">
                                <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                                <input type="submit" name="remove_product" class="remove-btn" value="remove">
                            </form>
                        </div>
                    </div>
                </td>

                <td>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                        <input type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>">
                        <input type="submit" name="edit_quantity" value="edit" class="edit-btn">

                    </form>
                    
                </td>

                <td>
                    <span>rs.</span>
                    <span class="product-price"><?php echo $value['product_quantity'] * $value['product_price']; ?></span>
                </td>
            </tr>



            <?php } ?>

        </table>


        <div class="cart-total">
            <table>
                <!-- <tr>
                    <td>Subtotal</td>
                    <td>rs. 2,999</td>
                </tr> -->
                <tr>
                    <td>Total </td>
                    <td>rs. <?php echo $_SESSION['total'];  ?> </td>
                </tr>
            </table>
        </div>

        <div class="checkout-container">
            <form action="checkout.php" method="POST">
                <input class="btn checkout-btn" value="Checkout" name="checkout">
            </form>
        </div>
    </section>







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