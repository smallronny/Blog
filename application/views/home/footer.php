 <!--FOOER AREA-->
    <div class="footer-area white">
        <div class="footer-top-area footer padding-100-50 dark-bg">

            <div class="">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-social-bookmark text-center">
                            <h2 style="">Mantente actualizado con nuestros servicios y lanzamientos </h2>
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 hidden-sm">
                    <div class="feed-widget-facebook text-center twitter-feed mb50 wow fadeIn">
                        <h4>Únete a nosotros en <br/>
                        FACEBOOK</h4>
                      <div class="fb-page" data-href="https://www.facebook.com/Leapcodes/"  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                    </div>
                </div>


                 <div class="hidden-md col-lg-4 col-sm-6 col-xs-12">
                    <div class="feed-widget-instagram insta-feed wow fadeIn" id="instagram">
                        <h4 class="text-center">Instagram</h4>
                        <ul>
                            <li>
                                <a href="#"><img src="img/instagram/insta_1.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_2.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_3.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_4.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/instagram/insta_5.jpg" alt=""></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>


                 <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="feed-widget-instagram contact-form mb50 wow fadeIn">
                            <h4 class="text-center">Suscribete</h4>
                            <?php
        if($this->session->flashdata("success"))
        {
            ?>
            <div class="">
                <?php echo $this->session->flashdata("success") ?>
            </div>
            <?php
        }
        ?>
         <?php echo form_open(base_url("contacto/send")) ?>
                            
                                <div class="form-group" id="name-field">
                                    <div class="form-input">
                                        <input type="text" class="form-control" id="form-name" name="name" placeholder="Nombre.." required>
                                      
                                    </div>
                                </div>
                                <div class="form-group" id="email-field">
                                    <div class="form-input">
                                        <input type="email" class="form-control" id="form-email" name="email" placeholder="Email.." required>
                                    </div>   
                                </div>
                               
                                <div class="form-group">
                                    <?php echo form_submit("send", "Suscribete", array("class" => "btn btn-success btn-lg pull-left")) ?>
                                </div>

                                     <?php echo form_close() ?>
                        </div>
                    </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area deep-dark-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="footer-copyright call-to-action-footer">
                     <p><i class="fa fa-whatsapp"></i> <a href="callto:+51923813145">+51 923813145</a></p>
                            <p><i class="fa fa-envelope-o"></i> <a href="mailto:backpiper.com@gmail.com">Leapcodes@gmail.com</a></p>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center wow fadeIn">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a href="https://leapcodes.com.ve" target="_blank">LeapCodes</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>

                     <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                         <div class=" footer-copyright header-social-bookmark">
                            <ul class="social-bookmark">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/vendor/jquery.appear.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/stellarnav.min.js"></script>
 
    <script src="js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="js/main.js"></script>

     <!--=====Facebook=====-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>








