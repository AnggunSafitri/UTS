@extends('template.admin')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                        Tambah Data User
                        </div>
                        <!-- form start -->
                        <form action="{{url('admin/user', $user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama User</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama" value="{{ $user->nama }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email User</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="username" value="{{ $user->username }}">
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