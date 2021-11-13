<section class="bt py-lg-5 py-md-4 py-3">
  <div class="container">
    <h3 class="line-heading mb-md-3 mb-2"><span>Our Blog</span></h3>
    <div class="row">
      <?php
        $blogrow = [
         'post_type' => 'post',
         'order' => 'DESC',
         'posts_per_page' => '3',
        ];
        $threeposts = new WP_Query( $blogrow );
      ?>
      <?php while($threeposts->have_posts()): $threeposts->the_post(); ?>
      <div class="col-12 col-md-4">
        <div class="card mb-3 no-radius no-border relative mb-2 mb-md-3">
          <img class="card-img-top no-radius" src="<?php echo the_post_thumbnail_url('medium'); ?>" alt="Image for <?php echo the_title(); ?> post" title="<?php echo the_title(); ?>">
          <a class="card-block py-15 px-1 absolute w-100 easing" href="<?php the_permalink(); ?>" title="Read More about <?php echo the_title(); ?>">
            <h4 class="card-title lato font-weight-bold m-0"><?php the_title(); ?></h4>
          </a>
        </div><!--/.card-->
      </div><!--/.col-->
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div><!--/.row-->
    <h3 class="line-heading mb-md-3 mb-2"><span>Testimonials</span></h3>
    <div class="swiper-container testimonials">
      <div class="swiper-wrapper">
        <div class="swiper-slide px-3 px-md-6 px-lg-100">
          <p class="text-center mb-2">Attorney Daniel Stoner is just what my small business needed. Dan took care of all legal aspects for starting a new business. He is professional and I am very pleased with his work. I have spent less time dealing with paperwork and more time pursuing new clients for my business. I recommend Dan!</p>
          <div class="d-flex flex-wrap align-items-center justify-content-center">
            <h6 class="text-center lato font-weight-black mb-0 mr-1">- M.W.</h6>
            <ul class="list-unstyled rating list-inline m-0">
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
            </ul>
          </div>
        </div>
        <div class="swiper-slide px-3 px-md-6 px-lg-100">
          <p class="text-center mb-2">
            Attorney Stoner worked closely me to set up my LLC in Pittsburgh. He was very knowledgeable, informative and efficient. I would highly recommend Attorney Stoner to anyone owns a small business or wants to start up their own business.
          </p>
          <div class="d-flex flex-wrap align-items-center justify-content-center">
            <h6 class="text-center lato font-weight-black mb-0 mr-1">- O.B.</h6>
            <ul class="list-unstyled rating list-inline m-0">
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
            </ul>
          </div>
        </div>
        <div class="swiper-slide px-3 px-md-6 px-lg-100">
          <p class="text-center mb-2">
            Mr. Stoner was very helpful to me in preparation of my will. He took the time to answer all my questions, and explained all information to me in terms I could understand.
          </p>
          <div class="d-flex flex-wrap align-items-center justify-content-center">
            <h6 class="text-center lato font-weight-black mb-0 mr-1">- K.D.</h6>
            <ul class="list-unstyled rating list-inline m-0">
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item"><i class="fa fa-star yellow"></i></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next t-nav no-bg">
        <i class="icon-arrow-right"></i>
      </div>
      <div class="swiper-button-prev t-nav no-bg">
        <i class="icon-arrow-left"></i>
      </div>
    </div>
  </div>
</section>