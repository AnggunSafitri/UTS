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
                            Detail Data Penulis
                        </div>
                        <div class="card-body">
                            <h3>Nama :{{$penulis->nama}}</h3>
                            <hr>
                            <h3>Email :{{$penulis->email}}</h3>
                            <hr>
                            <h3>Username :{{$penulis->username}}</h3>
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