@extends('layouts.fontbase')

@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('title','Frequently Asked Question | '.$setting->title)
@section('icon',Storage::url($setting->icon))

@section('content')
    <section class="page_header d-flex align-items-center">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Frequently Asked Question</h2>
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
            <div class="container mt-3">
                <div class="justify-content-sm-center">
                        <div class="accordion" id="accordionExample">
                            @foreach($data as $rs)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{$rs->id}}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$rs->id}}" aria-expanded="false" aria-controls="collapse{{$rs->id}}">
                                            {{$rs->question}}
                                        </button>
                                    </h2>
                                    <div id="collapse{{$rs->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$rs->id}}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {!! $rs->answer !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </div>
            </div>

        </div>

    </section> <!--/.about_section -->

@endsection
