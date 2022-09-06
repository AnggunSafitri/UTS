@extends('template.admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-right full">
                                <a href="{{ url('admin/blog') }}/create" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
                            </div>
                            <h3 class="">Data Blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Penulis</th>
                                        <th>Judul</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_blog as $blog)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url("admin/blog/$blog->id") }}"
                                                    class="btn btn-dark"><span class="fa fa-info"></span></a>
                                                <a href="{{ url("admin/blog/$blog->id") }}/edit"
                                                    class="btn btn-warning"><span class="fa fa-edit"></span></a>
                                                    @include('template.utils.delete', ['url' => url('admin/blog', $blog->id)])
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $blog->penulis->nama }}</td>
                                        <td class="text-center">{{ $blog->judul }}</td>
                                        <td class="text-center">
                                            <img style="width: 80%; height: 100px;" src="{{ url("public/$blog->poto") }}" alt="" >
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
