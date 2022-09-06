@extends('template.admin')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                        Tambah User
                        </div>
                        <!-- form start -->
                        <form action="{{url('admin/user')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama User</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Nama User" name="nama">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email User</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" placeholder="Email User" name="email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Username" name="username">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" placeholder="Password" name="password">
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