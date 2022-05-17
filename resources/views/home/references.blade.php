@extends('layouts.fontbase')

@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('title','References | '.$setting->title)
@section('icon',Storage::url($setting->icon))

@section('content')
    <section class="page_header d-flex align-items-center">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>References</h2>
                <div class="heading-line"></div>
            </div>
        </div>
    </section><!--/. page_header -->

    <section id="about" class="about_section bd-bottom padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content align-center">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">Introducing</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms">The Barber Shop <br>Science 1991</h2>
                        <img class="wow fadeInUp" data-wow-delay="500ms" src="{{asset('assets')}}/Design/img/about-logo.png" alt="logo">
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="about_img">
                        <img src="{{asset('assets')}}/Design/img/about-1.jpg" alt="idea-images" class="about_img_1 wow fadeInLeft" data-wow-delay="200ms">
                        <img src="{{asset('assets')}}/Design/img/about-2.jpg" alt="idea-images" class="about_img_2 wow fadeInRight" data-wow-delay="400ms">
                        <img src="{{asset('assets')}}/Design/img/about-3.jpg" alt="idea-images" class="about_img_3 wow fadeInLeft" data-wow-delay="600ms">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="justify-content-sm-center">
                    {{!! $setting->aboutus !!}}
                </div>
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <img style="width: 500px; height: 400px" src="{{asset('assets')}}/Admin/images/barbershop.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        This is some content from a media component. You can replace this with any content and adjust it as needed.
                    </div>
                </div>
            </div>

        </div>

    </section> <!--/.about_section -->





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
@endsection
