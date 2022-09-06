<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{ url('public/admin') }}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="{{ url('login') }}"><img class="logo-img" src="{{ url('public/admin') }}/a.png" alt="logo" style="width: 40%"></a>
                <span class="splash-description">Silahkan Login</span>
            </div>
            @include('template.utils.notif')
            <div class="card-body">
                <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="username" type="text" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        
                    </div>
                    <button class="btn btn-primary btn-lg btn-block">Login</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                {{-- <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div> --}}
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ url('public/admin') }}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>