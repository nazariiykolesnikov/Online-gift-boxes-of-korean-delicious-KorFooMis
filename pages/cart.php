<?php
    session_start();
    if (isset($_POST['add_to_cart'])) {
        if (isset($_SESSION['cart'])) {
            $product_array_ids = array_column($_SESSION['cart'], "product_id");
            if (!in_array($_POST['product_id'], $product_array_ids)) {
                $product_id = $_POST['product_id'];
                $product_array = array(
                    'product_id' => $_POST['product_id'],
                    'product_name' => $_POST['product_name'],
                    'product_price' => $_POST['product_price'],
                    'product_image_item' => $_POST['product_image_item'],
                    'product_quantity' => $_POST['product_quantity']);
                $_SESSION['cart'][$product_id] = $product_array;
            } else {
                echo '<script>alert("Product was already to cart");</script>';
                echo '<script>window.location="index.php"</script>';
            }
        } else {
            $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : '';
            $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
            $product_price = isset($_POST['product_price']) ? $_POST['product_price'] : '';
            $product_image_item = isset($_POST['product_image_item']) ? $_POST['product_image_item'] : '';
            $product_quantity = isset($_POST['product_quantity']) ? $_POST['product_quantity'] : 1;
            $product_array = array(
                'product_id' => $product_id,
                'product_name' => $product_name,
                'product_price' => $product_price,
                'product_image_item' => $product_image_item,
                'product_quantity' => $product_quantity
            );
            $_SESSION['cart'][$product_id] = $product_array;
        }
        calculateTotalPriceOfProductsInCart();
    } else if (isset($_POST['remove_product'])) {
        $product_id = $_POST['product_id'];
        unset($_SESSION['cart'][$product_id]);
    } else if (isset($_POST['edit_quantity'])) {
        $product_id = $_POST['product_id'];
        $product_quantity = $_POST['product_quantity'];
        $product_array = $SESSION['cart'][$product_id];
        $product_array['product_quantity'] = $product_quantity;
        $_SESSION['cart'][$product_id] = $product_array;
        calculateTotalPriceOfProductsInCart();
    } else {
        header("location: index.php");
    }

    function calculateTotalPriceOfProductsInCart() {
        $total_price = 0;
        foreach($_SESSION['cart'] as $key => $value) {
            $product = $_SESSION['cart'][$key];
            $product_price = $product['product_price'];
            $product_quantity = $product['product_quantity'];
            $total_price = $total_price + ($product_price * $product_quantity);
        }
        $_SESSION['total'] = $total_price; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Shopping Cart Page</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center brand-logo">
                    <img src="./assets/images/logo/logo.png" alt="Logo" class="navbar-logo" />
                    <h2 class="brand mb-0 ms-2">KorFooMis</h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-buttons mt-3 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Головна</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../pages/shop.php">Магазин</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../pages/tasks.php">Завдання</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../pages/account.php">Мій аккаунт</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../pages/contact.php">Контакти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../pages/login.php">Авторизуватися</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../pages/register.php">Реєстрація</a>
                        </li>
                        <li class="nav-item">
                            <a href="../pages/cart.php"><i class="fa-solid fa-truck-fast"></i></a>
                            <a href="../pages/account.php"><i class="fas fa-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="cart container my-5 py-5">
            <div class="container mt-5">
                <h2 class="font-weight-bolder">Your Cart</h2>
                <hr class="mx-auto" />
            </div>
            <table class="mt-5 pt-5">
                <tr>
                    <th>LoremIpsum</th>
                    <th>LoremIpsum</th>
                    <th>LoremIpsum</th>
                </tr>
                <?php foreach($_SESSION['cart'] as $key => $value) { ?>
                    <tr> 
                        <td>
                            <div class="product-info">
                                <img src="./assets/images/featured/<?php echo $value['product_image_item']; ?>" alt="Product Image" />
                                <div>
                                    <p><?php echo $value['product_name']; ?></p>
                                    <small><?php echo $value['product_price']; ?><span>(points)</span></small>
                                    <br />
                                    <form method="POST" action="cart.php">
                                        <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>" />
                                        <input type="submit" name="remove_product" class="remove-btn" value="remove" />
                                    </form>
                                    <a class="remove-btn" href="#">LoremIpsum</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <input type="number" value="<?php echo $value['product_quantity']; ?>" />
                            <form method="POST" action="cart.php">
                                <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>" />
                                <input type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>" />
                                <input type="sumbit" class="edit-btn" name="edit-quantity" value="edit" />
                            </form>
                        </td>
                        <td>
                            <span></span>
                            <span class="product-price"><?php echo $value['product_quantity'] * $value['product_price']; ?></span>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <div class="cart-total">
                <table>
                    <tr>
                        <td>Total:</td>
                        <td><?php echo $value['total']; ?> points</td>
                    </tr>
                </table>
            </div>
            <div class="checkout-container">
                <form method="POST" action="checkout.php">
                    <input class="btn checkout-btn" value="Chechout" name="checkout" />
                </form>
            </div>
        </section>
    </main>
    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <img class="footer-one__logo" src="../assets/images/logo/logo.png" alt="Logo" />
                <p class="pt-3">Робіть добро — отримуйте за це смачні подарунки ! Допомагайте іншим і накопичуйте бали — обмінюйте їх на корейські</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pt-2 featured-block">Категорії</h5>
                <ul class="text-uppercase">
                    <li><a href="#">Снеки (스낵류)</a></li>
                    <li><a href="#">Рамьон та Локшина (라면, 면류)</a></li>
                    <li><a href="#">Водорості та сушені продукти<br /> (김, 해초, 건어물, 건채소)</a></li>
                    <li><a href="#">Соджу (소주)</a></li>
                    <li><a href="#">Напої (차, 음료)</a></li>
                    <li><a href="#">Соуси & Спеції (소스, 조미료, 장류)</a></li>
                    <li><a href="#">Рис та Полуфабрикати з рису<br /> (쌀, 떡류)</a></li>
                    <li><a href="#">Консервовані та мариновані продукти<br /> (캔, 김치, 반찬, 즉석요리)</a></li>
                </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pt-2 contact-us">Наші Контакти</h5>
                <div>
                    <h6 class="text-uppercase our-address"><i class="fa-solid fa-address-book"></i> Адреса</h6>
                    <p>Україна, Рівне</p> 
                </div>
                <div>
                    <h6 class="text-uppercase our-mobile-phone"><i class="fa-solid fa-phone-volume"></i> Мобільний телефон</h6>
                    <p><a class="our-mobile-phone__link" href="tel:380678333023">(067)-83-33-023</a></p>
                </div>
                <div>
                    <h6 class="text-uppercase our-email"><i class="fa-solid fa-envelope-open-text"></i> Електронна скринька</h6>
                    <p><a class="our-mobile-phone__link" href="mailto:nazarijkolesnikov053@gmail.com">nazarijkolesnikov053@gmail.com</a></p> 
                </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pt-2 featured-block">Корисна інформація</h5>
                <ul class="text-uppercase">
                    <li><a href="#">ІНСТРУКЦІЯ ДЛЯ УЧАСТІ В КОНКУРСІ</a></li>
                    <li><a href="#">УМОВИ ДОСТАВКИ</a></li>
                    <li><a href="#">ІНФОРМАЦІЯ ЩОДО ВИРОБНИКІВ</a></li>
                    <li><a href="#">ОНОВЛЕННЯ ПРОДУКЦІЇ</a></li>
                    <li><a href="#">РЕФЕРАЛЬНА ПРОГРАМА</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <img src="./assets/images/no-payment/no-payment.png" class="img-fluid w-25 h-100" alt="No Payment Image" />
                    <img src="./assets/images/no-payment/no-money.png" class="img-fluid w-25 h-100" alt="No Payment Image" />
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 text-nowrap mb-2">
                    <p>Крабничка корейських смаколиків <br />"KorFooMis" @2025 Nazarii Kolesnikov <br />Усі права захищено.</p>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <a href="#"><i class='fab fa-whatsapp'></i></a> 
                    <a href="#"><i class="fab fa-facebook"></i></a> 
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                    <a href="#"><i class="fab fa-viber"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="./assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body> 
</html>
