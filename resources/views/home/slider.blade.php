<section class="slider_section">
    <ul id="main-slider" class="owl-carousel main_slider">
        @foreach($sliderdata as $rs)
            <li class="main_slide d-flex align-items-center" style="background-image: url('{{Storage::url($rs->image)}}'); height: 560px; width: 1600px">
                <div class="container">
                    <div class="slider_content">
                        <h3>Its Not Just a Haircut, Its an Experience.</h3>
                        <h1>Being a barber is about <br>taking care of the people.</h1>
                        <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality, time and flawless look.</p>
                        <a href="#" class="default_btn">Make Appointment</a>
                    </div>
                </div>
            </li>
        @endforeach
        <li class="main_slide d-flex align-items-center" style="background-image: url('{{asset('assets')}}/Design/img/slide-1.jpg');">
            <div class="container">
                <div class="slider_content">
                    <h3>Its Not Just a Haircut, Its an Experience.</h3>
                    <h1>Being a barber is about <br>taking care of the people.</h1>
                    <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality, time and flawless look.</p>
                    <a href="#" class="default_btn">Make Appointment</a>
                </div>
            </div>
        </li>
        <li class="main_slide d-flex align-items-center" style="background-image: url('{{asset('assets')}}/Design/img/slide-2.jpg');">
            <div class="container">
                <div class="slider_content">
                    <h3>Classic Hair Style & Shaves.</h3>
                    <h1>Our hair styles<br>enhances your smile.</h1>
                    <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality, time and flawless look.</p>
                    <a href="#" class="default_btn">Make Appointment</a>
                </div>
            </div>
        </li>
        <li class="main_slide d-flex align-items-center" style="background-image: url('{{asset('assets')}}/Design/img/slide-3.jpg');">
            <div class="container">
                <div class="slider_content">
                    <h3>Its Not Just a Haircut, Its an Experience.</h3>
                    <h1>Where mens want  <br>to look there very best.</h1>
                    <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality, time and flawless look.</p>
                    <a href="#" class="default_btn">Make Appointment</a>
                </div>
            </div>
        </li>
    </ul>
</section><!-- /.slider_section -->
