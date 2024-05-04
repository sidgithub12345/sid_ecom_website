<?php 


include('server/connection.php');

$stmt = $conn->prepare("SELECT * FROM products");

$stmt->execute();

$products = $stmt->get_result();




?>




<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_image = $_POST['product_image'];
$product_quantity = 1;

$select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

if(mysqli_num_rows($select_cart) > 0){
    $message[] = 'product already added to cart';
}else{
    $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
    $message[] = 'product added to cart succesfully';
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>products</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<link rel="stylesheet" href="css/style.css">

<style>
    #featured1{
        height: 100vh;
        width: 100%;
    }
    #new1{
        text-decoration: none;
        font-size: 20px;
        text-align: center;
        color: lightcoral;
        padding-top: 50px;
        height: 10vh;
        width: 100%;
    }

</style>
</head>
<body>

<?php

if(isset($message)){
foreach($message as $message){
    echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
};
};

?>

<?php include ('layouts/header.php'); ?>



<section id="featured1" class="my-5 py-5">
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




            <a href="products.php" id="new1">check for new added products</a>

    <section class="products">

    <div class="box-container">

        <?php
        
        $select_products = mysqli_query($conn, "SELECT * FROM `product`");
        if(mysqli_num_rows($select_products) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_products)){
        ?>

        <form action="" method="post">
            <div class="box">
                <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                <h3><?php echo $fetch_product['name']; ?></h3>
                <div class="price">rs.<?php echo $fetch_product['price']; ?>/-</div>
                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                <!-- <input type="submit" class="btn" value="add to cart" name="add_to_cart"> -->
                <a href="shop.php"><button>shop now</button></a>
            </div>
        </form>

        <?php
            };
        };
        ?>

    </div>

    </section>

    </div>
        </div>
    </section>








<script src="js/script.js"></script>

</body>
</html>