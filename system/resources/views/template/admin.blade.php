@php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{ url('public/admin') }}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet"
        href="{{ url('public/admin') }}/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ url('public/admin') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <title>Super Admin</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        @include('section.admin.header')
        @include('section.admin.sidebar')
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                                @include('template.utils.notif')
                            
                        </div>
                    
                    @yield('content')
                </div>
            </div>
            @include('section.admin.footer')
        </div>
    </div>
    <script src="{{ url('public/admin') }}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/js/main-js.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/js/dashboard-ecommerce.js"></script>


    <script src="{{ url('public/admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
