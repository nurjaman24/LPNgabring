<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="utf-8">
    <title>Ngabring.id</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="aset/landingpage/logo.png" type="image/x-icon">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .faq-container {
        max-width: 600px;
        margin: 50px auto;
    }

    .faq-item {
        background-color: #fff;
        margin: 10px 0;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        cursor: pointer;
    }

    .faq-question {

        font-weight: bold;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .faq-answer {
        display: none;
        margin-top: 10px;
    }

    .faq-item.active .faq-answer {
        display: block;
    }

    .fa-chevron-down {
        transition: transform 0.3s ease;
    }

    .faq-item.active .fa-chevron-down {
        transform: rotate(180deg);
    }
    </style>
    <title>FAQ</title>
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <!-- <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo me-auto"><img src="aset/landingpage/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?php echo site_url('welcome');?>">Beranda</a></li>
                    <li><a href="<?=base_url('Produk');?>">Produk</a></li>
                    <!-- <li><a href="pricing.html">Syarat & Ketentuan</a></li> -->
                    <li><a href="<?=base_url('Hubungi');?>">Hubungi kami</a></li>
                    <li><a href="<?=base_url('Faq');?>">FAQ</a></li>
                    <li><a href="<?=base_url('Artikel');?>">Artikel</a></li>
                </ul>

                <a><input class="form-control me-2" type="search" placeholder="Cari wisata" aria-label="Search"></a> <i
                    class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="3000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(aset/landingpage/poster1.png)">
                    <div class="carousel-container">
                        <!-- <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sailor</span></h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div> -->
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(aset/landingpage/poster1.png)">
                    <div class="carousel-container">
                        <!-- <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div> -->
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(aset/landingpage/poster1.png)">
                    <div class="carousel-container">
                        <!-- <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div> -->
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section>
    <br>
    <div class="faq-container">
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                Kapan waktu yang tepat untuk memesan paket wisata ?
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                Anda harus memesan paket wisata maksimal h-7 sebelum tanggal liburan anda melalui whatsapp.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                Bagaimana cara memesan paket wisata ?
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                Untuk sementara kami melayani melalui whatsapp yang tertera pada tombol pesan sekarang.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                Bagaimana cara membayar pesanan saya ?
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                Anda bisa membayar lewat transfer atau bayar langsung ditempat sebelum pemberangkatan sesuai dengan
                ketentuan yang telah disepakati.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                Dimana saya bisa melihat rincian jam perjalanan ?
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                Rincian jam perjalanan akan kami kirim melalui whatsapp maksimal h-1 sebelum pemberangkatan.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">
                Apakah saya dapat bertanya hal lain terkait layanan ?
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                ya, anda dapat menghubungi kami melalui no whatsapp atau menghubungi kami melalui DM instagram.
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start bg-dark text-white">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fa fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fa fa-instagram"></i>
                </a>

            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <img src="aset/landingpage/logo.png" alt="" class="img-fluid" style="width: 50px;">
                            Ngabring.id
                        </h6>
                        <p>
                            Ngabring.id adalah penyedia layanan dan penyelenggara Tour Agent yang mulai bergerak di
                            kabupaten dan kota Tasikmalaya.
                        </p>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Bantuan
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Faq</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Syarat dan Ketentuan</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Hubungi Kami</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Blog</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fa fa-home me-3"></i> Alamat : Perumahan Pelangi Residence Blok G 16, Kersanagara,
                            Cibeureum, Kota Tasikmalaya, Jawa Barat 46196.</p>
                        <p>
                            <i class="fa fa-envelope me-3"></i>
                            ngabring.id@gmail.com
                        </p>
                        <p><i class="fa fa-phone me-3"></i> 085523825780</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="">Ngabring.id</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script>
    function toggleAnswer(element) {
        // Toggle the 'active' class on the clicked FAQ item
        element.parentNode.classList.toggle('active');
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>