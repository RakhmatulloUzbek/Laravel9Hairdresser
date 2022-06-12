@extends('layouts.adminbase')

@section('title','User Page')
@section('head')

@endsection


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold mb-2">User List</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </div>
        <div class="card">
            <!-- /.card-header -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="m-2">
                    <tr class="table-primary">
                        <th style="width: 25px;">id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th style="width: 25px">Delete</th>
                        <th style="width: 25px">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->email}}</td>
                            <td>
                                @foreach($rs->roles as $role)
                                     / {{$role->name}}
                                @endforeach
                            </td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}"
                                   onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger"
                                   data-toggle="tooltip" title="Delete"><i class="bi bi-trash3-fill"></i></a></td>
                            <td>
                                <a href="{{route('admin.user.show',['id'=>$rs->id])}}"
                                   class="btn btn-outline-primary" data-toggle="tooltip" title="Show"><i class="bi bi-eye-fill"></i>
                                </a>
                            </td>
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

