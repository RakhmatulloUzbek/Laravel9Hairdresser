@extends('layouts.fontbase')

@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('title','Contact | '.$setting->title)
@section('icon',Storage::url($setting->icon))

@section('content')
    <section class="page_header d-flex align-items-center">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Contact With Us</h2>
                <div class="heading-line"></div>
            </div>
        </div>
    </section><!--/. page_header -->

    <section class="contact-section padding">
        <div class="map"></div>
        <div class="container">
            <div class="contact-wrap d-flex align-items-center row">
                <div class="col-lg-6 sm-padding">
                    <div class="contact-info">
                        {!! $setting->contact !!}
                        <h4><span>Email:</span> Dynamiclayers.Net <br> <span>Phone:</span> +88 (0) 101 0000 000 <br>
                            <span>Fax:</span> +88 (0) 202 0000 001</h4>
                    </div>
                </div>

                <div class="col-lg-6 sm-padding">
                    <div class="contact-form">
                        <form role="form" action="{{route('storemessage')}}" method="post" class="form-horizontal">
                            @csrf
                            <div class="col-12 col-xl-8 mb-4 mb-xl-0 pb-4">
                                <h2 class="font-weight-bold">Contact Form </h2>
                            </div>
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control mb-2" placeholder="Name & Surname"
                                           required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control mb-2" placeholder="Email"
                                           required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone number"
                                           required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject"
                                           required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5"
                                              class="form-control message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default_btn" type="submit">Send Message</button>
                                </div>
                            </div>
                            @include('home.message_info')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.contact-section -->

@endsection
