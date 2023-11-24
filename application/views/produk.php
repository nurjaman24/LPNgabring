<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="KreativDev">
    <meta name="description" content="Multi-Tenant, Course, Course Selling">

    <!-- Title -->
    <title>Ngabring.id</title>


    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets1/css/vendors/bootstrap.min.css">
    <!-- Fontawesome Icon CSS -->
    <link rel="stylesheet" href="assets1/fonts/fontawesome/css/all.min.css">
    <!-- Icomoon Icon CSS -->
    <link rel="stylesheet" href="assets1/fonts/icomoon/style.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets1/css/vendors/magnific-popup.min.css">
    <!-- NoUi Range Slider -->
    <link rel="stylesheet" href="assets1/css/vendors/nouislider.min.css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets1/css/vendors/swiper-bundle.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets1/css/vendors/nice-select.css">
    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="assets1/css/vendors/aos.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets1/css/vendors/animate.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets1/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets1/css/responsive.css">
    <link rel="shortcut icon" href="aset/landingpage/logo.png" type="image/x-icon">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
    body {
        text-align: center;
    }

    .image-container {
        display: inline-block;
        margin: 40px;
    }

    .image-container img {
        width: 150px;
        /* Adjust the width as needed */
        height: auto;
        /* Maintain aspect ratio */
        display: block;
        margin: 0 auto;
    }

    .image-container p {
        margin-top: 10px;
    }

    .image-container1 {
        position: relative;
        display: inline-block;
        overflow: hidden;
    }

    .image-container1 img {
        display: block;
        width: 100%;
        height: auto;
    }

    .image-container1 .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        background-color: rgba(0, 0, 0, 0.5);
        /* Adjust the background color and opacity */
        transition: opacity 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        text-align: center;
        font-size: 1.2em;
    }

    .image-container1:hover .overlay {
        opacity: 1;
    }


    .main-search-input {
        background: #fff;
        padding: 0 120px 0 0;
        border-radius: 1px;
        margin-top: 200px;
        box-shadow: 0px 0px 0px 6px rgba(255, 255, 255, 0.3);
    }

    .fl-wrap {
        float: left;
        width: 100%;
        position: relative;
    }

    .main-search-input:before {
        content: '';
        position: absolute;
        bottom: -40px;
        width: 50px;
        height: 1px;
        background: rgba(255, 255, 255, 0.41);
        left: 50%;
        margin-left: -25px;
    }

    .main-search-input-item {
        float: left;
        width: 100%;
        box-sizing: border-box;
        border-right: 1px solid #eee;
        height: 50px;
        position: relative;
    }

    .main-search-input-item input:first-child {
        border-radius: 100%;
    }

    .main-search-input-item input {
        float: left;
        border: none;
        width: 100%;
        height: 50px;
        padding-left: 20px;
    }

    .main-search-button {

        background: #4DB7FE;
    }

    .main-search-button {
        position: absolute;
        right: 0px;
        height: 50px;
        width: 120px;
        color: #fff;
        top: 0;
        border: none;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        cursor: pointer;
    }

    .main-search-input-wrap {
        max-width: 500px;
        margin: 20px auto;
        position: relative;
    }

    :focus {
        outline: 0;
    }


    @media only screen and (max-width: 768px) {
        .main-search-input {
            background: rgba(255, 255, 255, 0.2);
            padding: 14px 20px 10px;
            border-radius: 10px;
            box-shadow: 0px 0px 0px 10px rgba(255, 255, 255, 0.0);
        }

        .main-search-input-item {
            width: 100%;
            border: 1px solid #eee;
            height: 50px;
            border: none;
            margin-bottom: 10px;
        }

        .main-search-input-item input {
            border-radius: 6px !important;
            background: #fff;
        }

        .main-search-button {
            position: relative;
            float: left;
            width: 100%;
            border-radius: 6px;
        }
    }
    </style>
</head>

<body class="theme-color-1">

    <!-- Header-area start -->
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
    <!-- Header-area end -->

    <!-- Header-area end -->

    <!-- Breadcrumb start -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="3000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(aset/landingpage/masjidagung.jpg)">

                    <br> <br> <br>
                    <div class="main-search-input-wrap">


                        <div class="main-search-input fl-wrap">
                            <div class="main-search-input-item">
                                <input type="text" value="" placeholder="Cari Wisata...">
                            </div>

                            <button class="main-search-button">Cari</button>
                        </div>


                    </div>


                </div>

                <!-- Slide 2 -->
                <div class="carousel-item active" style="background-image: url(aset/landingpage/masjidagung.jpg)">

                    <br> <br> <br>
                    <div class="main-search-input-wrap">


                        <div class="main-search-input fl-wrap">
                            <div class="main-search-input-item">
                                <input type="text" value="" placeholder="Cari Wisata...">
                            </div>

                            <button class="main-search-button">Cari</button>
                        </div>


                    </div>


                </div>

                <!-- Slide 3 -->
                <div class="carousel-item active" style="background-image: url(aset/landingpage/masjidagung.jpg)">

                    <br> <br> <br>
                    <div class="main-search-input-wrap">
                        <div class="main-search-input fl-wrap">
                            <div class="main-search-input-item">
                                <input type="text" value="" placeholder="Cari Wisata...">
                            </div>

                            <button class="main-search-button">Cari</button>
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
    <!-- Breadcrumb end -->

    <!-- Course-area start -->
    <div class="course-area pt-60 pb-75">
        <div class="container">
            <div class="row gx-xl-5">
                <div class="col-lg-4 col-xl-3">
                    <!-- Spacer -->
                    <div class="pb-40 d-none d-lg-block"></div>
                    <div class="widget-offcanvas offcanvas-lg offcanvas-start" tabindex="-1" id="widgetOffcanvas"
                        aria-labelledby="widgetOffcanvas">
                        <div class="offcanvas-header px-20">
                            <h4 class="offcanvas-title">Filter</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                data-bs-target="#widgetOffcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body p-0">
                            <aside class="widget-area px-20" data-aos="fade-up">
                                <div class="widget widget-categories py-20">
                                    <h5 class="title">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#categories">
                                            Kategori
                                        </button>
                                    </h5>
                                    <div id="categories" class="collapse show">
                                        <div class="accordion-body mt-20 scroll-y">
                                            <ul class="list-group">
                                                <!-- Add class .list-dropdown for dropdown-menu -->
                                                <li class="list-item">
                                                    <a class="category-toggle" href="courses.html" title="link"
                                                        target="_self">Semua<span class="qty">(99)</span></a>
                                                </li>

                                                <li class="list-item">
                                                    <a href="courses.html" title="link" target="_self"
                                                        class="category-toggle">Wisata Edukasi<span
                                                            class="qty">(02)</span></a>
                                                </li>

                                                <li class="list-item">
                                                    <a href="courses.html" title="link" target="_self"
                                                        class="category-toggle">Wisata Religi<span
                                                            class="qty">(85)</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget widget-price py-20">
                                    <h5 class="title">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#price" aria-expanded="true" aria-controls="price">
                                            Harga
                                        </button>
                                    </h5>
                                    <div id="price" class="collapse show">
                                        <div class="accordion-body mt-20 scroll-y">
                                            <div class="row gx-sm-3">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-20">
                                                        <label class="mb-1">Minimum</label>
                                                        <input class="form-control size-md" type="number" name="min"
                                                            id="min">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-20">
                                                        <label class="mb-1">Maximum</label>
                                                        <input class="form-control size-md" type="number" name="max"
                                                            id="max">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-item">
                                                <div class="price-slider" data-range-slider='filterPriceSlider'></div>
                                                <div class="price-value">
                                                    <span>Harga:
                                                        <span class="filter-price-range"
                                                            data-range-value='filterPriceSliderValue'></span>
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget widget-ratings py-20">
                                    <h5 class="title">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#sort" aria-expanded="true" aria-controls="sort">
                                            Ratings
                                        </button>
                                    </h5>
                                    <div id="sort" class="collapse show">
                                        <div class="accordion-body mt-20 scroll-y">
                                            <ul class="list-group custom-radio">
                                                <li>
                                                    <input class="input-radio" type="radio" name="radio" id="radio1"
                                                        value="">
                                                    <label class="form-radio-label" for="radio1">
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="qty">(67)</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input class="input-radio" type="radio" name="radio" id="radio2"
                                                        value="">
                                                    <label class="form-radio-label" for="radio2">
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                        <span class="qty">(32)</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input class="input-radio" type="radio" name="radio" id="radio3"
                                                        value="">
                                                    <label class="form-radio-label" for="radio3">
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                        <span class="qty">(13)</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input class="input-radio" type="radio" name="radio" id="radio4"
                                                        value="">
                                                    <label class="form-radio-label" for="radio4">
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                        <span class="qty">(5)</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input class="input-radio" type="radio" name="radio" id="radio5"
                                                        value="">
                                                    <label class="form-radio-label" for="radio5">
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                        <span class="qty">(0)</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </aside>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <!-- Spacer -->
                    <div class="pb-40"></div>
                    <div class="sort-area" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h5 class="mb-20">Rekomendasi Untuk mu</h5>
                            </div>
                            <div class="col-6 d-lg-none">
                                <button class="btn btn-sm btn-outline icon-end radius-sm mb-20" type="button"
                                    data-bs-toggle="offcanvas" data-bs-target="#widgetOffcanvas"
                                    aria-controls="widgetOffcanvas">
                                    Filter <i class="fal fa-filter"></i>
                                </button>
                            </div>
                            <div class="col-6">
                                <ul class="sort-list list-unstyled mb-20 text-end">
                                    <li class="item">
                                        <div class="sort-item d-flex align-items-center">
                                            <label class="me-2 font-sm">Urutkan:</label>
                                            <select name="type" class="niceselect right">
                                                <option value="high">Terbaru</option>
                                                <option value="low">Harga Tertinggi</option>
                                                <option value="New">Harga Terendah</option>

                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-xl-4 col-sm-6">
                            <div class="course-default border radius-md mb-25">
                                <figure class="course-img">
                                    <a href="" title="Image" target="_self" class="lazy-container ratio ratio-2-3">
                                        <img class="lazyload" src="assets1/images/placeholder.png"
                                            data-src="aset/landingpage/arumjeram.jpg" alt="course">
                                    </a>
                                    <div class="hover-show">
                                        <a href="<?=base_url('Listprod');?>" class="btn btn-md btn-primary rounded-pill"
                                            title="Enroll Now" target="_self">Lihat Detail</a>
                                    </div>
                                </figure>
                                <div class="course-details">
                                    <div class="p-3">
                                        <a href="<?php echo site_url('welcome');?>" target="_self" title="Design"
                                            class="tag font-sm color-primary mb-1">Ngabring.id</a>
                                        <h6 class="course-title lc-2 mb-0">
                                            <a href="" target="_self" title="Link">
                                                Paket Wisata Refting
                                            </a>
                                        </h6>
                                        <div class="authors mt-15">
                                            <div class="author">

                                                <span class="font-sm">
                                                    <a href=".html" target="_self" title="James Hobert">
                                                        <br>Refting Seru di sungai Ciwulan <br>
                                                    </a>
                                                    <br>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="course-bottom-info px-3 py-2">
                                        <span class="font-sm"><i class="fas fa-usd-circle"></i>Rp 160.000</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="course-default border radius-md mb-25">
                                <figure class="course-img">
                                    <a href="" title="Image" target="_self" class="lazy-container ratio ratio-2-3">
                                        <img class="lazyload" src="assets1/images/placeholder.png"
                                            data-src="aset/landingpage/pamijahan.jpeg" alt="course">
                                    </a>
                                    <div class="hover-show">
                                        <a href="" class="btn btn-md btn-primary rounded-pill" title="Enroll Now"
                                            target="_self">Lihat Detail</a>
                                    </div>
                                </figure>
                                <div class="course-details">
                                    <div class="p-3">
                                        <a href="<?php echo site_url('welcome');?>" target="_self" title="Design"
                                            class="tag font-sm color-primary mb-1">Ngabring.id</a>
                                        <h6 class="course-title lc-2 mb-0">
                                            <a href="" target="_self" title="Link">
                                                Paket Wisata Religi
                                            </a>
                                        </h6>
                                        <div class="authors mt-15">
                                            <div class="author">

                                                <span class="font-sm">
                                                    <a href="" target="_self" title="James Hobert">
                                                        Goa Syafarwadhi, makan, ziaroh Syaikh Abdul Muhyi, Sunrise di
                                                        pantai Cipatujah
                                                    </a>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="course-bottom-info px-3 py-2">
                                        <span class="font-sm"><i class="fas fa-usd-circle"></i>Rp 380.000</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="course-default border radius-md mb-25">
                                <figure class="course-img">
                                    <a href="" title="Image" target="_self" class="lazy-container ratio ratio-2-3">
                                        <img class="lazyload" src="assets1/images/placeholder.png"
                                            data-src="aset/listproduk/batik.jpeg" alt="course">
                                    </a>
                                    <div class="hover-show">
                                        <a href="" class="btn btn-md btn-primary rounded-pill" title="Enroll Now"
                                            target="_self">Lihat Detail</a>
                                    </div>
                                </figure>
                                <div class="course-details">
                                    <div class="p-3">
                                        <a href="<?php echo site_url('welcome');?>" target="_self" title="Design"
                                            class="tag font-sm color-primary mb-1">Ngabring.id</a>
                                        <h6 class="course-title lc-2 mb-0">
                                            <a href="" target="_self" title="Link">
                                                Paket Wisata Soeka 1
                                            </a>
                                        </h6>
                                        <div class="authors mt-15">
                                            <div class="author">

                                                <span class="font-sm">
                                                    <a href=".html" target="_self" title="James Hobert">
                                                        Edukasi sejarah, Batik, dan kolam renang<br>
                                                    </a>
                                                </span> <br>

                                            </div>


                                        </div>
                                    </div>
                                    <div class="course-bottom-info px-3 py-2">
                                        <span class="font-sm"><i class="fas fa-usd-circle"></i>Rp 105.000</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="mb-20">Wisata Lainya</h5>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-xl-4 col-sm-6">
                            <div class="course-default border radius-md mb-25">
                                <figure class="course-img">
                                    <a href="" title="Image" target="_self" class="lazy-container ratio ratio-2-3">
                                        <img class="lazyload" src="assets1/images/placeholder.png"
                                            data-src="aset/listproduk/soeka2.jpeg" alt="course">
                                    </a>
                                    <div class="hover-show">
                                        <a href="" class="btn btn-md btn-primary rounded-pill" title="Enroll Now"
                                            target="_self">Lihat Detail</a>
                                    </div>
                                </figure>
                                <div class="course-details">
                                    <div class="p-3">
                                        <a href="<?php echo site_url('welcome');?>" target="_self" title="Design"
                                            class="tag font-sm color-primary mb-1">Ngabring.id</a>
                                        <h6 class="course-title lc-2 mb-0">
                                            <a href="" target="_self" title="Link">
                                                Paket Wisata Soeka2
                                            </a>
                                        </h6>
                                        <div class="authors mt-15">
                                            <div class="author">

                                                <span class="font-sm">
                                                    <a href=".html" target="_self" title="James Hobert">
                                                        Edukasi damkar, edukasi sejarah, dan kolam renang
                                                    </a>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="course-bottom-info px-3 py-2">
                                        <span class="font-sm"><i class="fas fa-usd-circle"></i>Rp 100.000</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="pagination-nav mt-15 mb-25" data-aos="fade-up">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="courses.html" aria-label="Previous">
                                    <i class="far fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="courses.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="courses.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="courses.html">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="courses.html" aria-label="Next">
                                    <i class="far fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Course-area end -->

    <footer class="text-center text-lg-start bg-dark text-white">
        <!-- Section: Social media -->
        <!-- <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>

            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fas fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fas fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fas fa-instagram"></i>
                </a>

            </div>

        </section> -->
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4" style="color: white;">
                            <img src="aset/landingpage/logo.png" alt="" class="img-fluid" style="width: 50px; ">
                            Ngabring.id
                        </h6>
                        <p style="color: white;">
                            Ngabring.id adalah penyedia layanan dan penyelenggara Tour Agent yang mulai bergerak di
                            kabupaten dan kota Tasikmalaya.
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4" style="color: white;">
                            Bantuan
                        </h6>
                        <p style="color: white;">
                            <a href=" <?=base_url('Faq');?>" class="text-reset">Faq</a>
                        </p>
                        <p style="color: white;">
                            <a href="#!" class="text-reset">Syarat dan Ketentuan</a>
                        </p>
                        <p style="color: white;">
                            <a href=" #!" class="text-reset">Hubungi Kami</a>
                        </p>
                        <p style="color: white;">
                            <a href="#!" class="text-reset">Blog</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4" style="color: white;">Contact</h6>
                        <p style="color: white;"><i class="fa fa-home me-3"></i> Alamat : Perumahan Pelangi Residence
                            Blok G 16, Kersanagara,
                            Cibeureum, Kota Tasikmalaya, Jawa Barat 46196.</p>
                        <p style="color: white;">
                            <i class="fa fa-envelope me-3"></i>
                            ngabring.id@gmail.com
                        </p>
                        <p style="color: white;"><i class="fa fa-phone me-3"></i> 085523825780</p>
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
    <!-- Footer-area end-->

    <!-- Go top -->
    <div class="go-top go-top_gradient"><i class="fal fa-long-arrow-up"></i></div>

    <!-- Magic Cursor -->
    <div class="cursor"></div>

    <!-- Jquery JS -->
    <script src="assets1/js/vendors/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets1/js/vendors/bootstrap.min.js"></script>
    <!-- Counter JS -->
    <script src="assets1/js/vendors/jquery.counterup.min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets1/js/vendors/jquery.nice-select.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets1/js/vendors/jquery.magnific-popup.min.js"></script>
    <!-- Noui Range Slider JS -->
    <script src="assets1/js/vendors/nouislider.min.js"></script>
    <!-- Swiper Slider JS -->
    <script src="assets1/js/vendors/swiper-bundle.min.js"></script>
    <!-- Lazysizes -->
    <script src="assets1/js/vendors/lazysizes.min.js"></script>
    <!-- AOS JS -->
    <script src="assets1/js/vendors/aos.min.js"></script>
    <!-- Mouse Hover JS -->
    <script src="assets1/js/vendors/mouse-hover-move.js"></script>
    <!-- Main script JS -->
    <script src="assets1/js/script.js"></script>
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
    <script src="assets/js/main.js"></script>
</body>

</html>