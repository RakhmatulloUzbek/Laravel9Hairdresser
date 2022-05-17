@extends('layouts.fontbase')

@section('title','Barber Shop || Service Detail')

@section('head')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet"/>
    <style>
        .services {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }

        .s-heading h1 {
            color: #576975;
            font-size: 3rem;
            font-weight: 400;
            letter-spacing: 1px;
            margin: 0px;
        }

        .s-heading p {
            color: rgba(87, 105, 117, 0.60);
            font-size: 1rem;
            margin: 5px;
            text-align: center;
        }

        .s-box-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .s-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            width: 300px;
            padding: 20px 25px;
            height: 400px;
            box-sizing: border-box;
            margin: 30px;
            position: relative;
        }

        .s-box img {
            height: 120px;
            border-radius: 25px;
        }

        .s-box h1 {
            color: #576975;
            letter-spacing: 1px;
            font-size: 1.5rem;
            margin-bottom: 8px;

        }

        .s-box p {
            color: rgba(87, 105, 117, 0.90);
            text-align: center;
        }

        .s-btn {
            width: 140px;
            height: 40px;
            border-radius: 20px;
            border: 1px solid #9e8a78;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #576975;
            margin-top: 10px;
        }

        .bar {
            width: 100px;
            height: 6px;
            position: absolute;
            left: 50%;
            top: 0%;
            transform: translateX(-50%);
            background-color: #9e8a78;
            border-radius: 0px 0px 10px 10px;
            display: none;
            animation: bar 0.5s;
        }

        .s-box:hover {
            box-shadow: 2px 2px 30px #9e8a78;
            transition: all ease 0.3s;
        }

        .s-btn:hover {
            background-color: #9e8a78;
            border: 1px solid #9e8a78;
            color: #FFFFFF;
            transition: all ease 0.3s;
        }

        .s-box:hover .bar {
            display: block;
        }

        @keyframes bar {
            0% {
                width: 0px;
            }
            100% {
                width: 100px;
            }
        }

        @media (max-width: 1050px) {
            .s-box-container {
                flex-wrap: wrap;

            }

            .services {
                height: auto;
            }

            .s-heading {
                margin: 15px;
            }

            .s-box {
                flex-grow: 1;
            }

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
                        <button type="button" class="btn btn-outline-secondary active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">All
                        </button>
                    </li>
                    @foreach($mainCategories as $category)
                        <li class="nav-item" role="presentation">
                            <button type="button" class="btn btn-outline-secondary ml-4" id="pills-{{$category->id}}-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-{{$category->id}}" type="button" role="tab"
                                    aria-controls="pills-{{$category->id}}"
                                    aria-selected="false">{{$category->title}}
                            </button>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <div class="container">
                            <div class="s-box-container row justify-content">
                                @foreach($service as $rs)
                                    <div class="s-box">
                                        <!--top-bar-------->
                                        <div class="bar"></div>
                                        <!--img---------->
                                        <img alt="1" src="{{Storage::url($rs->image)}}"/>
                                        <!--servies-name---------->
                                        <h1 class="m-3">{{$rs->category->title}}</h1>
                                        <!--details------>
                                        <h5 class="m-3">{{$rs->title}}</h5>
                                        <p>Track on your all daily expense and make your day to life easier.</p>
                                        <!--btn---------->
                                        <a class="s-btn" href="{{route('service_detail',['id'=>$rs->id])}}">More</a>
                                    </div>
                                @endforeach
                                <!--service-box-1---------------->
                            </div>
                        </div>
                    </div>
                    @foreach($mainCategories as $category)
                        <div class="tab-pane fade" id="pills-{{$category->id}}" role="tabpanel"
                             aria-labelledby="pills-{{$category->id}}-tab">
                            <div class="container">
                                <div class="s-box-container row justify-content">
                                    @foreach($service as $rs)
                                        @if($rs->category->id==$category->id)
                                            <div class="s-box">
                                                <!--top-bar-------->
                                                <div class="bar"></div>
                                                <!--img---------->
                                                <img alt="1" src="{{Storage::url($rs->image)}}"/>
                                                <!--servies-name---------->
                                                <h1 class="m-3">{{$rs->category->title}}</h1>
                                                <!--details------>
                                                <h5 class="m-3">{{$rs->title}}</h5>
                                                <p>Track on your all daily expense and make your day to life easier.</p>
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
