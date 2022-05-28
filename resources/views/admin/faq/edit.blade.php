@extends('layouts.adminbase')

@section('title','Edit Faq : ')

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
                <li class="breadcrumb-item active"><a href="{{route('admin.faq.index')}}" class="text-decoration-none">Service</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post">
            @csrf
            <div class="row mb-3">
                <label for="question" class="col-sm-2 col-form-label">Question</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="question" value="{{$data->question}}" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="answer" class="col-sm-2 col-form-label">Answer</label>
                <div class="col-sm-8">
                    <textarea name="answer" id="answer" class="form-control">

                        {{ $data->answer }}

                    </textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#answer' ) )
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
