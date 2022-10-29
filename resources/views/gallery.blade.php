@php
$lang = ucfirst(LaravelLocalization::getCurrentLocale());
$index = 1;

$colors = [
    "background: #37251f;",
    "background: #f4ac88;",
    "background: #9c522e;",
    "background: #8563c2;",
    "background: #04304d;",
    "background: #818cc3;",
    "background: #f4c7de;",
    "background: #f4ac88;",
    "background: #ffacce;",
    "background: #ffc72a;",
    "background: #e3d4c3;",
    "background: #000000;",
    "background: #a8d9bc;",
    "background: #03463b;"
];
$index = 0 ;
@endphp


{{-- our services --}}
<section id="back0" class="our-services ">
<div class="container">
    <div class="row">
        <div class="col-md-12 services " >
            <h3 data-aos="fade-left" data-aos-duration="1000" id="title0 "> معرض الأعمال</h3>
<p data-aos="fade-up" id="des0" data-aos-duration="1500">في حَدق عملنا على أكثر من ٤٠ مشروع 
</p>
<p data-aos="fade-up" id="des00" data-aos-duration="2000"> ولدينا تعاون مع عملاء من معظم انحاء المملكة ودول الخليج.
    </p>

<br>
            <section class=" " id="">
                <div class="">

                    <div class="row">
                        <div class="isotope-wrapper">
                            <div class="isotope-toolbar" >
                                <label>
                                    <button  class="isotope-toolbar-btn active" data-type="*" id="all"  name="isotope-filter">
                                        <span>All</span>
                                    </button>
                                </label>

                                @foreach ($galleries as $item)

                                @if(($item->color1 != '#000001'))
                                <style>
                                    .back{{$item->id}}{
                                        background:{{ $item->color1}} !important;
                                    }
                                </style>

@if(($item->color2 != '#000001'))
<style>
    .title{{$item->id}}{
        color:{{ $item->color2}} !important;
    }
</style>
@endif
@if(($item->color3 != '#000001'))
<style>
    .des{{$item->id}}{
        color: {{$item->color3}} !important;
    }
</style>
@endif

@if(($item->color4 != '#000001'))
<style>
    .button{{$item->id}}{
        color: {{$item->color4}} ;

    }
</style>
@endif

@if(($item->color5 != '#000001'))
<style>
    .button{{$item->id}}{
        background: {{$item->color5}} ;
    }
</style>
@endif

@if(($item->color6 != '#000001'))
<style>
    .active{{$item->id}} {
        background-color: {{$item->color6}} !important;
    }
</style>
@endif



                                <style>
                                </style>

                                @endif

                                <label>
                                    <button    class="button0"  data-aos-delay="1500"
                                     data-aos="zoom-in" data-aos-duration="800" onclick="color_ch({{$item->id}})" class="isotope-toolbar-btn" id="all{{$item->id}}" data-type="{{ $item['title_' . $lang] }}"
                                        name="isotope-filter">
                                        <span>{{ $item['title_' . $lang] }}</span>
                                    </button>
                                </label>
                                @endforeach





                            </div>
<br>

                            <div  class="isotope-box" data-aos="fade-up" data-aos-duration="2500">

                                @foreach ($galleries as $item)


                                @foreach(json_decode($item->image, true) as $key=>$image)

                                <div class="isotope-item" data-type="{{ $item['title_' . $lang] }}">
                                    <figure class="figure{{$key}}">

                                        <style>
                                            .figure{{$key}}::after
                                            {
                                                {{$colors[$index++]}}
                                            }
                                        </style>

                                        @php
                                            if($index > 13 )
                                            $index =0 ;
                                        @endphp


                                        <img src="{{ Voyager::image($image) }}" height="400px" width="400px"
                                            alt="{{ $item['title_' . $lang] }}" />
                                        <figcaption>
                                            <a href="{{ Voyager::image($image) }}" data-lightbox="image"><svg
                                                    style="isolation:isolate" viewBox="0 0 50 50" width="50pt"
                                                    height="50pt">
                                                    <g>
                                                        <path
                                                            d=" M 49.334 46.12 L 33.838 30.624 C 36.369 27.403 37.88 23.345 37.88 18.94 C 37.88 8.497 29.384 0 18.94 0 C 8.497 0 0 8.497 0 18.94 C 0 29.384 8.497 37.88 18.94 37.88 C 23.345 37.88 27.403 36.369 30.624 33.838 L 46.12 49.334 C 46.564 49.778 47.146 50 47.727 50 C 48.309 50 48.891 49.778 49.334 49.334 C 50.222 48.447 50.222 47.008 49.334 46.12 Z  M 4.545 18.94 C 4.545 11.003 11.003 4.545 18.94 4.545 C 26.878 4.545 33.335 11.003 33.335 18.94 C 33.335 26.877 26.878 33.335 18.94 33.335 C 11.003 33.335 4.545 26.877 4.545 18.94 Z "
                                                            fill="white" />
                                                        <path
                                                            d=" M 23.486 16.668 L 21.213 16.668 L 21.213 14.395 C 21.213 13.14 20.195 12.122 18.94 12.122 C 17.685 12.122 16.667 13.14 16.667 14.395 L 16.667 16.668 L 14.395 16.668 C 13.14 16.668 12.122 17.685 12.122 18.94 C 12.122 20.195 13.14 21.213 14.395 21.213 L 16.667 21.213 L 16.667 23.486 C 16.667 24.741 17.685 25.758 18.94 25.758 C 20.195 25.758 21.213 24.741 21.213 23.486 L 21.213 21.213 L 23.486 21.213 C 24.741 21.213 25.758 20.195 25.758 18.94 C 25.758 17.685 24.741 16.668 23.486 16.668 Z "
                                                            fill="white" />
                                                    </g>
                                                </svg></a>
                                            {{-- <h4>item </h4>
                                            <span>description </span> --}}
                                        </figcaption>
                                    </figure>
                                </div>

                                @endforeach

                                @php
                                            $index =0 ;
                                    
                                @endphp

                                @endforeach





                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>
</div>

<script>
    
  // init Isotope elements
  var $box = $(".isotope-box").isotope({
    itemSelector: ".isotope-item"
  });
  // filter functions
  // bind filter button click
  $(".isotope-toolbar").on("click", "button", function () {
    var filterValue = $(this).attr("data-type");
    $(".isotope-toolbar-btn").removeClass("active");
    $(this).addClass("active");
    if (filterValue !== "*") {
      filterValue = '[data-type="' + filterValue + '"]';
    }
    console.log(filterValue);
    $box.isotope({ filter: filterValue });
  });

    $box.isotope({ filter: '*' });
    $('#all').css('display','none');

    setTimeout(function () {

        $(".isotope-toolbar-btn").trigger('click');
    }, 500)

    var last_id = 0 ;
    function color_ch(id) {
        // var $item =$('.back0');
        // var lastClass = $('.back0').attr('class').split(' ').pop();
        // $('.back0').addClass('back'+id);
        // $(this).removeClass(lastClass);

        $('#back0').removeClass('back'+last_id);
        $('#back0').addClass('back'+id);


        $('#title0').removeClass('title'+last_id);
        $('#title0').addClass('title'+id);

        $('#des00').removeClass('des'+last_id);
        $('#des00').addClass('des'+id);

        $('#des0').removeClass('des'+last_id);
        $('#des0').addClass('des'+id);

        $('#all'+last_id).removeClass('active');
        $('#all'+last_id).removeClass('active'+last_id);

        $('.button0').removeClass('active'+last_id);
        $('#all'+id).addClass('active'+id);

        $('.button0').removeClass('button'+last_id);
        $('.button0').addClass('button'+id);

       

        last_id = id;
    }

</script>
<style>
    

.our-message {
    margin-top: unset !important;
}
</style>
</section>
{{-- end of services --}}