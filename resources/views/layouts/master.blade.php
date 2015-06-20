<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,300,300italic,700,700italic' rel='stylesheet' type='text/css'>
    
    <!-- Bootflat -->
    <link rel="stylesheet" href="{{asset('vendor/bootflat/css/bootflat.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/bootflat/css/site.min.css')}}">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootflat</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          <ul class="nav navbar-nav">
            <li class=""><a href="#">Galeri proyek</a></li>
          </ul>

          <form class="navbar-form navbar-left" role="search">
            <div class="form-search search-only">
              <i class="search-icon glyphicon glyphicon-search"></i>
              <input class="form-control search-query" type="text">
            </div>
          </form>
          
          <ul class="nav navbar-nav navbar-right">

            <li>
              <a href='#'>Login</a>
            </li>
            <li><a href="#">Daftar</a></li>
          </ul>
        
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    @yield('content')

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Tentang Kami</h3>
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>     
          </div>

          <div class="col-md-4">
            <h3>Bantuan</h3>
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>     
          </div>
          
          <div class="col-md-4">
            <h3>Kontak</h3>
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>     
          </div>

        </div>
      </div>
      
    </footer>
    @section('scripts')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('vendor/bootflat/js/bootstrap.min.js')}}"></script>
   
    @show
  </body>
</html>
