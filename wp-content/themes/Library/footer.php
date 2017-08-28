   <div class="footer-container pad-top-50 pad-bottom-50">
        <div class="  container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="footer-info  columns">
                        <a href="index.html">
                            <img class="logo " alt="Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-light.png">
                        </a>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <h3 class="footer-title pad-botom-20">Information</h3>
                    <ul class="menu-footer no-pad">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-12">
                    <h3 class="footer-title pad-botom-20">Contact us</h3>
                    <address>
                        <span class="location"><i class="fa fa-home" aria-hidden="true"></i>  My Company , 4578 Marmora Road, Glasgow D04 89GR</span>
                        <span class="phone"><i class="fa fa-phone" aria-hidden="true"></i>  <a href="tel:800-2345-6789">+ 800-2345-6789</a></span>
                        <span class="mail"><a href="mailto:vanphan2512@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> vanphan2512@gmail.com</a></span>
                    </address>
                </div>
                <div class="col-md-3 col-sm-12">
                    <h3 class="footer-title pad-botom-20">Social Profiles</h3>
                    <ul class="social no-pad">
                        <li><a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" title="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#" title="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="back-top hidden-xs text-right text-center">
            <a href="#top" id="go-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
        </div> <!-- /.text-center -->
    </div>
    <div class="footer-bottom ">
        <div class="container">
            <span class="text-white">© 2017 Nguyễn Văn Phận. All rights reserved.</span>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>
    <script type="text/javascript">
        $(window).scroll(function(){
            if ($(window).scrollTop() >= 300) {
               $('.nav-menu').addClass('fixed-header');
               $('.logo-light').css('display', 'none')
               $('.logo-dark').css('display', 'block')
            }
            else {
               $('.nav-menu').removeClass('fixed-header');
               $('.logo-light').css('display', 'block')
               $('.logo-dark').css('display', 'none')
            }
        });

        $('.flexslider').flexslider({
          slideshow: true,
          slideshowSpeed: 3000,  
          animation: "fade",
          directionNav: false,
        });
        $('#go-top').each(function(){
            $(this).click(function(){ 
                $('html,body').animate({ scrollTop: 0 }, 'slow');
                return false; 
            });
        });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>