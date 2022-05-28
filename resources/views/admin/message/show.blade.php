@extends('layouts.adminwindow')

@section('title','message List')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-12 mb-4 mb-xl-0 row">
            <h3 class="font-weight-bold">Message of {{$data->name}}</h3>
        </div>
        <div class="row nb-2  ml-2 mt-4 responsive">
            <div class="col-sm-2 m-2">
                <a href="{{route('admin.message.destroy',['id'=>$data->id])}}" style="width: 150px"
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
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>
                                        <textarea cols="80" rows="10">
                                            {{$data->message}}
                                        </textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Ip Adress</th>
                            <td>{{$data->ip}}</td>
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
                        <tr>
                            <th>Admin Note</th>
                            <td>
                                <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}"
                                      method="post">
                                    @csrf
                                    <textarea id="note" name="note" cols="80" rows="8">
                                            {{$data->note}}
                                    </textarea>
                                    <div class="row nb-2  ml-2 mt-4 responsive">
                                        <div class="col-sm-2 m-2">
                                            <button type="submit" class="btn btn-primary">Update Note</button>
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
