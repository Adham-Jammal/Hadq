@php
    $lang2 = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
@endphp

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-lg-0">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="#hero" class="active">الرئيسية</a></li>
                <li><a href="#portfolio">معرض الأعمال</a></li>
                <li><a href="#clients">عملاؤنا</a></li>
                <li><a href="#contact">طلب الخدمة</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div class="header-social-links">
            <a href="https://hadq.sundoq.com/Behance" class="behance"><i class="bi bi-behance"></i></a>
            <a href="https://hadq.sundoq.com/Twitter" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="mail"><i class="bi bi-envelope"></i></i></a>
            <a href="https://hadq.sundoq.com/Twitter" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->
