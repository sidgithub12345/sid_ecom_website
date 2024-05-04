<?php


include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='smartwatches' LIMIT 4");

$stmt->execute();

$smartwatches = $stmt->get_result();



?>