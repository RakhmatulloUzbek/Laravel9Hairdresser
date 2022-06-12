@extends('layouts.fontbase')

@section('title','User Profile')


@section('head')
@endsection

@section('content')
    <section class="page_header d-flex align-items-center">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>User Profile</h2>
                <div class="heading-line"></div>
            </div>
        </div>
    </section><!--/. page_header -->
    <section class="contact-section padding">
        <div class="map"></div>
        <div class="section-header m-5 p-3">
            <div class="row">
                <div class="col-lg-3 sm-padding">
                    <section>
                        <div class="section-title">
                            <h2>User Menu</h2>
                            <hr>
                            <ul>
                                <li><a href="{{route('userpanel.index')}}"><i class="bi bi-person"></i> My Profile</a>
                                </li>
                                <li><a href="{{route('userpanel.userappointments')}}"><i class="bi bi-window"></i> My Appointment</a></li>
                                <li><a href="{{route('userpanel.usercomments')}}"><i class="bi bi-chat-left-text"></i> My Comment</a></li>
                                <li><a href="{{route('logoutuser')}}"><i class="bi bi-box-arrow-in-left"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="col-lg-9 sm-padding">
                    <section>
                        <div class="section-title">
                            <h2>User Profile</h2>
                            <hr>
                        </div>
                    </section>
                    @include('profile.show')

                </div>
            </div>
        </div>
    </section><!-- /.contact-section --
@endsection
@section('foot')

@endsection
