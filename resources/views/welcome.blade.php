<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Soup Meras</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('frontend/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
            </div>
            <div class="languages d-none d-md-flex align-items-center">
                <ul>
                    <li><a href="{{ url('login') }}">Log In</a></li>
                </ul>
            </div>
        </div>
    </div>
    <main id="main">
        <section id="menu" class="menu section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Menu</h2>
                    <p>Check Our Tasty Menu</p>
                </div>
                <div class="row" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" name="id">All</li>
                            <li data-filter=".starters">Starters</li>
                            <li data-filter=".salads">Salads</li>
                            <li data-filter=".specialty">Specialty</li>
                        </ul>
                    </div>
                </div>
                <div class="row menu-container" data-aos-delay="200">
                    <div class="col-lg-6 menu-item starters">
                        <img src="frontend/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Lobster Bisque</a><span>$5.95</span>
                        </div>
                        <div class="menu-ingredients">Lorem, deren, trataro, filede, nerada</div>
                    </div>
                    <div class="col-lg-6 menu-item specialty">
                        <img src="frontend/img/menu/bread-barrel.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Bread Barrel</a><span>$6.95</span>
                        </div>
                        <div class="menu-ingredients">Lorem, deren, trataro, filede, nerada</div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Restaurantly</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>


{{-- <main id="main">
    <section id="menu" class="menu section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Menu</h2>
                <p>Check Our Tasty Menu</p>
            </div>
            <div class="row" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    @foreach ($response as $index => $item)
                        <ul id="menu-flters">
                            <li data-filter=".{{ $item->name_en }}">{{ $item->name_kh }}</li>
                        </ul>
                    @endforeach
                </div>
            </div>
            <div class="row menu-container" data-aos-delay="200">
                @foreach ($products as $index => $item)
                    <div class="col-lg-6 menu-item {{ $item->category->name_en }}">
                        <img src="{{asset('storage/'.$item->image)}}" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">{{ $item->name_kh }}</a><span>${{ $item->price }}</span>
                        </div>
                        <div class="menu-ingredients">
                            {{ $item->remark }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main> --}}