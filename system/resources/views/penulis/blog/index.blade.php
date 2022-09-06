@extends('template.penulis')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div>
                    <h4 class="header-title mb-3">Data Blog ! {{ $penulis->nama }}</h4>
                </div>
                <div>
                    
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div>
                    
                    <p class="sub-header">
                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".tambah">
                        <i class="fa fa-plus"></i> Tambah Blog
                        </button>  
                    </p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Judul Blog</th>
                                <th class="text-center">Detail</th>
                                <th class="text-center">Poto</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($list_blog as $blog)
                            @if ($blog->id_penulis == $penulis->id)
                            <tr>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ url("blog/$blog->id") }}" class="btn btn-info"><i class="fa fa-info"></i> Lihat</a>
                                        <a href="#" class="btn btn-warning" data-toggle="modal" data-target=".edit{{ $blog->id }}"><i class="fa fa-edit"></i> Edit</a>
                                        @include('template.utils.delete-penulis', ['url' => url('blog', $blog->id)])
                                    </div>
                                </td>
                                <td class="text-center">{{ $blog->judul }}</td>
                                <td class="text-center">{{ substr($blog->detail, 0, 50) }} .......</td>
                                <td class="text-center">
                                    <img style="width: 50%" src="{{ url("public/$blog->poto") }}" alt="">
                                </td>
                                
                            </tr>
                            <div class="modal fade edit{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myLargeModalLabel">Edit Data Blog</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('blog', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input type="text" name="id_penulis" value="{{ $blog->id_penulis }}" hidden>
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Judul</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="judul" value="{{ $blog->judul }}">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label" for="example-textarea">Detail</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" rows="5" id="example-textarea" name="detail">{{ $blog->detail }}</textarea>
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label" for="example-placeholder">Gambar</label>
                                                    <div class="col-md-6">
                                                        <img src="{{ "public/$blog->poto" }}" style="width: 80%;">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="file" class="form-control" name="poto" accept=".jpg, .png, .jpeg">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Tambah Data Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('blog') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id_penulis" value="{{ $penulis->id }}" hidden>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Judul</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="judul">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="example-textarea">Detail</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="5" id="example-textarea" name="detail"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="example-placeholder">Gambar</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control" name="poto" accept=".jpg, .png, .jpeg">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
