@extends('layouts.adminbase')

@section('title','Category List')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold mb-2">Category List</h2>
        </div>
        <div class="card">
            <div class="d-grid gap-2 mt-3 mx-3 d-md-flex justify-content-md-end">
                <a href="{{route('admin.category.create')}}" class="btn btn-primary me-md-2 mb-1"><i class="bi bi-plus-lg"></i> Add category</a>
            </div>

            <!-- /.card-header -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="m-2">
                    <tr class="table-primary">
                        <th style="width: 25px;">id</th>
                        <th>Parent id</th>
                        <th style="width: 100px">Title</th>
                        <th style="width: 70px">Image</th>
                        <th style="width: 32px">Status</th>
                        <th style="width: 25px">Edit</th>
                        <th style="width: 25px">Delete</th>
                        <th style="width: 25px">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                        <td>{{$rs->title}}</td>
                        <td style="width: 65px">
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" class="img1 rounded m-0" style="width: 70px; height: 50px">
                            @endif
                        </td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-outline-success" data-toggle="tooltip" title="Edit"><i class="bi bi-pencil-fill"></i></a></td>
                        <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash3-fill"></i></a></td>
                        <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-outline-primary" data-toggle="tooltip" title="Show"><i class="bi bi-eye-fill"></i></a></td>
                    </tr>
                    @endforeach
                    </tbody>
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

