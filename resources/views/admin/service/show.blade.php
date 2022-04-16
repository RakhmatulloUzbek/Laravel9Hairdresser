@extends('layouts.adminbase')

@section('title','Servise List')


@section('content')
    <div class="content-wrapper">
        <div class="col-12  mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Detail Service of {{$data->title}}</h3>
        </div>
        <div class="row nb-2  ml-2 mt-4">
            <div class="col-sm-2">
                <a href="{{route('admin.service.edit',['id'=>$data->id])}}" style="width: 150px" class="btn btn-block btn-success" data-toggle="tooltip" title="Edit">Edit</a>
            </div>
            <div class="col-sm-2">
                <a href="{{route('admin.service.destroy',['id'=>$data->id])}}" style="width: 150px" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-block btn-danger" data-toggle="tooltip" title="Delete">Delete</a>
            </div>
        </div>
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <aside class="col-lg-4">
                        <div class="gallery-wrap">
                            <div class="img-big-wrap img-thumbnail d-block my-auto">
                                <a href="{{Storage::url($data->image)}}" data-type="image" data-fslightbox="mygallery">
                                    <img class="img-thumbnail d-block" src="{{Storage::url($data->image)}}" alt="">
                                </a>
                            </div>
                        </div>
                    </aside>
                    <main class="col-lg-8">
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Parent</th>
                                <td>
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}

                                </td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{$data->title}}</td>
                            </tr>
                            <tr>
                                <th>Keyword</th>
                                <td>{{$data->keyword}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{$data->description}}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{$data->price}} $</td>
                            </tr>
                            <tr>
                                <th>Duration</th>
                                <td>{{$data->duration}} minute</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th>Created Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Updated Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>
                        </table>
                    </main>
                </div>
            </div>
        </section>
    </div>
    <!-- partial -->
@endsection
