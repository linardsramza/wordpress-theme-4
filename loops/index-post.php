<?php
/*
The Index Post (or excerpt)
===========================
Used by index.php, category.php and author.php
*/
?>

<article role="article" id="post_<?php the_ID()?>" <?php post_class("mb-2 p-15 post-wrap"); ?> >
  <header>
    <h2>
      <a href="<?php the_permalink(); ?>" title="<?php the_title()?>">
        <?php the_title()?>
      </a>
    </h2>
    <div class="d-flex flex-wrap justify-content-md-between align-items-center">
      <h6><i class="icon-calendar"></i> <?php echo the_date('F j, Y') ?></h6>
      <h6><i class="icon-user"></i>&nbsp; <?php _e('By ', 'b4st'); the_author(); ?></h6>
    </div>
  </header>
  <section>
    <?php the_excerpt(); ?>
  </section>
</article>
