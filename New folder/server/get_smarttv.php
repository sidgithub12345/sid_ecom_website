<?php


include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='smarttv' LIMIT 4");

$stmt->execute();

$smarttv = $stmt->get_result();



?>