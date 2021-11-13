<?php
/**!
 * The Sidebar
 * Note: The main column has simply Bootstrap flexbox "col-sm" so it will expand
 * to occupy the whole row (if no sidebar) or to occupy whatever part of the row
 * is available (if there is a sidebar, or more than one sidebar, etc.).
 *
 * (So, you don't need to set the main column to col-sm-8 or whatever.)
 */
?>

<aside class="sidebar p-15" role="navigation">
  <section class="sidebar-menu">
    <?php 
      $sup_articles = get_pages(array('hierarchical' => 0, 'parent' => wp_get_post_parent_id(get_the_ID()), 'exclude' => get_the_ID()));
      $ap_title = wp_get_post_parent_id(get_the_ID());
      if(count($sup_articles) > 0) :?>
        <h4>Related Articles of <span class="yellow"><?php echo get_the_title($ap_title); ?></span></h4>
        <ul>
        <?php 
        foreach( $sup_articles as $page ) { ?>
        <li>
          <a class="easing" href="<?php echo get_page_link( $page->ID ); ?>" title="<?php echo $page->post_title; ?>"><?php echo $page->post_title; ?></a>
        </li>
      <?php } ?>
    </ul><!--/.type-list-->
    <?php endif; ?>
  </section>
  <?php dynamic_sidebar('supporting-page-widget-area'); ?>
</aside>