<!-- footer top start -->
<!-- ================ -->
<div class="dark-translucent-bg footer-top animated-text default-hovered" style="background-color:rgba(0,0,0,0.6);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="call-to-action text-center">
          <div class="row">
            <div class="col-sm-8">
              <h2>Powerful Bootstrap Template</h2>
              <h2>Waste no more time</h2>
            </div>
            <div class="col-sm-4">
              <p class="mt-10"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent">Purchase<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer top end -->
</section>
<!-- section end -->
<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
<!-- ================ -->
<footer id="footer" class="clearfix ">

<!-- .footer start -->
<!-- ================ -->
<div class="footer">
  <div class="container">
    <div class="footer-inner">
      <div class="row">
        <div class="col-md-6">
          <div class="footer-content">
            <div class="logo-footer" style="text-align:center"><img id="logo-footer" src="<?php echo base_url();?>assets/logo/tofraweb-small.png" alt="TofraWeb"></div>
            <p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
            <ul class="list-inline mb-20">
              <li><i class="text-default fa fa-map-marker pr-5"></i> יצחק הלוי 9, חולון</li>
              <li><i class="text-default fa fa-phone pl-10 pr-5"></i> 053-5203818</li>
              <li><a href="mailto:tofraweb@gmail.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i> tofraweb@gmail.com</a></li>
            </ul>
            <div class="separator-2"></div>
            <ul class="social-links circle margin-clear animated-effect-1" style="text-align:center">
              <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
              <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
              <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
              <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
              <li class="youtube"><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
              <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
              <li class="instagram"><a target="_blank" href="http://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="footer-content">
            <h2 class="title">צור קשר</h2>
            <div class="alert alert-success hidden" id="MessageSent2">
              ההודעה נשלחה, אצור אתכם קשר בהקדם.
            </div>
            <div class="alert alert-danger hidden" id="MessageNotSent2">
              הופס, משהו השתבש, אנא לרפרש את הדף ולנסות שוב!
            </div>
            <!-- <form action="<?php echo base_url();?>email/send_mail" role="form" id="footer-form" class="margin-clear">
              <div class="form-group has-feedback mb-10">
                <label class="sr-only" for="name2">שם</label>
                <input type="text" class="form-control" id="name2" placeholder="שם מלא" name="name2">
                <i class="fa fa-user form-control-feedback"></i>
              </div>
              <div class="form-group has-feedback mb-10">
                <label class="sr-only" for="email2">כתובת אימייל</label>
                <input type="email" class="form-control" id="email2" placeholder="כתובת אימייל" name="email2">
                <i class="fa fa-envelope form-control-feedback"></i>
              </div>
              <div class="form-group has-feedback mb-10">
                <label class="sr-only" for="message2">הודעה</label>
                <textarea class="form-control" rows="4" id="message2" placeholder="הודעה" name="message2"></textarea>
                <i class="fa fa-pencil form-control-feedback"></i>
              </div>
              <input type="submit" value="שלח" class="margin-clear submit-button btn btn-default">
            </form> -->


            <?php echo $error;?>
            <?php echo form_open_multipart('email/send_mail');?>
              <div class="form-group has-feedback mb-10">
                <label class="sr-only" for="name">שם</label>
                <input type="text" class="form-control" id="name" placeholder="שם מלא" name="name">
                <i class="fa fa-user form-control-feedback"></i>
              </div>
              <div class="form-group has-feedback mb-10">
                <label class="sr-only" for="email">כתובת אימייל</label>
                <input type="email" class="form-control" id="email" placeholder="כתובת אימייל" name="email">
                <i class="fa fa-envelope form-control-feedback"></i>
              </div>
              <div class="form-group has-feedback mb-10">
                <label class="sr-only" for="message">הודעה</label>
                <textarea class="form-control" rows="4" id="message" placeholder="הודעה" name="message"></textarea>
                <i class="fa fa-pencil form-control-feedback"></i>
              </div>
              <input type="submit" value="שלח"  class="margin-clear submit-button btn btn-default" />

            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- .footer end -->

<!-- .subfooter start -->
<!-- ================ -->
<div class="subfooter">
  <div class="container">
    <div class="subfooter-inner">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Copyright © 2017 Developed by <a target="_blank" href="http://www.tofraweb.com">Tofra Web Development</a>. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- .subfooter end -->

</footer>
<!-- footer end -->

</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<!-- Isotope javascript -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<!-- Count To javascript -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery.countTo.js"></script>
<!-- Parallax javascript -->
<script src="<?php echo base_url();?>assets/plugins/jquery.parallax-1.1.3.js"></script>
<!-- Contact form -->
<script src="<?php echo base_url();?>assets/plugins/jquery.validate.js"></script>
<!-- Morphext -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/morphext/morphext.min.js"></script>
<!-- Background Video -->
<script src="<?php echo base_url();?>assets/plugins/vide/jquery.vide.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/owlcarousel2/owl.carousel.min.js"></script>
<!-- SmoothScroll javascript -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/SmoothScroll.js"></script>
<!-- Initialization of Plugins -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/rs-plugin-5/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/rs-plugin-5/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/rs-plugin-5/js/extensions/revolution.extension.navigation.min.js"></script>

</body>
</html>
