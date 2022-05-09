@extends('layouts.adminbase')

@section('title','Category List')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Setting Page</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active">Setting</li>
            </ol>
        </div>
    </div>
@endsection
