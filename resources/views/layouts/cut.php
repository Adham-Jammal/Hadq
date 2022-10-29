

    {{-- goals section --}}
    <section class="our-goals">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 goals">
                    <div class="row">

                        @foreach ($goals as $goal)
                            <div class="col-md-6 goal" data-aos="fade-up" data-aos-duration="1000">
                                <span class="goal-number">{{ $index++ }}</span>
                                <p>{{ $goal['goal_' . $lang] }}</p>
                            </div>
                        @endforeach


                    </div>
                    <h3 data-aos="zoom-out" data-aos-duration="1000">{{ __('index.ourGoals') }}</h3>

                </div>
                <div class="col-12 col-lg-4 goals-image-content" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{ Voyager::image($data->goals_image) }}" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- end of goals --}}
    {{-- Success Partners section --}}

    @php
    $num = count($friends) + 4;
    $first_stop = $num / 3;
    $second_stop = $first_stop * 2 - 2;
    $third_stop = $num ;

    $index = 0;
    @endphp

    <section class="success-partners">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 success-partners-title" data-aos="zoom-in" data-aos-duration="1000">
                    <h3>{{ __('index.partners') }}</h3>
                </div>
                <span class="partners-logos-design"></span>
                <div class="col-12 col-lg-6 partners-logos" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="partners-logos-column column-1">
                        @while ($index < $first_stop)
                                @if (isset($friends[$index]))
                                    <img src="{{ Voyager::image($friends[$index]->image) }}"
                                        alt="{{ $friends[$index]['name_' . $lang] }}">
                                @endif
                                @php
                                    $index++;
                                @endphp
                            @endwhile

                    </div>
                    <div class="partners-logos-column column-2">
                        @while ($index < $second_stop and $index >= $first_stop)
                            @if (isset($friends[$index]))
                                <img src="{{ Voyager::image($friends[$index]->image) }}"
                                    alt="{{ $friends[$index]['name_' . $lang] }}">
                            @endif
                            @php
                                $index++;
                            @endphp
                        @endwhile


                    </div>
                    <div class="partners-logos-column column-3">
                        @while ($index < $num and $index >= $second_stop)
                            @if (isset($friends[$index]))
                                <img src="{{ Voyager::image($friends[$index]->image) }}"
                                    alt="{{ $friends[$index]['name_' . $lang] }}">
                            @endif
                            @php
                                $index++;
                            @endphp
                        @endwhile

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end of Success Partners section --}}


    
    {{-- contact info --}}
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-5 contact-info-text-content" data-aos="zoom-in" data-aos-duration="1000">
                    <h3>{{ __('index.stillContact') }}</h3>
                    <p class="contact-p">
                        {{ __('index.ready') }}
                    </p>
                    <span>{{ __('index.headquarters') }}</span>
                    <div class="info">
                        <div class="emails-content">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <div class="emails">
                                <p>{{ $data['mail_1'] }}</p>
                                <p>{{ $data['mail_2'] }}</p>

                            </div>
                        </div>


                        <div class="location-content">
                            <i class="fa fa-thumbtack" aria-hidden="true"></i>
                            <div class="location">
                                <p>{{ $data['location_' . $lang] }}</p>

                            </div>
                        </div>
                        <div class="phone-numbers-content">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <div class="phone-numbers">
                                <p>{{ $data['phone_1'] }}</p>
                                <p>{{ $data['phone_2'] }}</p>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-7 map" data-aos="zoom-out" data-aos-duration="1000">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4436.563288335262!2d-76.74920380408464!3d39.19409239099808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7e1913f4b4fdb%3A0x18a1a674d9c0d7ad!2s7184%20Troy%20Hill%20Dr%2C%20Elkridge%2C%20MD%2021075%2C%20USA!5e0!3m2!1sen!2sro!4v1573996589257!5m2!1sen!2sro"
                        frameborder="0" style="border:0; width:100%" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>