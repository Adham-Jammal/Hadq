@extends('app')
@section('main')
    {{-- Hero --}}
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
        data-aos-delay="1500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <img class="hero-logo lozad" data-src="{{ asset('img/logo2.png') }}" alt="">
                    <h2> عـيـنٌ أمـعـنـت<span>فـأبـدعـــت </span></h2>
                    <p>
                        {{ $data['royaa_desc_Ar'] }}

                    </p>
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
            <div class="container-fluid">
                <div class="section-title">
                    <h2>معرض أعمالنا</h2>
                    <p>في حَدق عملنا على أكثر من ٤٠ مشروع ولدينا تعاون مع عملاء من معظم انحاء المملكة ودول الخليج.</p>
                </div>
                <div class="row">
                    {{-- <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            @foreach ($galleries as $key => $item)


                            <li data-filter=".filter-{{$item->id}} " @if(!$key) class="filter-active" @endif>
                                {{$item->title_Ar}} </li>
                            @endforeach
                        </ul>
                    </div> --}}
                </div>
                <div class="row portfolio-container">
                    @foreach ($galleries as $key => $item)
                    @if (isset($item->image))

                    @foreach(json_decode($item->image, true) as $image)



                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{$item->id}}">
                        <div class="portfolio-wrap">
                            <span class="work-name">{{$item->title_Ar}} </span>
                            <img data-src="{{ Voyager::image($image) }}" class="img-fluid lozad" alt="">
                            <div class="portfolio-info">
                                {{-- <h4>التصوير الفوتوغرافي </h4> --}}
                                {{-- <p>وصف الصورة</p> --}}
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ Voyager::image($image) }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="{{$item->title_Ar}} "><i class="bi bi-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif



                    @endforeach


                </div>
            </div>



        {{-- Customers --}}
        <section class="gallery" id="clients">
            <div class="container">
                <div class="section-title">
                    <h2>عملاؤنا المميزون </h2>
                    <p>انضم إلينا لتكون بين قائمة أفضل العملاء</p>
                </div>
                    <div class="images partners-slider owl-carousel owl-drag owl-theme" data-aos="fade-up" data-aos-duration="1000">
                        @foreach ( json_decode($data->success_partners, true) as $image)
                        <div class="img-p">
                            <img loading="lazy" data-src="{{ Voyager::image($image) }}" class="lozad" alt="partner-image">
                        </div>
                        @endforeach

                </div>
            </div>
        </section>
        {{-- Contact --}}
        <section class="contact-form" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 map" data-aos="zoom-in" data-aos-duration="1000">
                        <img data-src="{{ asset('img/logo.png') }}" class="lozad" alt="">
                    </div>
                    <div class="col-md-7 form" data-aos="zoom-out" data-aos-duration="1000">
                        <h2>اطلب هويتك الآن</h2>
                        <p>نحن هنا من أجلك ، يمكنك طلب الهوية الخاصة بك بأي وقت عن طريق ملء نموذج التالي </p>
                        <form action="request" method="POST">
                            @csrf
                            <input type="text" name="name" id="name" placeholder="الاسم الكامل">
                            <input type="email" name="email" id="email" placeholder="البريد الالكتروني">
                            <input type="text" name="location" id="address" placeholder="موقع المعمل">
                            <input type="number" name="phone" id="number" placeholder="رقم الهاتف">
                            <select  name="nbza" id="">
                                <option value="" disabled selected> نبذة عن مشروعك </option>
                                <option value="مشروع جديد"> مشروع جديد</option>
                                <option value=" تجديد هوية " > تجديد هوية </option>

                            </select>
                            <select name="service" id="">
                                <option value="" disabled selected> احتياجك </option>

                                <option value="هوية كاملة"> هوية كاملة</option>
                                <option value="شعار ورسمة "> شعار ورسمة </option>
                                <option value="شعار فقط"> شعار فقط</option>
                            </select>
                            <textarea name="message" id="notes" placeholder="ملاحظاتك"></textarea>
                            <input type="submit" name="submit" id="submit" value="طلب الخدمة">

                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
@stop
