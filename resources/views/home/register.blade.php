@extends('layouts.fontbase')

@section('title','Register page')


@section('head')
@endsection

@section('content')
    <section class="page_header d-flex align-items-center">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Register page</h2>
                <div class="heading-line"></div>
            </div>
        </div>
    </section><!--/. page_header -->
    @include('auth.register')

@endsection
@section('foot')

@endsection
