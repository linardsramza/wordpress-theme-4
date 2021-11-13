<?php
/*
The Single Post
===============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header>
        <h1 class="entry-title text-center mb-3" data-aos="fade-up" data-aos-duration="1000">
        <?php the_title(); ?>
        </h1>
        <div class="d-flex flex-wrap justify-content-md-between align-items-center">
        <h6><i class="icon-calendar"></i> <?php echo the_date('F j, Y') ?></h6>
        <h6><i class="icon-user"></i>&nbsp; <?php _e('By ', 'b4st'); the_author(); ?></h6>
      </div>  
    </header>
    <main>
      <?php the_post_thumbnail('large');?>
      <hr>
      <?php the_content(); wp_link_pages(); ?>
    </main>
    <footer class="mt-3 category-links border-top pt-3">
      <p>
        <?php _e('Category: ', 'b4st'); the_category(', ') ?> <?php if (has_tag()) : the_tags(' | Tags: ', ', '); endif; ?>
      </p>
    </footer>
  </article>
<?php
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>

<div class="mt-3 after-post-nav border-top pt-3 d-flex flex-wrap justify-content-between mb-3 mb-lg-0">
    <?php previous_post_link('%link', '<i class="icon-arrow-left"></i> Previous Post'); ?>
    <?php next_post_link('%link', 'Next Post <i class="icon-arrow-right"></i>'); ?>
</div>
