<header class="header-main container-fluid no-padding">
    <!-- Container -->
    <div class="container">
        <!-- Navigation -->
        <nav class="navbar ow-navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
                    <span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                </button> 
                <a class="navbar-brand" href="{{ url('/') }}" title="Logo">Anggun</a> 
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li> 
                        <a href="{{ url('/') }}" title="Home">Home</a> 	 
                    </li>
                    <li><a href="{{ url('login') }}" title="Login">Login</a></li>
                </ul>
            </div>
        </nav><!-- Navigation -->
    </div><!-- Container /- -->
</header>