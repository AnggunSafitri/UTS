@extends('template.web')
@section('content')

    <div class="page-banner container-fluid no-padding" style="background-image: url('public/web')/4.png">

    </div>


    <div class="latest-blog recent-blog blog-left blogsingle-left container-fluid no-padding">
        <div class="section-padding"></div>
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="content-area col-md-9 col-sm-8 col-xs-12">
                    <article class="type-post">
                        <div class="entry-cover"> <img src="{{ url("public/$blog->poto") }}" alt="blog" width="850"
                                style="height: 700px">
                            <div class="recent-blog-content">
                                <div class="post-date">
                                    <span>{{ $blog->created_at->format('d') }}</span><span>{{ $blog->created_at->format('M') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="entry-title">
                                {{ $blog->judul }}
                            </h3>
                            <div class="entry-meta">
                                <i class="fa fa-user"></i> {{ $blog->penulis->nama }}
                                <i class="fa fa-heart-o" style="margin-left: 2%"></i>10 Likes
                                <i class="fa fa-commenting-o" style="margin-left: 2%"></i>15 Comments
                            </div>
                            <div style="font-family: roboto; font-size: 21px;">
                                <p>
                                    {{ $blog->detail }}

                                </p>

                            </div>
                        </div>
                    </article>

                    <!-- Post Comment -->
                    <div class="post-comment">
                        <h3>
                            @foreach ($list_comen as $comment)
                                {{ $data_comment->filter(function ($q) use ($blog) {
                                        return $blog->id == $q->id_blog;
                                    })->count('id') }}
                            @endforeach
                            Comments
                        </h3>
                        @foreach ($list_comment as $comment)
                            @if ($comment->id_blog == $blog->id)
                                @if ($comment->status == 1)
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="{{ url("detail-blog/$blog->id") }}" title="avtar"> <img
                                                    class="media-object"
                                                    src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avtar"
                                                    width="86" height="86"> </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="media-content">
                                                <h4 class="media-heading">
                                                    {{ $comment->nama }}
                                                    <span>
                                                        {{ $comment->created_at->format('d M Y') }}
                                                    </span>
                                                </h4>
                                                {{-- <a href="#" title="Balas">Reply</a> --}}
                                                <br>
                                                <p>
                                                    {{ $comment->message }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @if ($comment->status == 2)
                                        <div class="media" style="margin-left: 200px;">
                                            <div class="media-left">
                                                <div class="content">
                                                    <h4 class="media-heading">
                                                        {{ $comment->nama }}
                                                        <span>
                                                            {{ $comment->created_at->format('d M Y') }}
                                                        </span>
                                                    </h4>
                                                    {{-- <a href="#" title="Balas">Reply</a> --}}
                                                    <br>
                                                    <p>
                                                        {{ $comment->message }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-content">
                                                    <img class="media-object"
                                                        src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                        width="86" height="86" style="margin-left: 200px">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                
                            @endif
                        @endforeach

                        <form class="comment-form" action="{{ url('post-comment') }}" method="POST">
                            @csrf
                            <h3>Buat Komentar</h3>
                            <div class="row">
                                <input type="text" name="id_blog" value="{{ $blog->id }}" hidden>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Nama" required name="nama">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Alamat E-mail" required
                                        name="email">
                                </div>

                                <div class="form-group col-md-12">
                                    <textarea class="form-control" rows="8" placeholder="Masukan Pesan Anda" name="message"></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn btn-warning"><i class="fa fa-save"></i> Kirim </button>
                                </div>
                            </div>
                        </form>
                    </div><!-- Post Comment /- -->
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 widget-area">

                    <aside class="widget widget-search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-search" title="Search" type="button"><i
                                        class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </aside>

                    <aside class="widget widget-latestposts">
                        <h3 class="widget-title">Postingan Terbaru</h3>
                        @foreach ($list_blog as $blog)
                            <div class="latest-content">
                                <a href="{{ url("detail-blog/$blog->id") }}"><img width="59" style="height: 50px"
                                        alt="thumb" src="{{ url("public/$blog->poto") }}"></a>
                                <h3>
                                    <a href="{{ url("detail-blog/$blog->id") }}">
                                        {{ $blog->judul }}
                                    </a>
                                </h3>
                                <p>{{ $blog->created_at->format('M - d - Y') }}</p>
                            </div>
                        @endforeach

                    </aside>
                </div>
            </div>
        </div><!-- Container /- -->
        <div class="section-padding"></div>
    </div>
@endsection
