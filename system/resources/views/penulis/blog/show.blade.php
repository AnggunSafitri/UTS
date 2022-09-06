@extends('template.penulis')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="p-0 text-center">
                    <div class="member-card">
                        <div class="avatar-xxl member-thumb mb-2 center-page mx-auto">
                            <img src="{{ url("public/$penulis->poto") }}" class="rounded-circle img-thumbnail"
                                alt="profile-image">
                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                        </div>

                        <div class="">
                            <h5 class="mt-3">{{ $blog->penulis->nama }}</h5>
                            <p class="text-muted">{{ $blog->penulis->email }}</p>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="mt-5">
            <ul class="nav nav-tabs tabs-bordered">
                <li class="nav-item">
                    <a href="#home-b1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                        Detail Blog
                    </a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home-b1">
                    <div class="row">


                        <div class="col-lg-12">
                            <div class="panel card panel-fill">
                                <div class="card-header">
                                    <h5 class="font-16 m-1">{{ $blog->judul }}</h5>
                                </div>
                                <div class="card-body">
                                    <h5 class="font-14 mb-3 text-uppercase">Detail</h5>
                                    <p>
                                        {{ $blog->detail }}
                                    </p>

                                    <h5 class="font-14 mb-3 text-uppercase mt-4 mb-3">Comment</h5>

                                    <div class="timeline timeline-left">
                                        <article class="timeline-item alt">
                                            <div class="text-left">
                                                <div class="time-show first">
                                                    <a href="#" class="btn btn-primary">Today</a>
                                                </div>
                                            </div>
                                        </article>
                                        @foreach ($list_comment as $comment)
                                            @if ($comment->id_blog == $blog->id)
                                                @if ($comment->status == 1)
                                                    <article class="timeline-item">
                                                        <div class="timeline-desk">
                                                            <div class="panel">
                                                                <div class="timeline-box">
                                                                    <span class="arrow"></span>
                                                                    <span class="timeline-icon"><i
                                                                            class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                                    <h3>{{ $comment->nama }}</h3>
                                                                    <h4 class="">
                                                                        {{ $comment->created_at->format('d M Y') }}</h4>
                                                                    {{-- <p class="timeline-date text-muted"><small>{{ $comment->created_at->format('H:i:s') }}</small></p> --}}
                                                                    <p>
                                                                        {{ $comment->message }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                @endif
                                                @if ($comment->status == 2)
                                                    <article class="timeline-item">
                                                        <div class="timeline-desk">
                                                            <div class="panel">
                                                                <div class="timeline-box">
                                                                    <span class="arrow"></span>
                                                                    <span class="timeline-icon bg-success"><i
                                                                            class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                                    <h4 class="text-success">{{ $comment->nama }}</h4>
                                                                    <p class="timeline-date text-muted"><small>{{ $comment->created_at->format('d M Y') }}</small></p>
                                                                    <p>
                                                                        {{ $comment->message }}    
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                @endif
                                                
                                            @endif
                                        @endforeach
                                        <div class="timeline-left">
                                            <article class="timeline-item alt">
                                                <div class="text-left">
                                                    <form action="{{url('balas-komentar')}}" method="post">
                                                        @csrf
                                                        <div class="timeline">
                                                            <input type="text" value="{{$comment->blog->penulis->nama}}" name="nama" hidden>
                                                            <input type="text" value="{{$comment->blog->penulis->email}}" name="email" hidden>
                                                            <input type="text" value="{{$comment->id_blog}}" name="id_blog" hidden>
                                                            <input type="text" class="form-control" name="message">
                                                        </div>
                                                        <div class="float-right">
                                                            <button class="btn btn-primary"><span class="fa fa-save"></span> Balasan Komentar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </article>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
