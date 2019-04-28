
	  <!-- Footer Section -->
    <footer class="footer">
      <!-- Container Starts -->
      <div class="container">
        <!-- Row Starts -->
        <div class="row section">
          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
            <h3 class="small-title">
              About Us
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis veritatis eius porro modi hic. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
            <div class="social-footer">
              <a href="#"><i class="fa fa-facebook icon-round"></i></a>
              <a href="#"><i class="fa fa-twitter icon-round"></i></a>
              <a href="#"><i class="fa fa-linkedin icon-round"></i></a>
              <a href="#"><i class="fa fa-google-plus icon-round"></i></a>
            </div>
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".2s">
            <h3 class="small-title">
              Links
            </h3>
            <ul class="menu">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Works</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".5s">
            <h3 class="small-title">
              GALLERY
            </h3>
            <div class="plain-flicker-gallery">
              <a href="#"><img src="assest/img/flicker/img1.jpg" alt=""></a>
              <a href="#"><img src="assest/img/flicker/img2.jpg" alt=""></a>
              <a href="#"><img src="assest/img/flicker/img3.jpg" alt=""></a>
              <a href="#"><img src="assest/img/flicker/img4.jpg" alt=""></a>
              <a href="#"><img src="assest/img/flicker/img5.jpg" alt=""></a>
              <a href="#"><img src="assest/img/flicker/img6.jpg" alt=""></a>
            </div>
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".8s">
            <h3 class="small-title">
              SUBSCRIBE US
            </h3>
            <div class="contact-us">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email">
                </div>
                <button type="submit" class="btn btn-common">Submit</button>
              </form>
            </div>
          </div>
          <!-- Footer Widget Ends -->
        </div>
        <!-- Row Ends -->
      </div>
      <!-- Container Ends -->

      <!-- Copyright -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
              <p class="copyright-text">All copyrights reserved © 2018 - Designed &amp; Developed by Zencode
              </p>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
              <ul class="nav nav-inline  justify-content-end ">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sitemap</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Terms of services</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright  End-->

    </footer>
    <!-- Footer Section End-->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assest/js/jquery-min.js"></script>
    <script src="assest/js/popper.min.js"></script>
    <script src="assest/js/bootstrap.min.js"></script>
    <script src="assest/js/owl.carousel.min.js"></script>
    <script src="assest/js/jquery.mixitup.js"></script>
    <script src="assest/js/jquery.countTo.js"></script>
    <script src="assest/js/jquery.nav.js"></script>
    <script src="assest/js/scrolling-nav.js"></script>
    <script src="assest/js/jquery.easing.min.js"></script>
    <script src="assest/js/jquery.slicknav.js"></script>
    <script src="assest/js/form-validator.min.js"></script>
    <script src="assest/js/contact-form-script.js"></script>
    <script src="assest/js/main.js"></script>
    <?php if(CURRENT_PAGE=='results.php'){ ?>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
	<?php } ?> 
    <?php if(CURRENT_PAGE=='login.php'){ ?>	
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
	<?php } ?>
	<?php require('callJs.php');?>	
  </body>
</html>