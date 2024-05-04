<?php


include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='earbuds' LIMIT 4");

$stmt->execute();

$earbuds_products = $stmt->get_result();



?>