@extends('layouts.fontbase')

@section('title','Barber Shop || Services')

@section('head')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet"/>
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
    <section class="page_header d-flex align-items-center m-0">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Barbershop Services</h2>
                <div class="heading-line"></div>
            </div>
        </div>
    </section><!--/. page_header -->
    <section class="gallery_section bg-grey m-0 padding">
        @php
            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
        @endphp
        <div class="card bg-grey">
            <div class="container mt-3 bg-grey">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="default_btn active" id="pills-home-tab"
                                data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">All
                        </button>
                    </li>
                    @foreach($mainCategories as $category)
                        @if(count($category->children))
                            <li class="nav-item" role="presentation">
                                <button type="button" class="default_btn ml-4"
                                        id="pills-{{$category->id}}-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-{{$category->id}}" type="button" role="tab"
                                        aria-controls="pills-{{$category->id}}"
                                        aria-selected="false">{{$category->title}}
                                </button>
                            </li>
                            @include('home.categorytree2',['children'=>$category->children])
                        @else
                            <li class="nav-item" role="presentation">
                                <button type="button" class="default_btn ml-4"
                                        id="pills-{{$category->id}}-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-{{$category->id}}" type="button" role="tab"
                                        aria-controls="pills-{{$category->id}}"
                                        aria-selected="false">{{$category->title}}
                                </button>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <div class="container">
                            <div class="s-box-container row justify-content">
                                @foreach($service as $rs)
                                    @php
                                        $average = $rs->comment->average('rate');
                                    @endphp
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
                                @endforeach
                                <!--service-box-1---------------->
                            </div>
                        </div>
                    </div>
                    @foreach($mainCategories as $category)
                        @if(count($category->children))
                            <div class="tab-pane fade" id="pills-{{$category->id}}" role="tabpanel"
                                 aria-labelledby="pills-{{$category->id}}-tab">
                                <div class="container">
                                    <div class="s-box-container row justify-content">
                                        @foreach($service as $rs)
                                            @php
                                                $average = $rs->comment->average('rate');
                                            @endphp
                                            @if($rs->category->id==$category->id)
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
                                                    <a class="s-btn"
                                                       href="{{route('service_detail',['id'=>$rs->id])}}">More</a>
                                                </div>
                                            @endif
                                        @endforeach
                                        <!--service-box-1---------------->
                                    </div>
                                </div>
                            </div>
                            @include('home.categorytree3',['children'=>$category->children,'service'=>$service])
                        @else
                            <div class="tab-pane fade" id="pills-{{$category->id}}" role="tabpanel"
                                 aria-labelledby="pills-{{$category->id}}-tab">
                                <div class="container">
                                    <div class="s-box-container row justify-content">
                                        @foreach($service as $rs)
                                            @php
                                                $average = $rs->comment->average('rate');
                                            @endphp
                                            @if($rs->category->id==$category->id)
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
                                                    <a class="s-btn"
                                                       href="{{route('service_detail',['id'=>$rs->id])}}">More</a>
                                                </div>
                                            @endif
                                        @endforeach
                                        <!--service-box-1---------------->
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci exercitationem, itaque
                            pariatur repudiandae similique soluta.</p></div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('foot')

@endsection
