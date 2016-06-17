<!DOCTYPE html>
<!--[if LTE 7 ]><html class="ie7" lang="es"><[endif]-->

<!--[if IE 8 ]><html class="ie8" lang="es"><![endif]-->

<!--[if IE 9 ]><html class="ie9" lang="es"><![endif]-->

<!--[if gt IE 9 ]><!--><html lang="es"><!-->![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PETDelivery</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300italic' rel='stylesheet' type='text/css'>
    <style>

        .navbar-default {
            background-color: #ffffff;
            border-color: #aeadad;
            border-style: dashed;
        }
        body {
           /* font-family: 'Lato'; */
            font-family: 'Ubuntu', sans-serif;
        }

        .fa-btn {
            margin-right: 6px;
        }

        .navbar-header:before
{
    content: "";
    position: absolute;
    
    top: -50%;
    left: -50%;
    z-index: -1;
    background: url(/images/bg.png) 0 0 repeat;
    -webkit-transform: rotate(30deg);
    -moz-transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    -o-transform: rotate(30deg);
    transform: rotate(30deg);
}


body {
  font-size: 14px;
  font-family: Sans-Serif;
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
a {
  text-decoration: none;
}
.blurImg {
  position: relative;
  width: 100%;
  height: 440px;
  z-index: -1;
  top: 0;
  left: 0;
}
.blurImg > div {
  position: fixed;
  width: 100%;
  height: 440px;
  background-repeat: no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  background-position: center center;
}
.blur {
  opacity: 0;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: alpha(opacity=0);
}
header {
  z-index: 1;
  position: absolute;
  top: 0;
  width: 100%;
  padding: 0px 20px;
}
header > div {
  max-width: 600px;
  margin: 0 auto;
  padding-top: 150px;
  height: 380px;
  text-align: center;
  color: White;
}
header > div a {
  font-size: 0.8em;
  letter-spacing: 0.08em;
  color: rgba(255,255,255,0.85);
  line-height: 30px;
  padding: 7px 14px;
  border: 1px solid rgba(255,255,255,0.3);
  -webkit-border-radius: 2em;
  border-radius: 2em;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
header > div a:hover {
  background: #fff;
  color: Gray;
}
header p {
  font-size: 1.5em;
  margin-bottom: 0.7em;
  font-family: Times New Roman;
}
h1 {
  font-weight: 800;
  font-size: 3.4em;
  margin-bottom: 0.2em;
}
nav {
  max-width: 600px;
  margin: 0 auto;
  height: 60px;
  border-top: 1px rgba(255,255,255,0.35) solid;
}
nav ul li {
  display: inline-block;
  margin-right: 20px;
}
nav ul li a {
  font-weight: 800;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: rgba(255,255,255,0.5);
  -webkit-transition: color 0.3s linear;
  -moz-transition: color 0.3s linear;
  -o-transition: color 0.3s linear;
  -ms-transition: color 0.3s linear;
  transition: color 0.3s linear;
  line-height: 60px;
  display: block;
}
nav ul li a.active {
  -webkit-box-shadow: 0px -1px 0px #fff;
  box-shadow: 0px -1px 0px #fff;
}
nav ul li a.active,
nav ul li a:hover {
  color: #fff;
}
.container {
  height: 1300px;
  background: #fff;
  z-index: 1;
  padding: 0px 20px;
}
.container div {
  max-width: 600px;
  margin: 0 auto;
  padding-top: 40px;
}

    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Petdelivery
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                     <li><a href="{{ url('/articles') }}">Articulos</a></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                       <!-- <li><a href="{{ url('/register') }}">Registrese</a></li> -->
                    @else
                        <li><a href="{{ url('/config/articles') }}">Dashboard</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
