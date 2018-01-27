<?php /*Header to be included*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
   <link href="{{ URL::to('resources/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
   <!--LightMasterSlider-->
    <link href="{{ URL::to('resources/assets/vendor/lightslider-master/src/css/lightslider.css') }}" rel="stylesheet">
    <!--Customized-->
   <link href="{{ URL::to('resources/assets/css/customize.css') }}" rel="stylesheet" type="text/css" />
    <!-- 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/customize.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section class="login-header">
        <div class="container">
          <div class="col-md-2 col-sm-2 col-xs-2">
            <img src="{{ URL::to('resources/assets/img/headerlogo.png') }}" class="logo" />
          </div>

          <!--Menu-->
          <div class="col-md-10 col-sm-10 col-xs-10">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="cause">Causes</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="glyphicon glyphicon-chevron-down redesign"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </li>
                    <li><a href="work">How It`<small>s</small> Work</a></li>
                    <li><a href="#"><button class="btn btn-khaadim-menu">Donate Now</button></a></li>
                    <li><a href="#"><button class="btn btn-loin-menu"><em><strong> Log in</strong></em></button></a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
          </div>
        </div>
    </section>

