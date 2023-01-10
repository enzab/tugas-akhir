<?php
session_start();
include 'konfig.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Warung Makan STMIK DIPANEGARA MAKASSAR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="short icon" type="image/png" href="logo.png">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
    <header>
        <div class="baris">
            <div class="col-sm-3">
                <div class="logo">
                    <img src="logo.png">
                </div>
            </div>
            <div class="col-sm-9">
                <div class="shop-menu pull-right">
                    <ul class="nav-utama" id="nav-utama">
                        <li><a href="index.php"><i class="fas fa-home"></i> Beranda</a></li>
                        <li><a href="menu.php"><i class="fas fa-utensils"></i> Menu</a></li>
                        <li><a href="keranjang.php"><i class="fa fa-shopping-cart"></i> Keranjang</a></li>
                        <?php if(isset($_SESSION["user"])) :  ?>
                        <li><a href="keluar.php"><i class="fa fa-lock"></i> Keluar</a></li>
                        <?php else:   ?>
                        <li><a href="masuk.php"><i class="fa fa-lock"></i> Masuk</a></li>
                        <?php endif  ?>
                        <li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="hero">
                    
                        <h1>ANDA MAKAN DENGAN KENYANG<br>HATI KAMI SENANG</h1> 
                        <div class="button">
                            <?php if(isset($_SESSION["user"])) :  ?>
                            <a href="menu.php" class="btn btn-half">ORDER SEKARANG</a>
                            <?php else:   ?>
                            <a href="menu.php" class="btn btn-half">ORDER SEKARANG</a>
                            <a href="daftar.php" class="btn btn-full">SAYA LAPAR!</a>
                            <?php endif  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <h3 class="text-center">RUMAH MAKAN STMIK DIPANEGARA MAKASSAR</h3>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-3 text-center">
                    <span style="font-size: 90px;"><i class="far fa-check-circle"></i></span>
                </div>
                <div class="col-sm-4">
                    <h2 class="rumah">Restoran Pilihan</h2>
                    <p>Jelajahi dunia gastronomi melalui beragam restoran pilihan berkualitas dari kami
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-sm-offset-3 text-center">
                    <span style="font-size: 90px"><i class="fas fa-stopwatch"></i></span>
                </div>
                <div class="col-sm-4">
                    <h2 class="rumah">Diantar dengan Cepat</h2>
                    <p>Tidak perlu khawatir kelaparan karena makanan kami antar dengan cepat
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-sm-offset-3 text-center">
                    <span style="font-size: 90px"><i class="fas fa-users"></i></span>
                </div>
                <div class="col-sm-4">
                    <h2 class="rumah">Layanan Terpercaya</h2>
                    <p>Kualitas makanan yang diantar tetap terjaga berkat tas thermal yang didesain khusus
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="testimoni">
        <div class="inner">
            <h3 class="text-center">TESTIMONI</h3>
            <div class="border"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="testi">
                            <img src="./img/testimoni1.jpg" alt="">
                            <div class="nama">Vin Diesel</div>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p>Masakan Indonesia yang sangat enak yang pernah saya rasa. Saya tidak menyesal datang
                                jauh-jauh dari Eropa setelah berlakon di Fast & Furious karena di sini saya dapat
                                menikmati
                                makanan khas Indonesia yang enak dan dapat mengisi semula tenaga saya.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testi">
                            <img src="./img/testimoni2.jpg" alt="">
                            <div class="nama">Daniel Radcliffe</div>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p>Paket makanan yang saya terima masih panas dan packingnya rapi banget. Entar kapan-kapan
                                gw
                                pesan lagi ya.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testi">
                            <img src="./img/testimoni3.jpg" alt="">
                            <div class="nama">Cristiano Ronaldo</div>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>Setelah kalah melawan PSM Makassar dengan skor 1-0 kemarin di Stadion Andi Mattalata,
                                saya
                                pulang ke hotel dengan keadaan yang sangat penat namun saya tidak bisa tidur karena
                                perut
                                saya lapar makanya saya pesan Nasi Ayam Grepek dari Rumah Makan STMIK DIPANEGARA,
                                pesanan
                                saya sampai dalam 5 menit dan ayamnya enak banget.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/jquery.slicknav.min.js" type="text/javascript"></script>
</body>
</html>