<?php /*Footer to be included*/ ?>

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
        $('#menuSlider').lightSlider({
            item:8,
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