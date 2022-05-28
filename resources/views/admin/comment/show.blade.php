@extends('layouts.adminwindow')

@section('title','Comment List')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-12 mb-4 mb-xl-0 row">
            <h3 class="font-weight-bold">Comment of {{$data->user->name}}</h3>
        </div>
        <div class="row nb-2  ml-2 mt-4 responsive">
            <div class="col-sm-2 m-2">
                <a href="{{route('admin.comment.destroy',['id'=>$data->id])}}" style="width: 150px"
                   onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-block btn-danger"
                   data-toggle="tooltip" title="Delete">Delete</a>
            </div>
        </div>
        <div class="col-12 col-xl-12 mb-4 mb-xl-0 row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Service</th>
                            <td>{{$data->service->title}}</td>
                        </tr>
                        <tr>
                            <th>User</th>
                            <td>{{$data->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Comment</th>
                            <td>
                                        <textarea cols="80" rows="10">
                                            {{$data->comment}}
                                        </textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Rate</th>
                            <td>{{$data->rate}}</td>
                        </tr>
                        <tr>
                            <th>Ip Adress</th>
                            <td>{{$data->ip}}</td>
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
                            <th>Status</th>
                            <td>
                                <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}"
                                      method="post">
                                    @csrf
                                    <select name="status">
                                        <option value="{{$data->status}}">{{$data->status}}</option>
                                        <option value="True">True</option>
                                        <option value="False">False</option>
                                    </select>
                                    <div class="row nb-2  ml-2 mt-4 responsive">
                                        <div class="col-sm-2 m-2">
                                            <button type="submit" class="btn btn-primary">Update Status</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
@endsection
