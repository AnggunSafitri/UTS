@extends('template.admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-right full">
                                <a href="{{ url('admin/penulis') }}/create" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
                            </div>
                            <h3 class="">Data Penulis</h3>
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
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_penulis as $penulis)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url("admin/penulis/$penulis->id") }}"
                                                    class="btn btn-dark"><span class="fa fa-info"></span></a>
                                                <a href="{{ url("admin/penulis-edit/$penulis->id") }}"
                                                    class="btn btn-warning"><span class="fa fa-edit"></span></a>
                                                    @include('template.utils.delete', ['url' => url('admin/penulis', $penulis->id)])
                                            </div>
                                        </td>
                                        <td>{{ $penulis->nama }}</td>
                                        <td>{{ $penulis->email }}</td>
                                        <td>
                                            <img src="{{ url("public/$penulis->poto") }}" alt="" style="width: 50%">
                                        </td>
                                        
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
