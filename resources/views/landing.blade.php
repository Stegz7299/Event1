<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Bootstrap</title>
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Wedding Organizer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{asset('login.blade.php')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('signup.blade.php')}}">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" data-aos="slide-in">
            <div class="carousel-item active">
                <img src="https://static.promediateknologi.id/crop/0x0:0x0/x/photo/p2/76/2023/10/21/Diana-Wedding-Organizer-4-3134169636.jpg"
                class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://swamediainc.storage.googleapis.com/swa.co.id/wp-content/uploads/2022/02/26214250/IMG-20220226-WA0005.jpg"
                class="d-block w-100 img-fluid"   alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://tigadaracatering.id/images/pelaminan-golden-age-27102024.webp" 
                class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
            <a href="login.blade.php">
                <img src="ppp.jpeg" class="d-block w-100 img-fluid" alt="...">
            </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <div class="container mt-5">
        <div class="row" data-aos="fade-in">
            <div class="col-12">
                <h2 class="main-title">Selamat Datang di Website Wedding Organizer Kami</h2>
            </div>
            <div class="col-12">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Disini Kami menyediakan banyak ragam persiapan untuk pernikahan. Dari yang
                    Ekonomi hingga VVIP. Kami menjamin Kualitas dengan harga yang terjangkau agar anda dapat menikmati
                    layanan terbaik tetapi nyaman di kantong</p>
            </div>
        </div>

        <div class="container-sm">
            <div class="row align-items-center" data-aos="fade-in">
                <div class="col-4" id="about">
                    <img src="p12.jpeg"
                        alt="Gambar" />
                </div>
                <div class="col-7">
                    <h1>About Us</h1>
                    <h2>Satrio Maulana Alfajar (DUCK.SC)</h2>
                    <h2>Muhammad Halim Amrin(DUCK.SC)</h2>
                    <p>Mahasiswa Fasilkom UNILAK</p>
                    <p>2 Sekawan yang awalnya tidak memiliki skill kodingan ataupun desain yang sekarang sedang kuliah
                        di fasilkom di semester 5. Dan akhirnya bergabung di DUCK.SC untuk menambah
                        wawasan dan ilmu baru yang dimana ilmu itu berguna untuk kami kedepannya.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mt-5" data-aos="fade-in">
            <div class="col-md-4">
                <div class="placeholder">
                    <img src="https://warnaindonesiaphoto.com/wp-content/uploads/2021/04/Jasa-Fotografi-Wedding-Terbaik-jogja.jpg"
                        alt="..." style="height: 400px;">
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-in">
                <div class="placeholder">
                    <img src="https://hellobrides.id/wp-content/uploads/2020/07/nodewedding_93594208_1076341092744191_8559480699625644012_n.jpg"
                        alt="..." style="height: 400px;">
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-in">
                <div class="placeholder">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2U--3P8oDRDW4Bq2LgIAm3GpprZRGCnId5A&s"
                        alt="..." style="height: 400px;">
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" data-aos="fade-in">
            <h3>Trusted by Thousands of</h3>
        </div>
        <div class="d-flex justify-content-center" data-aos="fade-in">
            <h3>Happy Customers</h3>
        </div>
        <div class="d-flex justify-content-center" data-aos="fade-in">
            <div class="p-1">Kebahagiaan Anda adalah prioritas kami</div>
        </div>
        <div class="d-flex justify-content-center" data-aos="fade-in">
            <h2>Paket yang kami sediakan</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;" data-aos="fade-left">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS78WhMlKMK-rkn74yoiNuV-AmDbbjE9boLlQ&s"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Paket Ekonomi</h5>
                            <p class="card-text">Paket ini hanya menyediakan tenda dan dekorasi dekorasi yang disesuaikan cocok untuk didalam rumah dan diluar rumah yang berlokasi pada rumah anda</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 30.000.000</span>
                                <a href="login.blade.php" class="btn btn-outline-primary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;" data-aos="fade-left">
                        <img src="https://www.jagowebsite.net/wp-content/uploads/2019/03/target-pasar-wedding-organizer.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Paket VIP</h5>
                            <p class="card-text">Paket ini kami menyediakan tempat di tempat terbuka yang memiliki tempat yang sangat indah, dan memiliki tempat yang luas. Dan kami juga menyediakan makanan sesuai keinginan anda. Harga dapat bergantung pada kompleks atau tidaknya permintaan anda</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Start from Rp 50.000.000</span>
                                <a href="login.blade.php" class="btn btn-outline-primary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;" data-aos="fade-left">
                        <img src="https://medinacatering.id/wp-content/uploads/2019/10/medina-catering_pernikahan-fani-hanief-di-menara-165_9.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Paket VVIP</h5>
                            <p class="card-text">Paket ini kami menyediakan tempat private yang memiliki tempat yang sangat indah dan memberikan kesan mewah. Yang berlokasi pada hotel berbintang yang memiliki reputasi sangat bagus. Dan kami juga menyediakan makanan sesuai keinginan anda. Harga dapat bergantung pada kompleks atau tidaknya permintaan anda</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Start from Rp 100.000.000</span>
                                <a href="login.blade.php" class="btn btn-outline-primary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" data-aos="fade-left">
                <div class="col-12">
                    <h2 class="main-title">Quotes Kami untuk anda</h2>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <p>Pernikahan adalah tentang dua hati yang bersatu, bukan karena sempurna, tetapi karena saling melengkapi.</p>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <p>Kita mungkin tidak bisa menjanjikan hari yang sempurna, tapi kita bisa berjanji untuk saling menggenggam di setiap badai.</p>
                </div>
            </div>
        </div>


        <footer class="mt-5 bg-light text-center py-3">
            <h2>Wedding Organizer</h2>
            <p>&copy;2024 Satrio Maulana Alfajar & Muhammad Halim Amrin</p>
            <p>Privacy Policy | Terms of Service</p>
        </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
            easing: 'ease-in-out',
        });
    </script>
</body>

</html>