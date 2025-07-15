<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
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
                            <a class="nav-link" aria-current="page" href="./pages/shop.php">Магазин смаколиків</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./pages/account.php">Мій аккаунт</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./pages/contact.php">Наші контакти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./pages/login.php">Авторизуватися</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./pages/register.php">Реєстрація</a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/cart.html"><img class="nav-item__basket_icon" src="./assets/images/basket/basket.png" alt="Header Basket Icon" /></a>
                        </li>
                        <li class="nav-item">
                            <a href="./pages/cart.html"><img class="nav-item__basket_icon" src="./assets/images/user/user.png" alt="Header User Icon" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="home">
            <div class="container">
                <h5 class="home-section__preface">Робіть добро — отримуйте за це смачні подарунки !</h5>
                <h1 class="home-section__main-header">
                    <span>Допомагайте іншим</span> і накопичуйте бали — обмінюйте їх на корейські смаколики !
                </h1>
                <p class="home-section__paragraph">
                    У нас Ви можете заробляти бонуси, виконуючи добрі справи: допомагати оточуючим, беручи участь у корисних ініціативах та 
                    просто змінювати світ на краще. Ваші дії — це не лише кроки до позитивних змін, а й можливість отримати подарунки !
                </p>
                <button class="home-section__button"><i class="fa fa-gift" aria-hidden="true"></i> Заробити бали та отримати смачні подарунки</button>
            </div>
        </section>
        <div class="text-center">
            <h3>НОВИНКИ СМАКОЛИКІВ</h3>
            <hr class="mx-auto" />
        </div>
        <!-- Thank You Very Much For This Great Image Slider @dwiismantoyuwono (https://codepen.io/dwiismantoyuwono) -->
        <section>
            <div class="scroll-container">
                <div id="InfiniteScrollWrapper" class="infinite-scroll-wrapper">
                    <div id="InfiniteScroll" class="infinite-scroll-content">
                        <div class="infinite-scroll-items">
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/zhele-vynograd.jpg -->
                                <img src="./assets/images/new_goods/new_goods_1.jpg" alt="New goods item #1" />
                                <span class="text">Желе виноград "Jellycious"<br /> (60 грам), "Grape"</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/chokopay-zeleniy-chay-336gr-400x400.jpeg -->
                                <img src="./assets/images/new_goods/new_goods_2.jpg" alt="New goods item #2" />
                                <span class="text">Десерт з бісквітного печива<br /> "Choco Pie Green Tea" (12 штук), "Lotte"</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/peperowhite.png -->
                                <img src="./assets/images/new_goods/new_goods_3.jpg" alt="New goods item #3" />
                                <span class="text">Соломка у білому шоколаді<br /> "Pepero White cookie" (32 грами), "Lotte"</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.soju-korea.com.ua/wp-content/uploads/sodzhu-slyva.jpg -->
                                <img src="./assets/images/new_goods/new_goods_4.jpg" alt="New goods item #4" />
                                <span class="text">Напій соджу зі смаком сливи<br /> "Soju Plum" (360 мл)</span>
                            </div>
                            <div class="item-wrap">
                                <img src="./assets/images/new_goods/new_goods_5.jpg" alt="New goods item #5" />
                                <span class="text">Рамьон зі смаком сиру<br /> середньогострий "Stir-Fried<br /> Cheese Ramen" (120 грам), "Ottogi"</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/729162.jpg -->
                                <img src="./assets/images/new_goods/new_goods_6.jpg" alt="New goods item #6" />
                                <span class="text">Кімчі класичні<br /> (Yokimchi Sliced Kimchi)<br /> (160 грам), "Yopokki"</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/maknalty-ssanhva-chaj-765x1024.jpg -->
                                <img src="./assets/images/new_goods/new_goods_7.jpg" alt="New goods item #7" />
                                <span class="text">Чай Ссанхва без цукру зі стевіею<br /> "Stevia Zero Sugar Ssanghwa Tea"<br /> (450 грам (15 грам * 30 шт)), "McNulty"</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/amerykano-chernyyj.png -->
                                <img src="./assets/images/new_goods/new_goods_8.jpg" alt="New goods item #8" />
                                <span class="text">Напій кавовий "Café Mcnulty<br /> Ice Americano Black" (190 мл)</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/zhele-muskat.jpg -->
                                <img src="./assets/images/new_goods/new_goods_9.jpg" alt="New goods item #9" />
                                <span class="text">Желе зелений виноград<br /> "Jellycious" (72 грам), "Muscat"</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/kastard-e1711200569143.jpg -->
                                <img src="./assets/images/new_goods/new_goods_10.jpg" alt="New goods item #10" />
                                <span class="text">Кастард "Custard"<br /> (6 штук / 138 грам)</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/udon-276g.jpg -->
                                <img src="./assets/images/new_goods/new_goods_11.jpg" alt="New goods item #11" />
                                <span class="text">Удон "Udon" (276 грам)</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/rysova-lokshyna-kimchi.jpg -->
                                <img src="./assets/images/new_goods/new_goods_12.jpg" alt="New goods item #12" />
                                <span class="text">Рисова локшина зі смаком кімчі<br /> "Rice Noodle (Kimchi Flavour)"<br /> (92 грами)</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/tokpoky-karbonara.png -->
                                <img src="./assets/images/new_goods/new_goods_13.jpg" alt="New goods item #13" />
                                <span class="text">Токпокі зі смаком карбонара в стакані<br /> "Yopokki Carbonara Topokki Cup"<br /> (120 грам)</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/chokopaj-kakao-6sht.jpg -->
                                <img src="./assets/images/new_goods/new_goods_14.jpg" alt="New goods item #14" />
                                <span class="text">Чокопай какао "ChocoPie Cacao<br /> (6 штук), "Lotte"</span>
                            </div>
                            <div class="item-wrap">
                                <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/blu-lymonad.png -->
                                <img src="./assets/images/new_goods/new_goods_15.jpg" alt="New goods item #15" />
                                <span class="text">Напій "Café Mcnulty Blue<br /> lemon Ade" (190 мл)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="shoes" class="my-5">
            <div class="text-center">
                <h3>ПОПУЛЯРНІ ТОВАРИ</h3>
                <hr class="mx-auto" />
            </div>
            <div class="row mx-auto container-fluid">
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/blu-lymonad.png -->
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_1.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Снек "Yoppoki" гостро-солодкий (50 грам)</h5>
                    <h4 class="p-price">15 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/maknalty-kofe-myks-768x768.jpg -->
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_2.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Розе топоккі в стакані "Yopokki Rose" (120 грам)</h5>
                    <h4 class="p-price">13 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_3.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/rose-topokki-250x250.png -->
                    <h5 class="p-name">Розчинна кава мікс зі стевіею<br /> "SteviaCoffee Mix"<br /> (285 грам (9,5 грам * 30 штук))</h5>
                    <h4 class="p-price">14 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_4.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/dzhyn-srednyj-65.png -->
                    <h5 class="p-name">Джин рамьон в стакані середньогострий "Jin Mild"</h5>
                    <h4 class="p-price">13 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
            </div>
            <div class="row mx-auto container-fluid">
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_5.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/sun-ramen.jpg -->
                    <h5 class="p-name">Сун рамьон овочевий (112 грам)</h5>
                    <h4 class="p-price">15 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_6.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/chapagetti-chayangmyun-nongshim-140gr-400x400.jpg -->
                    <h5 class="p-name">Чапагетті "Chapagetti" (140 грам), "NongShim"</h5>
                    <h4 class="p-price">18 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_7.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/bibigo-kim-zareniy-koreyskoe-barbekyu-400x400.jpg -->
                    <h5 class="p-name">Кім зі смаком корейського барбекю "Crispy Seaweed Snacks" (5 грам), "Bibigo"</h5>
                    <h4 class="p-price">14 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_8.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/ymbyrnyj-chaj-z-medom.png -->
                    <h5 class="p-name">Імбирний чай з медом "Honey ginger tea" (770 грам)</h5>
                    <h4 class="p-price">13 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
            </div>
            <div class="row mx-auto container-fluid">
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_9.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/miyok-50g.jpg -->
                    <h5 class="p-name">Мійок (50 грам), "Ottogi"</h5>
                    <h4 class="p-price">15 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_10.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/dinya-768x768.png -->
                    <h5 class="p-name">Газований напій диня (350 мл)</h5>
                    <h4 class="p-price">18 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_11.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/buldak-pokimmyon1.jpg. -->
                    <h5 class="p-name">Бульдак покіммьон (140 грам)</h5>
                    <h4 class="p-price">14 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_12.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/tokpokki-s-sousom-chandjan-120gr-400x400.jpg -->
                    <h5 class="p-name">Токпоккі з соусом чаджан "Yoppoki" (120 грам)</h5>
                    <h4 class="p-price">13 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
            </div>
            <div class="row mx-auto container-fluid">
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_13.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/soevaya-pasta-doenjang-1kg-1.jpg -->
                    <h5 class="p-name">Соєва паста (1 кг)</h5>
                    <h4 class="p-price">15 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_14.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.soju-korea.com.ua/wp-content/uploads/sodzhu-persyk.png -->
                    <h5 class="p-name">Корейський напій Соджу зі смаком персика "Soju Peach" (360 мл)</h5>
                    <h4 class="p-price">18 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_15.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/bananoviy-chocopay-lotte-12sht-400x400.jpg -->
                    <h5 class="p-name">Банановий чокопай "ChocoPie Banana" (12 штук), "Best Choice!"</h5>
                    <h4 class="p-price">25 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_16.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/8801392042959.jpg -->
                    <h5 class="p-name">Токпокі зі смаком сиру в стакані "CJ Bibigo Tteokpokki Cup Cheese" (125 грам)</h5>
                    <h4 class="p-price">17 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
            </div>
            <div class="row mx-auto container-fluid">
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_17.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/padzhon.jpg -->
                    <h5 class="p-name">Суміш для корейських млинців паджон (500 грам)</h5>
                    <h4 class="p-price">14 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_18.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/743277-768x583.jpg -->
                    <h5 class="p-name">Кімчі смажена (Kimchi) (160 грам)</h5>
                    <h4 class="p-price">18 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_19.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/marynad-kurycza.jpg -->
                    <h5 class="p-name">Маринад для курки (290 грам)</h5>
                    <h4 class="p-price">20 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="./assets/images/featured/featured_20.jpg" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/champong.jpg -->
                    <h5 class="p-name">Чампонг рамьон "Cham-pong Ramyun" (124 грами)</h5>
                    <h4 class="p-price">13 балів</h4>
                    <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                </div>
            </div>
        </section>
        <section id="new" class="w-100">
            <div>
                <h4 class="container text-center">МАЙЖЕ ЗАКІНЧИЛИСЯ</h4>
                <hr class="mx-auto" />
            </div>
            <div class="row p-0 m-0">
                <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/batatov%D1%8Bj-latte.png -->
                    <img class="img-fluid" src="./assets/images/featured/featured_21.jpg" alt="Brand Image" />
                    <div class="details text-center">
                        <h5 class="p-name">Лате із батату "Sweet Potato Latte" (18 грам * 12 штук)</h5>
                        <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                    </div>
                </div>
                <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/aloe-granat-500ml.jpg -->
                    <img class="img-fluid" src="./assets/images/featured/featured_22.jpg" alt="Brand Image" />
                    <div class="details text-center">
                        <h5 class="p-name">Напій алое зі смаком гранату "Aloe drink Pomegranate" (500 мл)</h5>
                        <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                    </div>
                </div>
                <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                    <!-- Image Source : https://www.smak-korea.com.ua/wp-content/uploads/mango.png -->
                    <img class="img-fluid" src="./assets/images/featured/featured_23.jpg" alt="Brand Image" />
                    <div class="details text-center">
                        <h5 class="p-name">Газований напій манго (350 мл)</h5>
                        <button class="buy-btn"><i class="fa-solid fa-cart-plus"></i> Додати в кошик</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner-messages py-5 my-5">
            <div class="container">
                <div>
                    <h4>Не стійте осторонь - допомагайте іншим чим маєте змогу !</h4><br />
                    <h3>Приєднуйтесь до нас і <br /> допомагайте робити наше суспільство ще кращим !</h1><br />
                    <h2>У Ваших руках зробити його кращим !</h2><br />
                    <button>Приєднуйтесь до нас !</button>
                </div>
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
                    <a href="#"><i class="fa-brands fa-square-threads"></i></a> 
                    <a href="#"><i class="fab fa-facebook"></i></a> 
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                    <a href="#"><i class="fab fa-viber"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="./assets/js/cart-slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body> 
</html>