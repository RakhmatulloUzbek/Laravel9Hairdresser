@extends('layouts.fontbase')

@section('title','Barber Shop || Detail of '.$data->title)

@section('head')
    <link rel="stylesheet" href="{{asset('assets')}}/Design/css/services_css.css">

    <style>
        i#star {
            font-size: 20px;
            text-shadow: 0 2px 5px rgba(0, 0, 0, .5);
        }

        i.active {
            color: #fadb3e;
        }
    </style>
@endsection

@section('content')
    <section class="page_header d-flex align-items-center">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Barbershop Service Detail</h2>
                <h2>@include('home.message_info')</h2>
                <div class="heading-line"></div>
            </div>
        </div>
    </section><!--/. page_header -->

    <section class="service_section bg-grey bd-bottom padding">
        <div class="section-container m-5">
            <div class="row">
                <div class="col-md-5">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="{{Storage::url($data->image)}}"/></div>
                        @foreach($images as $rs)
                            <div class="tab-pane" id="{{$rs->id}}">
                                <img src="{{Storage::url($rs->image)}}"/>
                            </div>
                        @endforeach
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                    src="{{Storage::url($data->image)}}"/></a></li>
                        @foreach($images as $rs)
                            <li><a data-target="#{{$rs->id}}" data-toggle="tab">
                                    <img src="{{Storage::url($rs->image)}}"/></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-7">
                    <h3 class="product-title">{{$data->title}}</h3>
                    <p class="product-description">{{$data->description}}</p>
                    <h4 class="price">duration : <span>{{$data->duration}} min</span> <i class="bi bi-clock"></i></h4>
                    <h4 class="price">current price : <span>$ {{$data->price}}</span></h4>
                    @php
                        $average = $data->comment->average('rate');
                    @endphp
                    <div class="container">
                        <i id="star" class="bi bi-star-fill {{$average >= 1 ? 'active' : ''}}"></i>
                        <i id="star" class="bi bi-star-fill {{$average >= 2 ? 'active' : ''}}"></i>
                        <i id="star" class="bi bi-star-fill {{$average >= 3 ? 'active' : ''}}"></i>
                        <i id="star" class="bi bi-star-fill {{$average >= 4 ? 'active' : ''}}"></i>
                        <i id="star" class="bi bi-star-fill {{$average >= 5 ? 'active' : ''}}"></i>&nbsp;&nbsp;&nbsp;
                        <strong>{{number_format($average,1)}}->{{$data->comment->count('id')}}</strong> / <a
                            href="">
                            comment(s)</a>
                    </div>
                    <form action="{{route('appointmentstore')}}" method="post" class="form-horizontal appointment_form">
                        @csrf
                        <div class="form-group row">
                            <input type="hidden" id="user_id" name="user_id" class="form-control"
                                   value="{{\Illuminate\Support\Facades\Auth::id()}}">
                            <input type="hidden" id="price" name="price" class="form-control" value="{{$data->price}}">
                            <div class="col-md-6 padding-10">
                                <input type="text" id="name" name="name" class="form-control"
                                       placeholder="Name" required>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="email" id="email" name="email" class="form-control"
                                       placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <input type="date" id="date" name="date" class="form-control"
                                       value='<?php echo date('Y-m-d');?>' required>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="time" id="time" name="time" class="form-control" min="9:00" max="22:00"
                                       value="<?php echo date('H:m');?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <select class="form-control" name="service_id" required>
                                    <option value="">Choose Service</option>
                                    <option value="{{$data->id}}">{{$data->title}}</option>
                                </select>
                            </div>
                            <div class="col-md-6 padding-10">
                                <select class="form-control" name="worker_id" required>
                                    <option>Choose Berber</option>
                                    @foreach($data->users as $worker)
                                            @if($worker->status == '1')
                                                <option value="{{$worker->id}}">{{$worker->name}}</option>
                                            @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button class="default_btn" type="submit">Make Appointment
                        </button>
                        <div id="msg-status" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="service_section bg-grey bd-bottom m-4">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item mr-lg-5" role="presentation">
                <button class="default_btn active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Detail
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="default_btn " id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Comment
                </button>
            </li>
        </ul>
        <hr>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                 aria-labelledby="pills-home-tab">{!! $data->detail !!}</div>
            <div class="tab-pane fade col-12" id="pills-profile" role="tabpanel"
                 aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-6">
                        <div class="comments-section">
                            <h3 class="comments-title">Posts Comments</h3>
                            <ol class="comments">
                                @foreach($comments as $rs)
                                    <li class="comment">
                                        <div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h3><strong><i
                                                                    class="bi bi-person"></i>&nbsp;{{$rs->user->name}}
                                                            </strong> &nbsp;<span class="comments-date"> <i
                                                                    class="bi bi-clock"></i> {{date_format($rs->created_at,"d/m/Y")}}</span>&nbsp;&nbsp;&nbsp;
                                                            <i id="star"
                                                               class="bi bi-star-fill {{$rs->rate >= 1 ? 'active' : ''}}"></i>
                                                            <i id="star"
                                                               class="bi bi-star-fill {{$rs->rate >= 2? 'active' : ''}}"></i>
                                                            <i id="star"
                                                               class="bi bi-star-fill {{$rs->rate >= 3 ? 'active' : ''}}"></i>
                                                            <i id="star"
                                                               class="bi bi-star-fill {{$rs->rate >= 4 ? 'active' : ''}}"></i>
                                                            <i id="star"
                                                               class="bi bi-star-fill {{$rs->rate >= 5 ? 'active' : ''}}"></i>
                                                        </h3>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>{{$rs->comment}}</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href="#"><span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contact-form p-3" style="background-color: #fcf9f5">
                            <form role="form" action="{{route('storecomment')}}" method="post"
                                  class="form-horizontal">
                                @csrf
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0 pb-4">
                                    <h2 class="font-weight-bold">Write Your Comment </h2>
                                    <h5 class="font-weight-bold">Yuor email adress will not be published</h5>
                                </div>
                                <div class="form-group colum-row row">
                                    <input type="hidden" id="service_id" name="service_id"
                                           class="form-control mb-2" value="{{$data->id}}">
                                    <div class="col-sm-6">
                                        <input type="text" id="name" name="name" class="form-control mb-2"
                                               placeholder="Name & Surname">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" id="email" name="email" class="form-control mb-2"
                                               placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                                <textarea id="comment" name="comment" cols="30" rows="5"
                                                          class="form-control message" placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                <div class="form-group colum-row row">
                                    <div class="col-sm-3"><h3>Your Rating:</h3>
                                        <div class="rating">
                                            <input type="radio" name="rate" id="star5" value="5"><label
                                                for="star5"></label>
                                            <input type="radio" name="rate" id="star4" value="4"><label
                                                for="star4"></label>
                                            <input type="radio" name="rate" id="star3" value="3"><label
                                                for="star3"></label>
                                            <input type="radio" name="rate" id="star2" value="2"><label
                                                for="star2"></label>
                                            <input type="radio" name="rate" id="star1" value="1"><label
                                                for="star1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    @auth()
                                        <button id="submit" class="default_btn" type="submit">Submit
                                        </button>
                                    @else
                                        <a href="/login" class="default_btn">For Submit Your Comment, Please
                                            Login</a>
                                    @endauth
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
@endsection
