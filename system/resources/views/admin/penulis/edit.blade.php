@extends('template.admin')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                        Edit Data {{ $penulis->nama }}
                        </div>
                        <!-- form start -->
                        <form action="{{url("admin/penulis-update", $penulis->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama" value="{{ $penulis->nama }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email Penulis</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control"  name="email" value="{{ $penulis->email }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="username" value="{{ $penulis->username }}">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Hp</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="no_hp" value="{{ $penulis->no_hp }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-6">
                                            <img src="{{ url("public/$penulis->poto") }}" style="width: 50%; height: 90%;">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="file" class="form-control" name="poto" accept=".jpg, .png, .jpeg" value="{{ $penulis->poto }}">
                                        </div>
                                    </div>

                                   
                                </div>
                                <div class="card-footer">
                                    <button  class="btn btn-info">Batal</button>
                                    <button class="btn btn-primary float-right">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection