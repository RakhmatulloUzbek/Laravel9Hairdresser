@extends('layouts.adminbase')

@section('title','Create Category')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0 pb-4">
            <h3 class="font-weight-bold">Create Faq</h3>
        </div>
        <form  role="form" action="{{route('admin.faq.store')}}" method="post">
            @csrf
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Question</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="question" placeholder="Question">
                </div>
            </div>
            <div class="row mb-3">
                <label for="detail" class="col-sm-2 col-form-label">Answer</label>
                <div class="col-sm-8">
                    <textarea name="answer" id="answer" class="form-control">

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
                    <option value="True" selected>True</option>
                    <option value="False">False</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
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

