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
        $this_page = get_the_ID();
        $mypages = get_pages( array('sort_column' => 'asc', 'sort_order' => 'asc', 'parent' => array($this_page) ) );
        if(count($mypages) > 0):
      ?>
        <h4>Stoner & Davé practice in all areas of <span class="yellow"><?php the_title(); ?></span>, including:</h4>
        <ul>
        <?php 
        foreach( $mypages as $page ) {
          $content = $page->post_content;
        ?>
        <li>
          <a class="easing" href="<?php echo get_page_link( $page->ID ); ?>" title="<?php echo $page->post_title; ?>"><?php echo $page->post_title; ?></a>
        </li>
        <?php }?>
    </ul><!--/.type-list-->
    <?php endif; ?>
  </section>
  <?php dynamic_sidebar('practice-page-widget-area'); ?>
</aside>