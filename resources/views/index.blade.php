@extends('app')
@section('main')
    {{-- Hero --}}
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
        data-aos-delay="1500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <img class="hero-logo" src="{{ asset('img/white-logo.png') }}" alt="">
                    <h2> عـيـنٌ أمـعـنـت<span>فـأبـدعـــت </span></h2>
                    <p>انطلقنا في حَدق عام 2015 بعيون تُمعن النظر تعمل على صناعة وتطوير هويتك التجارية، متمكنون من بناء
                        علامة تجارية ناجحة في فترة وجيزة، تميزنا في تقديم هويات العلامات التجارية وتغليف المنتجات بتصاميم
                        عصرية. </p>
                    <a href="contact.html" class="btn-get-started">اطلب هويتك الآن</a>
                </div>
            </div>
        </div>
        <div class="arrow">
            <a href="#portfolio"><i class="bi bi-chevron-down"></i></a>
        </div>
    </section>

    <main id="main">

        {{-- Portfolio --}}
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="section-title">
                    <h2>معرض أعمالنا</h2>
                    <p>في حَدق عملنا على أكثر من ٤٠ مشروع ولدينا تعاون مع عملاء من معظم انحاء المملكة ودول الخليج.</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">الكل</li>
                            <li data-filter=".filter-flame">Flame</li>
                            <li data-filter=".filter-Dyjor">Dyjor</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">


                    <div class="col-lg-4 col-md-6 portfolio-item filter-flame">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/flame1.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Flame </h4>
                                <p>Falme Description</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ asset('img/flame1.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Flame"><i class="bx bx-search"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item filter-flame">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/flame2.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Flame </h4>
                                <p>Falme Description</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ asset('img/flame2.png') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Flame"><i class="bx bx-search"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-Dyjor">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/1.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Dyjor </h4>
                                <p>Dyjor Description</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ asset('img/1.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Dyjor"><i class="bx bx-search"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        {{-- Customers --}}
        <section class="gallery" id="partners">
            <div class="container">
                <div class="section-title">
                    <h2>عملاؤنا المميزون </h2>
                    <p>انضم إلينا لتكون بين قائمة أفضل العملاء</p>
                </div>
                    <div class="images partners-slider owl-carousel owl-drag owl-theme" data-aos="fade-up" data-aos-duration="1000">
                    <img loading="lazy" src="{{ asset('img/logo.png') }}" alt="partner-image">
                    <img loading="lazy" src="{{ asset('img/logo.png') }}" alt="partner-image">
                    <img loading="lazy" src="{{ asset('img/logo.png') }}" alt="partner-image">
                    <img loading="lazy" src="{{ asset('img/logo.png') }}" alt="partner-image">
                    <img loading="lazy" src="{{ asset('img/logo.png') }}" alt="partner-image">
                    <img loading="lazy" src="{{ asset('img/logo.png') }}" alt="partner-image">
                </div>
            </div>
        </section>
        {{-- Contact --}}
        <section class="contact-form" id="contact_us">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 map" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="{{ asset('img/logo.png') }}" alt="">
                    </div>
                    <div class="col-md-7 form" data-aos="zoom-out" data-aos-duration="1000">
                        <h2>اطلب هويتك الآن</h2>
                        <p>نحن هنا من أجلك ، يمكنك طلب الهوية الخاصة بك بأي وقت عن طريق ملء نموذج التالي </p>
                        <form action="#">
                            <input type="text" name="name" id="name" placeholder="الاسم الكامل">
                            <input type="email" name="email" id="email" placeholder="البريد الالكتروني">
                            <input type="text" name="address" id="address" placeholder="موقع المعمل">
                            <input type="number" name="phone" id="number" placeholder="رقم الهاتف">
                            <select name="type" id="">
                                <option value="" disabled selected> نبذة عن مشروعك </option>
                                <option value="residential">residential</option>
                                <option value="commercial">commercial</option>
                            </select>
                            <select name="type" id="">
                                <option value="" disabled selected> احتياجك </option>
                                <option value="residential">residential</option>
                                <option value="commercial">commercial</option>
                            </select>
                            <textarea name="notes" id="notes" placeholder="ملاحظاتك"></textarea>
                            <input type="submit" name="submit" id="submit" value="إرسال">

                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
@stop
