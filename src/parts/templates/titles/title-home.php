<?php
$image_url = get_the_post_thumbnail_url();
?>

<div id="hero" class="hero" <?php if ($image_url) { ?> style="background-image: url('<?php echo $image_url; ?>');" <?php } ?>>

  <div class="hero-logo">
    <?php get_template_part( 'parts/shared/logo', 'white'); ?>
  </div>

</div>
