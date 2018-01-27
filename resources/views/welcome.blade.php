<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Khaadim</title>

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
    <section class="background-head">
      <div>
       <!--  <img src="{{ URL::to('resources/assets/img/sliderimg.png') }}" class="slider-img" /> -->
      </div>
      <section class="container">
        <div class="margin-top"></div>

        <!-- Logo-->
        <div class="col-md-2 col-sm-2 col-xs-2">
          <img src="{{ URL::to('resources/assets/img/headerlogo.png') }}" class="logo" />
        </div>

        <!--Menu-->
        <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-offset-2 col-xs-8">
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
                  <li><a href="#">Causes</a></li>
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
                  <li><a href="#">Events</a></li>
                  <li><a href="#"><button class="btn btn-khaadim-menu">Donate Now</button></a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
          </nav>
        </div>
      </section>

      <!-- Slider content-->
      <section class="container">
        <div class="slider-content">
          <!--Heading-->
          <div class="slider-text">
            every <strong>child</strong> has an <strong>equal right</strong> to <strong>study</strong>
          </div>
          <div>
            <button class="btn btn-khaadim-primary">View Cause</button>
          </div>
        </div>
      </section>
    </section>

    <!--TextSlider-->
    <section class="text-slider">  
      <div class="container">
        <div class="col-md-offset-1 col-md-10">
          <p class="says" id="says"><noscript>“It’s not how much we give but how much love we put into giving”</noscript></p>
          <p class="speaker" id="speaker"><noscript> —Mother Teresa</noscript></p>
        </div>    
      </div>
    </section>

    <!--TextSlider-->
    <section class="container">
      <div class="headeing-small">
        small action. huge impact.
      </div>
      <div class="heading-text">
        By combining the efforts of people who want to see others do well we have constructed a platform where your funds are properly channeled to a cause to help the locals and altogether benefit the society as a whole.
      </div>

    </section>

    <!--PostSlider-->
    <section class="container">
      <div class="post-slider" id="postslider">
        <div class="col-md-4">
          <img src="{{ URL::to('resources/assets/img/post-img/post1.png') }}" style="width: 100%;">
          <h3 class="post-slider-heading">Issues</h3>
          <p class="post-slider-text">Children in the streets have no education and there standard of living is equal to non-existent</p>
          <p class="post-slider-donate"><a href="">donate now</a></p>
        </div>

        <div class="col-md-4">
          <img src="{{ URL::to('resources/assets/img/post-img/post2.png') }}" style="width: 100%;">
           <h3 class="post-slider-heading">Causes</h3>
           <p class="post-slider-text">The government is inactive in dealing with such issues.</p>
           <p class="post-slider-donate"><a href="">donate now</a></p>
        </div>
        
        <div class="col-md-4">
          <img src="{{ URL::to('resources/assets/img/post-img/post3.png') }}" style="width: 100%;">
           <h3 class="post-slider-heading">Solution</h3>
           <p class="post-slider-text">Investing as much or as little to make a difference and starting a cycle of change through Khaadim.</p>
           <p class="post-slider-donate"><a href="">donate now</a></p>
        </div>
      </div>
    </section>

    <!--How to Donate-->
    <section class="donate">
      <div class="container">
        <section class="row">
          <div class="col-md-12">
            <h2 style="text-align: center; text-transform: uppercase; font-weight: 900; margin-bottom: 70px;">how to donate</h2>
          </div>
          <div class="col-md-4">
            <img src="{{ URL::to('resources/assets/img/find-icon.png') }}" class="donate-img">
            <h3 class="post-slider-heading">FIND A CAUSE</h3>
          </div>

          <div class="col-md-4">
            <img src="{{ URL::to('resources/assets/img/glass-icon.png') }}" class="donate-img">
            <h3 class="post-slider-heading">RESEARCH</h3>
          </div>

          <div class="col-md-4">
            <img src="{{ URL::to('resources/assets/img/heart-icon.png') }}" class="donate-img">
            <h3 class="post-slider-heading">DONATE</h3>
          </div>
        </section>

        <section class="row" style="float:left; margin-top:71px; margin-bottom:-84px;">
          <div class="col-md-offset-5 col-md-2">
             <div class="form-group">
                <div class="input-group">
                  <input type="button" class="form-control color-find" value="FIND A CAUSE">
                  <div class="input-group-addon color-clickable-find">></div>
                </div>
              </div>            
          </div>
        </section>
      </div>
    </section>

    <!--better Pakistan-->
    <section class="container">
      <div class="headeing-small">
        build a better pakistan
      </div>
      <div class="heading-text">
       We all are created for a purpose and some of us feel lost and in this time, we need a guiding hand or a point of view to guide us to a way forward. That is what Khaadim is trying to aim for by providing a platform to unite the people for the people and build a better and more united Pakistan.
      </div>
    </section>

    <section class="container">
      <div class="col-md-6">
        <div class="heading-text-bp">
          We as people want to do better things for the society and the only thing that stops us most of the time is the financial backing to support such developments, People find it hard to take on loans from banks, we as a unity can invest a small sum which can collectively equal to a sufficient amount to boost the funds for the cause which could be in different forms or shapes i.e. providing books to local children in the streets or creating a local schooling camp for the street kids etc. Your small donation can full these dreams and help the community grow and make Pakistan a much better place for yourself and others.
        </div>
      </div>

      <div class="col-md-6" style="position:relative;">
        <img src="{{ URL::to('resources/assets/img/betterpakistankhadim.png') }}" class="betterpakimg">
      </div>
    </section>


    <!--How to Donate-->
    <section class="donate">
      <div class="container">
        <section class="row">
          <div class="col-md-12">
            <h2 style="text-align: center; text-transform: uppercase; font-weight: 600; margin-bottom: 70px; font-size: 35pt;">join our newsletter</h2>
            <p style="text-align: center;/* text-transform: uppercase; */font-weight: 400;margin-top: -10px;font-size: 20pt;">
            We've seen that asking for a little extra info about topics of interest upon pre-submit gives visitors assurance emails will be high-quality and relevant to them, thus leading to more signups.
            </p>
          </div>
        </section>

         <section class="row" style=" margin-top: 30pt;">
          <div class="col-md-offset-2 col-md-6">
              <form>
                <input type="text" class="form-control" placeholder="your email address" style="height: 45px;border-radius: 0px;background: #f1f1f1;text-align:  center;font-size:  20px;">
              </form>
          </div>

          <div class="col-md-2">
              <form>
                <input type="button" class="form-control" style="color: #000; height: 45px;border-radius: 0px;background: #0e8aa0;text-align:  center;font-size:  20px;" value="SIGN UP">
              </form>
          </div>
        </section>
      </div>
    </section>


    <!--Footer-->
    <section class="footer">
      <div class="container">
          <div class="col-md-offset-2 col-md-8">
            <div class="footer-content">
                <div class="footer-menu">Home  &nbsp;  &nbsp; &nbsp;  &nbsp;    &nbsp;  &nbsp;  ABOUT   &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; CAUSES    &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; PROJECTS    &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; EVENTS    &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; CONTACT</div>

                <div class="social-icon">
                  <img src="{{ URL::to('resources/assets/img/facebook.png') }}" style="magin-top:0px;">
                  <img src="{{ URL::to('resources/assets/img/twitter.png') }}">
                  <img src="{{ URL::to('resources/assets/img/instagram.png') }}">
                  <img src="{{ URL::to('resources/assets/img/gplus.png') }}">
                  <img src="{{ URL::to('resources/assets/img/pintrest.png') }}">
                </div>

                
            </div>
          </div>
      </div>
    </section>

    <section class="footer-copyright">
      <div class="container">
          <div class="col-md-offset-2 col-md-8">
              <div class="">Copyright &copy; <?php echo date('Y'); ?> Khaadim | All Rights Reserved.</div>
          </div>
      </div>
    </section>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::to('resources/assets/js/bootstrap.min.js') }}"></script>
    <!--Customized JS-->
    <script src="{{ URL::to('resources/assets/js/customize.js') }}"></script>

    <script src="{{ URL::to('resources/assets/js/typewriter.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        /*typeWrite('says');
        typeWrite('speaker');*/

        typeWriteSays('says', 'speaker')
      });
        
    </script>

    <script src="{{ URL::to('resources/assets/vendor/lightslider-master/src/js/lightslider.js') }}"></script>
    <script type="text/javascript">
       $(document).ready(function() {
        $('#postslider').lightSlider({
            item:3,
            loop:true,
            slideMove:1,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                }
            ]
        });  
      });
    </script>
  </body>
</html>