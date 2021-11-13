<?php
$testimonials = otm_get_option('testimonials');
?>

<?php if($testimonials): ?>

<div class="swiper-container swiper-testimonials">
  <div class="swiper-wrapper">
  <?php foreach($testimonials as $testimonial): ?>
    <div class="swiper-slide">
      <div class="testimonial-entry text-center px-5">
        <p><?php echo $testimonial['testimonial'] ?></p>
        <strong><?php echo $testimonial['testimonial_details'] ?></strong>
        -
        <?php for ($i = 0; $i < $testimonial['testimonial_rating']; $i++) { ?>
        <i class="fa fa-star star"></i>
        <?php } ?>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>

<?php else: ?>
	<p>No Testimonials Yet.</p>
<?php endif; ?>