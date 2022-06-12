@extends('layouts.fontbase')

@section('title','Blank page')


@section('head')
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/services_css.css">
    <style>
        i#star{
            font-size: 20px;
            text-shadow: 0 2px 5px rgba(0,0,0,.5);
        }
        i.active{
            color: #fadb3e;
        }
    </style>
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
    <div class="container">
        <div class="s-box-container row justify-content">
            @foreach($services as $rs)
                @php
                    $average = $rs->comment->average('rate');
                @endphp
                @if($rs->category->id == $category->id)
                    <div class="s-box">
                        <!--top-bar-------->
                        <div class="bar"></div>
                        <!--img---------->
                        <img alt="1" src="{{Storage::url($rs->image)}}"/>
                        <h3 class="m-2"><strong>{{$rs->title}}</strong></h3>
                        <div class="row " style="display: block">
                            <i id="star" class="bi bi-star-fill {{$average >= 1 ? 'active' : ''}}"></i>
                            <i id="star" class="bi bi-star-fill {{$average >= 2 ? 'active' : ''}}"></i>
                            <i id="star" class="bi bi-star-fill {{$average >= 3 ? 'active' : ''}}"></i>
                            <i id="star" class="bi bi-star-fill {{$average >= 4 ? 'active' : ''}}"></i>
                            <i id="star" class="bi bi-star-fill {{$average >= 5 ? 'active' : ''}}"></i>
                        </div>
                        <a href="">Comments ({{$rs->comment->count('id')}})</a>
                        <!--btn---------->
                        <a class="s-btn" href="{{route('service_detail',['id'=>$rs->id])}}">More</a>
                    </div>
                @endif
            @endforeach
            <!--service-box-1---------------->
        </div>
    </div>

@endsection
@section('foot')

@endsection
