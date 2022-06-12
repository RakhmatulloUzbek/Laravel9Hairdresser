
@extends('layouts.fontbase')

@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('title',$setting->title)
@section('icon',Storage::url($setting->icon))

@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $(#country).on('change', function () {
                var contryId = $(this).val();
                if (contryId) {
                    $.get(
                        'ajax.blade.php',
                        {country: contryId},
                        function (data) {
                            $('#city').html(data);
                        }
                    );
                } else {
                    $('#city').html('<option>Select firs service</option>');
                }
            })
        });
    </script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 25px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }


        .swiper {
            width: 100%;

            margin: 20px auto;
        }


        .append-buttons button {
            display: inline-block;
            cursor: pointer;
            border: 1px solid #8d6f4b;
            color: #8d6f4b;
            text-decoration: none;
            padding: 4px 10px;
            border-radius: 4px;
            margin: 0 10px;
            font-size: 13px;
        }

        i#star {
            font-size: 20px;
            text-shadow: 0 2px 5px rgba(0, 0, 0, .5);
        }

        i.active {
            color: #fadb3e;
        }
    </style>
@endsection

@section('slide')
    @include('home.slider')
@endsection
@section('content')
    <section class="about_section bd-bottom padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 xs-padding wow fadeInLeft" data-wow-delay="300ms">
                    <div class="section_heading">
                        <h3>Trendy Salon & Spa</h3>
                        <h2>Step up your healthy hair care <br> routine with tips and advice!</h2>
                        <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men's and
                            boys' hair. A barber's place of work is known as a "barbershop" or a "barber's". Barbershops
                            are also places of social interaction and public discourse. In some instances, barbershops
                            are also public forums.</p>
                        <a href="{{route('about')}}" class="default_btn">More About Us</a>
                    </div>
                </div>
                <div class="col-md-6 xs-padding wow fadeInRight" data-wow-delay="300ms">
                    <div class="about_video">
                        <img src="{{asset('assets')}}/Design/img/post-1.jpg" alt="{{asset('assets')}}/Design/img">
                        <div class="play-icon"><a href="#"><i class="ti-control-play"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/. about_section -->

    <section class="service_section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Save 20% On Beauty Spa</h3>
                <h2>Our Barber Services</h2>
                <div class="heading-line"></div>
                <a href="{{route('service')}}" class="default_btn mt-2">More</a>
            </div>
            <section class="blog-section bd-bottom">

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($data as $rs)
                            @php
                                $average = $rs->comment->average('rate');
                            @endphp
                            <div class="swiper-slide col-lg-3 col-sm-6 sm-padding wow fadeInUp">
                                <div class="blog-thumb align-center">
                                    <img src="{{Storage::url($rs->image)}}" ata-wow-delay="200ms">
                                    <h3 class="m-2"><strong>{{$rs->title}}</strong></h3>
                                    <h6><a href="">Comments ({{$rs->comment->count('id')}})</a></h6>
                                    <i id="star" class="bi bi-star-fill {{$average >= 1 ? 'active' : ''}}"></i>
                                    <i id="star" class="bi bi-star-fill {{$average >= 2 ? 'active' : ''}}"></i>
                                    <i id="star" class="bi bi-star-fill {{$average >= 3 ? 'active' : ''}}"></i>
                                    <i id="star" class="bi bi-star-fill {{$average >= 4 ? 'active' : ''}}"></i>
                                    <i id="star" class="bi bi-star-fill {{$average >= 5 ? 'active' : ''}}"></i>

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next" style="color: #8d6f4b"></div>
                    <div class="swiper-button-prev" style="color: #8d6f4b"></div>
                    <div class="swiper-pagination"></div>

                </div>
            </section><!--/.blog-section-->
        </div>
    </section><!--/. service_section -->

    <section class="book_section padding">
        <div class="book_bg"></div>
        <div class="map_pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <form action="{{route('appointmentstore')}}" method="post" class="form-horizontal appointment_form">
                        @csrf
                        <div class="book_content">
                            <h2>Make an appointment</h2>
                            <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave
                                men's and boys hair.</p>
                        </div>

                        <div class="form-group row">
                            <input type="hidden" id="user_id" name="user_id" class="form-control"
                                   value="{{\Illuminate\Support\Facades\Auth::id()}}">
                            <input type="hidden" name="price" class="form-control"
                                   value="0">
                            <div class="col-md-6 padding-10">
                                <input type="text" id="name" name="name" class="form-control"
                                       placeholder="Name" required>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="email" id="email" name="email" class="form-control"
                                       placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <input type="date" id="date" name="date" class="form-control"
                                       value='<?php echo date('Y-m-d');?>' required>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="time" id="time" name="time" class="form-control" min="9:00" max="22:00"
                                       value="<?php echo date('H:m');?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <select class="form-control" name="service_id" onchange="changeFunction(this)" required>
                                    <option value="">Choose Service</option>
                                    @foreach($services as $rs)
                                        <option value="{{$rs->id}}">{{$rs->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 padding-10">
                                <select class="form-control" name="worker_id" required>
                                    <option value="">Choose Barber</option>
                                    @foreach($users as $worker)
                                            @if($worker->status == '1')
                                                <option value="{{$worker->id}}">{{$worker->name}}</option>
                                            @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @auth
                            <h3>@include('home.message_info')</h3>
                            <button class="default_btn" type="submit">Make Appointment</button>
                        @endauth
                        @guest
                            <a href="{{route('loginuser')}}" class="default_btn" type="button">Login for Appointment</a>
                        @endguest
                    </form>
                </div>
            </div>
        </div>
    </section><!--/. book_section -->

    <section id="team" class="team_section bd-bottom padding">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Our Barbers</h2>
                <div class="heading-line"></div>
            </div>
            <ul class="team_members row">
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                    <div class="team_member">
                        <img src="{{asset('assets')}}/Design/img/team-1.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Kyle Frederick</h3>
                            <p>WEB DESIGNER</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="team_member">
                        <img src="{{asset('assets')}}/Design/img/team-2.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>José Carpio</h3>
                            <p>WORDPRESS DEVELOPER</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="team_member">
                        <img src="{{asset('assets')}}/Design/img/team-3.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Michel Ibáñez</h3>
                            <p>ONLINE MARKETER</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                    <div class="team_member">
                        <img src="{{asset('assets')}}/Design/img/team-4.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Adam Castellon</h3>
                            <p>JAVA SPECIALIST</p>
                        </div>
                    </div>
                </li>
            </ul><!-- /.team_members -->
        </div>
    </section><!-- /.team_section -->

    <section id="reviews" class="testimonial_section padding">
        <div class="container">
            <ul id="testimonial_carousel" class="testimonial_items owl-carousel">
                <li class="testimonial_item">
                    <p>"There are design companies, and then there are user experience design interface design<br>
                        professional. By far one of the worlds best known brands."</p>
                    <h4 class="text-white">Anita Tran, IT Solutions.</h4>
                </li>
                <li class="testimonial_item">
                    <p>"There are design companies, and then there are user experience design interface design<br>
                        professional. By far one of the worlds best known brands."</p>
                    <h4 class="text-white">Leslie Williamson, Developer.</h4>
                </li>
                <li class="testimonial_item">
                    <p>"There are design companies, and then there are user experience design interface design<br>
                        professional. By far one of the worlds best known brands."</p>
                    <h4 class="text-white">Fred Moody, Network Software.</h4>
                </li>
            </ul>
        </div>
    </section><!-- /. testimonial_section -->

    <section class="pricing_section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Save 20% On Beauty Spa</h3>
                <h2>Our Barber Pricing</h2>
                <div class="heading-line"></div>
            </div>

            @php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
            @endphp

            <div class="row">
                @foreach($mainCategories as $rs)
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="price_wrap">
                            <h3>{{$rs->title}}</h3>
                            <ul class="price_list">
                                @foreach($data as $service)
                                    <li>
                                        @if($rs->id == $service->category_id)
                                            <h4>{{$service->title}}</h4>
                                            <p>Barber is a person whose occupation is mainly to cut dress groom style
                                                and
                                                shave
                                                men.</p>
                                            <span class="price">$8</span>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- /. pricing_section -->



    <div class="sponsor_section bg-grey padding">
        <div class="container">
            <ul id="sponsor_carousel" class="sponsor_items owl-carousel">
                <li class="sponsor_item">
                    <img src="{{asset('assets')}}/Design/img/sponsor-1.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{asset('assets')}}/Design/img/sponsor-2.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{asset('assets')}}/Design/img/sponsor-3.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{asset('assets')}}/Design/img/sponsor-4.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{asset('assets')}}/Design/img/sponsor-5.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{asset('assets')}}/Design/img/sponsor-1.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{asset('assets')}}/Design/img/sponsor-2.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{asset('assets')}}/Design/img/sponsor-3.png" alt="sponsor-image">
                </li>
            </ul>
        </div>
    </div><!-- ./sponsor_section -->

@endsection
@section('foot')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var appendNumber = 4;
        var prependNumber = 1;
        document
            .querySelector(".prepend-2-slides")
            .addEventListener("click", function (e) {
                e.preventDefault();
                swiper.prependSlide([
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                ]);
            });
        document
            .querySelector(".prepend-slide")
            .addEventListener("click", function (e) {
                e.preventDefault();
                swiper.prependSlide(
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
                );
            });
        document
            .querySelector(".append-slide")
            .addEventListener("click", function (e) {
                e.preventDefault();
                swiper.appendSlide(
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
                );
            });
        document
            .querySelector(".append-2-slides")
            .addEventListener("click", function (e) {
                e.preventDefault();
                swiper.appendSlide([
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                ]);
            });
    </script>
    <script>
        function changeFunction(selectValue) {
            var x = selectValue.value;
            document.getElementById('showValue').value = x;
        }
    </script>
@endsection
