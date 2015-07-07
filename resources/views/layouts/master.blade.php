<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vadana</title>
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('vendor/bootflat/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel='stylesheet'/>
    <link href="{{asset('css/orchestra.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/login.js')}}"></script>
    <script src="{{asset('js/jquery.easydropdown.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="{{asset("js/bootstrap.min.js")}}"></script>

<!-- Script to Activate the Carousel -->
    <link href="{{asset('/css/animate.css')}}" rel='stylesheet' type='text/css' />
    <script>
      new WOW().init();
    </script>
    <script>
    $(document).ready( function() {
      $('.dropdown-toggle').dropdown();
    });
    </script>
  </head>
  <body>
    <nav class="header" role="navigation" id="header">
      <div class="col-sm-4 header-left"  >
        <div class="logo">
          <a href="#"><img src="/images/logo.png" alt=""/></a>
        </div> 
        <div class="menu">
          <a class="toggleMenu" href="#"><img src="{{asset('images/nav.png')}}" alt="" /></a>
            <ul class="nav" id="nav">
              <li class="active main-menu"><a href="#">Explore</a></li>
              <li class="main-menu">
                <div class="dropdown">
                  <a href="#" class="dropdown-toggle" type="button" data-toogle="dropdown">Compose</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Tambah lagu</a></li>
                    <li><a href="#">Tambah alat musik</a></li>
                  </ul>
                </div>
              </li>
              <div class="clearfix"></div>
            </ul>
        </div>  
      </div>
      <div class="col-sm-3 search-box">
            <input type="text" value="Cari alat musik atau lagu" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Cari alat musik atau lagu';}">
            <input type="submit" value="" />
      </div>
      <div class="col-sm-5 header_right">
        <div id="loginContainer"><a href="#" id="loginButton"><img src="{{asset('images/login.png')}}"><span>Login</span></a>
          <div id="loginBox">                
            <form id="loginForm">
                    <fieldset id="body">
                      <fieldset>
                              <label for="email">Alamat email</label>
                              <input type="text" name="email" id="email">
                        </fieldset>
                        <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password">
                         </fieldset>
                        <input type="submit" id="login" value="Sign in">
                      <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Selalu login</i></label>
                  </fieldset>
                     <span><a href="#">Lupa password?</a></span>
                     <span><a href="#">Daftar akun baru</a></span>
            </form>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </nav>

    <div class= "content-main" id="container">
        <div id="main-content">
            @yield('content')
        </div>
    </div>
    
    @yield('script')
    
    <footer>
      <div class="copyrights">
          <p>Copyrights &copy; 2015 ide_yafi</p>
      </div>
    </footer>
  </body>
</html>
