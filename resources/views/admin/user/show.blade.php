@extends('layouts.adminbase')

@section('title','')

@section('content')
    <div class="content-wrapper">
        <div class="col-12  mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Detail Service of {{$data->title}}</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{route('admin.service.index')}}"
                                                      class="text-decoration-none">Service</a></li>
                <li class="breadcrumb-item active">Show</li>
            </ol>
        </div>
        <div class="row nb-2  ml-2 mt-4">
            <div class="col-sm-2">
                <a href="{{route('admin.service.edit',['id'=>$data->id])}}" style="width: 150px"
                   class="btn btn-block btn-success" data-toggle="tooltip" title="Edit">Edit</a>
            </div>
            <div class="col-sm-2">
                <a href="{{route('admin.service.destroy',['id'=>$data->id])}}" style="width: 150px"
                   onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-block btn-danger"
                   data-toggle="tooltip" title="Delete">Delete</a>
            </div>
        </div>
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <aside class="col-lg-4">
                        <div class="gallery-wrap">
                            <div class="img-big-wrap img-thumbnail d-block my-auto">
                                <img class="img1 img-thumbnail d-block" src="{{ auth()->user()->profile_photo_url }}" alt="">
                            </div>
                        </div>
                    </aside>
                    <main class="col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>ID</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$data->address}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>
                                        @foreach($data->roles as $role)
                                            / {{$role->name}}
                                            <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"
                                               onclick="return confirm('Deleting !! Are you sure ?')"
                                               data-toggle="tooltip" title="Delete" style="size: 5px">[<i
                                                    class="bi bi-trash3-fill"></i>]</a>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Updated Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                                <tr>
                                    <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}"
                                          method="post">
                                        @csrf

                                        <th>Add Admin Role</th>
                                        <td>
                                            <select name="role_id">
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="row nb-2  ml-2 mt-4 responsive">
                                                <div class="col-sm-2 m-2">
                                                    <button type="submit" class="btn btn-primary">Add Role</button>
                                                </div>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                            </table>
                        </div>
                    </main>
                </div>
            </div>
        </section>
    </div>
    <!-- partial -->
@endsection
