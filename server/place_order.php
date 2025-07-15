<?php
    session_start();
    include('connection.php');
    if (isset($_POST['place_order'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $order_cost = $_POST['total'];
        $order_status = "on_hold";
        $user_id = 1;
        $order_date = date('Y-m-d H:i:s');
        $statement = $connection -> prepare("INSERT INTO orders (order_costs, order_status, user_id, user_phone, user_city, user_address, user_date) VALUES (?, ?, ?, ?, ?, ?, ?);");
        $statement -> bind_param('isiisss', $order_cost, $order_status, $user_id, $user_phone, $user_city, $user_address, $user_date);
        $statement -> execute();
        $order_id = $statement -> insert_id;
        echo $order_id;
    }
?>