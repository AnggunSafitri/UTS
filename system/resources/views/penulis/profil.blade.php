@extends('template.penulis')
@section('content')


    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="p-0 text-center">
                    <div class="member-card">
                        <div class="avatar-xxl member-thumb mb-2 center-page mx-auto">
                            <img src="{{ url("public/$penulis->poto") }}" class="rounded-circle img-thumbnail" alt="profile-image">
                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                        </div>

                        <div class="">
                            <h5 class="mt-3">{{ $penulis->nama }}</h5>
                            <p class="text-muted"><a href="">                             
                                {{ $penulis->email }}
                            </a>
                            </p>
                        </div>

                        {{-- <button type="button" class="btn btn-primary mt-2 mr-1">Follow</button>
                        <button type="button" class="btn btn-teal mt-2">Message</button> --}}

                    </div>

                </div>

            </div>
        </div>

        <div class="mt-5">
            <ul class="nav nav-tabs tabs-bordered">
                <li class="nav-item">
                    <a href="#home-b1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#profile-b1" data-toggle="tab" aria-expanded="true" class="nav-link">
                        Edit
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home-b1">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel card panel-fill">
                                <div class="card-header">
                                    <h5 class="font-16 m-1">Data Diri</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-4">
                                        <strong>Nama Lengkap</strong>
                                        <br>
                                        <p class="text-muted">{{ $penulis->nama }}</p>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">{{ $penulis->email }}</p>
                                    </div>
                                    <div class="mb-4">
                                        <strong>No Telphone</strong>
                                        <br>
                                        <p class="text-muted">{{ $penulis->no_hp }}</p>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="panel card panel-fill">
                                <div class="card-header">
                                    <h5 class="font-16 m-1">Social Media</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="social-links list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Youtube"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane" id="profile-b1">
                    <div class="panel card panel-fill">
                        <div class="card-header">
                            <h5 class="font-16 m-1">Edit Profile</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('penulis-update', $penulis->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="FullName">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $penulis->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $penulis->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="Username">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{ $penulis->username }}">
                                </div>
                                
                                <div class="form-group">
                                    <label>Nomor Telphone</label>
                                    <input type="text" class="form-control" name="no_hp" value="{{ $penulis->no_hp }}">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" value="{{ $penulis->tanggal_lahir }}">
                                </div>

                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $penulis->tempat_lahir }}">
                                </div>

                              
                                <div class="form-group">
                                    <label>Tentang Saya</label>
                                    <textarea style="height: 125px" class="form-control" name="tentang_saya">
                                    {{ $penulis->tentang_saya }}
                                    </textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="" class="col-md-2"> Foto</label>
                                            <div class="col-md-6">
                                                <img src="{{ url("public/$penulis->poto") }}" style="width: 50%; border-radius: 20%">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" class="form-control" name="poto" value="{{ $penulis->poto }}" accept=".jpg, .png, .jpeg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect waves-light width-md">Save</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection