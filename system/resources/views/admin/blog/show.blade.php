@extends('template.admin')
@section('content')
<br>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Detail Data Blog
                        </div>
                        <div class="card-body">
                            <h3>Judul :{{$blog->judul}}</h3>
                            <hr>
                            <h3>Detail :{{$blog->detail}}</h3>
                            <hr>
                            <h3>Foto :{{$blog->poto}}</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>


@endsection