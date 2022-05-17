@extends('layouts.fontbase')

@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('title',$setting->title)
@section('icon',Storage::url($setting->icon))

@section('slide')
    @include('home.slider')
@endsection
@section('content')
    @include('home.content')
@endsection
