<?php
    include('./server/connection.php');

    if (isset($_GET['product_id'])) {
        $product_id = $_GET['product_id'];
        $statement = $connection -> prepare("SELECT * FROM products WHERE product_id = ?");
        $statement -> bind_param("i", $product_id);
        $statement -> execute();
        $products = $statement -> get_result();
    } else {
        header('location: index.php');
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
    <title>Сторінка товару</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
            <h2 class="brand">LoremIpsum</h2>
            <div class="container-fluid">
                <img src="../assets/images/logo/logo.png" alt="Logo" class="navbar-brand" style="width: 80px; height: 90px;" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="account.php">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/cart.html"><i class="fa-solid fa-basket-shopping"></i></a>
                            <a href="account.html"><i class="fas fa-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container single-product my-5 pt-5">
            <div class="row mt-5">
                <?php while($row = $products -> fetch_assoc()) { ?>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <img id="main-img" class="img-fluid w-100 pb-1" src="./assets/images/featured/<?php echo $row['product_image_item1'] ?>" alt="Featured Image" />
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="./assets/images/featured/<?php echo $row['product_image_item1'] ?>" alt="Small Featured Image" class="small-img" />
                            </div>
                            <div class="small-img-col">
                                <img src="./assets/images/featured/<?php echo $row['product_image_item2'] ?>" alt="Small Featured Image" class="small-img" />
                            </div>
                            <div class="small-img-col">
                                <img src="./assets/images/featured/<?php echo $row['product_image_item3'] ?>" alt="Small Featured Image" class="small-img" />
                            </div>
                            <div class="small-img-col">
                                <img src="./assets/images/featured/<?php echo $row['product_image_item4'] ?>" alt="Small Featured Image" class="small-img" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <h6>Lorem Ipsum Dolor Sit Amet</h6>
                        <h3 class="py-4"><?php echo $row['product_name']; ?></h3>
                        <h2><?php echo $row['product_price']; ?></h2>
                        <form method="POST" action="./server/cart.php">
                            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                            <input type="hidden" name="product_image_item" value="<?php echo $row['product_image_item']; ?>">
                            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
                            <input type="number" name="product_quantity" value="1" />
                            <button class="buy-btn" type="submit" name="add_to_cart">Add to Cart</button>
                        </form>
                        <h4 class="mt-5 mb-5">Lorem Ipsum Dolor</h4>
                        <span><?php echo $row['product_description']; ?></span>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <img class="logo" src="../assets/images/logo/logo.png" alt="Logo" />
                <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pt-2 featured-block">Featured</h5>
                <ul class="text-uppercase">
                    <li><a href="#">men</a></li>
                    <li><a href="#">woman</a></li>
                    <li><a href="#">boys</a></li>
                    <li><a href="#">girls</a></li>
                    <li><a href="#">new arrivals</a></li>
                    <li><a href="#">clothes</a></li>
                </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pt-2 contact-us">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase our-address"><img src="../assets/images/logo/location.png" class="our-address-icon" alt="Logo Image" /> Address</h6>
                    <p>Ukraine, Rivne, Basivkutska st., 20</p> 
                </div>
                <div>
                    <h6 class="text-uppercase our-mobile-phone"><img src="../assets/images/logo/location.png" class="our-mobile-phone-icon" alt="Logo Image" /> Mobile Phone</h6>
                    <p>(067)-83-33-023</p>
                </div>
                <div>
                    <h6 class="text-uppercase our-email"><img src="../assets/images/logo/location.png" class="our-email-icon" alt="Logo Image" /> E-mail</h6>
                    <p>nazarijkolesnikov053@gmail.com</p> 
                </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pt-2 were-active-on-social-media">We’re active on social media</h5>
                <div class="row">
                    <img src="../assets/images/social_networks/facebook.png" class="img-fluid w-25 h-100 m-2" alt="Facebook Image" />
                    <img src="../assets/images/social_networks/telegram.png" class="img-fluid w-25 h-100 m-2" alt="Telegram Image" />
                    <img src="../assets/images/social_networks/instagram.png" class="img-fluid w-25 h-100 m-2" alt="Instagram Image" />
                    <img src="../assets/images/social_networks/threads.png" class="img-fluid w-25 h-100 m-2" alt="Threads Image" />
                    <img src="../assets/images/social_networks/youtube.png" class="img-fluid w-25 h-100 m-2" alt="Youtube Image" />
                </div>
            </div>
        </div>
        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <img src="../assets/images/no-payment/no-payment.png" class="img-fluid w-25 h-100" alt="Payment Image" />
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 text-nowrap mb-2">
                    <p>Ipsum Dolor Sit @2025 All rights receive.</p>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <a href="#"><i class="fab fa-threads"></i></a> 
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