<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <?php get_template_part('includes/header-options'); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <section class="top-bar cover">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-4 col-lg-3 logo-wrap">
          <a class="logo d-block" href="<?php echo bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
          <?php if(otm_get_image_url('logo_dark')): ?>
            <img src="<?php echo otm_get_image_url('logo_dark'); ?>" alt="Logo of <?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
          <?php else: ?>
            <?php bloginfo('name'); ?>
          <?php endif; ?>
          </a>
        </div><!--/.logo-wrap-->
        <div class="col-6 col-md-4 col-lg-4 social-wrap d-flex align-items-center justify-content-center">
          <div class="social-icons d-flex flex-wrap justify-content-center p-1 p-md-15 p-lg-25">
            <?php $social_profiles = otm_get_option('social_profiles');?>
            <?php if($social_profiles): ?>
            <h6 class="mr-md-1 mb-md-0 mb-1 mr-0 text-white">Follow Us: </h6>
            <ul class="list-unstyled list-inline m-0">
            <?php foreach($social_profiles as $social_profile): ?>
            <li class="list-inline-item">
              <a href="<?php echo $social_profile['social_profile_url'] ?>" title="<?php echo $social_profile['social_profile'] ?>" target="_blank">
                <i class="<?php echo $social_profile['social_profile_icon'] ?>"></i>
              </a>
            </li>
            <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div>
        </div><!--/.social-wrap-->
        <div class="col-12 col-md-4 col-lg-5 top-cta d-flex flex-wrap flex-column justify-content-center">
          <h5 class="text-white mb-0">Request Free Consultation</h5>
          <a class="phone bebas yellow" href="tel:+1-<?php echo do_shortcode('[otm-phone-number]'); ?>" title="Call <?php bloginfo('name'); ?>"><?php echo do_shortcode('[otm-phone-number]'); ?></a>
        </div>
      </div><!--/.row-->
    </div><!--/.container-->
  </section><!--/.top-bar-->
</header>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDropdown">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav w-100 bebas justify-content-md-between %2$s">%3$s</ul>',
          'depth'           => 3,
          'walker'          => new b4st_walker_nav_menu()
        ) );
      ?>
    </div>

  </div>
</nav>
<?php if(is_front_page()) :?>
<section class="hero cover py-lg-7 py-md-5 py-3">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center align-items-center">
        <div class="hero-text text-center" data-aos="fade-right" data-aos-duration="1000">
          <h3 class="text-white m-0">Stoner <span class="yellow">Law Offices, LLC</span></h3>
          <h4 class="font-weight-bold mb-3 mb-md-5 mb-lg-0 font-italic lato text-white text-center text-uppercase">Pittsburgh's Real Estate Law Firm</h4>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="form-wrapper pl-15 pt-15 pr-15 pb-0" data-aos-delay="300" data-aos="fade-left" data-aos-duration="1000">
          <h4 class="text-white text-center mb-1">Request Free Consultation</h4>
            <form  class="contact-form">
              <input type="hidden" name="suburl" class="sub-url" value="">
              <input type="hidden" name="submitted-from" class="submitted-from" value="">
              <!-- TESTING REMOVE ON LIVE -->
              <input type="hidden" name="test" value="janis@onthemapmarketing.com">
              <!-- END TESTING SECTION -->
              <div class="row">
                <div class="col-12 col-sm-6 input-wrapper mb-15 relative">
                  <i class="icon-user form-icon absolute" aria-hidden="true"></i>
                  <input class="form-control no-radius pl-4" type="text" name="from" placeholder="First Name*" required>
                </div><!--/.input-wrapper-->
                <div class="col-12 col-sm-6 input-wrapper mb-15 relative">
                  <i class="icon-user-follow form-icon absolute" aria-hidden="true"></i>
                  <input class="form-control no-radius pl-4" type="text" name="Surname" placeholder="Last Name*" required>
                </div><!--/.input-wrapper-->
                <div class="col-12 col-sm-6 input-wrapper mb-15 relative">
                  <i class="icon-envelope form-icon absolute" aria-hidden="true"></i>
                  <input class="form-control no-radius pl-4" type="email" name="sender" placeholder="Email Address*" required>
                </div><!--/.input-wrapper-->
                <div class="col-12 col-sm-6 input-wrapper mb-15 relative">
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
              <p class="text-white text-center"><span class="font-weight-bold">All fields are required.</span> Stoner Law Offices, LLC is a law firm. However, the use of the internet or this form for communication with us does not establish an attorney-client relationship. We will discuss your options with you.</p>
              <div class="row">
                <a class="btn w-50 no-radius btn-primary bg-white text-dark no-border bebas py-15" href="<?php the_permalink(1564); ?>" title="Fill Full Contact Form">Fill Full Form</a>
                <button class="btn w-50 no-radius btn-secondary text-white bebas py-15" type="submit" title="Submit">Submit Your Request</button>
              </div>
            </form><!--/#OTMForm-->
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif;?>