<?php
    include('connection.php');

    $statement = $connection -> prepare("SELECT * FROM products WHERE product_category = 'costs' LIMIT 4");
    $statement -> execute();
    $chips_products = $statement -> get_result();
?>