@extends('layouts.fontbase')

@section('title','Gallery')


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
    <section class="page_header d-flex align-items-center">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Barbershop Gallery</h2>
                <div class="heading-line"></div>
            </div>
        </div>
    </section><!--/. page_header -->

    <section id="gallery" class="gallery_section bg-grey bd-bottom padding">
        <div class="container">
            <ul class="gallery_filter mb-30">
                <li class="active" data-filter="*">All</li>
                <li data-filter=".branding">Haircut</li>
                <li data-filter=".website">Face Masking</li>
                <li data-filter=".print">Shaving</li>
                <li data-filter=".photo">Hair Color</li>
            </ul><!-- /.portfolio_filter -->
            <ul class="portfolio_items row">
                <li class="col-lg-6 col-md-6 padding-15 single_item branding">
                    <figure class="portfolio_item">
                        <img src="{{asset('assets')}}/Design/img/portfolio-1.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="{{asset('assets')}}/Design/img/portfolio-1.jpg" class="{{asset('assets')}}/Design/img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-3 col-md-6 padding-15 single_item photo">
                    <figure class="portfolio_item">
                        <img src="{{asset('assets')}}/Design/img/portfolio-2.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="{{asset('assets')}}/Design/img/portfolio-2.jpg" class="{{asset('assets')}}/Design/img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-3 col-md-6 padding-15 single_item print branding">
                    <figure class="portfolio_item">
                        <img src="{{asset('assets')}}/Design/img/portfolio-3.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="{{asset('assets')}}/Design/img/portfolio-3.jpg" class="{{asset('assets')}}/Design/img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-3 col-md-6 padding-15 single_item website photo">
                    <figure class="portfolio_item">
                        <img src="{{asset('assets')}}/Design/img/portfolio-4.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="{{asset('assets')}}/Design/img/portfolio-4.jpg" class="{{asset('assets')}}/Design/img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-3 col-md-6 padding-15 single_item print photo">
                    <figure class="portfolio_item">
                        <img src="{{asset('assets')}}/Design/img/portfolio-5.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="{{asset('assets')}}/Design/img/portfolio-5.jpg" class="{{asset('assets')}}/Design/img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-6 col-md-6 padding-15 single_item branding website">
                    <figure class="portfolio_item">
                        <img src="{{asset('assets')}}/Design/img/portfolio-6.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="{{asset('assets')}}/Design/img/portfolio-6.jpg" class="{{asset('assets')}}/Design/img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
            </ul><!-- /.portfolio_items -->
        </div>
    </section><!-- /. gallery_section -->

@endsection
@section('foot')

@endsection
