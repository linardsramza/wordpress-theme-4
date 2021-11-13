<?php get_header(); ?>

<main class="main-content py-lg-45 py-md-35 py-25">
  <div class="container">
    <div class="content" role="main">
      <?php get_template_part('loops/page-content'); ?>
    </div><!-- /#content -->
  </div><!-- /.container -->
</main>
<?php get_template_part('includes/consultation-cta'); ?>
<?php get_template_part('includes/blog-testimonials'); ?>
<?php get_template_part('includes/contact-cta'); ?>
<?php get_template_part('includes/footer-form'); ?>
<?php get_footer(); ?>
