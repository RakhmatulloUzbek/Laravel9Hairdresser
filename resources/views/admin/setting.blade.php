@extends('layouts.adminbase')

@section('title','Settings ')


@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Setting Page</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active">Setting</li>
            </ol>
        </div>
        <div class="card">
            <div class="container mt-3">
                <!-- Nav pills -->
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#general">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#smtp">Smtp Email</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#social">Social Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#contact">Contact Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#referances">Referances</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <form role="form" action="{{route('admin.setting.update')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content">
                        <div id="general" class="container tab-pane active"><br>
                            <input type="hidden" id="id" class="form-control" name="id" value="{{$data->id}}">
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keywords" class="col-sm-2 col-form-label">Keyword</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="keywords"
                                           value="{{$data->keywords}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="description"
                                           value="{{$data->description}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="company" class="col-sm-2 col-form-label">Company</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="company" value="{{$data->company}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="address" value="{{$data->address}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fax" class="col-sm-2 col-form-label">Fax</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="fax" value="{{$data->fax}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" value="{{$data->email}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" name="icon">
                                </div>
                            </div>
                        </div>
                        <div id="smtp" class="container tab-pane fade"><br>
                            <div class="row mb-3">
                                <label for="smtpserver" class="col-sm-2 col-form-label">Smtpserver</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="smtpserver"
                                           value="{{$data->smtpserver}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="smtpemail" class="col-sm-2 col-form-label">Smtpemail</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="smtpemail"
                                           value="{{$data->smtpemail}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="smtppassword" class="col-sm-2 col-form-label">Smtppassword</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="smtppassword"
                                           value="{{$data->smtppassword}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="smtpport" class="col-sm-2 col-form-label">Smtpport</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="smtpport" value="{{$data->smtpport}}">
                                </div>
                            </div>
                        </div>
                        <div id="social" class="container tab-pane fade"><br>
                            <div class="row mb-3">
                                <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="instagram"
                                           value="{{$data->instagram}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="youtube" class="col-sm-2 col-form-label">Youtube</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}">
                                </div>
                            </div>
                        </div>
                        <div id="about" class="container tab-pane fade"><br>
                            <div class="row mb-3">
                                <label for="about" class="col-sm-2 col-form-label">About</label>
                                <div class="col-sm-8">
                                <textarea name="aboutus" id="abouttext" class="form-control">
                                        {{$data->aboutus}}
                                </textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#abouttext'))
                                            .then(editor => {
                                                console.log(editor);
                                            })
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div id="contact" class="container tab-pane fade"><br>
                            <div class="row mb-3">
                                <label for="contacttext" class="col-sm-2 col-form-label">Contact</label>
                                <div class="col-sm-8">
                                <textarea name="contact" id="contacttext" class="form-control">
                                        {{$data->contact}}
                                </textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#contacttext'))
                                            .then(editor => {
                                                console.log(editor);
                                            })
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div id="referances" class="container tab-pane fade"><br>
                            <div class="row mb-3">
                                <label for="referances" class="col-sm-2 col-form-label">Referances</label>
                                <div class="col-sm-8">
                        <textarea name="references" id="referancestext" class="form-control">
                                {{$data->references}}
                        </textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#referancestext'))
                                            .then(editor => {
                                                console.log(editor);
                                            })
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function () {
            $('.textarea').summernote()
        })
    </script>
@endsection
