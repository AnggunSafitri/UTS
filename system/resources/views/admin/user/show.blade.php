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
                            Detail Data User
                        </div>
                        <div class="card-body">
                            <h3>Nama :{{$user->nama}}</h3>
                            <hr>
                            <h3>Email :{{$user->email}}</h3>
                            <hr>
                            <h3>Username:{{$user->username}}</h3>
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