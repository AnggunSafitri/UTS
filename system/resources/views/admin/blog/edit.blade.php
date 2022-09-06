@extends('template.admin')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                Tambah Blog
                            </div>
                            <!-- form start -->
                            <form action="{{ url('admin/blog', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-horizontal">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Penulis</label>
                                            <div class="col-sm-10">
                                                <select name="id_penulis" class="form-control">
                                                    <option value=""> Silahkan Pilih Penulis</option>
                                                    @foreach ($list_penulis as $penulis)
                                                        <option @if ($penulis->id == $blog->id_penulis) selected @endif
                                                            value="{{ $penulis->id }}">
                                                            {{ $penulis->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Judul Blog"
                                                    name="judul" value="{{ $blog->judul }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Detail</label>
                                            <div class="col-sm-10">
                                                <textarea name="detail" class="form-control" style="width: 100%">{{ $blog->detail }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Gambar</label>
                                            <div class="col-md-6">
                                                <img src="{{ url("public/$blog->poto") }}" style="width: 50%; height: 90%">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control" name="poto"
                                                    accept=".jpg, .png, .jpeg">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-info">Batal</button>
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
