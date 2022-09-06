@extends('template.penulis')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Selamat Datang! {{ $penulis->nama }}</h4>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div>
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2"><i class="text-primary mdi mdi-access-point-network mr-2"></i> <b>2</b></h2>
                                <p class="text-muted mb-0">Jumlah Postingan Pribadi</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-6 widget-inline">
                            <div class="text-center p-3">
                                <h2 class="mt-2"><i class="text-teal mdi mdi-airplay mr-2"></i> <b>10</b></h2>
                                <p class="text-muted mb-0"> Jumlah Postingan Semua</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection