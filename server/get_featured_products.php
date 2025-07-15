<?php
    include('connection.php');

    $statement = $connection -> prepare("SELECT * FROM products LIMIT 4");
    $statement -> execute();
    $featured_products = $statement -> get_result();
?>