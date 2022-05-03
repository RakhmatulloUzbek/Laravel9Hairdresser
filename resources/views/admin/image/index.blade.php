@extends('layouts.adminwindow')

@section('title','Service Image Gallary')

@section('style')
    <style>
        .img1:hover {
            transform: scale(2.0); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>
@endsection

@section('content')
    <div class="content-wrapper-2">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0 pb-4">
            <h3 class="font-weight-bold">{{$service->title}}</h3>
        </div>
        <form role="form" action="{{route('admin.image.store',['pid'=>$service->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
            </div>
            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="col-sm-4 m-2">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>

            </div>
        </form>
    </div>
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold mb-2">Service Image List</h2>
        </div>
        <div class="card">
            <!-- /.card-header -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="m-2">
                    <tr class="table-primary">
                        <th style="width: 32px;">id</th>
                        <th style="width: 150px;">Title</th>
                        <th style="width: 150px;">Image</th>
                        <th style="width: 32px">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->title}}</td>
                        <td style="width: 65px">
                            @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" class="img1 rounded m-0"  style="width: 80px; height: 70px;" alt="">
                            @endif
                        </td>
                        <td><a href="{{route('admin.image.destroy',['pid'=>$service->id,'id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash3-fill"></i></a></td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

