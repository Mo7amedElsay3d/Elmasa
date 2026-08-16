<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>ELMASA</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="{{ asset('image/logo.jpg') }}"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#accomodation">Accomodation</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#our-gallery">Our Moments</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>
    <div class="social-fixed">

        <a href="https://wa.me/201142534004" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>

        <a href="tel:+201142534004">
            <i class="fas fa-phone"></i>
        </a>

        <a href="https://maps.google.com/...." target="_blank">
            <i class="fas fa-location-dot"></i>
        </a>

        <a href="https://www.instagram.com/al_masa555?igsh=ZGJrY3pqNGEycnl5" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="https://www.facebook.com/share/17ptHG8ben/" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>

    </div>
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="hero-section">

        <div class="hero-overlay"></div>

        <div class="container">

            <div class="hero-content">

                <h1>قاعة الماسة</h1>

                <p>حيث تبدأ أجمل لحظات العمر</p>

                <a href="#booking" class="theme_btn">
                    احجز الآن
                </a>

            </div>

        </div>

    </section>
    <!--================Banner Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color"> Packages</h2>
                <p>نوفر لكم افضل الخدمات والفقرات مقابل افضل الاسعار </p>
            </div>
            <div class="row mb_30 justify-content-center ">
                @foreach ($packages as $package)
                    <div class="col-lg-4 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                @if ($package->name == 'Silver')
                                    <a href="{{ url('/package/' . $package->id) }}">
                                        <img src="{{ asset('image/silver.png') }}" alt=""> </a>
                                @elseif ($package->name == 'Gold')
                                    <a href="{{ url('/package/' . $package->id) }}">
                                        <img src="{{ asset('image/gold.png') }}" alt=""></a>
                                @else
                                    <a href="{{ url('/package/' . $package->id) }}">
                                        <img src="{{ asset('image/vip.png') }}" alt=""></a>
                                @endif
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="hotel_booking_area section_gap" id="booking">
        <div class="container">

            <div class="booking-box">

                <div class="row align-items-center">

                    <div class="col-lg-3">
                        <div class="booking-title">
                            <h2>احجز مناسبتك</h2>
                            <p>اختر الباقة والتاريخ المناسب وسنتواصل معك.</p>
                        </div>
                    </div>

                    <div class="col-lg-9">

                        <form action="{{ route('booking.store') }}" method="POST">
                            @csrf

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="الاسم بالكامل" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <input type="text" name="phone" class="form-control"
                                        placeholder="رقم الموبايل" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <input type="text" name="address" class="form-control" placeholder="العنوان"
                                        required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <select name="package_id" class="form-control">

                                        @foreach ($packages as $package)
                                            <option value="{{ $package->id }}"
                                                {{ $selectedPackage && $selectedPackage->id == $package->id ? 'selected' : '' }}>

                                                {{ $package->name }}
                                                -
                                                {{ number_format($package->price) }}
                                                EGP
                                            </option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-8 mb-3">
                                    <input type="text" id="booking_date" name="booking_date" class="form-control"
                                        placeholder="اختر تاريخ المناسبة">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <button type="submit" class="theme_btn button_hover w-100">

                                        احجز الآن

                                    </button>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_area section_gap" id="about">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6 mb-4">

                    <div class="about_img">

                        <img src="{{ asset('image/ديكور.jpg') }}" alt="قاعة الماسة">

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="about_content">

                        <span class="about_subtitle">
                            مرحباً بكم في
                        </span>

                        <h2>
                            قاعة الماسة
                        </h2>

                        <p>
                            نقدم لكم تجربة استثنائية لإقامة حفلات الزفاف والخطوبة والمناسبات
                            الخاصة داخل قاعة مجهزة بأحدث أنظمة الإضاءة والصوت والديكورات
                            الفاخرة، مع فريق متخصص يهتم بأدق التفاصيل ليجعل يومكم
                            مميزاً ولا يُنسى.
                        </p>

                        <div class="about_features">

                            <div class="feature">
                                <i class="fa fa-check-circle"></i>
                                أحدث الديكورات
                            </div>

                            <div class="feature">
                                <i class="fa fa-check-circle"></i>
                                فريق تنظيم محترف
                            </div>

                            <div class="feature">
                                <i class="fa fa-check-circle"></i>
                                أفضل الأسعار
                            </div>

                            <div class="feature">
                                <i class="fa fa-check-circle"></i>
                                أحدث أنظمة الصوت والإضاءة
                            </div>


                            <div class="feature">
                                <i class="fa fa-check-circle"></i>
                                خدمة تصوير وتنظيم كاملة
                            </div>

                        </div>

                        <a href="#booking" class="theme_btn">
                            احجز الآن
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--================ About History Area  =================-->

    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap" dir="rtl" id ="accomodation">
        <div class="container">

            <div class="section_title text-center">
                <h2 class="title_color">آراء عملائنا</h2>
                <p>نفخر بثقة عملائنا ونسعد بمشاركة بعض من تجاربهم معنا.</p>
            </div>

            <div class="row justify-content-center">

                <div class="col-lg-5 col-md-6">
                    <div class="testimonial_item">

                        <div class="client_info">
                            <img class="rounded-circle client-img" src="{{ asset('image/15.jpg') }}" alt="client">

                            <div>
                                <h4 class="sec_h4">علي وياسمين</h4>

                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>


                        <p>
                            كانت ليلة زفاف أكثر من رائعة، التنظيم ممتاز والديكور
                            أجمل من المتوقع، وكل الضيوف انبهروا بالمكان.
                        </p>

                    </div>
                </div>


                <div class="col-lg-5 col-md-6">
                    <div class="testimonial_item">

                        <div class="client_info">
                            <img class="rounded-circle client-img" src="{{ asset('image/6.jpg') }}" alt="client">

                            <div>
                                <h4 class="sec_h4">محمد وأسماء</h4>

                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>


                        <p>
                            تجربة مميزة جداً، القاعة رائعة والخدمة ممتازة،
                            وفريق العمل كان متعاوناً طوال الحفل.
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--================ Testimonial Area  =================-->

    <!--================ Latest Blog Area  =================-->
    <section class="gallery_area section_gap" id="our-gallery">
        <div class="container">

            <div class="section_title text-center">
                <h2 class="title_color">Our Moments</h2>
                <p>شاهد أجمل لحظات وديكورات قاعة الماسة</p>
            </div>

            <div class="swiper gallerySwiper">

                <div class="swiper-wrapper">

                    @for ($i = 1; $i <= 20; $i++)
                        <div class="swiper-slide">

                            <a href="{{ asset('image/gallery/' . $i . '.jpg') }}" data-fancybox="gallery">

                                <img src="{{ asset('image/gallery/' . $i . '.jpg') }}" class="gallery-img">

                            </a>

                        </div>
                    @endfor

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>

        </div>

    </section>
    <section id="contact" class="contact_section">
        <div class="container text-center">

            <h2>Let's Connect</h2>
            <p>You can find me on</p>

            <div class="social-icons">

                <a href="https://wa.me/201142534004" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>

                <a href="tel:+201142534004">
                    <i class="fas fa-phone"></i>
                </a>

                <a href="https://maps.google.com/...." target="_blank">
                    <i class="fas fa-location-dot"></i>
                </a>

                <a href="https://www.instagram.com/al_masa555?igsh=ZGJrY3pqNGEycnl5" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://www.facebook.com/share/17ptHG8ben/" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>

            </div>

        </div>
    </section>
    <!--================ Recent Area  =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area">
        <div class="container">

            <div class="footer-content text-center">

                <img src="{{ asset('image/logo.jpg') }}" alt="ELMASA Logo" class="footer-logo">

                <h4>قاعة الماسة</h4>

                <p>حيث تبدأ أجمل لحظات العمر</p>

                <div class="footer-social">

                    <a href="https://wa.me/201142534004" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                    <a href="tel:+201142534004">
                        <i class="fas fa-phone"></i>
                    </a>

                    <a href="https://maps.google.com/...." target="_blank">
                        <i class="fas fa-location-dot"></i>
                    </a>

                    <a href="https://www.instagram.com/al_masa555?igsh=ZGJrY3pqNGEycnl5" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="https://www.facebook.com/share/17ptHG8ben/" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                </div>

                <hr>

                <p class="copyright">
                    © {{ date('Y') }} ELMASA Hall. All Rights Reserved.
                </p>

            </div>

        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/stellar.js') }}"></script>
    <script src="{{ asset('vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        fetch('/booked-dates')
            .then(response => response.json())
            .then(bookedDates => {

                flatpickr("#booking_date", {
                    dateFormat: "Y-m-d",
                    minDate: "today",
                    disable: bookedDates
                });

            });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.umd.js"></script>
    <script>
        new Swiper(".gallerySwiper", {

            slidesPerView: 4,

            spaceBetween: 20,

            loop: true,

            autoplay: {
                delay: 2500,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                320: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                },
            }

        });
    </script>
    <script>
        Fancybox.bind("[data-fancybox='gallery']", {
            Toolbar: {
                display: [
                    "zoom",
                    "fullscreen",
                    "slideshow",
                    "thumbs",
                    "close"
                ]
            }
        });
    </script>
    {{-- <script>
        document.getElementById("viewMoreBtn").onclick = function() {

            document.getElementById("moreImages").classList.remove("d-none");

            this.style.display = "none";

        }
    </script> --}}

</body>

</html>
