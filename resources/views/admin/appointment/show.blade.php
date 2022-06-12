@extends('layouts.adminwindow')

@section('title','message List')


@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-12 mb-4 mb-xl-0 row">
            <h3 class="font-weight-bold">Appointment of {{$data->user->name}}</h3>
        </div>
        <div class="row nb-2  ml-2 mt-4 responsive">
            <div class="col-sm-2 m-2">
                <a href="{{route('admin.appointment.destroy',['id'=>$data->id])}}" style="width: 150px"
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
                            <th>User</th>
                            <td><a href="{{route('admin.user.show',['id'=>$data->user_id])}}"
                                   onclick="return !window.open(this.href,'','top=32 left=128 width=750 height=450')"
                                   data-toggle="tooltip" title="Show">{{$data->user->name}}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>Service</th>
                            <td>{{$data->service->title}}</td>
                        </tr>
                        <tr>
                            <th>Berber</th>
                            <td> @foreach($workers as $worker)
                                    @if($worker->id==$data->worker_id)
                                        <a href="{{route('admin.user.show',['id'=>$data->worker_id])}}"
                                           onclick="return !window.open(this.href,'','top=32 left=128 width=750 height=450')"
                                           data-toggle="tooltip" title="Show">{{$worker->name}}
                                        </a>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{$data->date}}</td>
                        </tr>
                        <tr>
                            <th>Time</th>
                            <td>{{$data->time}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{$data->price}}</td>
                        </tr>
                        <tr>
                            <th>Payment</th>
                            <td>{{$data->payment}}</td>
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

                        <form role="form" action="{{route('admin.appointment.update',['id'=>$data->id])}}"
                              method="post">
                            @csrf
                            <tr>
                                <th>Admin Note</th>
                                <td>
                                    <textarea id="note" name="note" cols="70" rows="5">
                                            {{$data->note}}
                                    </textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Payment Customer</th>
                                <td>
                                    <div class="row nb-2  ml-2 mt-4 responsive ">
                                        <div class="col-md-2 ml-5">
                                            <select name="payment" >
                                                <option value="{{$data->payment}}"> {{$data->payment}} </option>
                                                <option value="No"> No </option>
                                                <option value="Yes"> Yes </option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <div class="row nb-2  ml-2 mt-4 responsive ">
                                        <div class="col-md-2 ml-5">
                                            <select name="status" >
                                                <option value="{{$data->status}}"> {{$data->status}} </option>
                                                <option value="New"> New </option>
                                                <option value="Old"> Old </option>
                                                <option value="Canceled"> Canceled </option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2 ml-5">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
@endsection
