@extends('layouts.adminbase')

@section('title','Category List')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Category List</h3>
        </div>
        <div class="card">
            <div class="card-header" style="height: 50px">
                <h3 class="card-title">Category list</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Parent id</th>
                        <th>Title</th>
                        <th>Keyword</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Show</th>
                    </tr>
                    </thead>
                    @foreach($data as $rs)
                    <tbody>
                    <tr class="table-info">
                        <td>{{$rs->id}}</td>
                        <td style="width: 25px">{{$rs->parent_id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->keyword}}</td>
                        <td>{{$rs->description}}</td>
                        <td>{{$rs->image}}</td>
                        <td style="width: 25px">{{$rs->status}}</td>
                        <td style="width: 25px" ><a href="/admin/category/edit/{{$rs->id}}"><button type="button" class="btn btn-outline-success" data-toggle="tooltip" title="Edit"><i class="bi bi-pencil-fill"></i></button></a></td>
                        <td style="width: 25px"><a href="/admin/category/delete/{{$rs->id}}"><button type="button" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash3-fill"></i></button></a></td>
                        <td style="width: 25px"><a href="/admin/category/show/{{$rs->id}}"><button type="button" class="btn btn-outline-info" data-toggle="tooltip" title="Show"><i class="bi bi-eye-fill"></i></button></a></td>
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

