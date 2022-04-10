<!-- ABOUT SECTION -->

<section id="about" class="about_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_content" style="text-align: center;">
                    <h3>Introducing</h3>
                    <h2>The Barber Shop <br>Science 1991</h2>
                    <img src="{{asset('assets')}}/Design/images/about-logo.png" alt="logo">
                    <p style="color: #777">
                        Barber is a person whose occupation is mainly to cut dress groom style and shave men's and boys' hair. A barber's place of work is known as a "barbershop" or a "barber's". Barbershops are also places of social interaction and public discourse. In some instances, barbershops are also public forums.
                    </p>
                    <a href="#" class="default_btn" style="opacity: 1;">More about us</a>
                </div>
            </div>
            <div class="col-md-6  d-none d-md-block">
                <div class="about_img" style = "overflow:hidden">
                    <img class="about_img_1" src="{{asset('assets')}}/Design/images/about-1.jpg" alt="about-1">
                    <img class="about_img_2" src="{{asset('assets')}}/Design/images/about-2.jpg" alt="about-2">
                    <img class="about_img_3" src="{{asset('assets')}}/Design/images/about-3.jpg" alt="about-3">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->

<section class="services_section" id="services">
    <div class="container">
        <div class="section_heading">
            <h3>Trendy Salon & Spa</h3>
            <h2>Our Services</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-scissors-1"></i>
                    <h3>Haircut Styles</h3>
                    <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                    <a href="#" class="default_btn" style="opacity: 1;">More about it</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-razor-2"></i>
                    <h3>Beard Triming</h3>
                    <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                    <a href="#" class="default_btn" style="opacity: 1;">More about it</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padd_col_res" >
                <div class="service_box">
                    <i class="bs bs-brush"></i>
                    <h3>Smooth Shave</h3>
                    <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                    <a href="#" class="default_btn" style="opacity: 1;">More about it</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-hairbrush-1"></i>
                    <h3>Face Masking</h3>
                    <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                    <a href="#" class="default_btn" style="opacity: 1;">More about it</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BOOKING SECTION -->

<section class="book_section" id="booking">
    <div class="book_bg"></div>
    <div class="map_pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <form action="http://localhost/BarbershopWebsite/appointment.php" method="post" id="appointment_form" class="form-horizontal appointment_form">
                    <div class="book_content">
                        <h2 style="color: white;">Make an appointment</h2>
                        <p style="color: #999;">
                            Barber is a person whose occupation is mainly to cut dress groom <br>style and shave men's and boys hair.
                        </p>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 padding-10">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6 padding-10">
                            <input type="time" class="form-control">
                        </div>
                    </div>

                    <!-- SUBMIT BUTTON -->

                    <button id="app_submit" class="default_btn" type="submit">
                        Make Appointment
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- GALLERY SECTION -->

<section class="gallery-section" id="gallery">
    <div class="section_heading">
        <h3>Trendy Salon & Spa</h3>
        <h2>Barbers Gallery</h2>
        <div class="heading-line"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <figure class="card shadow" style="height: auto; max-width: 100%">
                    <img class="img-fluid " src="{{asset('assets')}}/Design/images/portfolio-1.jpg" alt="">
                    <figcaption class="info-wrap border-top">
                        <a href="#" class="float-end btn btn-light btn-icon">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="" class="title text-truncate">
                            Apple
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <figure class="card shadow">
                    <img style="height: 200px" src="{{asset('assets')}}/Design/images/portfolio-2.jpg" alt="">
                    <figcaption class="info-wrap border-top">
                        <a href="#" class="float-end btn btn-light btn-icon">
                            <i class="fa fa-heart"></i>
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <figure class="card shadow">
                    <img style="height: 200px" src="{{asset('assets')}}/Design/images/portfolio-3.jpg" alt="">
                    <figcaption class="info-wrap border-top">
                        <a href="#" class="float-end btn btn-light btn-icon">
                            <i class="fa fa-heart"></i>
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <figure class="card shadow">
                    <img style="height: 200px" src="{{asset('assets')}}/Design/images/portfolio-4.jpg" alt="">
                    <figcaption class="info-wrap border-top">
                        <a href="#" class="float-end btn btn-light btn-icon">
                            <i class="fa fa-heart"></i>
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column w-3">
                <div style="height: 230px">

                    <div class="gallery-img shadow rounded" style="background-image: url('assets/Design/images/portfolio-1.jpg');">    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('assets/Design/images/portfolio-2.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('assets/Design/images/portfolio-3.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('assets/Design/images/portfolio-4.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('assets/Design/images/portfolio-5.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('assets/Design/images/portfolio-6.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('assets/Design/images/portfolio-7.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('assets/Design/images/portfolio-8.jpg');"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM SECTION -->

<section id="team" class="team_section">
    <div class="container">
        <div class="section_heading ">
            <h3>Trendy Salon & Spa</h3>
            <h2>Our Barbers</h2>
            <div class="heading-line"></div>
        </div>
        <ul class="team_members row">
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="{{asset('assets')}}/Design/images/team-1.jpg" alt="Team Member">
                </div>
                <div class="price_wrap">
                    <h3>Micheal</h3>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="{{asset('assets')}}/Design/images/team-2.jpg" alt="Team Member">
                </div>
            </li>
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="{{asset('assets')}}/Design/images/team-3.jpg" alt="Team Member">
                </div>
            </li>
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="{{asset('assets')}}/Design/images/team-4.jpg" alt="Team Member">
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- REVIEWS SECTION -->

<section id="reviews" class="testimonial_section">
    <div class="container">
        <div id="reviews-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#reviews-carousel" data-slide-to="1"></li>
                <li data-target="#reviews-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <!-- REVIEW 1 -->
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('assets')}}/Design/images/barbershop_image_1.jpg" alt="First slide" style="visibility: hidden;">
                    <div class="carousel-caption d-md-block">
                        <h3>Its Not Just a Haircut, Its an Experience.</h3>
                        <p>
                            Our barbershop is the territory created purely for males who appreciate
                            <br>
                            premium quality, time and flawless look.
                        </p>
                    </div>
                </div>
                <!-- REVIEW 2 -->
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets')}}/Design/images/barbershop_image_1.jpg" alt="First slide" style="visibility: hidden;">
                    <div class="carousel-caption d-md-block">
                        <h3>Its Not Just a Haircut, Its an Experience.</h3>
                        <p>
                            Our barbershop is the territory created purely for males who appreciate
                            <br>
                            premium quality, time and flawless look.
                        </p>
                    </div>
                </div>
                <!-- REVIEW 3 -->
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets')}}/Design/images/barbershop_image_1.jpg" alt="First slide" style="visibility: hidden;">
                    <div class="carousel-caption d-md-block">
                        <h3>Its Not Just a Haircut, Its an Experience.</h3>
                        <p>
                            Our barbershop is the territory created purely for males who appreciate
                            <br>
                            premium quality, time and flawless look.
                        </p>
                    </div>
                </div>
            </div>
            <!-- PREVIOUS & NEXT -->
            <a class="carousel-control-prev" href="#reviews-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#reviews-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!-- PRICING SECTION  -->

<section class="pricing_section" id="pricing">

    <!-- START GET CATEGORIES  PRICES FROM DATABASE -->


    <!-- END -->

    <div class="container">
        <div class="section_heading">
            <h3>Save 20% On Beauty Spa</h3>
            <h2>Our Barber Pricing</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-6 sm-padding">
                <div class="price_wrap">
                    <h3>Shaving</h3>
                    <ul class="price_list">

                        <li>
                            <h4>Clean Shaving</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men</p>
                            <span class="price">$20.00</span>
                        </li>


                        <li>
                            <h4>Beard Triming</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men</p>
                            <span class="price">$20.00</span>
                        </li>


                        <li>
                            <h4>Smooth Shave</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men</p>
                            <span class="price">$15.00</span>
                        </li>


                    </ul>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 sm-padding">
                <div class="price_wrap">
                    <h3>Face Masking</h3>
                    <ul class="price_list">

                        <li>
                            <h4>White Facial</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men</p>
                            <span class="price">$16.00</span>
                        </li>


                        <li>
                            <h4>Face Cleaning</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men</p>
                            <span class="price">$20.00</span>
                        </li>


                        <li>
                            <h4>Bright Tuning</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men</p>
                            <span class="price">$14.00</span>
                        </li>


                    </ul>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 sm-padding">
                <div class="price_wrap">
                    <h3>Uncategorized</h3>
                    <ul class="price_list">

                        <li>
                            <h4>Hair Cut</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men</p>
                            <span class="price">$21.00</span>
                        </li>


                        <li>
                            <h4>Hair Styling</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men</p>
                            <span class="price">$9.00</span>
                        </li>


                        <li>
                            <h4>Hair Triming</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men</p>
                            <span class="price">$10.00</span>
                        </li>


                    </ul>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- CONTACT SECTION -->

<section class="contact-section" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sm-padding">
                <div class="contact-info">
                    <h2>
                        Get in touch with us &
                        <br>send us message today!
                    </h2>
                    <p>
                        Saasbiz is a different kind of architecture practice. Founded by LoganCee in 1991, we’re an employee-owned firm pursuing a democratic design process that values everyone’s input.
                    </p>
                    <h3>
                        198 West 21th Street, Suite 721
                        <br>
                        New York, NY 10010
                    </h3>
                    <h4>
                        <span style = "font-weight: bold">Email:</span>
                        Dynamiclayers.Net
                        <br>
                        <span style = "font-weight: bold">Phone:</span>
                        +88 (0) 101 0000 000
                        <br>
                        <span style = "font-weight: bold">Fax:</span>
                        +88 (0) 202 0000 001
                    </h4>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="contact-form">
                    <div id="contact_ajax_form" class="contactForm">
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="contact_name" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="contact_message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="contact_send" class="default_btn">Send Message</button>
                            </div>
                        </div>
                        <img src="{{asset('assets')}}/Design/images/ajax_loader_gif.gif" id = "contact_ajax_loader" style="display: none">
                        <div id="contact_status_message"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

