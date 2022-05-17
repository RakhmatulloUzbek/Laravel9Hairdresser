@extends('layouts.adminbase')

@section('title','Edit Category : '.$data->title)

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0 pb-4">
            <h3 class="font-weight-bold">Edit Service : {{$data->title}}</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{route('admin.service.index')}}" class="text-decoration-none">Service</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <form role="form" action="{{route('admin.service.update',['id'=>$data->id])}}" method="post">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Parent Service</label>
                <div class="col-sm-5">
                    <select class="form-control" name="category_id">
                        @foreach($datalist as $rs)
                            <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>
                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="keyword" value="{{$data->keyword}}" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="price" value="{{$data->price}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="duration" value="{{$data->duration}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-4">
                    <input type="file" class="form-control" name="image">
                    @if($data->image)
                        <img class="img-thumbnail" src="{{Storage::url($data->image)}}" alt="">
                    @endif
                </div>
            </div>
            <div class="row mb-3">
                <label for="detail" class="col-sm-2 col-form-label">Detail</label>
                <div class="col-sm-8">
                    <textarea name="detail" id="detail" class="form-control">

                        {{ $data->detail }}

                    </textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#detail' ) )
                            .then( editor => {
                                console.log( editor );
                            } )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                </div>
            </div>
            <div class="row mb-3">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-5">
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option selected>{{$data->status}}</option>
                        <option value="True">True</option>
                        <option value="False">False</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <!-- partial -->
@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function() {
            $('.textarea').summernote()
        })

    </script>
@endsection
