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
                            <h2>User Comments</h2>
                            <hr>
                        </div>
                    </section>
                    <section>
                        <table class="table table-bordered table-hover">
                            <thead class="m-2">
                            <tr class="table-primary">
                                <th style="width: 25px;">id</th>
                                <th>Service</th>
                                <th>Comment</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th style="width: 25px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('service_detail',['id'=>$rs->service->id])}}" style="text-decoration: none">{{$rs->service->title}}</a></td>
                                    <td>{{$rs->comment}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('userpanel.commentdestroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash3-fill"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('foot')

@endsection
