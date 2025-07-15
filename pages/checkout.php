<!-- <?php
    session_start();
    if (!empty($_SESSION['cart']) && isset($_POST['checkout'])) {
        
    } else {
        header('location: index.php');
    }
?> -->
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
    <title>Підтвердження замовлення</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center brand-logo">
                    <img src="../assets/images/logo/logo.png" alt="Logo" class="navbar-logo" />
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
                            <a class="nav-link" aria-current="page" href="../index.php">Головна</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="shop.php">Магазин смаколиків</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="account.php">Мій аккаунт</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="contact.php">Наші контакти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="login.php">Авторизуватися</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="register.php">Реєстрація</a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/cart.html"><i class="fas fa-shopping-bag"></i></a>
                            <a href="./pages/account.html"><i class="fas fa-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Register Section -->
        <section class="register my-5 py-5">
            <div class="container text-center mt-3 pt-5">
                <h2 class="form-weight-bold">Login</h2>
                <hr class="mx-auto" />
            </div>
            <div class="mx-auto container">
                <form id="checkout-form" method="POST" action="server/place_order.php">
                    <div class="form-group checkout-small-element">
                        <label>E-mail</label>
                        <input type="email" class="form-control" id="checkout-name" name="name" placeholder="Name" required /> 
                    </div>
                    <div class="form-group checkout-small-element"">
                        <label>Password</label>
                        <input type="password" class="form-control" id="checkout-email" name="email" placeholder="Email" required /> 
                    </div>
                    <div class="form-group checkout-small-element"">
                        <label>Phone</label>
                        <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone" required /> 
                    </div>
                    <div class="form-group checkout-small-element"">
                        <label>City</label>
                        <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required /> 
                    </div>
                    <div class="form-group checkout-large-element"">
                        <label>Address</label>
                        <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required /> 
                    </div>
                    <div class="form-group checkout-btn-element">
                        <p>Total amount: <?php echo $_SESSION['']; ?></p>
                        <input type="submit" class="btn" id="checkout-btn" name="place_order" value="Place OrderS" /> 
                    </div>
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
                    <img src="../assets/images/no-payment/no-payment.png" class="img-fluid w-25 h-100" alt="No Payment Image" />
                    <img src="../assets/images/no-payment/no-money.png" class="img-fluid w-25 h-100" alt="No Payment Image" />
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 text-nowrap mb-2">
                    <p>Крабничка корейських смаколиків <br />"KorFooMis" @2025 Nazarii Kolesnikov <br />Усі права захищено.</p>
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