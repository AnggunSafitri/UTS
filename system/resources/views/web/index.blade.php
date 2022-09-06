@extends('template.web')
@section('content')
    <div class="page-banner container-fluid no-padding" style="background-image: url('public/web')/4.png">
        <div class="banner-content">
            <h3>Blog</h3>
            <ol class="breadcrumb">
                {{-- <li><a href="index.html" title="Home">Home</a></li>
                <li class="active">Blog 2 Column</li> --}}
            </ol>
        </div>
    </div>
    <div class="latest-blog recent-blog blog-left container-fluid no-padding">
        <div class="section-padding"></div>

        <div class="container">
            <div class="row">
                <div class="content-area col-md-9 col-sm-8 col-xs-12">
                    @foreach ($list_blog as $blog)
                        <article class="type-post">
                            <a href="{{ url("detail-blog/$blog->id") }}">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="entry-cover">
                                        <img src="{{ url("public/$blog->poto") }}" alt="blog" width="405"
                                            height="280">

                                        <div class="recent-blog-content">
                                            <div class="post-date">
                                                <span>{{ $blog->created_at->format('d') }}</span><span>{{ $blog->created_at->format('M') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="entry-title">
                                            <a href="{{ url("detail-blog/$blog->id") }}">{{ $blog->judul }}</a>
                                        </h3>
                                        <div class="entry-meta">
                                            <a href="{{ url("detail-blog/$blog->id") }}">
                                                <i class="fa fa-user"></i>{{ $blog->penulis->nama }}
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </a>
                        </article>
                    @endforeach
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
                                <a href="{{ url("detail-blog/$blog->id") }}"><img width="59" height="59" alt="thumb"
                                        src="{{ url("public/$blog->poto") }}"></a>
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
        </div>
        <div class="section-padding"></div>
    </div>
@endsection
