<?php get_header(); ?>
<main class="main-content py-lg-45 py-md-35 py-25">
  <div class="container">
    <div class="row">

      <div class="col-12 col-lg-8">
        <div class="content" role="main">
          <h1 class="entry-title text-center mb-3" data-aos="fade-up" data-aos-duration="1000">Blog</h1>
          <?php get_template_part('loops/index-loop'); ?>
        </div><!-- /#content -->
      </div><!--/.col-->

      <div class="col-12 col-lg-4">
        <?php get_sidebar(); ?>
      </div><!--/.col-->

    </div><!--/.row-->
  </div><!-- /.container -->
</main>
<?php get_template_part('includes/consultation-cta'); ?>
<?php get_template_part('includes/blog-testimonials'); ?>
<?php get_template_part('includes/contact-cta'); ?>
<?php get_template_part('includes/footer-form'); ?>
<?php get_footer(); ?>
