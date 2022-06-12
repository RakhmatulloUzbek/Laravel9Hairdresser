@extends('layouts.adminbase')

@section('title','Appointment Page')
@section('head')

@endsection


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold mb-2">Appointment List</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active">Appointment</li>
            </ol>
        </div>
        <div class="card">
            <!-- /.card-header -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="m-2">
                    <tr class="table-primary">
                        <th style="width: 25px;">id</th>
                        <th>Customer</th>
                        <th>Service</th>
                        <th>Berber</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th style="width: 25px">Delete</th>
                        <th style="width: 25px">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        @if($rs->status=='Canceled')
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->user->name}}</td>
                                <td>

                                    {{$rs->service->title}}</td>
                                <td>
                                    @foreach($workers as $worker)
                                        @if($worker->id==$rs->worker_id)
                                            {{$worker->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{$rs->date}}</td>
                                <td>{{$rs->time}}</td>
                                <td>
                                    {{$rs->status}}
                                </td>
                                <td><a href="{{route('admin.appointment.destroy',['id'=>$rs->id])}}"
                                       onclick="return confirm('Deleting !! Are you sure ?')"
                                       class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i
                                            class="bi bi-trash3-fill"></i></a></td>
                                <td>
                                    <a href="{{route('admin.appointment.show',['id'=>$rs->id])}}"
                                       class="btn btn-outline-primary"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=800 height=750')"
                                       data-toggle="tooltip" title="Show"><i class="bi bi-eye-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        @endif
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

