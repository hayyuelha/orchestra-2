<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NAMA APLIKASI</title>
    
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="/css/style.css" rel='stylesheet' type='text/css' />
    <link href="font-awesome/css/font-awesome.min.css">

    <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/js/login.js"></script>
    <script src="/js/jquery.easydropdown.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="/js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
    <link href="/css/animate.css" rel='stylesheet' type='text/css' />
    <script>
      new WOW().init();
    </script>
  </head>
  <body>
    <nav class="header" role="navigation">
      <div class="col-sm-4 header-left">
        <div class="logo">
          <a href="#"><img src="/images/home1.png" alt=""/></a>
        </div> 
        <div class="menu">
          <a class="toggleMenu" href="#"><img src="/images/nav.png" alt="" /></a>
            <ul class="nav" id="nav">
              <li class="active"><a href="#">Explore</a></li>
              <li><a href="#">Compose</a></li>
              <div class="clearfix"></div>
            </ul>
            <script type="text/javascript" src="/js/responsive-nav.js"></script>
        </div>  
      </div>
      <div class="col-sm-3 search-box">
            <input type="text" value="Cari alat musik atau lagu" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Cari alat musik atau lagu';}">
            <input type="submit" value="" />
      </div>
      <div class="col-sm-5 header_right">
        <div id="loginContainer"><a href="#" id="loginButton"><img src="/images/login.png"><span>Login</span></a>
          <div id="loginBox">                
            <form id="loginForm">
                    <fieldset id="body">
                      <fieldset>
                              <label for="email">Email Address</label>
                              <input type="text" name="email" id="email">
                        </fieldset>
                        <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password">
                         </fieldset>
                        <input type="submit" id="login" value="Sign in">
                      <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                  </fieldset>
                     <span><a href="#">Forgot your password?</a></span>
            </form>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </nav>

    <div class= "content-main">
    @yield('content')
    </div>
    
    @yield('script')
    
    <footer>
      <div class="copyrights">
          <p>Copyrights &copy; 2015 ide_yafi</p>
      </div>
    </footer>
  </body>
</html>
