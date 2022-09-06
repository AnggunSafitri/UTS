@extends('template.admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-right full">
                                <a href="{{ url('admin/user') }}/create" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
                            </div>
                            <h3 class="">Data User</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_user as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url("admin/user/$user->id") }}"
                                                    class="btn btn-dark"><span class="fa fa-info"></span></a>
                                                <a href="{{ url("admin/user/$user->id") }}/edit"
                                                    class="btn btn-warning"><span class="fa fa-edit"></span></a>
                                                    @include('template.utils.delete', ['url' => url('admin/user', $user->id)])
                                            </div>
                                        </td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->email }}</td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
