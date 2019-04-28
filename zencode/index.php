<?php
require('config/config.php');;
require('header.php');
?>
    <!-- About Section Start -->
    <div id="about" class="section-padding">
      <div class="container">
	    <div class="row">
          <div class="col-md-12">
			<?php if( isset($_GET['redirect']) && (base64_decode($_GET['redirect'])=='opinion')){ ?>
			<h5><a href="index.php" style='curser:none'>You are already polled your opinion</a></h5>
			<?php } ?>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="about block text-center">
              <img src="assest/img/about/img1.png" alt="">
              <h5><a href="#">About Title</a></h5>
              <p>Quisque sit amet libero purus. Nulla a dignissim quam. In hac habitasse platea dictumst.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="about block text-center">
              <img src="assest/img/about/img2.png" alt="">
              <h5><a href="#">About Title</a></h5>
              <p>Quisque sit amet libero purus. Nulla a dignissim quam. In hac habitasse platea dictumst.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="about block text-center">
              <img src="assest/img/about/img3.png" alt="">
              <h5><a href="#">About Title</a></h5>
              <p>Quisque sit amet libero purus. Nulla a dignissim quam. In hac habitasse platea dictumst.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="about block text-center">
              <img src="assest/img/about/img4.png" alt="">
              <h5><a href="#">About Title</a></h5>
              <p>Quisque sit amet libero purus. Nulla a dignissim quam. In hac habitasse platea dictumst.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Our Services</h2>
          </div>
        </div>
        <div class="row">
          <!-- Start Service Icon 1 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <i class="fa fa-cogs"></i>
              </div>
              <div class="service-content">
                <h4><a href="#">Easy to Customize</a></h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <i class="fa fa-cubes"></i>
              </div>
              <div class="service-content">
                <h4><a href="#">100+ Components</a></h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <i class="fa fa-tachometer"></i>
              </div>
              <div class="service-content">
                <h4><a href="#">Super Fast</a></h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 3 -->

          <!-- Start Service Icon 4 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <i class="fa fa-check"></i>
              </div>
              <div class="service-content">
                <h4><a href="#">Clean Design</a></h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 4 -->

          <!-- Start Service Icon 5 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <i class="fa fa-flash"></i>
              </div>
              <div class="service-content">
                <h4><a href="#">Bootstrap 4 UI Kit</a></h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 5 -->
          
          <!-- Start Service Icon 6 -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
              <div class="service-icon">
                <i class="fa fa-hand-pointer-o"></i>
              </div>
              <div class="service-content">
                <h4><a href="#">Advanced Features</a></h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto officiis consequuntur vero error excepturi.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 6 -->
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Contact Form Section Start -->
    <section id="contact" class="contact-form section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-6 col-xs-12">
            <h3 class="title-head text-left">Get in touch</h3>
            <form class="contact-form" data-toggle="validator">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                  <div class="form-group">
                    <i class="contact-icon fa fa-user"></i>
                    <input type="text" class="form-control" id="name" placeholder="Full Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                  <div class="form-group">
                    <i class="contact-icon fa fa-envelope-o"></i>
                    <input type="email" class="form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                  <div class="form-group">
                    <i class="contact-icon fa fa-pencil-square-o"></i>
                    <input type="text" class="form-control" id="subject" placeholder="Subject" required data-error="Please enter your Subject">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12">
                  <textarea class="form-control" id="message" rows="4" placeholder="Message" required data-error="Please enter your message"></textarea>
                  <div class="help-block with-errors"></div>
                  <button type="submit" id="form-submit" class="btn btn-common btn-form-submit">Send Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <h4 class="contact-info-title text-left">Contact Information</h4>
            <div class="contact-info">
              <ul class="social-links">
                <li>
                  <a href="#" class="fa fa-facebook"></a>
                </li>
                <li>
                  <a href="#" class="fa fa-twitter"></a>
                </li>
                <li>
                  <a href="#" class="fa fa-instagram"></a>
                </li>
                <li>
                  <a href="#" class="fa fa-linkedin"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Form Section End -->
<?php require('footer.php') ?>
