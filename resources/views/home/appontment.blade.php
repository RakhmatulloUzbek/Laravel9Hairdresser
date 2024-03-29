@extends('layouts.fontbase')

@section('title','Blank page')


@section('head')
@endsection

@section('content')
    <section class="page_header d-flex align-items-center">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Blank page</h2>
                <div class="heading-line"></div>
            </div>
        </div>
    </section><!--/. page_header -->
    <section class="book_section padding">
        <div class="book_bg"></div>
        <div class="map_pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <form action="https://html.dynamiclayers.net/dl/barbershop/appointment.php" method="post" id="appointment_form" class="form-horizontal appointment_form">
                        <div class="book_content">
                            <h2>Make an appointment</h2>
                            <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave men's and boys hair.</p>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <input type="text" id="app_name" name="app_name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="email" id="app_email" name="app_email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <input type="text" id="app_phone" name="app_phone" class="form-control" placeholder="Your Phone No" required>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="text" id="app_free_time" name="app_free_time" class="form-control" placeholder="Your Free Time" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <select class="form-control" id="app_services" name="app_services">
                                    <option>Services</option>
                                    <option>Hair Styling</option>
                                    <option>Shaving</option>
                                    <option>Face Mask</option>
                                    <option>Hair Wash</option>
                                    <option>Beard Triming</option>
                                </select>
                            </div>
                            <div class="col-md-6 padding-10">
                                <select class="form-control" id="app_barbers" name="app_barbers">
                                    <option>Choose Barbers</option>
                                    <option>Michel Brown</option>
                                    <option>Jonathan Smith</option>
                                    <option>Jack Tosan</option>
                                    <option>Martin Lane</option>
                                </select>
                            </div>
                        </div>
                        <button id="app_submit" class="default_btn" type="submit">Make Appointment</button>
                        <div id="msg-status" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- /.book_section -->

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
                        <img src="img/team-1.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Kyle Frederick</h3>
                            <p>WEB DESIGNER</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="team_member">
                        <img src="img/team-2.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>José Carpio</h3>
                            <p>WORDPRESS DEVELOPER</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="team_member">
                        <img src="img/team-3.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Michel Ibáñez</h3>
                            <p>ONLINE MARKETER</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                    <div class="team_member">
                        <img src="img/team-4.jpg" alt="Team Member">
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
@section('foot')

@endsection
