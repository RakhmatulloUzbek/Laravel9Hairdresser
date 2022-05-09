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
    <section class="page_header d-flex align-items-center">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Barbershop Services</h2>
                <div class="heading-line"></div>
            </div>
        </div>
    </section><!--/. page_header -->
    <section class="gallery_section bg-grey bd-bottom padding">
        <div class="container">
            <div class="s-box-container row justify-content">
                @foreach($service as $rs)
                    <div class="s-box">
                        <!--top-bar-------->
                        <div class="bar"></div>
                        <!--img---------->
                        <img alt="1" src="{{Storage::url($rs->image)}}"/>
                        <!--servies-name---------->
                        <h1>{{$rs->category->title}}</h1>
                        <!--details------>
                        <p>Track on your all daily expense and make your day to life easier.</p>
                        <!--btn---------->
                        <a class="s-btn" href="{{route('service_detail',['id'=>$rs->id])}}">More</a>
                    </div>
                @endforeach
                <!--service-box-1---------------->
            </div>
        </div>
    </section>

@endsection

@section('foot')

@endsection
