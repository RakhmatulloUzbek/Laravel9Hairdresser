@extends('layouts.adminbase')

@section('title','Faq List')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold my-2">Faq List</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active">Faq</li>
            </ol>
        </div>
        <div class="card">
            <div class="d-grid gap-2 mt-3 mx-3 d-md-flex justify-content-md-end">
                <a href="{{route('admin.faq.create')}}" class="btn btn-primary mb-1"><i class="bi bi-plus-lg"></i> Add Question</a>
            </div>

            <!-- /.card-header -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover" style="border-collapse: collapse">
                    <thead>
                    <tr class="table-primary">
                        <th style="width: 25px">id</th>
                        <th>Question</th>
                        <th>Status</th>
                        <th style="width: 25px">Edit</th>
                        <th style="width: 25px">Delete</th>
                        <th style="width: 25px">Show</th>
                    </tr>
                    </thead>
                    @foreach($data as $rs)
                    <tbody>
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->question}}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-outline-success" data-toggle="tooltip" title="Edit"><i class="bi bi-pencil-fill"></i></a></td>
                        <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash3-fill"></i></a></td>
                        <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-outline-info" data-toggle="tooltip" title="Show"><i class="bi bi-eye-fill"></i></a></td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- partial -->
@endsection

