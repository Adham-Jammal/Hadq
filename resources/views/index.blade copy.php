@extends('app')

@php
$lang = ucfirst(LaravelLocalization::getCurrentLocale());
$index = 1;
@endphp


{{-- Success message --}}
@section('main')
@if (session()->has('message'))
<script src="{{ asset('js/formerror.js') }}"></script>
@endif

{{-- Error message --}}

@if ($errors->any())
<script src="{{ asset('js/formerror.js') }}"></script>
@endif



<section class="main-section">
    <div class="container">
        {{-- header start --}}
        <header>
            <div class="header-logo">
                <img style="width: 135px !important" src="{{ Voyager::image($data->logo) }}" alt="logo">
            </div>
            <div class="header-list">
                <ul>
                    <li><a href="#hero">{{ __('index.main') }}</a></li>
                    <li><a href="#contact_us">{{ __('index.contactUs') }}</a></li>
                    {{-- <li><a href="/{{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar' }}">{{
                            __('index.lang') }}</a>
                    </li> --}}
                    <li>
                        <a href="#"> شركاء النجاح </a>
                    </li>
                    <li>
                        <a href="#"> معرض الأعمال</a>
                    </li>


                </ul>
            </div>
        </header>
        {{-- end of header --}}
        {{-- hero start --}}
        <div class="hero" id="hero">
            <div class="row">
                <div class="col-md-6 hero-text-content" data-aos="fade-up" data-aos-duration="1000">
                    <h2>{{ $data['main_word_header_' . $lang] }}</h2>
                    <br>
                    <h4 class="title-header" id="header"></h4>
                    <p>
                        {{-- {{ $data['desc_header_' . $lang] }} </p> --}}

                    <div class="circule-image">
                        {{-- <img src="{{ asset('img/circule-word.png') }}" alt=""> --}}
                    </div>
                </div>
                <div class="col-md-6 hero-image-content owl-carousel owl-theme" id="owl-carousel" data-aos="fade-down"
                    data-aos-duration="1000">

                    @foreach ($sliders as $slider)
                    <img src="{{ Voyager::image($slider->image) }}" alt="">
                    @endforeach

                </div>
            </div>
        </div>
        {{-- end of hero --}}

        {{-- vision start --}}
        <div class="vision" id="vision">
            <div class="row align-items-center">

                <div class="col-md-6 vision-image-content" data-aos="zoom-in" data-aos-duration="1000">
                    <img  src="{{ Voyager::image($data->image_royaa_message) }}" alt="">
                </div>

                <div class="col-md-6 vision-text-content" data-aos="fade-right" data-aos-duration="1000">
                    <h3>{{ __('index.vision') }}</h3>
                    <p>
                        {{ $data['royaa_desc_' . $lang] }}
                    </p>
                </div>

            </div>
        </div>
        {{-- end of vision --}}
    </div>
</section>
{{-- Success Partners
--}} <section class="our-message">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">{{ __('index.partners') }}</h1>

            </div>


            <div class="col-12  justify-content-center">
                <div class="center-block" data-aos="zoom-in" data-aos-duration="1000">
                </div>



                <div class="center-block owl-carousel owl-theme" id="owl-carousel2" data-aos="fade-down"
                    data-aos-duration="1000">

                    @foreach ( json_decode($data->success_partners, true) as $image)
                    <div class="img-p">
                        <img src="{{ Voyager::image($image) }}" alt="">
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</section>


{{-- end of Success Partners--}}

<div id="gallery"></div>

<div class="form-b"><form action="">
    <fieldset>
      <legend>High contrasts</legend>
      <div class="radio-block">
         <input type="radio" name="contrasts" id="contrasts-on" checked>
        <label for="contrasts-on">Activated</label>
        <input type="radio" name="contrasts" id="contrasts-off">
        <label for="contrasts-off" class="off-label">Disabled</label>
        <span class="selected" aria-hidden="true"></span>
      </div>
    </fieldset>
    <fieldset>
      <legend>Animation effects</legend>
      <div class="radio-block">
        <input type="radio" name="animations" id="animations-on" checked>
        <label for="animations-on">Activated</label>
        <input type="radio" name="animations" id="animations-off">
        <label for="animations-off" class="off-label">Disabled</label>
        <span class="selected" aria-hidden="true"></span>
      </div>
    </fieldset>
  </form>
</div>
<style>


@import url("https://fonts.googleapis.com/css?family=Montserrat:500");
.form-b{
    display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  font-family: 'Montserrat';
  color: var(--blue);
  background-color: var(--blue);
}
form {
  padding: 40px;
  border-radiuss:  10px;
  background-color: #FFF;
  direction: rtl;

}

fieldset:not(:last-child) {
  padding-bottom: 18px;
}

legend {
  padding-bottom: 8px;
  text-transform: uppercase;
}

.radio-block {
  position: relative;
  display: flex;
  min-width: 280px;
  border: dashed var(--blue) 1px;
  border-radiuss:  20px;
  background-color: #F7F5F3;
  direction: ltr;

}

.selected {
  position: absolute;
  top: 1px;
  left: 1px;
  width: calc(50% - 1px);
  height: calc(100% - 2px);
  border-radiuss:  20px;
  transition: transform 0.2s;
  background-color: var(--blue);
}

label {
  position: relative;
  z-index: 100;
  width: 50%;
  padding: 11px;
  transition: color 0.2s;
  text-align: center;
  cursor: pointer;
}

input[type=radio]:checked + label {
  color: #FFF;
}

input[type=radio]:checked + .off-label + .selected {
  transform: translateX(100%);
}

/* ------ general style ------ */
:root {
  --blue: #104fa8;
}

.sr-only, input[type=radio] {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  margin: -1px !important;
  padding: 0 !important;
  overflow: hidden !important;
  clip: rect(1px, 1px, 1px, 1px) !important;
  border: 0 !important;
  clip-path: inset(50%) !important;
  white-space: nowrap !important;
}


    .title {
        font-size: 36px;
        text-align: center;
        color: #fff;
        padding: 15px;
        margin-bottom: 35px;
    }

    .main-section header .header-logo img {
        width: 100px;
        border-radiuss:  59px;
    }

    .img-p img {
        width: 175px !important;
        height: 175px !important;
        border-radiuss:  75px;
    }

    .img-p {
        padding: 25px;

    }

    .cen {
        text-align: center;
    }

    .section {
        color: #fff;
        width: 100%;
        position: relative;
        min-height: 100vh;
        padding-bottom: 80px;
        border-bottom: 3px solid rgba(250, 250, 250, 0.25);
    }

    /* Buttons */

    button {
        /* display271: inline-block; */
        padding: 10px 20px;
        margin: 5px 5px;
        background-color: #fff;
        color: #6f7868;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        transition: all 0.5s;
        border: none;
        outline: none;
        cursor: pointer;
        border-radiuss:  5px;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
    }

    button:hover {
        outline: none;
        background-color: #6f7868;
        color: #fff;
    }

    button.active {
        outline: none;
        background-color: #6f7868;
        color: #fff;
    }


    /*    isotope       */
    .section-heading {
        text-align: center;
        padding: 80px 45px 50px 45px;
    }

    .isotope-wrapper {
        /* display271: flex; */
        flex-direction: column;
        position: relative;
        width: 100%;
        margin: auto;
    }

    .isotope-toolbar span {
        text-transform: capitalize;
        /* display271: inline-block; */
        /*   margin-right: 15px;
  padding-bottom: 3px; */
        font-size: 15px;
        font-weight: 700;
        border-bottom: 2px solid transparent;
        transform: ease-in-out 0.5s;
        cursor: pointer;
        flex: 1;
    }

    .isotope-box {
        position: relative;
        width: 100%;
        flex: 1;
    }

    .isotope-toolbar {
        text-align: center;
        margin: 10px;
    }

    .isotope-item {
        box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        position: relative;
        width: 48%;
        margin: 1%;
        /* border-bottom: 2px solid rgba(250, 250, 250, 0.1); */
        /* padding-bottom: 30px; */
        margin-bottom: 30px;
    }

    .isotope-item img {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radiuss:  5px;
    }

    figure {
        overflow: hidden;
        text-align: center;
        -webkit-perspective: 50em;
        perspective: 50em;
    }

    figure * {
        -webkit-box-sizing: padding-box;
        box-sizing: padding-box;
        -webkit-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }

    figure figcaption {
        top: 50%;
        left: 20px;
        right: 20px;
        position: absolute;
        opacity: 0;
        z-index: 1;
    }

    figure h4 {
        margin-top: 15px;
        margin-bottom: 5px;
        color: #232323;
    }

    figure span {
        font-size: 14px;
        font-style: italic;
        /* display271: block; */
        color: #7a7a7a;
    }

    figure svg {
        position: relative !important;
        font-size: 18px;
        /* background-color: #6f7868; */
        width: 60px;
        height: 70px;
        padding: 5px;
        /* display271: inline-block; */
        text-align: center;
        line-height: 40px;
        border-radiuss:  5px;
        color: #fff;
        fill: red;
    }

    figure:after {
        /* background-color: #ffffff; */
        position: absolute;
        content: "";
        /* display271: block; */
        top: 0px;
        left: 0px;
        right: 0px;
        bottom: 0px;
        -webkit-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
        -webkit-transform: rotateX(-90deg);
        transform: rotateX(-90deg);
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        opacity: 0;
    }

    figure a {
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: 1;
    }

    figure:hover figcaption,
    figure.hover figcaption {
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        opacity: 1;
        -webkit-transition-delay: 0.2s;
        transition-delay: 0.2s;
    }

    figure:hover:after,
    figure.hover:after {
        -webkit-transform: rotateX(0);
        transform: rotateX(0);
        opacity: 0.9;
    }


    figure:after {}

    @media (max-width:768px) {
        .isotope-item {
            width: 96%;

        }
    }

    body {
        overflow: hidden;
        background: url("/img/background.jpg");

    }

    .title-header {
        font-size: 26px !important;
    }

    .sand{
        font-weight: 900;
        color: rgb(0, 0, 0);
    }
    
    .contact{
        background: #fff;
    width: 25px !important;
    height: 25px !important;
    margin: 5px;
    text-align: center;
    padding-top: 5px;
    height: 15px;
    border-radiuss:  40px;
    margin: 10px;
}    
.contact i {
    font-size: 16px;
    color: #000;
}
@import url("https://fonts.googleapis.com/css?family=Montserrat:500");
form {
  padding: 40px;
  border-radiuss:  10px;
  background-color: #FFF;
}

fieldset:not(:last-child) {
  padding-bottom: 18px;
}

legend {
  padding-bottom: 8px;
  text-transform: uppercase;
}

.radio-block {
  position: relative;
  display: flex;
  min-width: 280px;
  border: dashed var(--blue) 1px;
  border-radiuss:  20px;
  background-color: #F7F5F3;
}

.selected {
  position: absolute;
  top: 1px;
  left: 1px;
  width: calc(50% - 1px);
  height: calc(100% - 2px);
  border-radiuss:  20px;
  transition: transform 0.2s;
  background-color: var(--blue);
}

label {
  position: relative;
  z-index: 100;
  width: 50%;
  padding: 11px;
  transition: color 0.2s;
  text-align: center;
  cursor: pointer;
}

input[type=radio]:checked + label {
  color: #FFF;
}

input[type=radio]:checked + .off-label + .selected {
  transform: translateX(100%);
}

/* ------ general style ------ */
:root {
  --blue: #104fa8;
}

.body-f {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  font-family: "Montserrat";
  color: var(--blue);
  background-color: var(--blue);
}

.sr-only, input[type=radio] {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  margin: -1px !important;
  padding: 0 !important;
  overflow: hidden !important;
  clip: rect(1px, 1px, 1px, 1px) !important;
  border: 0 !important;
  clip-path: inset(50%) !important;
  white-space: nowrap !important;
}


{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  font-family: 'Montserrat';
  color: var(--blue);
  background-color: var(--blue);
}


</style>


<script>
    
var i = 0;
var txt =" {{ $data['title_header_' . $lang] }}";
var speed = 70;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("header").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}



</script>


@stop