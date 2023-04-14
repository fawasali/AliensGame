<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <!-- End Font -->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet"
        />
        <!-- End Fonts -->

        <link rel="stylesheet" href="css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <title>AliensStore</title>
    </head>
    <body>
        <!-- Navbar -->

        <!-- End Navbar -->

        <!-- Hero section -->
        <section class="hero" id="home">
            <nav class="navbar">
                <div class="navbar-extra">
                    <a href="#" id="hamburger"
                        ><i class="fa-solid fa-bars"></i
                    ></a>
                </div>
                <div class="sidebar">
                    <h1 href="#" id="logo" class="navbar-logo">
                        Aliens<span>STORE</span>
                    </h1>
                    <h2>DAFTAR AliensStore SEKARANG!</h2>
                    <p>
                        Jadilah yang pertama mengetahui promo dan penawaran
                        ekslusif!
                    </p>
                    <a href="signup.html" id="sign">Daftar Sekarang</a>
                    <a
                        href="sign.html"
                        class="sign"
                        style="
                            margin-top: 1rem;
                            background-color: #fff;
                            color: #171717;
                        "
                        >Sign In</a
                    >
                </div>

                <a href="#" class="navbar-logo">Aliens<span>STORE</span></a>

                <div class="navbar-nav">
                    <input type="text" placeholder="Cari Game..." />
                    <a href="#" id="search"
                        ><i class="fa-sharp fa-solid fa-magnifying-glass"></i
                    ></a>
                </div>
            </nav>
            <main class="content">
                <h1>Website Top Up Gaming termurah se-indonesia</h1>
                <p>
                    Selamat datang di situs top up game terbaik! Kami
                    menyediakan layanan top up game dengan harga yang terjangkau
                    dan proses yang cepat
                </p>
                <h2>Mau jadi Reseller?</h2>

                <a href="signup.html" class="cta">SIGN UP</a>
            </main>
            <div class="gradi"></div>
        </section>
        <!-- End Section -->

        <!-- Pricelist -->

        <!-- Mizupoint -->
        <section id="price" class="price">
            <div class="title">
                <h2>Lebih Hemat Pakai Alienspoint</h2>
                <div class="more-btn">
                    <button id="more">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button id="more-bck">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="topup/ml.blade.php"
                            ><main class="content-box">
                                <div class="box">
                                    <div class="slide-img">
                                        <img
                                            src="img/angela.webp"
                                            width="100"
                                            alt=""
                                        />
                                    </div>
                                    <div class="detail-box">
                                        <div class="type">
                                            <a href="#">MOBILE LEGEND</a>
                                        </div>
                                    </div>
                                </div>
                            </main></a
                        >
                    </div>
                    <div class="swiper-slide">
                        <a href="topup/freefire.html">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img src="img/garangan.webp" alt="" />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">FREE FIRE</a>
                                    </div>
                                </div>
                            </div>
                        </main></a>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/pubg.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">PUBG MOBILE</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/genshin.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">GENSHIN IMPACT</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/valorant.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">VALORANT</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/wild.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">LOL : WILD RIFT</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/alien.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">AOV</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/cod.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">COD MOBILE</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/kiana.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">HONKAI IMPACT</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </section>

        <!--  -->
        <section id="price2" class="price">
            <div class="title">
                <h2>Populer Game</h2>
                <div class="more-btn">
                    <button id="more2">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button id="more-bck2">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="swiper mySwiperr">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/angela.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">MOBILE LEGEND</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img src="img/garangan.webp" alt="" />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">FREE FIRE</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/pubg.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">PUBG MOBILE</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/genshin.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">GENSHIN IMPACT</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/valorant.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">VALORANT</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/wild.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">LOL : WILD RIFT</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/alien.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">AOV</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/cod.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">COD MOBILE</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="swiper-slide">
                        <main class="content-box">
                            <div class="box">
                                <div class="slide-img">
                                    <img
                                        src="img/kiana.webp"
                                        width="100"
                                        alt=""
                                    />
                                </div>
                                <div class="detail-box">
                                    <div class="type">
                                        <a href="#">HONKAI IMPACT</a>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Slide -->

        <!-- Showmore -->

        <!-- Showmore -->

        <!-- About -->
        <section class="about">
            <main class="about-content">
                <div class="about-detail">
                    <h1>Aliens<span>STORE</span> INDONESIA</h1>
                    <h2>
                        Aliensstore: Website top-up terbesar, tercepat dan
                        terpercaya di Indonesia
                    </h2>
                    <p>
                        Setiap bulannya, jutaan gamers menggunakan Aliensstore
                        untuk melakukan pembelian kredit game dengan lancar:
                        tanpa registrasi ataupun log-in, dan kredit permainan
                        akan ditambahkan secara instan. Top-up Mobile Legends,
                        Free Fire, Ragnarok M, dan berbagai game lainnya!
                    </p>
                </div>
                <div class="about-icon">
                    <div class="boxdetail">
                        <div class="box">
                            <div class="fa">
                                <i class="fa-solid fa-business-time"></i>
                            </div>
                            <div class="par">
                                <h3>Bayar dalam hitungan detik</h3>
                                <p>
                                    Hanya dibutuhkan beberapa detik saja untuk
                                    menyelesaikan pembayaran di Aliensstore karena
                                    situs kami berfungsi dengan baik dan mudah
                                    untuk digunakan.
                                </p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="fa">
                                <i class="fa-solid fa-wallet"></i>
                            </div>
                            <div class="par">
                                <h3>Metode pembayaran terbaik</h3>
                                <p>
                                    Kami menawarkan begitu banyak pilihan
                                    pembayaran mulai dari potong pulsa,
                                    e-wallet, bank transfer, dan pembayaran di
                                    mini market terdekat.
                                </p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="fa">
                                <i class="fa-solid fa-tags"></i>
                            </div>
                            <div class="par">
                                <h3>Promosi-promosi menarik</h3>
                                <p>
                                    Penggemar game dapat bergantung pada
                                    Aliensstore karena kami memberikan penawaran
                                    menarik, diskon dan kode item dari promosi
                                    game yang disukai kamu.
                                </p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="fa">
                                <i class="fa-solid fa-truck-fast"></i>
                            </div>
                            <div class="par">
                                <h3>Pengiriman Instant</h3>
                                <p>
                                    Ketika kamu melakukan top-up di Aliensstore,
                                    item atau barang yang kamu beli akan selalu
                                    dikirim ke akun kamu secara instan dan
                                    cepat, tanpa tertunda.
                                </p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="fa">
                                <i class="fa-solid fa-address-card"></i>
                            </div>
                            <div class="par">
                                <h3>Layanan Pelanggan Cepat & Ramah</h3>
                                <p>
                                    Hanya dibutuhkan beberapa detik saja untuk
                                    menyelesaikan pembayaran di Aliensstore karena
                                    situs kami berfungsi dengan baik dan mudah
                                    untuk digunakan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </section>
        <!-- End About -->

        <!-- Footer -->
        <footer>
            <main class="footer-content">
                <h1>
                    &copy Hak Cipta
                    <span><i class="fa-solid fa-heart"></i></span> Alienscode
                </h1>
            </main>
        </footer>

        <!-- End Alienspoint -->

        <!-- End Pricelist -->

        <script src="swiper-bundle.min.js"></script>

        <script src="script.js"></script>
    </body>
</html>
