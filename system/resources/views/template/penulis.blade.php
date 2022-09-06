@php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Penulis | Blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('public/penulis') }}/bulan.png">
        <!-- App css -->
        <link href="{{ url('public/penulis') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{ url('public/penulis') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/penulis') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

        <link href="{{ url('public/penulis') }}/assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/penulis') }}/assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/penulis') }}/assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('public/penulis') }}/assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="horizontal">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Navigation Bar-->
            @include('section.penulis.header')
            <!-- End Navigation Bar-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start container-fluid -->
                    <div class="row">
                        <div class="col-12">
                            <div>
                                <h4 class="header">
                                    @include('template.utils.notif')
                                </h4>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                    <!-- end container-fluid -->

                    

                    <!-- Footer Start -->
                    @include('section.penulis.footer')
                    <!-- end Footer -->

                </div>
                <!-- end content -->

            </div>
            <!-- END content-page -->

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="{{ url('public/penulis') }}/assets/js/vendor.min.js"></script>

        <script src="{{ url('public/penulis') }}/assets/libs/morris-js/morris.min.js"></script>
        <script src="{{ url('public/penulis') }}/assets/libs/raphael/raphael.min.js"></script>

        <script src="{{ url('public/penulis') }}/assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{ url('public/penulis') }}/assets/js/app.min.js"></script>


        <script src="{{ url('public/penulis') }}/assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ url('public/penulis') }}/assets/libs/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Buttons examples -->
        <script src="{{ url('public/penulis') }}/assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="{{ url('public/penulis') }}/assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{ url('public/penulis') }}/assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="{{ url('public/penulis') }}/assets/libs/datatables/dataTables.select.min.js"></script>
        <script src="{{ url('public/penulis') }}/assets/libs/jszip/jszip.min.js"></script>
        <script src="{{ url('public/penulis') }}/assets/libs/pdfmake/pdfmake.min.js"></script>
        <script src="{{ url('public/penulis') }}/assets/libs/pdfmake/vfs_fonts.js"></script>
        <script src="{{ url('public/penulis') }}/assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="{{ url('public/penulis') }}/assets/libs/datatables/buttons.print.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{ url('public/penulis') }}/assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="{{ url('public/penulis') }}/assets/libs/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatables init -->
        <script src="{{ url('public/penulis') }}/assets/js/pages/datatables.init.js"></script>

    </body>

</html>