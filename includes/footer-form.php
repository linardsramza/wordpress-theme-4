<section class="footer-form bg-dark py-lg-5 py-md-4 py-3">
  <div class="container">
    <h3 class="line-heading mb-2 mb-md-3" data-aos="fade-up" data-aos-duration="1000"><span class="bg-dark text-white">Tell Us About Your Case</span></h3>
    <div class="form-wrapper">
        <form class="OTMForm contact-form">
          <input type="hidden" name="suburl" class="sub-url" value="">
          <input type="hidden" name="submitted-from" class="submitted-from" value="">
          <!-- TESTING REMOVE ON LIVE -->
          <input type="hidden" name="test" value="janis@onthemapmarketing.com">
          <!-- END TESTING SECTION -->
          <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 input-wrapper mb-15 relative">
              <i class="icon-user form-icon absolute" aria-hidden="true"></i>
              <input class="form-control no-radius pl-4" type="text" name="from" placeholder="First Name*" required>
            </div><!--/.input-wrapper-->
            <div class="col-12 col-sm-6 col-lg-3 input-wrapper mb-15 relative">
              <i class="icon-user-follow form-icon absolute" aria-hidden="true"></i>
              <input class="form-control no-radius pl-4" type="text" name="Surname" placeholder="Last Name*" required>
            </div><!--/.input-wrapper-->
            <div class="col-12 col-sm-6 col-lg-3 input-wrapper mb-15 relative">
              <i class="icon-envelope form-icon absolute" aria-hidden="true"></i>
              <input class="form-control no-radius pl-4" type="email" name="sender" placeholder="Email Address*" required>
            </div><!--/.input-wrapper-->
            <div class="col-12 col-sm-6 col-lg-3 input-wrapper mb-15 relative">
              <i class="icon-screen-smartphone form-icon absolute" aria-hidden="true"></i>
              <input class="form-control no-radius pl-4" type="text" name="phone" placeholder="Phone Number*" required>
            </div><!--/.input-wrapper-->
          </div><!--/.row-->
          <div class="row">
            <div class="col-12 input-wrapper mb-15 relative">
              <i class="icon-speech form-icon absolute" aria-hidden="true"></i>
              <textarea class="form-control pl-4 no-radius" name="msg" placeholder="Describe Your Case"></textarea>
            </div>
          </div><!--/.row-->
          <p class="text-white text-center mb-2 mb-md-3"><span class="font-weight-bold">All fields are required.</span> Stoner Law Offices, LLC is a law firm. However, the use of the internet or this form for communication with us does not establish an attorney-client relationship. We will discuss your options with you.</p>
          <div class="row">
            <div class="col-12 offset-md-2 col-md-8 d-flex">
              <a class="btn w-50 no-radius btn-primary bg-white text-dark no-border bebas py-15" href="<?php the_permalink(1564); ?>" title="Fill Full Contact Form">Fill Full Form</a>
              <button class="btn w-50 no-radius btn-secondary text-white bebas py-15" type="submit" title="Submit">Submit Your Request</button>
            </div>
          </div>
        </form><!--/#OTMForm-->
    </div>
  </div>
</section>